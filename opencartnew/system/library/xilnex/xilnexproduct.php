<?php 

namespace Xilnex;

const OUTLET_LIMIT = 50;

class XilnexProduct extends Library {

    public function __construct($registry) {
        parent::__construct($registry);

        $this->xilnex_model = new XilnexModel($registry);

        $this->xilnex_loader = new XilnexLoader($registry);

        $this->xilnex = $this->xilnex_loader->loadXilnex();
    }

    public function syncProduct($data, $is_option = 0) {
        if (!$this->config->get('module_xilnex_status') || !$this->config->get('module_xilnex_sync_product_status')) {
            return array(
                'status' => false,
                'count' => 0
            );
        }

        $option = array(
			'code' => $data['model']
		);

		$results = $this->xilnex->searchItem($option);

        if (isset($results['data']['items'])) {
            $results = $results['data']['items'];

            if (!empty($results)) {
                foreach ($results as $result) {
                    $total_quantity = 0;
                    $price = $result['salesPrice'];
                    $weight = $result['weight'];
                    $height = $result['height'];
                    $length = $result['length'];
                    $width = $result['width'];

                    $param = array(
                        'path_para' => $result['id'],
                        'limit' => OUTLET_LIMIT,
                    );
            
                    $item_stocks = $this->xilnex->getItemStockByOutletAndId($param);

                    foreach ($item_stocks['data']['stocks'] as $stock) {
                        if ($stock['outlet'] != '') {
                            $outlet = $this->xilnex_model->getOutletByNames($stock['outlet']);
                            if (in_array($outlet['location_id'], $this->config->get('module_xilnex_sync_product_quantity_outlet'))) {
                                $total_quantity += $stock['onhandQuantity'];
                            }

                            $total_quantity += $stock['onhandQuantity'];

                            $stock['salesPrice'] = $price;
                            $stock['id'] = $result['id'];
                            $stock['product_option_value_id'] = $is_option ? $data['product_option_value_id'] : 0;

                            $this->xilnex_model->syncOutletProduct($data['product_id'], $stock);
                        }
                    }

                    $inventory_data = array(
                        'new_quantity' => $total_quantity,
                        'xilnex_item_id' => $result['id'],
                        'remark' => 'Updated from Xilnex'
                    );

                    // $measurement_data = array(
                    //     'weight' => $weight,
                    //     'height' => $height,
                    //     'length' => $length,
                    //     'width' => $width,
                    // );

                    $product_data = array (
                        'xilnex_item_id' => $result['id'],
                        'price' => $price,
                        'quantity' => $total_quantity,
                        'weight' => $weight,
                        'height' => $height,
                        'length' => $length,
                        'width' => $width,
                    );

                    if ($is_option) {
                        $inventory_data['product_option_value_id'] = $data['product_option_value_id'];
                        $this->xilnex_model->addInventoryLog($data['product_id'], $inventory_data);
                        // $this->xilnex_model->updateProductOption($data['product_option_value_id'], $result['id']);
                        // $this->xilnex_model->updateOcProductOptionPrice($data['product_option_value_id'], $price);
                        // $this->xilnex_model->updateOcProductOptionQuantity($data['product_option_value_id'], $total_quantity);
                        // $this->xilnex_model->updateOcProductOptionMeasurement($data['product_option_value_id'], $measurement_data);
                        $this->xilnex_model->updateProductOption($data['product_option_value_id'], $product_data);
                    } else {
                        $this->xilnex_model->addInventoryLog($data['product_id'], $inventory_data);
                        // $this->xilnex_model->updateProduct($data['product_id'], $result['id']);
                        // $this->xilnex_model->updateOcProductPrice($data['product_id'], $price);
                        // $this->xilnex_model->updateOcProductQuantity($data['product_id'], $total_quantity);
                        // $this->xilnex_model->updateOcProductMeasurement($data['product_id'], $measurement_data);
                        $this->xilnex_model->updateProduct($data['product_id'], $product_data);
                    }

                    $this->xilnex_model->updateProductOutletPrice($data['model'], $price);
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

    public function updatePrice($data, $is_option = 0) {
        if (!$this->config->get('module_xilnex_status') || !$this->config->get('module_xilnex_sync_product_status')) {
            return;
        }

        $item_price = $this->xilnex->getAllItems([
            'path_para' => $data['xilnex_item_id']
        ]);

        // check the response
        if ($item_price['ok'] && isset($item_price['data']['item']) && isset($item_price['data']['item']['itemCode'])) {

            if ($item_price['data']['item']['itemCode'] != $data['model']) {
                $this->xilnex_model->setItemError($data['product_id'], 'Model and Xilnex Item ID not match, please update the item Model');
                return;
            } 

            $price = $item_price['data']['item']['salesPrice'];
            $this->xilnex_model->updateProductOutletPrice($item_price['data']['item']['itemCode'], $price);
            $this->xilnex_model->setItemError($data['product_id'], '');

            if ($is_option) {
                $this->xilnex_model->updateOcProductOptionPrice($data['product_option_value_id'], $price);
            } else {
                $this->xilnex_model->updateOcProductPrice($data['product_id'], $price);
            }
        }
    }

    public function updateStock($data, $is_option = 0) {
        if (!$this->config->get('module_xilnex_status') || !$this->config->get('module_xilnex_sync_product_status')) {
            return;
        }
        
        $param = array(
            'path_para' => $data['xilnex_item_id'],
            'limit' => OUTLET_LIMIT,
        );

        $total_quantity = 0;
        $item_stocks = $this->xilnex->getItemStockByOutletAndId($param);

        if (isset($item_stocks['data']) && isset($item_stocks['data']['stocks'])) {
            foreach ($item_stocks['data']['stocks'] as $stock) {
                if ($stock['outlet'] != '') {

                    $outlet = $this->xilnex_model->getOutletByNames($stock['outlet']);
                    if ($outlet) {
                        if (in_array($outlet['location_id'], $this->config->get('module_xilnex_sync_product_quantity_outlet'))) {
                            $total_quantity += $stock['onhandQuantity'];
                        }
                    }

                    // check if data not exist then reinsert data to database
                    $product_outlet = $this->xilnex_model->getProductOutlet($stock['itemCode'], $stock['outlet']);
                    if (count($product_outlet) == 0) {
                        $stock['salesPrice'] = 0;
                        $stock['product_option_value_id'] = $is_option ? $data['product_option_value_id'] : 0;
                        $this->xilnex_model->syncOutletProduct($data['product_id'], $stock);
                    } else {
                        // if the xilnex model and xilnex_item_id not match return an error
                        if ($stock['itemCode'] != $data['model']) {
                            // if admin update the model after succesfully sync, the xilnex model and xilnex_item_id will not match and we will return an error
                            $this->xilnex_model->setItemError($data['product_id'], 'Model and Xilnex Item ID not match, please update the item Model');
                            return;
                        }

                        $this->xilnex_model->updateProductOutletInventory($data['model'], $stock);
                        $this->xilnex_model->setItemError($data['product_id'], '');
                    }
                }
            }

            $inventory_data = array (
                'new_quantity' => $total_quantity,
                'xilnex_item_id' => $data['xilnex_item_id'],
                'remark' => 'Updated from Xilnex'
            );

            if ($is_option) {
                $inventory_data['product_option_value_id'] = $data['product_option_value_id'];
                $this->xilnex_model->addInventoryLog($data['product_id'], $inventory_data);
                $this->xilnex_model->updateOcProductOptionQuantity($data['product_option_value_id'], $total_quantity);

                $total_oc_quantity = 0;
                $product_options = $this->xilnex_model->getProductOptionsByProduct($data['product_id']);
                foreach ($product_options as $product_option) {
                    $total_oc_quantity += $product_option['quantity'];
                }
                $this->xilnex_model->updateOcProductQuantity($data['product_id'], $total_oc_quantity);
            } else {
                $this->xilnex_model->addInventoryLog($data['product_id'], $inventory_data);
                $this->xilnex_model->updateOcProductQuantity($data['product_id'], $total_quantity);
            }

        }
    }
}