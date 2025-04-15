<?php 

namespace Xilnex;

use xilnex\Library;

class XilnexModel extends Library {
    // Outlet
    public function getOutlet($location_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "xilnex_outlet WHERE location_id = '" . $this->db->escape($location_id) . "'");
        return $query->row;
    }

    public function getOutletByNames($name) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "xilnex_outlet WHERE name = '" . $this->db->escape($name) . "'");
        
        return $query->row;
    }

    public function addOutlet($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "xilnex_outlet SET name = '" . $this->db->escape($data['locationName']) . "', location_id = '" . $this->db->escape($data['locationId']) . "'");
    }

    public function deleteProductOutlet($product_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "xilnex_product_outlet WHERE product_id = '" . $product_id . "'");
    }

    // Product
    public function getProductByModel($model) {
        $query = $this->db->query("SELECT p.*, pd.name FROM " . DB_PREFIX ."product p LEFT JOIN " . DB_PREFIX ."product_description pd ON p.product_id = pd.product_id WHERE model = '" . $this->db->escape($model) . "' AND pd.language_id = '" . $this->config->get('config_language_id') . "'");

        return $query->row;
    }

    public function getProductOptionByModel($model) {
        $query = $this->db->query("SELECT pov.*, pd.name, od.name as option_name, ovd.name as option_value_name FROM " . DB_PREFIX ."product_option_value pov 
        LEFT JOIN " . DB_PREFIX ."product_description pd ON pov.product_id = pd.product_id 
        LEFT JOIN " . DB_PREFIX ."option_description od ON pov.option_id = od.option_id 
        LEFT JOIN " . DB_PREFIX ."option_value_description ovd ON pov.option_value_id = ovd.option_value_id 
        WHERE pov.model = '" . $this->db->escape($model) . "' 
        AND pd.language_id = '" . $this->config->get('config_language_id') . "'");

        return $query->row;
    }

    public function getProductOptionsByProduct($product_id) {
        $query = $this->db->query("SELECT pov.*, pd.name, od.name as option_name, ovd.name as option_value_name FROM " . DB_PREFIX ."product_option_value pov 
        LEFT JOIN " . DB_PREFIX ."product_description pd ON pov.product_id = pd.product_id 
        LEFT JOIN " . DB_PREFIX ."option_description od ON pov.option_id = od.option_id 
        LEFT JOIN " . DB_PREFIX ."option_value_description ovd ON pov.option_value_id = ovd.option_value_id 
        WHERE pov.product_id = '" . $this->db->escape($product_id) . "' 
        AND pd.language_id = '" . $this->config->get('config_language_id') . "'
        AND ovd.language_id = '" . $this->config->get('config_language_id') . "'");

        return $query->rows;
    }

    public function getAllItems() {
        $query = $this->db->query("SELECT p.product_id, p.xilnex_item_id, p.model FROM " . DB_PREFIX ."product p 
            WHERE p.xilnex_item_id != '0' 
            AND NOT EXISTS (SELECT * FROM " . DB_PREFIX ."product_option_value pov WHERE pov.product_id = p.product_id)");

        return $query->rows;
    }

    public function getAllItemOptions() {
        $query = $this->db->query("SELECT product_id, product_option_value_id, xilnex_item_id, model FROM " . DB_PREFIX ."product_option_value WHERE xilnex_item_id != '0'");

        return $query->rows;
    }

    public function getXilnexItem($xilnex_item_id) {
        $query = $this->db->query("SELECT p.product_id, p.xilnex_item_id, p.model FROM " . DB_PREFIX ."product p 
        WHERE p.xilnex_item_id = '" . $xilnex_item_id . "' 
        AND NOT EXISTS (SELECT * FROM " . DB_PREFIX ."product_option_value pov WHERE pov.product_id = p.product_id)");

        return $query->row;
    }

    public function getXilnexItemOption($xilnex_item_id) {
        $query = $this->db->query("SELECT product_id, product_option_value_id, xilnex_item_id, model FROM " . DB_PREFIX ."product_option_value WHERE xilnex_item_id = '" . $xilnex_item_id . "'");

        return $query->row;
    }

    public function getXilnexItemOptionByProductId($product_id) {
        $query = $this->db->query("SELECT product_id, product_option_value_id, xilnex_item_id, model FROM " . DB_PREFIX ."product_option_value WHERE product_id = '" . $product_id . "' AND xilnex_item_id != '0'");

        return $query->rows;
    }

    public function setItemError($product_id, $error_message) {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET xilnex_error = '" . $error_message . "' WHERE product_id = '" . $product_id . "'");
    }

    public function getXilnexPrice($item_code) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "xilnex_product_outlet WHERE item_code = '" . $this->db->escape($item_code) . "' AND xilnex_sales_price != '0.00' LIMIT 1");

        if ($query->row) {
            return $query->row['xilnex_sales_price'];
        }

        return false;
    }

    public function syncOutletProduct($product_id, $data) {
        $outlet = $this->getOutletByNames($data['outlet']);
        $query_exist = $this->db->query("SELECT * FROM " . DB_PREFIX . "xilnex_product_outlet WHERE product_id = '" . (int)$product_id . "' AND xilnex_location_id = '" . $outlet['location_id'] . "' AND product_option_value_id = '" . (int)$data['product_option_value_id'] . "'");

        if ($query_exist->row) {
            $this->db->query("UPDATE " . DB_PREFIX . "xilnex_product_outlet SET 
                xilnex_sales_price = '" . (float)$data['salesPrice'] . "', 
                xilnex_quantity = '" . (int)$data['onhandQuantity'] . "'
                WHERE item_code = '" . $this->db->escape($data['itemCode']) . "' AND xilnex_location_id = '" . $outlet['location_id'] . "'"
            );
        } else {
            $this->db->query("INSERT INTO " . DB_PREFIX . "xilnex_product_outlet SET 
                product_id = '" . (int)$product_id . "', 
                product_option_value_id = '" . (int)$data['product_option_value_id'] . "', 
                item_code = '" . $this->db->escape($data['itemCode']) . "', 
                xilnex_location_id = '" . $this->db->escape($outlet['location_id']) . "', 
                xilnex_sales_price = '" . $data['salesPrice'] . "', 
                xilnex_item_id = '" . (int)$data['itemId'] . "', 
                xilnex_quantity = '" . (int)$data['onhandQuantity'] . "', 
                date_added = NOW()"
            );
        }
    }

    public function updateProductOutletInventory($item_code, $data) {
        $outlet = $this->getOutletByNames($data['outlet']);
        $this->db->query("UPDATE " . DB_PREFIX . "xilnex_product_outlet SET xilnex_quantity = '" . (int)$data['onhandQuantity'] . "', date_modified = NOW() WHERE item_code = '" . $this->db->escape($item_code) . "' AND xilnex_location_id = '" . $outlet['location_id'] . "'");
    }

    public function updateProductOutletPrice($item_code, $price) {
        $this->db->query("UPDATE " . DB_PREFIX . "xilnex_product_outlet SET xilnex_sales_price = '" . (float)$price . "', date_modified = NOW() WHERE item_code = '" . $this->db->escape($item_code) . "'");
    }

    public function addInventoryLog($product_id, $data) {
        $product_option_value_id = 0;

        if (isset($data['product_option_value_id'])) {
            $product_option_value_id = $data['product_option_value_id'];
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value WHERE product_option_value_id = '" . (int)$product_option_value_id . "'");
        } else {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "'");
        }


        if ($query->row) {
            $old_quantity = $query->row['quantity'];
            if ($old_quantity != $data['new_quantity']) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "xilnex_inventory_log SET 
                    product_id = '" . (int)$product_id . "', 
                    product_option_value_id = '" . (int)$product_option_value_id . "', 
                    xilnex_item_id = '" . $this->db->escape($data['xilnex_item_id']) . "', 
                    old_quantity = '" . (int)$old_quantity . "', 
                    new_quantity = '" . (int)$data['new_quantity'] . "', 
                    remark = '" . $this->db->escape($data['remark']) . "', 
                    date_added = NOW()"
                );
            }
        }
    }

    public function updateProduct($product_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            xilnex_item_id = '" . (int)$data['xilnex_item_id'] . "', 
            price = '" . (float)$data['price'] . "', 
            quantity = '" . (int)$data['quantity'] . "', 
            weight = '" . (float)$data['weight'] . "', 
            length = '" . (float)$data['length'] . "', 
            height = '" . (float)$data['height'] . "', 
            width = '" . (float)$data['width'] . "', 
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_id . "'");
    }

    public function updateProductOption($product_option_value_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET 
            xilnex_item_id = '" . (int)$data['xilnex_item_id'] . "',
            price = '" . (float)$data['price'] . "', 
            price_prefix = '=',
            quantity = '" . (int)$data['quantity'] . "', 
            weight = '" . (float)$data['weight'] . "', 
            weight_prefix = '='
            WHERE product_option_value_id = '" . (int)$product_option_value_id . "'");
    }

    public function updateOcProductPrice($product_id, $price) {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            price = '" . (float)$price . "', 
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_id . "'");
    }

    public function updateOcProductOptionPrice($product_option_value_id, $price) {
        $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET 
            price = '" . (float)$price . "', 
            price_prefix = '=' 
            WHERE product_option_value_id = '" . (int)$product_option_value_id . "'");
    }

    public function updateOcProductQuantity($product_id, $quantity) {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            quantity = '" . (int)$quantity . "', 
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_id . "'");
    }

    public function updateOcProductOptionQuantity($product_option_value_id, $quantity) {
        $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET 
            quantity = '" . (int)$quantity . "' 
            WHERE product_option_value_id = '" . (int)$product_option_value_id . "'");
    }

    public function updateOcProductMeasurement($product_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            weight = '" . (float)$data['weight'] . "', 
            length = '" . (float)$data['length'] . "', 
            height = '" . (float)$data['height'] . "', 
            width = '" . (float)$data['width'] . "', 
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_id . "'");
    }

    public function updateOcProductOptionMeasurement($product_option_value_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET 
            weight = '" . (float)$data['weight'] . "', 
            weight_prefix = '=', 
            date_modified = NOW() 
            WHERE product_id = '" . (int)$product_option_value_id . "'");
    }

    public function getAllProductNotYetSync() {
        $query = $this->db->query("SELECT product_id, model, xilnex_item_id FROM " . DB_PREFIX . "product p 
            WHERE p.xilnex_item_id = '0' 
            AND p.model != ''
            AND NOT EXISTS (SELECT product_option_value_id FROM " . DB_PREFIX . "product_option_value pov WHERE pov.product_id = p.product_id LIMIT 1)");
        return $query->rows;
    }

    public function getAllProductOptionNotYetSync() {
        $query = $this->db->query("SELECT product_id, product_option_value_id, model, xilnex_item_id FROM " . DB_PREFIX . "product_option_value WHERE xilnex_item_id = '0' AND model != ''");
        return $query->rows;
    }

    public function getProductOutlet($item_code, $outlet_name) {
        $outlet = $this->getOutletByNames($outlet_name);
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "xilnex_product_outlet WHERE item_code = '" . $this->db->escape($item_code) . "' AND xilnex_location_id = '" . (int)$outlet['location_id'] . "'");
        return $query->row;
    }

    public function getXilnexProductQuantityAllOutlet($item_code) {
        $query = $this->db->query("SELECT po.xilnex_quantity, po.xilnex_sales_price, o.name as outlet_name FROM " . DB_PREFIX . "xilnex_product_outlet po JOIN " . DB_PREFIX . "xilnex_outlet o ON po.xilnex_location_id = o.location_id WHERE item_code = '" . $this->db->escape($item_code) . "'");
        return $query->rows;
    }


    // Customer
    public function getMembers() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE xilnex_client_id != '0'");
        return $query->rows;
    }

    public function getNonMember() {
        $query = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customer WHERE xilnex_client_id = '0' AND xilnex_client_id_response = ''");
        return $query->rows;
    }

    public function getCustomer($customer_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");
        return $query->row;
    }

    public function getCustomersByGroup($customer_group_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_group_id = '" . (int)$customer_group_id . "'");
        return $query->rows;
    }

    public function getCustomerByClientId($xilnex_client_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE xilnex_client_id = '" . (int)$xilnex_client_id . "'");
        return $query->row;
    }

    public function getCustomerByPhone($phone) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE telephone = '" . $this->db->escape($phone) . "'");
        return $query->row;
    }

    public function addCustomer($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer SET 
            customer_group_id = '" . (int)$data['customer_group_id'] . "', 
            firstname = '" . $this->db->escape($data['firstname']) . "', 
            lastname = '" . $this->db->escape($data['lastname']) . "', 
            email = '" . $this->db->escape($data['email']) . "', 
            birthday = '" . $this->db->escape($data['birthday']) . "', 
            xilnex_client_id = '" . (int)$data['xilnex_client_id'] . "', 
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

    public function getCustomerTierRenewals() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer 
            WHERE next_tier_renewal IS NOT NULL 
            AND DATE(next_tier_renewal) < DATE(NOW())");
        return $query->rows;
    }

    public function updateCustomerTierRenewal($customer_id, $next_renewal = 0, $update_last_renewal = 1) {
        if ($next_renewal) {
            $this->db->query("UPDATE " . DB_PREFIX . "customer SET next_tier_renewal = '" . $next_renewal . "' WHERE customer_id = '" . (int)$customer_id . "'");
        } else {
            $this->db->query("UPDATE " . DB_PREFIX . "customer SET next_tier_renewal = NULL WHERE customer_id = '" . (int)$customer_id . "'");
        }

        if ($update_last_renewal) {
            $this->db->query("UPDATE " . DB_PREFIX . "customer SET last_tier_renewal = NOW() WHERE customer_id = '" . (int)$customer_id . "'");
        }
    }

    public function updateCustomerGroup($customer_id, $customer_group_id) {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = '" . (int)$customer_group_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
    }

    public function getPastMonthsTotalPurchase($customer_id, $customer_group_id, $date_from) {
        $query = $this->db->query("SELECT SUM(total) as total FROM " . DB_PREFIX . "order WHERE customer_id = '" . $customer_id . "' AND customer_group_id = '" . (int)$customer_group_id . "' AND date_added > '" . $this->db->escape($date_from) . "' AND order_status_id = '" . (int)$this->config->get('module_xilnex_order_complete_status') . "'");
        return $query->row['total'];
    }

    public function updateClientId($customer_id, $client_id) {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET xilnex_client_id = '" . (int)$client_id . "', xilnex_client_id_response = '' WHERE customer_id = '" . (int)$customer_id . "'");
    }

    public function updateClientError($customer_id, $error) {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET xilnex_client_id_response = '" . $this->db->escape($error) . "' WHERE customer_id = '" . (int)$customer_id . "'");
    }

    public function syncCustomerType($data) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "xilnex_customer_type` WHERE xilnex_customer_type_id = '" . $this->db->escape($data['xilnex_customer_type_id']) . "'");

        if ($query->row) {
            $this->db->query("UPDATE `" . DB_PREFIX . "xilnex_customer_type` SET
                xilnex_customer_type = '" . $this->db->escape($data['xilnex_customer_type']) . "',
                discount_percentage = '" . (float)$data['discount_percentage'] . "',
                status = '" . (int)$data['status'] . "'
                WHERE xilnex_customer_type_id = '" . $this->db->escape($data['xilnex_customer_type_id']) . "'
            ");
        } else {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "xilnex_customer_type` SET 
                xilnex_customer_type_id = '" . $this->db->escape($data['xilnex_customer_type_id']) . "',
                xilnex_customer_type = '" . $this->db->escape($data['xilnex_customer_type']) . "',
                discount_percentage = '" . (float)$data['discount_percentage'] . "',
                status = '" . (int)$data['status'] . "',
                date_added = NOW()
            ");
        }
    }

    public function getCustomerTypes() {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "xilnex_customer_type`");
        return $query->rows;
    }

    public function getCustomerTypeFromXilnexId($xilnex_customer_type_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "xilnex_customer_type` WHERE xilnex_customer_type_id = '" . (int)$xilnex_customer_type_id . "'");
        return $query->row;
    }

    // Order
    public function getXilnexOrderByXilnexOrderId($xilnex_order_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "xilnex_order WHERE xilnex_order_id = '" . (int)$xilnex_order_id . "' LIMIT 1");
        return $query->row;
    }

    public function getXilnexOrderByOrderId($order_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "xilnex_order WHERE order_id = '" . (int)$order_id . "' LIMIT 1");
        return $query->row;
    }

    public function getPendingUnsyncOrder($date_from = '') {
        $sql = "SELECT * FROM " . DB_PREFIX . "order o 
            WHERE NOT EXISTS (SELECT xo.xilnex_order_id FROM " . DB_PREFIX . "xilnex_order xo WHERE xo.order_id = o.order_id) 
            AND o.synced = '0' 
            AND o.xilnex_error IS NULL";

        if ($this->config->get('module_xilnex_order_sync_status')) {
            $sql .= " AND o.order_status_id IN (" . implode(',', $this->config->get('module_xilnex_order_sync_status')) . ")";
        }

        if ($date_from) {
            $date_from = $this->config->get('module_xilnex_pull_order_date');
        }

        $sql .= " AND o.date_added > '" . $this->db->escape($date_from) . "'";

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function saveXilnexOrder($data) {
        $exist_order = array();
        if ($data['xilnex_order_id']) {
            $exist_order = $this->getXilnexOrderByXilnexOrderId($data['xilnex_order_id']);
        }

        if (!$exist_order) {
            $exist_order = $this->getXilnexOrderByOrderId($data['order_id']);
        }

        if (!$exist_order) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "xilnex_order SET 
                order_id = '" . (int)$data['order_id'] . "', 
                xilnex_order_id = '" . (int)$data['xilnex_order_id'] . "', 
                xilnex_client_id = '" . (int)$data['xilnex_client_id'] . "', 
                xilnex_location_id = '" . $this->db->escape($data['xilnex_location_id']) . "', 
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
            $this->db->query("UPDATE " . DB_PREFIX . "xilnex_order SET 
                xilnex_order_id = '" . (int)$data['xilnex_order_id'] . "', 
                xilnex_client_id = '" . (int)$data['xilnex_client_id'] . "', 
                xilnex_location_id = '" . $this->db->escape($data['xilnex_location_id']) . "', 
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

    public function addOcOrder($data) {
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

    public function getOrderProducts($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");
		
		return $query->rows;
	}

    public function getOrderOptions($order_id, $order_product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$order_product_id . "'");
		
		return $query->rows;
	}

    public function getProductOptionValue($product_option_value_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value WHERE product_option_value_id = '" . (int)$product_option_value_id . "'");

		return $query->row;
    }

    public function getOrderTotals($order_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_total` WHERE order_id = '" . (int)$order_id . "' ORDER BY sort_order ASC");
		
		return $query->rows;
    }

    public function addOrderProduct($order_product) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_product SET 
            order_id = '" . (int)$order_product['order_id'] . "', 
            product_id = '" . (int)$order_product['product_id'] . "', 
            name = '" . $this->db->escape($order_product['name']) . "', 
            model = '" . $this->db->escape($order_product['model']) . "', 
            quantity = '" . (int)$order_product['quantity'] . "', 
            price = '" . (float)$order_product['price'] . "', 
            total = '" . (float)$order_product['total'] . "', 
            tax = '" . (float)$order_product['tax'] . "', 
            reward = '" . (int)$order_product['reward'] . "'
        ");

        return $this->db->getLastId();
    }

    public function addOrderProductOption($option) {
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

    public function addOcOrderHistory($order_id, $order_status_id, $comment = '') {
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

				foreach($order_products as $order_product) {
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

    public function setOrderError($order_id, $error = '') {
        if ($error) {
            $this->db->query("UPDATE " . DB_PREFIX . "order SET xilnex_error = '" . $this->db->escape($error) . "' WHERE order_id = '" . (int)$order_id . "'");
            $this->db->query("UPDATE " . DB_PREFIX . "xilnex_order SET error = '" . $this->db->escape($error) . "' WHERE order_id = '" . (int)$order_id . "'");
        } else {
            $this->db->query("UPDATE " . DB_PREFIX . "order SET xilnex_error = NULL WHERE order_id = '" . (int)$order_id . "'");
            $this->db->query("UPDATE " . DB_PREFIX . "xilnex_order SET error = NULL WHERE order_id = '" . (int)$order_id . "'");
        }
    }
    
    public function updateXilnexOrderSyncStatus($order_id, $sync, $job_id = 0) {
        $this->db->query("UPDATE " . DB_PREFIX . "xilnex_order SET synced = '" . (int)$sync . "', job_id = '" . (int)$job_id . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");
    }

    public function updateXilnexOrderStatus($order_id, $status) {
        $this->db->query("UPDATE " . DB_PREFIX . "xilnex_order SET status = '" . $this->db->escape($status) . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");
    }
    
    public function getOrderTotal($order_id, $code) {
        $query = $this->db->query("SELECT value FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int)$order_id . "' AND code = '" . $this->db->escape($code) . "' LIMIT 1");
        if (empty($query->row['value'])) {
            return 0;
        }
        return abs($query->row['value']);
    }

    public function getCouponFromOrder($order_id) {
        $query = $this->db->query("SELECT ch.*, c.code FROM " . DB_PREFIX . "coupon_history ch LEFT JOIN " . DB_PREFIX . "coupon c ON ch.coupon_id = c.coupon_id WHERE ch.order_id = '" . (int)$order_id . "' LIMIT 1");
        return $query->row;
    }

    public function getOrder($order_id) {
        $query = $this->db->query("SELECT o.*, c.xilnex_client_id FROM " . DB_PREFIX . "order o JOIN " . DB_PREFIX . "customer c ON o.customer_id = c.customer_id WHERE o.order_id = '" . (int)$order_id . "'");
        return $query->row;
    }

    public function getOrderXilnexItems($order_id) {
        $sql = "SELECT op.order_id, op.order_product_id, op.product_id, op.price as price_paid, op.quantity, op.total, p.xilnex_item_id, pov.xilnex_item_id as option_xilnex_item_id, p.model, pov.model as option_model, pov.product_option_value_id, p.price as product_price, pov.price as option_price
            FROM " . DB_PREFIX . "order_product op 
            LEFT JOIN " . DB_PREFIX . "order_option oo ON (op.order_product_id = oo.order_product_id) 
            LEFT JOIN " . DB_PREFIX . "product p ON (op.product_id = p.product_id) 
            LEFT JOIN " . DB_PREFIX . "product_option_value pov ON (oo.product_option_value_id = pov.product_option_value_id) 
            WHERE op.order_id = '" . (int)$order_id . "'
        ";

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function updateOrderSyncStatus($order_id, $sync) {
        $this->db->query("UPDATE " . DB_PREFIX . "order SET synced = '" . (int)$sync . "', date_modified = NOW() WHERE order_id = '" . (int)$order_id . "'");
    }

    public function setCouponClaimedOrderId($coupon_history_id, $order_id) {
        $this->db->query("UPDATE " . DB_PREFIX . "coupon_history SET order_id = '" . (int)$order_id . "' WHERE coupon_history_id = '" . $this->db->escape($coupon_history_id) . "'");
    }

    public function getUser($user_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user WHERE user_id = '" . (int)$user_id . "'");
        return $query->row;
    }

    public function addCustomerGroupHistory($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "customer_group_history SET 
            customer_id = '" . (int)$data['customer_id'] . "', 
            old_customer_group_id = '" . (int)$data['old_customer_group_id'] . "', 
            new_customer_group_id = '" . (int)$data['new_customer_group_id'] . "', 
            description = '" . $this->db->escape($data['description']) . "', 
            updated_by = '" . (int)$data['updated_by'] . "', 
            date_added = NOW()");
    }
}