<?php

class ModelExtensionTotalPoint extends Model {
	public function getPointHistories($order_id, $start = 0, $limit = 10) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_point WHERE order_id = '" . (int)$order_id . "' ORDER BY date_added DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalPointHistories($order_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_point WHERE order_id = '" . (int)$order_id . "'");

		return $query->row['total'];
	}

	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "customer_point` (
			`customer_point_id` int NOT NULL AUTO_INCREMENT,
			`customer_id` int NOT NULL DEFAULT '0',
			`type` varchar(20) DEFAULT NULL,
			`order_id` int NOT NULL DEFAULT '0',
			`description` text NOT NULL,
			`points` DECIMAL(15,4) NOT NULL DEFAULT '0',
			`date_added` datetime NOT NULL,
			PRIMARY KEY (`customer_point_id`),
			INDEX index_type (`type`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8");

		// $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "customer_point_adjustment (
        //     customer_point_adjustment_id int NOT NULL AUTO_INCREMENT,
        //     customer_id int NOT NULL DEFAULT '0',
        //     created_by int NOT NULL DEFAULT '0',
        //     modified_by int NULL DEFAULT '0',
        //     points DECIMAL(15,4) NOT NULL DEFAULT '0',
        //     description text NOT NULL,
        //     remark text NOT NULL,
        //     status varchar(20) DEFAULT 'pending',
        //     date_added datetime NOT NULL,
        //     date_modified datetime NULL,
        //     PRIMARY KEY (customer_point_adjustment_id)
        // ) ENGINE=MyISAM DEFAULT CHARSET=utf8");

		// if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer_point_adjustment LIKE 'customer_point_id'")->row) {
		// 	$this->db->query("ALTER TABLE `" . DB_PREFIX . "customer_point_adjustment` ADD `customer_point_id` int DEFAULT NULL AFTER `customer_point_adjustment_id`");
		// }

		// if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "order_product LIKE 'point_award'")->row) {
		// 	$this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `point_award` DECIMAL(15,4) NOT NULL DEFAULT '0' AFTER `reward`");
		// }

		// if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "order LIKE 'award_point_status'")->row) {
		// 	$this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD `award_point_status` tinyint(1) NOT NULL DEFAULT 0 AFTER `total`");
		// }

		if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer LIKE 'points'")->row) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD `points` DECIMAL(15,4) DEFAULT 0 AFTER `telephone`");
		}

		if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer_point LIKE 'point_expiry'")->row) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "customer_point` ADD `point_expiry` DATE DEFAULT NULL AFTER `points`");
		}
		if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer_point LIKE 'rec_id'")->row) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "customer_point` ADD `rec_id` VARCHAR(255) DEFAULT NULL AFTER `points`");
		}
	}

	public function getPointTransactions($data = array()) {
		$sql = "SELECT cp.*, CONCAT(c.firstname, ' ', c.lastname) AS name FROM " . DB_PREFIX . "customer_point cp LEFT JOIN " . DB_PREFIX . "customer c ON (cp.customer_id = c.customer_id)";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (isset($data['filter_type']) && $data['filter_type'] !== '') {
			$implode[] = "cp.type = '" . $this->db->escape($data['filter_type']) . "'";
		}

		if (!empty($data['filter_order_id'])) {
			$implode[] = "cp.order_id = '" . (int)$data['filter_order_id'] . "'";
		}

		if (!empty($data['filter_customer_id'])) {
			$implode[] = "cp.customer_id = '" . (int)$data['filter_customer_id'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(cp.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}
		
		if (!empty($data['filter_point_expiry'])) {
			$implode[] = "DATE(cp.point_expiry) = DATE('" . $this->db->escape($data['filter_point_expiry']) . "')";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = array(
			'cp.customer_point_id',
			'name',
			'cp.type',
			'cp.order_id',
			'cp.points',
			'cp.date_added',
			'cp.point_expiry'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY cp.date_added";
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

	public function getTotalPointTransactions($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_point cp LEFT JOIN " . DB_PREFIX . "customer c ON (cp.customer_id = c.customer_id)";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (isset($data['filter_type']) && $data['filter_type'] !== '') {
			$implode[] = "cp.type = '" . $this->db->escape($data['filter_type']) . "'";
		}

		if (!empty($data['filter_order_id'])) {
			$implode[] = "cp.order_id = '" . (int)$data['filter_order_id'] . "'";
		}

		if (!empty($data['filter_customer_id'])) {
			$implode[] = "cp.customer_id = '" . (int)$data['filter_customer_id'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(cp.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}


	public function getCustomersTotalPoint($data = array()) {
		$sql = "SELECT cp.customer_id, CONCAT(c.firstname, ' ', c.lastname) AS name, SUM(cp.points) AS total FROM " . DB_PREFIX . "customer_point cp LEFT JOIN " . DB_PREFIX . "customer c ON (cp.customer_id = c.customer_id)";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sql .= " GROUP BY c.customer_id";

		$sort_data = array(
			'name',
			'total',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY total";
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

	public function getTotalCustomersTotalPoint($data = array()) {
		$sql = "SELECT COUNT(DISTINCT(cp.customer_id)) AS total FROM " . DB_PREFIX . "customer_point cp LEFT JOIN " . DB_PREFIX . "customer c ON (cp.customer_id = c.customer_id)";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}
		
		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalExistingPoints() {
		$sql = "SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_point";

		$implode = array();

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	//Point Adjustments
	public function getPointAdjustments($data = array()) {
		$sql = "SELECT cpa.*, CONCAT(c.firstname, ' ', c.lastname) AS name, cb.username AS created_by_name, mb.username AS modified_by_name FROM " . DB_PREFIX . "customer_point_adjustment cpa 
			LEFT JOIN " . DB_PREFIX . "customer c ON (cpa.customer_id = c.customer_id) 
			LEFT JOIN " . DB_PREFIX . "user cb ON (cpa.created_by = cb.user_id) 
			LEFT JOIN " . DB_PREFIX . "user mb ON (cpa.modified_by = mb.user_id)";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_created_by'])) {
			$implode[] = "cb.username LIKE '%" . $this->db->escape($data['filter_created_by']) . "%'";
		}

		if (!empty($data['filter_modified_by'])) {
			$implode[] = "mb.username LIKE '%" . $this->db->escape($data['filter_modified_by']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$implode[] = "cpa.status = '" . $this->db->escape($data['filter_status']) . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(cpa.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if (!empty($data['filter_date_modified'])) {
			$implode[] = "DATE(cpa.date_modified) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = array(
			'name',
			'cpa.status',
			'created_by_name',
			'modified_by_name',
			'cpa.date_added',
			'cpa.date_modified',
			'cpa.points',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY cpa.date_added";
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

	public function getTotalPointAdjustments($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_point_adjustment cpa LEFT JOIN " . DB_PREFIX . "customer c ON (cpa.customer_id = c.customer_id) LEFT JOIN " . DB_PREFIX . "user cb ON (cpa.created_by = cb.user_id) LEFT JOIN " . DB_PREFIX . "user mb ON (cpa.modified_by = mb.user_id)";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_created_by'])) {
			$implode[] = "cb.username LIKE '%" . $this->db->escape($data['filter_created_by']) . "%'";
		}

		if (!empty($data['filter_modified_by'])) {
			$implode[] = "mb.username LIKE '%" . $this->db->escape($data['filter_modified_by']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$implode[] = "cpa.status = '" . $this->db->escape($data['filter_status']) . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(cpa.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if (!empty($data['filter_date_modified'])) {
			$implode[] = "DATE(cpa.date_modified) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
}