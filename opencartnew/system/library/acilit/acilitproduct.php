<?php

namespace Acilit;

const OUTLET_LIMIT = 50;

class AcilitProduct extends Library
{

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->acilit_model = new AcilitModel($registry);

        $this->acilit_loader = new AcilitLoader($registry);

        $this->acilit = $this->acilit_loader->loadAcilit();
    }

    public function syncProduct($data, $is_option = 0)
    {
        if (!$this->config->get('module_acilit_status') || !$this->config->get('module_acilit_sync_product_status')) {
            return array(
                'status' => false,
                'count' => 0
            );
        }

        $option = array(
            'code' => $data['model']
        );

        $response = $this->acilit->getSKUs($option);

        if (isset($results)) {
            $results_info = $response;

            if (!empty($results_info)) {
                foreach ($results_info as $result) {

                    $model = $result['Model'];
                    $barcode = $result['Barcode'];
                    $normalPrice = $result['NormalPrice'];

                    $product_data = array(
                        'acilit_item_id' => $result['id'],
                        'price' => $result['NormalPrice'],
                        'model' => $result['Model'],
                        'member_price' => $result['MemberPrice'],
                    );

                    $this->acilit_model->updateProduct($data['product_id'], $product_data);
                }
            }
        } else {
            return array(
                'status' => false,
                'count' => 0
            );
        }

        return array(
            'status' => true,
            'count' => count($results)
        );
    }

    public function updatePrice($data, $is_option = 0)
    {
        if (!$this->config->get('module_acilit_status') || !$this->config->get('module_acilit_sync_product_status')) {
            return;
        }

        $item_price = $this->acilit->getAllItems([
            'path_para' => $data['acilit_item_id']
        ]);

        // check the response
        if ($item_price['ok'] && isset($item_price['data']['item']) && isset($item_price['data']['item']['itemCode'])) {

            if ($item_price['data']['item']['itemCode'] != $data['model']) {
                $this->acilit_model->setItemError($data['product_id'], 'Model and Acilit Item ID not match, please update the item Model');
                return;
            }

            $price = $item_price['data']['item']['salesPrice'];

            $this->acilit_model->setItemError($data['product_id'], '');
        }
    }

    public function updateStock($data, $is_option = 0)
    {
        if (!$this->config->get('module_acilit_status') || !$this->config->get('module_acilit_sync_product_status')) {
            return;
        }

        $param = array(
            'path_para' => $data['acilit_item_id'],
            'limit' => OUTLET_LIMIT,
        );

        $total_quantity = 0;
        $item_stocks = $this->acilit->getItemStockByOutletAndId($param);

        if (isset($item_stocks['data']) && isset($item_stocks['data']['stocks'])) {
            foreach ($item_stocks['data']['stocks'] as $stock) {
                if ($stock['outlet'] != '') {

                    $outlet = $this->acilit_model->getOutletByNames($stock['outlet']);
                    if ($outlet) {
                        if (in_array($outlet['location_id'], $this->config->get('module_acilit_sync_product_quantity_outlet'))) {
                            $total_quantity += $stock['onhandQuantity'];
                        }
                    }

                    // check if data not exist then reinsert data to database
                    $product_outlet = $this->acilit_model->getProductOutlet($stock['itemCode'], $stock['outlet']);
                    if (count($product_outlet) == 0) {
                        $stock['salesPrice'] = 0;
                        $stock['product_option_value_id'] = $is_option ? $data['product_option_value_id'] : 0;
                        $this->acilit_model->syncOutletProduct($data['product_id'], $stock);
                    } else {
                        // if the acilit model and acilit_item_id not match return an error
                        if ($stock['itemCode'] != $data['model']) {
                            // if admin update the model after succesfully sync, the acilit model and acilit_item_id will not match and we will return an error
                            $this->acilit_model->setItemError($data['product_id'], 'Model and Acilit Item ID not match, please update the item Model');
                            return;
                        }

                        $this->acilit_model->updateProductOutletInventory($data['model'], $stock);
                        $this->acilit_model->setItemError($data['product_id'], '');
                    }
                }
            }

            $inventory_data = array(
                'new_quantity' => $total_quantity,
                'acilit_item_id' => $data['acilit_item_id'],
                'remark' => 'Updated from Acilit'
            );

            $this->acilit_model->addInventoryLog($data['product_id'], $inventory_data);
            $this->acilit_model->updateOcProductQuantity($data['product_id'], $total_quantity);
        }
    }
}
