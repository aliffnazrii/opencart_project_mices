<?php

namespace Acilit;

use Jobs\SyncOrder;
use acilit\AcilitModel;
use queue\Dispatcher;

class AcilitOrder extends Library
{

    const LIMIT = 20;

    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->acilit_model = new AcilitModel($registry);

        $this->acilit_loader = new AcilitLoader($registry);

        $this->acilit = $this->acilit_loader->loadAcilit();
    }

    public function syncOrder($customer, $startDate = '', $endDate = '', $page = 1)
    {

        $phone = $customer['telephone'];

        $param = array(
            'ContactNo' => $phone,
            'page' => $page,
            'pageSize' =>  self::LIMIT,
        );

        $startDate = '';

        $invoices = $this->acilit->getMemberOrderInvoice($param); // from ERP

        foreach ($invoices as $invoice) {

            $check = $this->acilit_model->getAcilitOrder($invoice['RecID']); // from local

            if (!$check) {
                $transID = $invoice['SHOPID'] . '-' . $invoice['Terminal_No'] . '-' . $invoice['receiptNo'];
                // insert into table
                $listItems = $this->acilit->getMemberOrderInvoiceItems($transID); // ERP ORDER ITEM

                $data = [
                    'invoice_no' => $transID,
                    'invoice_prefix' => $invoice['receiptNo'],
                    'store_id' => $this->config->get('config_store_id'),
                    'store_name' => $this->config->get('config_name'),
                    'store_url' => $this->config->get('config_url'),
                    'customer_id' => $customer['customer_id'] ?? '',
                    'customer_group_id' => $customer['customer_group_id'] ?? '',
                    'acilit_client_id' => $customer['acilit_client_id'] ?? '',
                    'firstname' => $customer['firstname'] ?? '',
                    'lastname' => $customer['lastname'] ?? '',
                    'email' => $customer['email'] ?? '',
                    'telephone' => $phone,
                    'fax' => '',
                    'custom_field' => $customer['custom_field'] ?? '',
                    'payment_firstname' => $customer['firstname'] ?? '',
                    'payment_lastname' => $customer['lastname'] ?? '',
                    'payment_company' => $customer['payment_company'] ?? '',
                    'payment_address_1' => $customer['payment_address_1'] ?? '',
                    'payment_address_2' => $customer['payment_address_2'] ?? '',
                    'payment_city' => $customer['payment_city'] ?? '',
                    'payment_postcode' => $customer['payment_postcode'] ?? '',
                    'payment_country' => $customer['payment_country'] ?? '',
                    'payment_country_id' => $customer['payment_country_id'] ?? 0,
                    'payment_zone' => $customer['payment_zone'] ?? '',
                    'payment_zone_id' => $customer['payment_zone_id'] ?? 0,
                    'payment_address_format' => $customer['payment_address_format'] ?? '',
                    'payment_custom_field' => $customer['payment_custom_field'] ?? '',
                    'payment_method' => $customer['payment_method'] ?? '',
                    'payment_code' => $customer['payment_code'] ?? '',
                    'shipping_firstname' => $customer['firstname'] ?? '',
                    'shipping_lastname' => $customer['lastname'] ?? '',
                    'shipping_company' => $customer['shipping_company'] ?? '',
                    'shipping_address_1' => $customer['shipping_address_1'] ?? '',
                    'shipping_address_2' => $customer['shipping_address_2'] ?? '',
                    'shipping_city' => $customer['shipping_city'] ?? '',
                    'shipping_postcode' => $customer['shipping_postcode'] ?? '',
                    'shipping_country' => $customer['shipping_country'] ?? '',
                    'shipping_country_id' => $customer['shipping_country_id'] ?? 0,
                    'shipping_zone' => $customer['shipping_zone'] ?? '',
                    'shipping_zone_id' => $customer['shipping_zone_id'] ?? 0,
                    'shipping_address_format' => $customer['shipping_address_format'] ?? '',
                    'shipping_custom_field' => $customer['shipping_custom_field'] ?? '',
                    'shipping_method' => $customer['shipping_method'] ?? '',
                    'shipping_code' => $customer['shipping_code'] ?? '',
                    'comment' => $customer['comment'] ?? '',
                    'total' => $invoice['Amount'] ?? 0.00,
                    'award_point_status' => 0,
                    'type' => 'acilit',
                    'synced' => 1,
                    'order_status_id' => $this->config->get('module_acilit_order_complete_status'),
                    'affiliate_id' => 0,
                    'commission' => 0,
                    'marketing_id' => 0,
                    'tracking' => '',
                    'language_id' => $this->config->get('config_language_id'),
                    'currency_id' => $this->currency->getId($this->config->get('config_currency')),
                    'currency_code' => $this->config->get('config_currency'),
                    'currency_value' => $this->currency->getValue($this->config->get('config_currency')),
                    'acilit_order_rec_id' => $invoice['RecID'] ?? null,
                ];

                $insert = $this->acilit_model->addSyncOrder($data);

                $acilit_order = array(
                    'order_id' => $insert,
                    'acilit_order_id' => $invoice['RecID'] ?? null,
                    'sales_person' =>  '',
                    'sales_date' => $insert['date_added'],
                    'total' => $invoice['Amount'] ?? 0.00,
                    'job_id' => 0,
                    'status' => 1,
                    'error' => '',
                    'synced' => 1,
                );

                $addcilit = $this->acilit_model->addAcilitOrder($acilit_order);

                if ($listItems) {
                    foreach ($listItems as $data) {

                        $order_product = [
                            'order_id' => $insert,
                            'product_id' => $data['barcode'] ?? 0,
                            'name' => $data['ItemName'] ?? '',
                            'model' => $data['model'] ?? '',
                            'quantity' => $data['Quantity'] ?? 0,
                            'price' => $data['UnitPrice'] ?? 0.00,
                            'total' => $data['SubTotal'] ?? 0.00,
                            'tax' => 0,
                            'reward' => 0,
                            'point_award' => 0,
                            'department' => $data['Department'] ?? '',
                            'category' => $data['Category'] ?? ''
                        ];
                        $this->acilit_model->addOrderProduct($order_product);
                    }

                    $order_total = [
                        'order_id' => $insert,
                        'code' => 'total',
                        'title' => 'total',
                        'value' => $invoice['Amount'] ?? 0.00,
                        'sort_order' => 1
                    ];
                    $this->acilit_model->addOrderTotal($order_total);

                    if (isset($data['Discount']) && $data['Discount'] > 0) {
                        $order_total = [
                            'order_id' => $insert,
                            'code' => 'discount',
                            'title' => 'Discount',
                            'value' => - ($data['Discount']),
                            'sort_order' => 2
                        ];
                        $this->acilit_model->addOrderTotal($order_total);
                    }

                    $order_history = [
                        'order_id' => $insert,
                        'order_status_id' => $this->config->get('module_acilit_order_complete_status'),
                        'notify' => 0,
                        'comment' => '',
                        'date_added' => date('Y-m-d H:i:s')
                    ];
                    $this->acilit_model->addOrderHistory($order_history);
                }
            }
        } 
        if (count($invoices) == self::LIMIT) {
            $dispatcher = new Dispatcher($this->registry);
            $dispatcher->dispatch(new SyncOrder($customer, $startDate, $endDate, $page + 1));
        }
    }
}
