<?php 

namespace Xilnex;

use Jobs\PullOrder;

class XilnexOrder extends Library {

    const LIMIT = 20;
    const DEFAULT_PAYMENT_METHOD = [
        'cash', 'card', 'bank'
    ];

    const POINTS = 'Point';
    const COUPON = 'Coupon';
    const VOUCHER = 'Voucher';
    const DISCOUNT = 'Discount';
    const SHIPPING = 'Shipping';
    const STATUS_CANCEL = 'Cancelled';
    const ORDER_PREFIX = 'OCORDER-';

    public function __construct($registry) {
        parent::__construct($registry);

        $this->xilnex_model = new XilnexModel($registry);

        $this->xilnex_member = new XilnexMember($registry);

        $this->xilnex_loader = new XilnexLoader($registry);

        $this->xilnex = $this->xilnex_loader->loadXilnex();
    }

    public function pullOrders($date_from, $xilnex_client_id, $offset = 0) {
        $date_to = date('Y-m-d\TH:i:s.v\Z', strtotime('+1 days'));

        $response = $this->xilnex->getOrder([
			'datefrom' => $date_from,
			'dateto' => $date_to,
			'clientid' => $xilnex_client_id,
			'sortByLatestSalesDate' => true,
            'offset' => $offset,
            'limit' => self::LIMIT,
        ]);

        if (isset($response['data']) && isset($response['data']['sales']) && !empty($response['data']['sales'])) {
            foreach ($response['data']['sales'] as $order) {
                if ($order['clientId'] && strtotime($order['dateTime']) > strtotime($this->config->get('module_xilnex_pull_order_date'))) {
                    $this->addOrder($order);
                }
            }

            $offset += count($response['data']['sales']);
            if ($offset < $response['data']['totalSize']) {
                $dispatcher = new \queue\Dispatcher($this->registry);
                $dispatcher->dispatch(new PullOrder($date_from, $xilnex_client_id, $offset));
            }
        }
    }

    public function pushOrder($order_id) {
        $xilnex_order = $this->xilnex_model->getXilnexOrderByOrderId($order_id);

        if (!$xilnex_order || !$xilnex_order['xilnex_order_id']) {
            $grand_total = 0;
            $order_info = $this->xilnex_model->getOrder($order_id);

            // get shipping from order
            $order_info['shipping'] = $this->xilnex_model->getOrderTotal($order_id, 'shipping');

            // get coupon from order
            $coupon = $this->xilnex_model->getCouponFromOrder($order_id);
    
            // get the point applied
            $point = $this->xilnex_model->getOrderTotal($order_id, 'point');

            // get the membership discount applied
            $membership = $this->xilnex_model->getOrderTotal($order_id, 'membership');

            // get store credit
            $store_credit = $this->xilnex_model->getOrderTotal($order_id, 'credit');
    
            $payment_collection = [];
            if ($order_info['total'] > 0) {
                $payment_collection[] = array(
                    'method' => 'Cash',
                    'amount' => number_format($order_info['total'], 2),
                );

                $grand_total += number_format($order_info['total'], 2);
            }
    
            if ($point > 0) {
                $payment_collection[] = array(
                    'method' => 'Other',
                    'reference' => self::POINTS,
                    'cardType' => self::POINTS,
                    'remark' => 'Point Redemption',
                    'amount' => number_format($point, 2),
                );

                $grand_total += number_format($point, 2);
            }

            if ($coupon) {
                $payment_collection[] = array(
                    'method' => 'Voucher',
                    'amount' => number_format(abs($coupon['amount']), 2),
                    "reference" => $coupon['coupon_history_id'],
                );

                $grand_total += number_format(abs($coupon['amount']), 2);
            }

            if ($store_credit) {
                $payment_collection[] = array(
                    'method' => 'Voucher',
                    'amount' => number_format(abs($store_credit), 2),
                    "reference" => 'Store Credit',
                );

                $grand_total += number_format(abs($store_credit), 2);
            }
    
            // check if client exist
            if ($order_info['xilnex_client_id'] == 0) {
                $this->xilnex_model->setOrderError($order_id, 'Customer is not linked with Xilnex! Please link them before resync order.');
                $this->xilnex_model->updateXilnexOrderSyncStatus($order_id, 0);
                $this->alertOrderError($order_id);
                return;
            }
    
            $order_items = $this->xilnex_model->getOrderXilnexItems($order_id);

            $date = $order_info['date_added'];
            $datetime = new \DateTime($date); 
            $iso_date = $datetime->format('Y-m-d\TH:i:s.v\Z'); 

            $items = [];
            foreach ($order_items as $order_item) {
                $xilnex_item_id = 0;
                if ($order_item['option_xilnex_item_id'] && $order_item['product_option_value_id']) {
                    $xilnex_item_id = $order_item['option_xilnex_item_id'];
                } elseif ($order_item['xilnex_item_id'] && !$order_item['product_option_value_id']) {
                    $xilnex_item_id = $order_item['xilnex_item_id'];
                }

                if (!$xilnex_item_id) {
                    $this->xilnex_model->setOrderError($order_id, 'Some Products in this order are not linked with Xilnex! Please link them before resync order.');
                    $this->xilnex_model->updateXilnexOrderSyncStatus($order_id, 0);
                    $this->alertOrderError($order_id);
                    return;
                }

                if ($order_item['option_model']) {
                    $model = $order_item['option_model'];
                } else {
                    $model = $order_item['model'];
                }

                // Get Price
                $price = $this->xilnex_model->getXilnexPrice($model);
                if (!$price) {
                    if ((float)$order_item['option_price']) {
                        $price = (float)$order_item['option_price'];
                    } else {
                        $price = (float)$order_item['product_price'];
                    }
                }

                // If not found
                if (!$price) {
                    $this->xilnex_model->setOrderError($order_id, 'Some Products in this order are not linked with Xilnex! Please link them before resync order.');
                    $this->xilnex_model->updateXilnexOrderSyncStatus($order_id, 0);
                    $this->alertOrderError($order_id);
                    return;
                }
                
                $items[] = array(
                    'quantity' => $order_item['quantity'],
                    'salesDate' => $iso_date,
                    'itemId' => $xilnex_item_id,
                    'itemCode' => $model,
                    'unitPrice' => $price,
                    'enterPrice' => $price,
                    // 'discountAmount' => $order_item['original_price'] - $order_item['price_paid'],
                    'discountPercentage' => (($price - $order_item['price_paid'])/$price) * 100
                );
            }

            // add shipping into sales if have
            if ($order_info['shipping'] > 0) {
                $items[] = array(
                    'quantity' => 1,
                    'salesDate' => $iso_date,
                    // 'itemId' => $this->config->get('module_xilnex_shipping_item_code'), // shipping item code
                    'itemCode' => $this->config->get('module_xilnex_shipping_item_code'), // shipping item code
                    'enterPrice' => $order_info['shipping'],
                );
            }

            $outlet_info = $this->xilnex_model->getOutlet($this->config->get('module_xilnex_push_order_outlet'));

            if (!$outlet_info) {
                return false;
            }

            $branch = $outlet_info['name'];

            $sale = array (
                'dateTime' => $iso_date,
                // 'orderNo' => $order_id,
                'salesPerson' => 'Hutz Fashion Online Store',
                'clientId' => $order_info['xilnex_client_id'],
                'client' => array(
                    'id' => $order_info['xilnex_client_id'],
                ),
                'cashier' => 'Hutz Fashion Online Store',
                'status' => 'Completed',
                'outlet' => $branch,
                'outletId' => $outlet_info['location_id'],
                'confirmOutlet' => $branch,
                'salesType' => 'InvoiceSales',
                // 'salesType' => 'Online',
                'items' => $items,
                'collections' => $payment_collection,
                'remark' => self::ORDER_PREFIX . $order_id,
                // 'remark' => 'ORDER TESTING.',
            );

            if ($membership) {
                $grand_total += number_format($membership, 2);
                $discount_percentage = ($membership / $grand_total) * 100;
                $sale['discountPercentage'] = $discount_percentage;
            }

            $data = array(
                'sale' => $sale
            );

            $response = $this->xilnex->addToSalesInvoice($data, $branch);

            if (isset($response['data']['sale']['id']) && $response['data']['sale']['id'] > 0) {
                $response_data = array(
                    'order_id' => $order_id,
                    'xilnex_order_id' => $response['data']['sale']['id'],
                    'xilnex_client_id' => $response['data']['sale']['clientId'],
                    'xilnex_location_id' => $response['data']['sale']['outletId'],
                    'sales_person' => $response['data']['sale']['salesPerson'],
                    'total' => $response['data']['sale']['grandTotal'],
                    'sales_date' => $response['data']['sale']['dateTime'],
                    'status' => $response['data']['sale']['status'],
                    'job_id' => 0,
                    'error' => '',
                    'synced' => 1
                );

                $this->xilnex_model->saveXilnexOrder($response_data);
                $this->xilnex_model->updateOrderSyncStatus($order_id, 1);
                $this->xilnex_model->setOrderError($order_id);
                
                $this->triggerStockUpdate($order_items);
            } else {
                $this->xilnex_model->setOrderError($order_id, json_encode($response));
                $this->xilnex_model->updateOrderSyncStatus($order_id, 0);
                $this->xilnex_model->updateXilnexOrderSyncStatus($order_id, 0);
                $this->alertOrderError($order_id);
                echo 'Error: <pre>', print_r($response), '</pre>';
            }
        } else {
            $this->xilnex_model->setOrderError($order_id);
            $this->xilnex_model->updateOrderSyncStatus($order_id, 1);
            $this->xilnex_model->updateXilnexOrderSyncStatus($order_id, 1);
        }
    }

    private function triggerStockUpdate($order_items) {
        $dispatcher = new \queue\Dispatcher($this->registry);
        foreach ($order_items as $order_item) {
            $is_option = 0;
            if ($order_item['option_xilnex_item_id']) {
                $xilnex_item = $this->xilnex_model->getXilnexItemOption($order_item['option_xilnex_item_id']);
                $is_option = 1;
            } else {
                $xilnex_item = $this->xilnex_model->getXilnexItemOption($order_item['xilnex_item_id']);
            }

            $dispatcher->dispatch(new \jobs\UpdateStock($xilnex_item, $is_option));
        }
    }

    private function addOrder($xilnex_order) {
        $exist = $this->xilnex_model->getXilnexOrderByXilnexOrderId($xilnex_order['id']);

        if (!$exist) {
            $customer = $this->xilnex_model->getCustomerByClientId($xilnex_order['clientId']);

            if ($customer) {
                $shipping = 0;
                $discount = 0;
                foreach ($xilnex_order['items'] as $item) {
                    if ($this->config->get('module_xilnex_shipping_item_code') == $item['itemCode']) {
                        $shipping = $item['subtotal'];
                        break;
                    }
                }

                if ($xilnex_order['salesDiscountAmount']) {
                    $discount = $xilnex_order['salesDiscountAmount'];
                }
                
                $order_totals = array();
                $order_totals[] = array(
                    'code' => 'sub_total',
                    'title' => 'Sub-Total',
                    'value' => $xilnex_order['grandTotal'] - $shipping + $discount,
                );

                $payment_method = 'Cash';
                $customer_point_id = 0;
                $total = 0;
                $claimed_coupon_history_id = '';
                foreach ($xilnex_order['collections'] as $payment_collection) {
                    if (in_array(strtolower($payment_collection['method']), self::DEFAULT_PAYMENT_METHOD)) {
                        $payment_method = $payment_collection['method'];
                        $total = $payment_collection['amount'];
                    } else {
                        if ($payment_collection['method'] == 'Other') {
                            $order_totals[] = array(
                                'code' => strtolower($payment_collection['cardType']),
                                'title' => ucfirst($payment_collection['cardType']),
                                'value' => -$payment_collection['amount'],
                            );

                            if ($payment_collection['cardType'] == self::POINTS) {
                                $customer_point_id = $payment_collection['remark'];
                            }
                        } elseif ($payment_collection['method'] == self::VOUCHER)  {
                            $order_totals[] = array(
                                'code' => strtolower(self::COUPON),
                                'title' => ucfirst(self::COUPON),
                                'value' => -$payment_collection['amount'],
                            );

                            $claimed_coupon_history_id = $payment_collection['reference'];
                        } else {
                            $order_totals[] = array(
                                'code' => strtolower($payment_collection['method']),
                                'title' => ucfirst($payment_collection['method']) . '(' . $payment_collection['reference'] . ')',
                                'value' => -$payment_collection['amount'],
                            );
                        }
                    }
                }

                if ($discount) {
                    $order_totals[] = array(
                        'code' => strtolower(self::DISCOUNT),
                        'title' => ucfirst(self::DISCOUNT),
                        'value' => -$discount,
                    );
                }

                if ($shipping) {
                    $order_totals[] = array(
                        'code' => strtolower(self::SHIPPING),
                        'title' => ucfirst(self::SHIPPING),
                        'value' => $shipping,
                    );
                }

                $order_totals[] = array(
                    'code' => 'total',
                    'title' => 'Total',
                    'value' => $total,
                );

                $data = array (
                    'invoice_prefix' => '',
                    'store_id' => $this->config->get('config_store_id'),
                    'store_name' => $this->config->get('config_name'),
                    'store_url' => '',
                    'customer_id' => (int)$customer['customer_id'],
                    'customer_group_id' => (int)$customer['customer_group_id'],
                    'firstname' => $xilnex_order['client']['name'],
                    'lastname' => '',
                    'email' => $xilnex_order['client']['email'],
                    'telephone' => $xilnex_order['client']['contactNo'],
                    'payment_firstname' => $xilnex_order['client']['name'],
                    'payment_lastname' => '',
                    'payment_method' => $payment_method,
                    'payment_code' => '',
                    'comment' => '',
                    'total' => $total,
                    'language_id' => $this->config->get('config_language_id'),
                    'currency_id' => $this->currency->getId($this->config->get('config_currency')),
                    'currency_code' => $this->config->get('config_currency'),
                    'currency_value' => $this->currency->getValue($this->config->get('config_currency')),
                    'order_source' => 'xilnex',
                    'order_status_id' => $this->config->get('module_xilnex_order_complete_status'),
                    'synced' => 1,
                    'order_totals' => $order_totals
                );

                $order_id = $this->xilnex_model->addOcOrder($data);

                $this->addOrderProducts($xilnex_order['items'], $order_id);

                $response_data = array(
                    'order_id' => $order_id,
                    'xilnex_order_id' => $xilnex_order['id'],
                    'xilnex_client_id' => $xilnex_order['clientId'],
                    'xilnex_location_id' => $xilnex_order['outletId'],
                    'sales_person' => $xilnex_order['salesPerson'],
                    'total' => $xilnex_order['grandTotal'],
                    'sales_date' => $xilnex_order['dateTime'],
                    'status' => $xilnex_order['status'],
                    'job_id' => 0,
                    'error' => '',
                    'synced' => 1
                );

                $this->xilnex_model->saveXilnexOrder($response_data);

                if ($xilnex_order['status'] == self::STATUS_CANCEL) {
                    $order_status = $this->config->get('module_xilnex_order_canceled_status');
                } else {
                    $order_status = $this->config->get('module_xilnex_order_complete_status');
                }

                $this->xilnex_model->addOcOrderHistory($order_id, $order_status, 'Pulled from Xilnex');

                if ($this->config->get('module_xilnex_membership_upgrade_status')) {
                    $this->xilnex_member->upgradeMember($customer);
				}

                if (class_exists('\Epoint\Epoint')) {
                    $epoint = new \Epoint\Epoint($this->registry);

                    if ($customer_point_id && is_numeric($customer_point_id)) {
                        $epoint->setCustomerPointOrderId($customer_point_id, $order_id);
                    }

                    $order_info =  $this->xilnex_model->getOrder($order_id);
                    $epoint->award($order_info);
                    $epoint->setCustomerExpirePointsDate($order_info['customer_id'], $order_info['customer_group_id']);
                }

                if ($claimed_coupon_history_id) {
                    $this->xilnex_model->setCouponClaimedOrderId($claimed_coupon_history_id, $order_id, $customer['customer_id']);
                }
            }
        }
    }

    private function addOrderProducts($items, $order_id) {
        foreach ($items as $item) {
            if ($this->config->get('module_xilnex_shipping_item_code') == $item['itemCode']) {
                continue;
            }

            $name = $item['itemName'];
            $product_id = 0;
            $option = array();

            $product = $this->xilnex_model->getProductByModel($item['itemCode']);
            if ($product) {
                $name = $product['name'];
                $product_id = $product['product_id'];
            } else {
                $product_option = $this->xilnex_model->getProductOptionByModel($item['itemCode']);
                if ($product_option) {
                    $name = $product_option['name'];
                    $product_id = $product_option['product_id'];
                    $option = $product_option;
                }
            }

            $order_product = array(
                'order_id' => $order_id,
                'product_id' => $product_id,
                'name' => $name,
                'model' => $item['itemCode'],
                'quantity' => $item['quantity'],
                'price' => $item['profit'],
                'total' => $item['subtotal'],
                'tax' => 0,
                'reward' => 0,
            );

            $order_product_id = $this->xilnex_model->addOrderProduct($order_product);

            if ($option) {
                $order_option = array(
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                    'order_product_id' => $order_product_id,
                    'product_option_id' => $option['product_option_id'],
                    'product_option_value_id' => $option['product_option_value_id'],
                    'name' => $option['option_name'],
                    'value' => $option['option_value_name'],
                    'type' => ''
                );

                $this->xilnex_model->addOrderProductOption($order_option);
            }
        }
    }

    public function cancel($order_id) {
        $order = $this->xilnex_model->getXilnexOrderByOrderId($order_id);

        if ($order) {
            // Get the order from Xilnex.
            $xilnex_order = $this->xilnex->getOrderById($order['xilnex_order_id'], [
                'limit' => 1,
            ]);

            // If the order exists, cancel it and log the cancellation.
            if (isset($xilnex_order['data']['sale']['id'])) {
                if ($xilnex_order['data']['sale']['status'] != 'Cancelled') {
                    $data = [
                        'sale' => [
                            'cancelOutlet' => $xilnex_order['data']['sale']['outlet'],
                            'cancelRemark' => 'Hutz Fashion Online Store',
                        ]
                    ];
        
                    $this->xilnex->cancelOrder($xilnex_order['data']['sale']['id'], $data);
                    $this->xilnex_model->updateOrderSyncStatus($order_id, 1);
                    $this->xilnex_model->updateXilnexOrderStatus($order_id, self::STATUS_CANCEL);
                    $this->xilnex_model->updateXilnexOrderSyncStatus($order_id, 1);
                }
            }
        }
    }




    // Email Part
    public function alertOrderError($order_id) {
        if (!$this->config->get('module_xilnex_alert_order_fail')) {
            return;
        }

        $order = $this->xilnex_model->getXilnexOrderByOrderId($order_id);

        if ($order) {
            $text_subject = '%s - Order Sync Error-%s';
            $text_message = 'Order Sync Error for Order-%s at %s';
            $text_error = 'Cause of Error:';
            $text_error_message = $order['error'];

            $data = array();
            $data['title'] = sprintf($text_subject, $this->config->get('config_name'), $order_id);
            $data['text_message'] = sprintf($text_message, $order_id, date('d-m-Y h:i A'));
            $data['text_error']  = $text_error;
            $data['text_error_message']  = $text_error_message;
            $subject = $data['title'];

            $mail = new \Mail($this->config->get('config_mail_engine'));
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

            $mail->setTo($this->config->get('config_email'));
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
            $mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
            $mail->setText($this->loadView('mail/xilnex_order_fail', $data));
            $mail->send();

            if ($this->config->get('module_xilnex_alert_order_fail_email')) {
                $emails = explode(',', $this->config->get('module_xilnex_alert_order_fail_email'));
                foreach ($emails as $email) {
                    $email = trim($email);
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $mail->setTo($email);
                        $mail->send();
                    }
                }
            }
        }
    }

    protected function loadView($filename, $data) {
		$template = new \Template($this->config->get('template_engine'));

		foreach ($data as $key => $value) {
			$template->set($key, $value);
		}

		return $template->render($filename);
	}
}