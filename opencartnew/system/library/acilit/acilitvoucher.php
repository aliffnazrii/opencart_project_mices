<?php

namespace Acilit;

use acilit\AcilitModel;
use queue\Dispatcher;
use jobs\syncvoucher;

class AcilitVoucher extends Library
{

    const LIMIT = 20;

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->acilit_model = new AcilitModel($registry);

        $this->acilit_loader = new AcilitLoader($registry);

        $this->acilit = $this->acilit_loader->loadAcilit();
    }

    public function syncVoucher($startDate = '', $endDate = '', $page = 1)
    {
        if (!$this->config->get('module_acilit_status') || !$this->config->get('module_acilit_sync_voucher_status')) {
            return array(
                'status' => false,
                'count' => 0
            );
        }

        $param = array(
            'page' => $page,
            'pageSize' =>  self::LIMIT,
            'FromDate' => $startDate,
            'ToDate' => $endDate,
        );

        $response = $this->acilit->getVouchers($param);

        if ($response) {

            foreach ($response as $voucher) {
                $serial = $voucher['Voucher_SerialNo'];

                $this->acilit_model = new AcilitModel($this->registry);

                $checks = $this->acilit_model->getCoupon($serial);

                if (!$checks) {
                    $data_coupon = array(
                        'voucher_id'       => (string)$voucher['Voucher_ID'],
                        'acilit_voucher_id'       => (string)$voucher['Voucher_ID'],
                        'discount'         => (float)$voucher['Disc_Value'],
                        'code'             => (string)$voucher['Voucher_SerialNo'],
                        'voucher_serialNo' => $voucher['Voucher_SerialNo'],
                        'date_start'       => $voucher['From_Date'],
                        'date_end'         => $voucher['ToDate'],
                        'name'             => $voucher['Voucher_Name'],
                        'status'           => 1,
                        'type'             => 'F',
                        'total'            => 0,
                        'logged'           => 0,
                        'shipping'         => 0,
                        'uses_total'       => 1,
                        'uses_customer'    => 1,
                        'acilit_voucher_id' => (int)$voucher['Voucher_ID'],
                        'customer_id'      => 0,
                        'mapping'          => 0,
                    );

                    $addCoupon = $this->acilit_model->addCoupon($data_coupon);
                }

                if ($checks || $addCoupon) {

                    $exist = $this->acilit_model->getVoucherInProduct($voucher['Voucher_ID']);
                    $totalVouchers = $this->acilit_model->getTotalVouchersInCategory($voucher['Voucher_ID']);

                    if (!isset($exist['voucher_id'])) {


                        $data_product = array(
                            'model'       => $checks['name'] ? $checks['name'] : 'Unnamed Voucher',
                            'quantity'     => $totalVouchers,
                            'voucher_id'         => $voucher['Voucher_ID'],
                            'pointsRedeem'             => 0, // not set yet
                            'status' => 1,
                            'category'       => $voucher['Voucher_ID'],
                            'date_available'   => $voucher['From_Date'],
                            'price'            => $checks['discount'] ? $checks['discount'] : $voucher['Disc_Value'],
                        );

                        $createProduct = $this->acilit_model->addCouponInProduct($data_product);

                        if ($createProduct) {
                            $this->acilit_model->addMapping($createProduct, $voucher['Voucher_ID']);
                        }

                        $data_product_description = array(
                            'product_id'       => $createProduct,
                            'language_id'      => 1,
                            'name'             => $checks['name'] ? $checks['name'] : 'Unnamed Voucher',
                            'description'      => $voucher['TnC_Details'],
                            'meta_title'       => $checks['name'] ? $checks['name'] : 'Unnamed Voucher',
                        );

                        $productDescription = $this->acilit_model->addProductDescription($data_product_description);

                        $dataStore = array(
                            'product_id'       => $createProduct,
                            'store_id'         => 0,
                        );

                        $productToStore = $this->acilit_model->addProductToStore($dataStore);
                    } else if (isset($exist['voucher_id'])) {
                        $update = $this->acilit_model->updateProductVoucherQuantity($voucher['Voucher_ID'], $totalVouchers);
                        $mapp = $this->acilit_model->addMapping($exist['product_id'], $voucher['Voucher_ID']);
                    }
                }
            }

            if (count($response) == self::LIMIT) {
                $dispatcher = new Dispatcher($this->registry);
                $dispatcher->dispatch(new SyncVoucher($startDate, $endDate, $page + 1));
            }
        }
        return array(
            'status' => true,
            'count' => count($response)
        );
    }

    public function redeemVoucher($voucher_serial, $UID, $customer_id)
    {
        if (!$this->config->get('module_acilit_status') || !$this->config->get('module_acilit_sync_voucher_status')) {
            return array(
                'status' => false,
                'message' => 'Module is not enabled'
            );
        }

        $param = array(
            'Voucher_SerialNo' => $voucher_serial,
            'UID' => $UID,
        );

        // Call API to redeem voucher
        $redeem = $this->acilit->updateVoucherStatus($param);

        if ($redeem) {
            // Update customer_id in coupon table
            $this->acilit_model->updateVoucherCustomerId($voucher_serial, $customer_id);

            return array(
                'status' => true,
                'message' => 'Voucher redeemed successfully'
            );
        }

        return array(
            'status' => false,
            'message' => 'Failed to redeem voucher'
        );
    }
}
