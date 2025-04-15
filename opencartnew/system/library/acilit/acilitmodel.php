<?php

namespace Acilit;

use acilit\Library;

class AcilitModel extends Library
{
    // Product
    public function getProductByModel($model)
    {
        $query = $this->db->query("SELECT p.*, pd.name FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON p.product_id = pd.product_id WHERE model = '" . $this->db->escape($model) . "' AND pd.language_id = '" . $this->config->get('config_language_id') . "'");

        return $query->row;
    }

    public function getAllItems()
    {
        $query = $this->db->query("SELECT p.product_id, p.acilit_item_id, p.model FROM " . DB_PREFIX . "product p 
            WHERE p.acilit_item_id != '0' 
            AND NOT EXISTS (SELECT * FROM " . DB_PREFIX . "product_option_value pov WHERE pov.product_id = p.product_id)");

        return $query->rows;
    }

    public function getAllItemOptions()
    {
        $query = $this->db->query("SELECT product_id, product_option_value_id, acilit_item_id, model FROM " . DB_PREFIX . "product_option_value WHERE acilit_item_id != '0'");

        return $query->rows;
    }

    public function getAcilitItem($acilit_item_id)
    {
        $query = $this->db->query("SELECT p.product_id, p.acilit_item_id, p.model FROM " . DB_PREFIX . "product p 
        WHERE p.acilit_item_id = '" . $acilit_item_id . "' 
        AND NOT EXISTS (SELECT * FROM " . DB_PREFIX . "product_option_value pov WHERE pov.product_id = p.product_id)");

        return $query->row;
    }


    public function setItemError($product_id, $error_message)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET acilit_error = '" . $error_message . "' WHERE product_id = '" . $product_id . "'");
    }

    public function getAcilitPrice($item_code)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "acilit_product_outlet WHERE item_code = '" . $this->db->escape($item_code) . "' AND acilit_sales_price != '0.00' LIMIT 1");

        if ($query->row) {
            return $query->row['acilit_sales_price'];
        }

        return false;
    }




    public function updateProduct($product_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            acilit_item_id = '" . (int)$data['acilit_item_id'] . "', 
            price = '" . (float)$data['price'] . "', 
            quantity = '" . (int)$data['quantity'] . "', 
           
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_id . "'");
    }

    public function updateCoupon($data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "coupon SET 
            voucher_serialNo = '" . $this->db->escape($data['voucher_serialNo']) . "', 
            acilit_voucher_id = '" . $this->db->escape($data['acilit_voucher_id']) . "', 
            customer_id = '" . (int)$data['customer_id'] . "', 
            voucher_id = '" . $this->db->escape($data['voucher_id']) . "', 
            mapping = '" . (int)$data['mapping'] . "', 
            date_added = NOW() ");
    }


    public function updateOcProductPrice($product_id, $price)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            price = '" . (float)$price . "', 
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_id . "'");
    }


    public function updateOcProductQuantity($product_id, $quantity)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            quantity = '" . (int)$quantity . "', 
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_id . "'");
    }



    public function getAllProductNotYetSync()
    {
        $query = $this->db->query("SELECT product_id, model, acilit_item_id FROM " . DB_PREFIX . "product p 
            WHERE p.acilit_item_id = '0' 
            AND p.model != ''
            AND NOT EXISTS (SELECT product_option_value_id FROM " . DB_PREFIX . "product_option_value pov WHERE pov.product_id = p.product_id LIMIT 1)");
        return $query->rows;
    }


    // Customer
    public function getMembers()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE acilit_client_id != '0'");
        return $query->rows;
    }

    public function getNonMember()
    {
        $query = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customer WHERE acilit_client_id = '0' AND acilit_client_id_response = ''");
        return $query->rows;
    }

    public function getCustomer($customer_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");
        return $query->row;
    }
    public function getLinkedCustomers()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE `acilit_client_id` IS NOT NULL AND `acilit_client_id` != 0");
        return $query->rows;
    }

    public function getCustomersByGroup($customer_group_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_group_id = '" . (int)$customer_group_id . "'");
        return $query->rows;
    }

    public function getCustomerByClientId($acilit_client_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE acilit_client_id = '" . (int)$acilit_client_id . "'");
        return $query->row;
    }

    public function getCustomerByPhone($phone)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE telephone = '" . $this->db->escape($phone) . "'");
        return $query->row;
    }

    public function addCustomer($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "customer SET 
            customer_group_id = '" . (int)$data['customer_group_id'] . "', 
            firstname = '" . $this->db->escape($data['firstname']) . "', 
            lastname = '" . $this->db->escape($data['lastname']) . "', 
            email = '" . $this->db->escape($data['email']) . "', 
            birthday = '" . $this->db->escape($data['birthday']) . "', 
            acilit_client_id = '" . (int)$data['acilit_client_id'] . "', 
            language_id = '" . (int)$data['language_id'] . "', 
            store_id = '" . (int)$data['store_id'] . "', 
            telephone = '" . $this->db->escape($data['telephone']) . "', 
            custom_field = '" . $this->db->escape(json_encode(array())) . "', 
            newsletter = '" . (int)$data['newsletter'] . "', 
            salt = '" . $this->db->escape($salt = token(9)) . "', 
            password = '" . $this->db->escape(sha1($salt . sha1($salt . sha1($data['password'])))) . "', 
            status = '" . (int)$data['status'] . "', 
            safe = '" . (int)$data['safe'] . "', 
            date_added = NOW()");
    }




    public function updateCustomerGroup($customer_id, $customer_group_id)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = '" . (int)$customer_group_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
    }



    public function updateClientId($customer_id, $client_id, $uid)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET acilit_client_id = '" . (int)$client_id . "', acilit_uid = '" . $this->db->escape($uid) . "' WHERE customer_id = '" . (int)$customer_id . "'");
    }



    // Order
    public function getAcilitOrderByAcilitOrderId($acilit_order_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "acilit_order WHERE acilit_order_id = '" . (int)$acilit_order_id . "' LIMIT 1");
        return $query->row;
    }

    public function getAcilitOrderByOrderId($order_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "acilit_order WHERE order_id = '" . (int)$order_id . "' LIMIT 1");
        return $query->row;
    }

    public function getPendingUnsyncOrder($date_from = '')
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "order o 
            WHERE NOT EXISTS (SELECT xo.acilit_order_id FROM " . DB_PREFIX . "acilit_order xo WHERE xo.order_id = o.order_id) 
            AND o.synced = '0' 
            AND o.acilit_error IS NULL";

        if ($this->config->get('module_acilit_order_sync_status')) {
            $sql .= " AND o.order_status_id IN (" . implode(',', $this->config->get('module_acilit_order_sync_status')) . ")";
        }

        if ($date_from) {
            $date_from = $this->config->get('module_acilit_pull_order_date');
        }

        $sql .= " AND o.date_added > '" . $this->db->escape($date_from) . "'";

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function saveAcilitOrder($data)
    {
        $exist_order = array();
        if ($data['acilit_order_id']) {
            $exist_order = $this->getAcilitOrderByAcilitOrderId($data['acilit_order_id']);
        }

        if (!$exist_order) {
            $exist_order = $this->getAcilitOrderByOrderId($data['order_id']);
        }

        if (!$exist_order) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "acilit_order SET 
                order_id = '" . (int)$data['order_id'] . "', 
                acilit_order_id = '" . (int)$data['acilit_order_id'] . "', 
                acilit_client_id = '" . (int)$data['acilit_client_id'] . "', 
                acilit_location_id = '" . $this->db->escape($data['acilit_location_id']) . "', 
                sales_person = '" . $this->db->escape($data['sales_person']) . "',
                sales_date = '" . $this->db->escape($data['sales_date']) . "',
                total = '" . (float)$data['total'] . "',
                error = '" . $this->db->escape($data['error']) . "',
                synced = '" . (int)$data['synced'] . "',
                job_id = '" . (int)$data['job_id'] . "',
                status = '" . $this->db->escape($data['status']) . "',
                date_added = NOW(),
                date_modified = NOW()
            ");
        } else {
            $this->db->query("UPDATE " . DB_PREFIX . "acilit_order SET 
                acilit_order_id = '" . (int)$data['acilit_order_id'] . "', 
                acilit_client_id = '" . (int)$data['acilit_client_id'] . "', 
                acilit_location_id = '" . $this->db->escape($data['acilit_location_id']) . "', 
                sales_person = '" . $this->db->escape($data['sales_person']) . "',
                sales_date = '" . $this->db->escape($data['sales_date']) . "',
                total = '" . (float)$data['total'] . "',
                error = '" . $this->db->escape($data['error']) . "',
                synced = '" . (int)$data['synced'] . "',
                job_id = '" . (int)$data['job_id'] . "',
                status = '" . $this->db->escape($data['status']) . "',
                date_modified = NOW()
                WHERE order_id = '" . (int)$exist_order['order_id'] . "'
            ");
        }
    }

    public function addOcOrder($data)
    {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "order` SET 
			invoice_prefix = '" . $this->db->escape($data['invoice_prefix']) . "', 
			store_id = '" . (int)$data['store_id'] . "', 
			store_name = '" . $this->db->escape($data['store_name']) . "', 
			store_url = '" . $this->db->escape($data['store_url']) . "', 
			customer_id = '" . (int)$data['customer_id'] . "', 
			customer_group_id = '" . (int)$data['customer_group_id'] . "', 
			firstname = '" . $this->db->escape($data['firstname']) . "', 
			lastname = '" . $this->db->escape($data['lastname']) . "', 
			email = '" . $this->db->escape($data['email']) . "', 
			telephone = '" . $this->db->escape($data['telephone']) . "', 
			payment_firstname = '" . $this->db->escape($data['payment_firstname']) . "', 
			payment_lastname = '" . $this->db->escape($data['payment_lastname']) . "',  
			payment_method = '" . $this->db->escape($data['payment_method']) . "', 
			payment_code = '" . $this->db->escape($data['payment_code']) . "', 
			comment = '" . $this->db->escape($data['comment']) . "', 
			total = '" . (float)$data['total'] . "', 
			language_id = '" . (int)$data['language_id'] . "', 
			currency_id = '" . (int)$data['currency_id'] . "', 
			currency_code = '" . $this->db->escape($data['currency_code']) . "', 
			currency_value = '" . (float)$data['currency_value'] . "', 
			order_source = '" . $this->db->escape($data['order_source']) . "', 
			order_status_id = '" . (int)$data['order_status_id'] . "', 
			synced = '" . (int)$data['synced'] . "', 
			date_added = NOW(), 
			date_modified = NOW()
        ");

        $order_id = $this->db->getLastId();

        if (isset($data['order_totals'])) {
            foreach ($data['order_totals'] as $key => $total) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "order_total SET order_id = '" . (int)$order_id . "', code = '" . $this->db->escape($total['code']) . "', title = '" . $this->db->escape($total['title']) . "', `value` = '" . (float)$total['value'] . "', sort_order = '" . (int)$key . "'");
            }
        }

        return $order_id;
    }

    public function getOrderProducts($order_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");

        return $query->rows;
    }

    public function getOrderOptions($order_id, $order_product_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$order_product_id . "'");

        return $query->rows;
    }

    public function getProductOptionValue($product_option_value_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value WHERE product_option_value_id = '" . (int)$product_option_value_id . "'");

        return $query->row;
    }

    public function getOrderTotals($order_id)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_total` WHERE order_id = '" . (int)$order_id . "' ORDER BY sort_order ASC");

        return $query->rows;
    }


    public function addOrderProductOption($option)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_option SET 
            order_id = '" . (int)$option['order_id'] . "', 
            order_product_id = '" . (int)$option['order_product_id'] . "', 
            product_option_id = '" . (int)$option['product_option_id'] . "', 
            product_option_value_id = '" . (int)$option['product_option_value_id'] . "', 
            name = '" . $this->db->escape($option['name']) . "', 
            `value` = '" . $this->db->escape($option['value']) . "', 
            `type` = '" . $this->db->escape($option['type']) . "'
        ");
    }

    public function addOcOrderHistory($order_id, $order_status_id, $comment = '')
    {
        $order_info = $this->getOrder($order_id);

        if ($order_info) {
            // Fraud Detection
            $this->load->model('account/customer');

            // If current order status is not processing or complete but new status is processing or complete then commence completing the order
            if (!in_array($order_info['order_status_id'], array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status'))) && in_array($order_status_id, array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status')))) {
                $order_products = $this->getOrderProducts($order_id);

                foreach ($order_products as $order_product) {
                    $this->db->query("UPDATE " . DB_PREFIX . "product SET quantity = (quantity - " . (int)$order_product['quantity'] . ") WHERE product_id = '" . (int)$order_product['product_id'] . "' AND subtract = '1'");

                    $order_options = $this->getOrderOptions($order_id, $order_product['order_product_id']);

                    foreach ($order_options as $order_option) {
                        $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity - " . (int)$order_product['quantity'] . ") WHERE product_option_value_id = '" . (int)$order_option['product_option_value_id'] . "' AND subtract = '1'");
                    }
                }
            }

            // Update the DB with the new statuses
            $this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = '" . (int)$order_status_id . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");

            $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', order_status_id = '" . (int)$order_status_id . "', notify = '0', comment = '" . $this->db->escape($comment) . "', date_added = NOW()");

            // If old order status is the processing or complete status but new status is not then commence restock, and remove coupon, voucher and reward history
            if (in_array($order_info['order_status_id'], array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status'))) && !in_array($order_status_id, array_merge($this->config->get('config_processing_status'), $this->config->get('config_complete_status')))) {
                // Restock
                $order_products = $this->getOrderProducts($order_id);

                foreach ($order_products as $order_product) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "product` SET quantity = (quantity + " . (int)$order_product['quantity'] . ") WHERE product_id = '" . (int)$order_product['product_id'] . "' AND subtract = '1'");

                    $order_options = $this->getOrderOptions($order_id, $order_product['order_product_id']);

                    foreach ($order_options as $order_option) {
                        $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity + " . (int)$order_product['quantity'] . ") WHERE product_option_value_id = '" . (int)$order_option['product_option_value_id'] . "' AND subtract = '1'");
                    }
                }

                // Remove coupon, vouchers and reward points history
                $order_totals = $this->getOrderTotals($order_id);

                foreach ($order_totals as $order_total) {
                    $this->load->model('extension/total/' . $order_total['code']);

                    if (property_exists($this->{'model_extension_total_' . $order_total['code']}, 'unconfirm')) {
                        $this->{'model_extension_total_' . $order_total['code']}->unconfirm($order_id);
                    }
                }
            }

            $this->cache->delete('product');
        }
    }

    public function setOrderError($order_id, $error = '')
    {
        if ($error) {
            $this->db->query("UPDATE " . DB_PREFIX . "order SET acilit_error = '" . $this->db->escape($error) . "' WHERE order_id = '" . (int)$order_id . "'");
            $this->db->query("UPDATE " . DB_PREFIX . "acilit_order SET error = '" . $this->db->escape($error) . "' WHERE order_id = '" . (int)$order_id . "'");
        } else {
            $this->db->query("UPDATE " . DB_PREFIX . "order SET acilit_error = NULL WHERE order_id = '" . (int)$order_id . "'");
            $this->db->query("UPDATE " . DB_PREFIX . "acilit_order SET error = NULL WHERE order_id = '" . (int)$order_id . "'");
        }
    }

    public function updateAcilitOrderSyncStatus($order_id, $sync, $job_id = 0)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "acilit_order SET synced = '" . (int)$sync . "', job_id = '" . (int)$job_id . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");
    }

    public function updateAcilitOrderStatus($order_id, $status)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "acilit_order SET status = '" . $this->db->escape($status) . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");
    }

    public function getOrderTotal($order_id, $code)
    {
        $query = $this->db->query("SELECT value FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int)$order_id . "' AND code = '" . $this->db->escape($code) . "' LIMIT 1");
        if (empty($query->row['value'])) {
            return 0;
        }
        return abs($query->row['value']);
    }

    public function getCouponFromOrder($order_id)
    {
        $query = $this->db->query("SELECT ch.*, c.code FROM " . DB_PREFIX . "coupon_history ch LEFT JOIN " . DB_PREFIX . "coupon c ON ch.coupon_id = c.coupon_id WHERE ch.order_id = '" . (int)$order_id . "' LIMIT 1");
        return $query->row;
    }

    public function getOrder($order_id)
    {
        $query = $this->db->query("SELECT o.*, c.acilit_client_id FROM " . DB_PREFIX . "order o JOIN " . DB_PREFIX . "customer c ON o.customer_id = c.customer_id WHERE o.order_id = '" . (int)$order_id . "'");
        return $query->row;
    }

    public function getOrderAcilitItems($order_id)
    {
        $sql = "SELECT op.order_id, op.order_product_id, op.product_id, op.price as price_paid, op.quantity, op.total, p.acilit_item_id, pov.acilit_item_id as option_acilit_item_id, p.model, pov.model as option_model, pov.product_option_value_id, p.price as product_price, pov.price as option_price
            FROM " . DB_PREFIX . "order_product op 
            LEFT JOIN " . DB_PREFIX . "order_option oo ON (op.order_product_id = oo.order_product_id) 
            LEFT JOIN " . DB_PREFIX . "product p ON (op.product_id = p.product_id) 
            LEFT JOIN " . DB_PREFIX . "product_option_value pov ON (oo.product_option_value_id = pov.product_option_value_id) 
            WHERE op.order_id = '" . (int)$order_id . "'
        ";

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function updateOrderSyncStatus($order_id, $sync)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "order SET synced = '" . (int)$sync . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");
    }

    public function setCouponClaimedOrderId($coupon_history_id, $order_id)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "coupon_history SET order_id = '" . (int)$order_id . "' WHERE coupon_history_id = '" . $this->db->escape($coupon_history_id) . "'");
    }

    public function getUser($user_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user WHERE user_id = '" . (int)$user_id . "'");
        return $query->row;
    }

    public function addCustomerGroupHistory($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "customer_group_history SET 
            customer_id = '" . (int)$data['customer_id'] . "', 
            old_customer_group_id = '" . (int)$data['old_customer_group_id'] . "', 
            new_customer_group_id = '" . (int)$data['new_customer_group_id'] . "', 
            description = '" . $this->db->escape($data['description']) . "', 
            updated_by = '" . (int)$data['updated_by'] . "', 
            date_added = NOW()");
    }


    public function getCoupon($data)
    {
        $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon WHERE code = '" . $this->db->escape($data) . "'");

        return $sql->row;
    }
    public function addCoupon($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "coupon SET name = '" . $this->db->escape($data['name']) . "', code = '" . $this->db->escape($data['code']) . "', discount = '" . (float)$data['discount'] . "', type = '" . $this->db->escape($data['type']) . "', total = '" . (float)$data['total'] . "', logged = '" . (int)$data['logged'] . "', shipping = '" . (int)$data['shipping'] . "', date_start = '" . $this->db->escape($data['date_start']) . "', date_end = '" . $this->db->escape($data['date_end']) . "', uses_total = '" . (int)$data['uses_total'] . "', uses_customer = '" . (int)$data['uses_customer'] . "', status = '" . (int)$data['status'] . "', date_added = NOW(), acilit_voucher_id = '" . (int)$data['acilit_voucher_id'] . "', customer_id = '" . $this->db->escape($data['voucher_id']) . "', voucher_id = '" . $this->db->escape($data['voucher_id']) . "', voucher_serialNo = '" . $this->db->escape($data['voucher_serialNo']) . "', mapping = '" . $this->db->escape($data['mapping']) . "'");

        $coupon_id = $this->db->getLastId();

        if (isset($data['coupon_product'])) {
            foreach ($data['coupon_product'] as $product_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "coupon_product SET coupon_id = '" . (int)$coupon_id . "', product_id = '" . (int)$product_id . "'");
            }
        }

        if (isset($data['coupon_category'])) {
            foreach ($data['coupon_category'] as $category_id) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "coupon_category SET coupon_id = '" . (int)$coupon_id . "', category_id = '" . (int)$category_id . "'");
            }
        }

        return $coupon_id;
    }
    public function addProductToStore($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET 
            product_id = '" . (int)$data['product_id'] . "', 
            store_id = '" . (isset($data['store_id']) ? (int)$data['store_id'] : 0) . "'");

        return $this->db->getLastId();
    }

    public function addProductDescription($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET 
            product_id = '" . (int)$data['product_id'] . "', 
            language_id = '" . (int)$data['language_id'] . "', 
            name = '" . $this->db->escape($data['name']) . "', 
            description = '" . $this->db->escape($data['description']) . "', 
            meta_title = '" . $this->db->escape($data['meta_title']) . "'");

        return $this->db->getLastId();
    }

    public function getAllOrders()
    {
        $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "order ");
        return $sql->rows;
    }
    // public function getOrdersByPhone($phone){
    //     $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "order WHERE ``");
    //     return $sql->rows;
    // }
    public function getAcilitOrder($data)
    {
        $sql = $this->db->query("SELECT * FROM oc_order WHERE `acilit_order_rec_id` = '" . (int)$data . "'");
        // dd($sql);
        return $sql->row;
    }

    public function addSyncOrder($data)
    {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "order` SET 
            invoice_prefix = '" . $this->db->escape($data['invoice_prefix']) . "',
            store_id = '" . (int)$data['store_id'] . "',
            store_name = '" . $this->db->escape($data['store_name']) . "',
            store_url = '" . $this->db->escape($data['store_url']) . "',
            customer_id = '" . (int)$data['customer_id'] . "',
            customer_group_id = '" . (int)$data['customer_group_id'] . "',
            firstname = '" . $this->db->escape($data['firstname']) . "',
            lastname = '" . $this->db->escape($data['lastname']) . "',
            email = '" . $this->db->escape($data['email']) . "',
            telephone = '" . $this->db->escape($data['telephone']) . "',
            custom_field = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : '') . "',
            payment_firstname = '" . $this->db->escape($data['payment_firstname']) . "',
            payment_lastname = '" . $this->db->escape($data['payment_lastname']) . "',
            payment_company = '" . $this->db->escape($data['payment_company']) . "',
            payment_address_1 = '" . $this->db->escape($data['payment_address_1']) . "',
            payment_address_2 = '" . $this->db->escape($data['payment_address_2']) . "',
            payment_city = '" . $this->db->escape($data['payment_city']) . "',
            payment_postcode = '" . $this->db->escape($data['payment_postcode']) . "',
            payment_country = '" . $this->db->escape($data['payment_country']) . "',
            payment_country_id = '" . (int)$data['payment_country_id'] . "',
            payment_zone = '" . $this->db->escape($data['payment_zone']) . "',
            payment_zone_id = '" . (int)$data['payment_zone_id'] . "',
            payment_address_format = '" . $this->db->escape($data['payment_address_format']) . "',
            payment_custom_field = '" . $this->db->escape(isset($data['payment_custom_field']) ? json_encode($data['payment_custom_field']) : '') . "',
            payment_method = '" . $this->db->escape($data['payment_method']) . "',
            payment_code = '" . $this->db->escape($data['payment_code']) . "',
            shipping_firstname = '" . $this->db->escape($data['shipping_firstname']) . "',
            shipping_lastname = '" . $this->db->escape($data['shipping_lastname']) . "',
            shipping_company = '" . $this->db->escape($data['shipping_company']) . "',
            shipping_address_1 = '" . $this->db->escape($data['shipping_address_1']) . "',
            shipping_address_2 = '" . $this->db->escape($data['shipping_address_2']) . "',
            shipping_city = '" . $this->db->escape($data['shipping_city']) . "',
            shipping_postcode = '" . $this->db->escape($data['shipping_postcode']) . "',
            shipping_country = '" . $this->db->escape($data['shipping_country']) . "',
            shipping_country_id = '" . (int)$data['shipping_country_id'] . "',
            shipping_zone = '" . $this->db->escape($data['shipping_zone']) . "',
            shipping_zone_id = '" . (int)$data['shipping_zone_id'] . "',
            shipping_address_format = '" . $this->db->escape($data['shipping_address_format']) . "',
            shipping_custom_field = '" . $this->db->escape(isset($data['shipping_custom_field']) ? json_encode($data['shipping_custom_field']) : '') . "',
            shipping_method = '" . $this->db->escape($data['shipping_method']) . "',
            shipping_code = '" . $this->db->escape($data['shipping_code']) . "',
            comment = '" . $this->db->escape($data['comment']) . "',
            total = '" . (float)$data['total'] . "',
            affiliate_id = '" . (int)$data['affiliate_id'] . "',
            commission = '" . (float)$data['commission'] . "',
            marketing_id = '" . (int)$data['marketing_id'] . "',
            tracking = '" . $this->db->escape($data['tracking']) . "',
            language_id = '" . (int)$data['language_id'] . "',
            currency_id = '" . (int)$data['currency_id'] . "',
            currency_code = '" . $this->db->escape($data['currency_code']) . "',
            currency_value = '" . (float)$data['currency_value'] . "',
            ip = '',
            forwarded_ip = '',
            user_agent = '',
            accept_language = '',
            order_status_id = '" . (int)$data['order_status_id'] . "',
            acilit_order_rec_id = '" . (int)$data['acilit_order_rec_id'] . "',
            type = '" . $this->db->escape(isset($data['type']) ? $data['type'] : '') . "',
            synced = '" . (isset($data['synced']) ? (int)$data['synced'] : 0) . "',
            order_source = '" . $this->db->escape(isset($data['order_source']) ? $data['order_source'] : 'opencart') . "',
            date_added = NOW(),
            date_modified = NOW()");

        $order_id = $this->db->getLastId();

        return $order_id;
    }

    public function addAcilitOrder($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "acilit_order SET 
            order_id = '" . (int)$data['order_id'] . "', 
            acilit_order_id = '" . (int)$data['acilit_order_id'] . "', 
            sales_person = '" . $this->db->escape($data['sales_person']) . "',
            sales_date = '" . $this->db->escape($data['sales_date']) . "',
            total = '" . (float)$data['total'] . "',
            error = '" . $this->db->escape($data['error']) . "',
            synced = '" . (int)$data['synced'] . "',
            job_id = '" . (int)$data['job_id'] . "',
            status = '" . $this->db->escape($data['status']) . "',
            date_added = NOW(),
            date_modified = NOW()");

        return $this->db->getLastId();
    }

    public function addOrderProduct($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_product SET order_id = '" . (int)$data['order_id'] . "', product_id = '" . (int)$data['product_id'] . "', name = '" . $this->db->escape($data['name']) . "', model = '" . $this->db->escape($data['model']) . "', quantity = '" . (int)$data['quantity'] . "', price = '" . (float)$data['price'] . "', total = '" . (float)$data['total'] . "', tax = '" . (float)$data['tax'] . "', reward = '" . (int)$data['reward'] . "'");

        return $this->db->getLastId();
    }

    public function addOrderTotal($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_total SET order_id = '" . (int)$data['order_id'] . "', code = '" . $this->db->escape($data['code']) . "', title = '" . $this->db->escape($data['title']) . "', value = '" . (float)$data['value'] . "', sort_order = '" . (int)$data['sort_order'] . "'");

        return $this->db->getLastId();
    }

    public function addOrderHistory($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$data['order_id'] . "', order_status_id = '" . (int)$data['order_status_id'] . "', notify = '" . (isset($data['notify']) ? (int)$data['notify'] : 0) . "', comment = '" . $this->db->escape(isset($data['comment']) ? $data['comment'] : '') . "', date_added = NOW()");

        return $this->db->getLastId();
    }

    public function addCouponInProduct($data = array())
    {
        // $this->db->query("INSERT INTO " . DB_PREFIX . "product SET 
        //     model = '" . $this->db->escape($data['model']) . "',
        //     quantity = " . (int)$data['quantity'] . ",
        //     voucher_id = '" . $this->db->escape($data['voucher_id']) . "',
        //     price = '0',
        //     status = " . (int)$data['status'] . ",
        //     category = '" . $this->db->escape($data['category']) . "',
        //     date_added = NOW(),
        //     date_available = '" . $this->db->escape($data['date_available']) . "',
        //     price = '" . (float)$data['price'] . "'");

        $this->db->query("INSERT INTO " . DB_PREFIX . "product SET 
            model = '" . $this->db->escape($data['model']) . "',
            quantity = " . (int)$data['quantity'] . ",
            voucher_id = '" . $this->db->escape($data['voucher_id']) . "',
            price = '0',
            status = " . (int)$data['status'] . ",
            date_added = NOW(),
            date_available = '" . $this->db->escape($data['date_available']) . "'");

        return $this->db->getLastId();
    }

    public function addMapping($productId, $voucherId)
    {
        $update = $this->db->query("UPDATE " . DB_PREFIX . "coupon SET 
            mapping = " . (int)$productId . "
            WHERE voucher_id = '" . $this->db->escape($voucherId) . "'");

        return true;
    }

    public function getVoucher($voucherId)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product 
            WHERE voucher_id = '" . $this->db->escape($voucherId) . "'");

        return $query->rows;
    }

    public function getVoucherInProduct($voucherId)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product
            WHERE voucher_id = '" . $this->db->escape($voucherId) . "'");

        return $query->row;
    }

    public function getTotalVouchersInCategory($voucherId)
    {
        $query = $this->db->query("SELECT COUNT(voucher_id) AS total FROM " . DB_PREFIX . "coupon 
            WHERE voucher_id = '" . $this->db->escape($voucherId) . "'");

        return $query->row['total'];
    }

    public function updateProductVoucherQuantity($voucherId, $quantity)
    {
        $update = $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            quantity = " . (int)$quantity . ",
            date_modified = NOW()
            WHERE voucher_id = '" . $this->db->escape($voucherId) . "'");

        return $update;
    }

    public function updateVoucherCustomerId($serialNo, $customerId)
    {
        $update = $this->db->query("UPDATE " . DB_PREFIX . "coupon SET
            customer_id = " . (int)$customerId . ",
            date_modified = NOW()
            WHERE voucher_id = '" . $this->db->escape($serialNo) . "'");
        return $update;
    }

    public function getVoucherByProductId($productId)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product
            WHERE product_id = '" . $this->db->escape($productId) . "'");

        $coupon =  $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon WHERE mapping = '" . $this->db->escape($query->row['product_id']) . "'");
        return $coupon->row;
    }

    public function addVoucherOrder($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order SET 
            store_id = '" . (int)$data['store_id'] . "', 
            store_name = '" . $this->db->escape($data['store_name']) . "', 
            store_url = '" . $this->db->escape($data['store_url']) . "', 
            customer_id = '" . (int)$data['customer_id'] . "', 
            customer_group_id = '" . (int)$data['customer_group_id'] . "', 
            firstname = '" . $this->db->escape($data['firstname']) . "', 
            lastname = '" . $this->db->escape($data['lastname']) . "', 
            email = '" . $this->db->escape($data['email']) . "', 
            telephone = '" . $this->db->escape($data['telephone']) . "', 
            total = '" . (float)$data['total'] . "', 
            type = '" . $this->db->escape($data['type']) . "', 
            order_source = '" . $this->db->escape($data['order_source']) . "', 
            synced = '" . (int)$data['synced'] . "', 
            order_status_id = '" . (int)$data['order_status_id'] . "', 
            language_id = '" . (int)$data['language_id'] . "', 
            currency_id = '" . (int)$data['currency_id'] . "', 
            currency_code = '" . $this->db->escape($data['currency_code']) . "', 
            currency_value = '" . (float)$data['currency_value'] . "', 
            date_added = NOW(), 
            date_modified = NOW()");

        return $this->db->getLastId();
    }
}
