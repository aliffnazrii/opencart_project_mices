<?php

class ModelExtensionModuleXilnex extends Model {
    public function install() {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "xilnex_outlet` (
            `xilnex_outlet_id` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(255) DEFAULT NULL,
            `location_id` varchar(255) DEFAULT NULL,
            PRIMARY KEY (`xilnex_outlet_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "xilnex_product_outlet` (
            `xilnex_product_outlet_id` int(11) NOT NULL AUTO_INCREMENT,
            `product_id` int(11) NOT NULL,
            `product_option_value_id` int(11) DEFAULT 0,
            `item_code` varchar(255) NOT NULL,
            `xilnex_location_id` varchar(255) DEFAULT NULL,
            `xilnex_item_id` int(11) NOT NULL,
            `xilnex_sales_price` decimal(15,2) NOT NULL,
            `xilnex_quantity` int(11) NOT NULL,
            `date_added` datetime NOT NULL,
            `date_modified` timestamp NOT NULL,
            PRIMARY KEY (`xilnex_product_outlet_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "xilnex_inventory_log` (
            `xilnex_inventory_log_id` int(11) NOT NULL AUTO_INCREMENT,
            `product_id` int(11) NOT NULL,
            `product_option_value_id` int(11) DEFAULT 0,
            `xilnex_item_id` int(11) NOT NULL,
            `old_quantity` int(11) NOT NULL,
            `new_quantity` int(11) NOT NULL,
            `remark` text DEFAULT '',
            `date_added` datetime NOT NULL,
            PRIMARY KEY (`xilnex_inventory_log_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "xilnex_order` (
            `order_id` int(11) NOT NULL,
            `xilnex_order_id` int(11) NOT NULL,
            `xilnex_client_id` int(11) NOT NULL,
            `xilnex_location_id` varchar(255) NOT NULL,
            `sales_person` varchar(255) NOT NULL,
            `date_added` datetime NOT NULL,
            `date_modified` datetime NOT NULL,
            PRIMARY KEY (`order_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "xilnex_customer_type` (
            `xilnex_customer_type_id` varchar(255) NOT NULL,
            `xilnex_customer_type` varchar(255) NOT NULL,
            `discount_percentage` decimal(15,4) NOT NULL,
            `status` tinyint(1) DEFAULT '1',
            `date_added` datetime NOT NULL,
            PRIMARY KEY (`xilnex_customer_type_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "customer_group_history` (
            `customer_group_history_id` int(11) NOT NULL AUTO_INCREMENT,
            `customer_id` int(11) NOT NULL,
            `old_customer_group_id` int(11) NOT NULL,
            `new_customer_group_id` int(11) NOT NULL,
            `description` text NOT NULL,
            `updated_by` int(11) NOT NULL DEFAULT 0,
            `date_added` datetime NOT NULL,
            PRIMARY KEY (`customer_group_history_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "xilnex_order' AND COLUMN_NAME = 'synced'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "xilnex_order` ADD COLUMN `synced` tinyint(1) NOT NULL DEFAULT 1 AFTER `sales_person`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "xilnex_order' AND COLUMN_NAME = 'sales_date'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "xilnex_order` ADD COLUMN `sales_date` datetime NOT NULL AFTER `sales_person`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "xilnex_order' AND COLUMN_NAME = 'total'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "xilnex_order` ADD COLUMN `total` decimal(15,4) NOT NULL AFTER `sales_date`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "xilnex_order' AND COLUMN_NAME = 'error'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "xilnex_order` ADD COLUMN `error` text DEFAULT '' AFTER `total`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "xilnex_order' AND COLUMN_NAME = 'status'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "xilnex_order` ADD COLUMN `status` varchar(255) DEFAULT '' AFTER `total`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "xilnex_order' AND COLUMN_NAME = 'xilnex_location_id'");
        if ($query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "xilnex_order` MODIFY COLUMN `xilnex_location_id` varchar(255) NOT NULL");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "xilnex_order' AND COLUMN_NAME = 'job_id'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "xilnex_order` ADD COLUMN `job_id` int(11) DEFAULT 0 AFTER `total`;");
        }

        // Order
        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order' AND COLUMN_NAME = 'type'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD COLUMN `type` varchar(32) NOT NULL AFTER `total`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order' AND COLUMN_NAME = 'synced'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD COLUMN `synced` tinyint(1) NOT NULL AFTER `type`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order' AND COLUMN_NAME = 'order_source'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD COLUMN `order_source` varchar(32) DEFAULT 'opencart' AFTER `type`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order' AND COLUMN_NAME = 'xilnex_error'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD COLUMN `xilnex_error` text NULL AFTER `order_source`;");
        }

		$query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "product' AND COLUMN_NAME = 'xilnex_item_id'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD COLUMN `xilnex_item_id` int(11) NOT NULL AFTER `model`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "product' AND COLUMN_NAME = 'xilnex_error'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD COLUMN `xilnex_error` varchar(255) NOT NULL AFTER `xilnex_item_id`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "product_option_value' AND COLUMN_NAME = 'model'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "product_option_value` ADD COLUMN `model` varchar(64) NOT NULL AFTER `option_value_id`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "product_option_value' AND COLUMN_NAME = 'xilnex_item_id'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "product_option_value` ADD COLUMN `xilnex_item_id` int(11) DEFAULT 0 AFTER `model`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "customer' AND COLUMN_NAME = 'xilnex_client_id'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD COLUMN `xilnex_client_id` int(11) DEFAULT 0 AFTER `customer_group_id`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "customer' AND COLUMN_NAME = 'xilnex_client_id_response'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD COLUMN `xilnex_client_id_response` varchar(255) NOT NULL AFTER `xilnex_client_id`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "customer' AND COLUMN_NAME = 'birthday'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD COLUMN `birthday` date NULL AFTER `telephone`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "customer' AND COLUMN_NAME = 'next_tier_renewal'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD COLUMN `next_tier_renewal` date NULL AFTER `birthday`;");
        }

        $query = $this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "customer' AND COLUMN_NAME = 'last_tier_renewal'");
        if (!$query->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD COLUMN `last_tier_renewal` date NULL AFTER `next_tier_renewal`;");
        }
    }

    public function getTotalOrders($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "xilnex_order` xo JOIN " . DB_PREFIX . "order o ON xo.order_id = o.order_id";

		if (!empty($data['filter_order_id'])) {
            $sql .= " AND xo.order_id = '" . (int)$data['filter_order_id'] . "'";
        }

        if (!empty($data['filter_xilnex_order_id'])) {
            $sql .= " AND xo.xilnex_order_id = '" . (int)$data['filter_xilnex_order_id'] . "'";
        }

        if (!empty($data['filter_customer'])) {
            $sql .= " AND CONCAT(o.firstname, ' ', o.lastname) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND DATE(xo.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if (!empty($data['filter_sales_date'])) {
            $sql .= " AND DATE(xo.sales_date) = DATE('" . $this->db->escape($data['filter_sales_date']) . "')";
        }

        if (isset($data['filter_has_error']) && ($data['filter_has_error']) != '') {
            if ($data['filter_has_error'] == 1) {
                $sql .= " AND xo.error IS NOT NULL AND xo.error != ''";
            } elseif ($data['filter_has_error'] == 0) {
                $sql .= " AND (xo.error IS NULL OR xo.error = '')";
            }
        }
        
		$query = $this->db->query($sql);

		return $query->row['total'];
	}

    public function getOrders($data = array()) {
		$sql = "SELECT xo.*, xot.name as outlet, CONCAT(o.firstname, ' ', o.lastname) AS customer, o.shipping_code, o.currency_code, o.currency_value, o.date_added, o.date_modified
            FROM `" . DB_PREFIX . "xilnex_order` xo 
            LEFT JOIN " . DB_PREFIX . "xilnex_outlet xot ON xo.xilnex_location_id = xot.location_id
            LEFT JOIN " . DB_PREFIX . "order o ON xo.order_id = o.order_id
            WHERE 1=1";

        if (!empty($data['filter_order_id'])) {
            $sql .= " AND xo.order_id = '" . (int)$data['filter_order_id'] . "'";
        }

        if (!empty($data['filter_xilnex_order_id'])) {
            $sql .= " AND xo.xilnex_order_id = '" . (int)$data['filter_xilnex_order_id'] . "'";
        }

        if (!empty($data['filter_customer'])) {
            $sql .= " AND CONCAT(o.firstname, ' ', o.lastname) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND DATE(xo.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if (!empty($data['filter_sales_date'])) {
            $sql .= " AND DATE(xo.sales_date) = DATE('" . $this->db->escape($data['filter_sales_date']) . "')";
        }

        if (isset($data['filter_has_error']) && ($data['filter_has_error']) != '') {
            if ($data['filter_has_error'] == 1) {
                $sql .= " AND xo.error IS NOT NULL AND xo.error != ''";
            } elseif ($data['filter_has_error'] == 0) {
                $sql .= " AND (xo.error IS NULL OR xo.error = '')";
            }
        }

		$sort_data = array(
			'xo.order_id',
			'xo.xilnex_order_id',
			'xo.date_added',
			'xo.sales_date',
			'xo.total'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY o.order_id";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

    public function getInventoryLogs($data = array()) {
		$sql = "SELECT xil.*, pd.name as product, p.model as product_model, pov.model as option_model, ovd.name as option_name FROM `" . DB_PREFIX . "xilnex_inventory_log` xil 
            LEFT JOIN `" . DB_PREFIX . "product` p ON xil.product_id = p.product_id 
            LEFT JOIN `" . DB_PREFIX . "product_description` pd ON xil.product_id = pd.product_id
            LEFT JOIN `" . DB_PREFIX . "product_option_value` pov ON xil.product_option_value_id = pov.product_option_value_id
            LEFT JOIN `" . DB_PREFIX . "option_value_description` ovd ON pov.option_value_id = ovd.option_value_id
            WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        if (!empty($data['filter_model'])) {
            $sql .= " AND (p.model = '" . $this->db->escape($data['filter_model']) . "' OR pov.model = '" . $this->db->escape($data['filter_model']) . "')";
        }

        if (!empty($data['filter_start_date'])) {
			$sql .= " AND DATE(xil.date_added) >= DATE('" . $this->db->escape($data['filter_start_date']) . "')";
		}

        if (!empty($data['filter_end_date'])) {
            $sql .= " AND DATE(xil.date_added) <= DATE('" . $this->db->escape($data['filter_end_date']) . "')";
		}
        
        $sort_data = array(
			'date_added',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY date_added";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$sql .= " ASC";
		} else {
			$sql .= " DESC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		
        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalInventoryLogs($data = array()) {
        $sql = "SELECT count(*) as total FROM `" . DB_PREFIX . "xilnex_inventory_log` xil 
            LEFT JOIN `" . DB_PREFIX . "product` p ON xil.product_id = p.product_id 
            LEFT JOIN `" . DB_PREFIX . "product_option_value` pov ON xil.product_option_value_id = pov.product_option_value_id
            WHERE 1=1";

        if (!empty($data['filter_model'])) {
            $sql .= " AND (p.model = '" . $this->db->escape($data['filter_model']) . "' OR pov.model = '" . $this->db->escape($data['filter_model']) . "')";
        }

        if (!empty($data['filter_start_date'])) {
            $sql .= " AND DATE(xil.date_added) >= DATE('" . $this->db->escape($data['filter_start_date']) . "')";
        }

        if (!empty($data['filter_end_date'])) {
            $sql .= " AND DATE(xil.date_added) <= DATE('" . $this->db->escape($data['filter_end_date']) . "')";
        }
        
        $query = $this->db->query($sql);
		
        return $query->row['total'];
    }

    public function getProductOutlets($data = array()) {
        $sql = "SELECT xpo.*, pd.name as product, xo.name as outlet, ovd.name as option_name FROM `" . DB_PREFIX . "xilnex_product_outlet` xpo 
            LEFT JOIN `" . DB_PREFIX . "product_description` pd ON xpo.product_id = pd.product_id 
            LEFT JOIN `" . DB_PREFIX . "xilnex_outlet` xo ON xpo.xilnex_location_id = xo.location_id 
            LEFT JOIN `" . DB_PREFIX . "product_option_value` pov ON xpo.product_option_value_id = pov.product_option_value_id
            LEFT JOIN `" . DB_PREFIX . "option_value_description` ovd ON pov.option_value_id = ovd.option_value_id
            WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        $sort_data = array(
			'date_added',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY product";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$sql .= " ASC";
		} else {
			$sql .= " DESC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		
        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalProductOutlets($data = array()) {
		$sql = "SELECT COUNT(*) as total FROM `" . DB_PREFIX . "xilnex_product_outlet` xpo 
            LEFT JOIN `" . DB_PREFIX . "product_description` pd ON xpo.product_id = pd.product_id
            WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";
        
        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function getAllOutlets() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX. "xilnex_outlet");
        
        return $query->rows;
    }

    public function getCustomerGroupHistory($data = array()) {
        $sql = "SELECT cgh.*, c.telephone,
            CONCAT(c.firstname, ' ', c.lastname) as customer, 
            CONCAT(u.firstname, ' ', u.lastname) as updated_by_name,
            (SELECT name FROM `" . DB_PREFIX . "customer_group_description` cgdold WHERE cgdold.customer_group_id = cgh.old_customer_group_id AND cgdold.language_id = '" . (int)$this->config->get('config_language_id') . "') as old_customer_group,
            (SELECT name FROM `" . DB_PREFIX . "customer_group_description` cgdnew WHERE cgdnew.customer_group_id = cgh.new_customer_group_id AND cgdnew.language_id = '" . (int)$this->config->get('config_language_id') . "') as new_customer_group
        FROM `" . DB_PREFIX . "customer_group_history` cgh
        LEFT JOIN `" . DB_PREFIX . "customer` c ON cgh.customer_id = c.customer_id
        LEFT JOIN `" . DB_PREFIX . "user` u ON cgh.updated_by = u.user_id
        WHERE 1=1";

        if (!empty($data['filter_customer_id'])) {
            $sql .= " AND cgh.customer_id = '" . (int)$data['filter_customer_id'] . "'";
        }

        if (!empty($data['filter_customer'])) {
            $sql .= " AND CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
        }

        if (!empty($data['filter_telephone'])) {
            $sql .= " AND c.telephone LIKE '%" . $this->db->escape($data['filter_telephone']) . "%'";
        }

        if (!empty($data['filter_updated_by'])) {
            $sql .= " AND CONCAT(u.firstname, ' ', u.lastname) = '%" . $this->db->escape($data['filter_updated_by']) . "%'";
        }

        if (!empty($data['filter_start_date'])) {
			$sql .= " AND DATE(cgh.date_added) >= DATE('" . $this->db->escape($data['filter_start_date']) . "')";
		}

        if (!empty($data['filter_end_date'])) {
            $sql .= " AND DATE(cgh.date_added) <= DATE('" . $this->db->escape($data['filter_end_date']) . "')";
		}

        $sort_data = array(
			'date_added',
		);

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY date_added";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$sql .= " ASC";
		} else {
			$sql .= " DESC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		
        $query = $this->db->query($sql);

		return $query->rows;
    }

    public function getTotalCustomerGroupHistory($data = array()) {
        $sql = "SELECT COUNT(*) as total
        FROM `" . DB_PREFIX . "customer_group_history` cgh
        LEFT JOIN `" . DB_PREFIX . "customer` c ON cgh.customer_id = c.customer_id
        LEFT JOIN `" . DB_PREFIX . "user` u ON cgh.updated_by = u.user_id
        WHERE 1=1";

        if (!empty($data['filter_customer_id'])) {
            $sql .= " AND cgh.customer_id = '" . (int)$data['filter_customer_id'] . "'";
        }

        if (!empty($data['filter_customer'])) {
            $sql .= " AND CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
        }

        if (!empty($data['filter_telephone'])) {
            $sql .= " AND c.telephone LIKE '%" . $this->db->escape($data['filter_telephone']) . "%'";
        }

        if (!empty($data['filter_updated_by'])) {
            $sql .= " AND CONCAT(u.firstname, ' ', u.lastname) = '%" . $this->db->escape($data['filter_updated_by']) . "%'";
        }

        if (!empty($data['filter_start_date'])) {
			$sql .= " AND DATE(cgh.date_added) >= DATE('" . $this->db->escape($data['filter_start_date']) . "')";
		}

        if (!empty($data['filter_end_date'])) {
            $sql .= " AND DATE(cgh.date_added) <= DATE('" . $this->db->escape($data['filter_end_date']) . "')";
		}

		$query = $this->db->query($sql);

        return $query->row['total'];
    }
}