<?php

namespace EPoint;

class EPoint {
	const AWARD = 'award';
	const REFUND = 'refund';
	const REDEEM = 'redeem';
	const REDEEM_PRODUCT = 'redeem_product';
	const ADJUSTMENT = 'adjustment';
	const EXPIRED = 'expired';

	const SUB_TOTAL = 'sub_total';
	const TOTAL = 'total';

	protected $registry;
	protected $config;
	protected $db;

	public function __construct($registry) {
		$this->registry = $registry;
		$this->config = $registry->get('config');
		$this->db = $registry->get('db');
	}

	// Customer
	public function getCustomerPointBalance($customer_id) {
		if ($customer_id) {
			$query = $this->db->query("SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_point WHERE customer_id = '" . (int)$customer_id . "'");

			return $query->row['total'];
		}
		
		return null;
	}

	public function getCustomerPoint($customer_id) {
		if ($customer_id) {
			$query = $this->db->query("SELECT points FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");

			return $query->row['points'];
		}
		
		return null;
	}

	public function getCustomer($customer_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row;
	}

	public function getCustomers() {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer");
		return $query->rows;
	}

	public function getCustomerGroupConditions($customer_group_id) {
		$conditions = $this->config->get('total_point_condition');

		return isset($conditions[$customer_group_id]) ? $conditions[$customer_group_id] : false;
	}

	public function getCustomersByGroup($customer_group_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_group_id = '" . (int)$customer_group_id . "'");
        return $query->rows;
    }

	public function updateCustomerPointBalance($customer_id, $points) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET points = '" . (int)$points . "' WHERE customer_id = '" . (int)$customer_id . "'");
	}

	public function getCustomerExpiredPoints() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE point_expiry <= DATE(NOW())");

		return $query->rows;
	}

	public function setCustomerExpiredPoints($customer_id, $expiry_date = '') {
		if ($expiry_date) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET point_expiry = '" . $this->db->escape($expiry_date) . "' WHERE customer_id = '" . (int)$customer_id . "'");
		} else {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET point_expiry = NULL WHERE customer_id = '" . (int)$customer_id . "'");
		}
	}

	public function setCustomerExpirePointsDate($customer_id, $customer_group_id, $start_date = '') {
		$point_conditions = $this->config->get('total_point_condition');

		if (isset($point_conditions[$customer_group_id]) && $point_conditions[$customer_group_id]) {
			$point_condition = $point_conditions[$customer_group_id];
			$expire_within_months = $point_condition['point_expiry_month'];

			if ($start_date) {
				$new_expiry_date = date('Y-m-d', strtotime($start_date . ' +' . $expire_within_months . ' months'));
			} else {
				$new_expiry_date = date('Y-m-d', strtotime('+' . $expire_within_months . ' months'));
			}

			$this->setCustomerExpiredPoints($customer_id, $new_expiry_date);
		}
	}

	// Order
	public function getOrderAwardPoint($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_point WHERE order_id = '" . (int)$order_id . "' AND type = '" . $this->db->escape(self::AWARD) . "'");

		return $query->row;
	}

	public function getOrderRedeemPoint($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_point WHERE order_id = '" . (int)$order_id . "' AND type = '" . $this->db->escape(self::REDEEM) . "'");

		return $query->row;
	}

	public function getOrderRedeemProductPoint($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_point WHERE order_id = '" . (int)$order_id . "' AND type = '" . $this->db->escape(self::REDEEM_PRODUCT) . "'");

		return $query->row;
	}

	public function getProductOptionValueByOrderProductId($order_product_id) {
		$query = $this->db->query("SELECT pov.* FROM " . DB_PREFIX . "order_option oo LEFT JOIN " . DB_PREFIX . "product_option_value pov ON (oo.product_option_value_id = pov.product_option_value_id) WHERE oo.order_product_id = '" . (int)$order_product_id . "'");

		return $query->row;
	}

	public function getOrderProducts($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");

		return $query->rows;
	}

	public function getOrderProductByProductIds($order_id, $product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "' AND product_id = '" . (int)$product_id . "'");

		return $query->rows;
	}

	public function setOrderProductPoints($order_product_id, $points) {
		$this->db->query("UPDATE " . DB_PREFIX . "order_product SET point_award = '" . (int)$points . "' WHERE order_product_id = '" . (int)$order_product_id . "'");
	}

	public function setPointAwardStatus($order_id, $award_status) {
		$this->db->query("UPDATE " . DB_PREFIX . "order SET award_point_status = '" . (int)$award_status . "' WHERE order_id = '" . (int)$order_id . "'");
	}

	public function getOrderPendingAwardPoint() {
		$award_status_ids = $this->config->get('total_point_award_order_status');
		
		$award_status = implode(',', $award_status_ids);

		$sql = "SELECT * FROM " . DB_PREFIX . "order WHERE award_point_status = '0' AND date_added >= '" . $this->config->get('total_point_award_order_from') . "' AND order_status_id IN (" . $award_status . ")";

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getLatestOrderStatus($order_id) {
		$sql = "SELECT * FROM " . DB_PREFIX . "order_history WHERE order_id = '" . (int)$order_id . "' ORDER BY order_history_id DESC LIMIT 1";

		$query = $this->db->query($sql);

		return $query->row;
	}

	public function getOrderTotal($order_id, $code) {
		$sql = "SELECT * FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int)$order_id . "' AND code LIKE '" . $this->db->escape($code) . "'";
		$query = $this->db->query($sql);

		if ($query->row) {
			return $query->row['value'];
		}

		return 0;
	}

	// Product
	public function getProduct($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "' AND ac_item_code != ''");

		return $query->row;
	}

	public function getReturnProducts($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "return WHERE order_id = '" . (int)$order_id . "' AND return_action_id != '" . (int)$this->config->get('total_point_return_replace') . "' AND return_status_id != '" . (int)$this->config->get('total_point_return_complete') . "'");

		return $query->rows;
	}

	// Point
	public function award($order_info) {
		$awarded = $this->getOrderAwardPoint($order_info['order_id']);

		if ($awarded) {
			$this->setPointAwardStatus($order_info['order_id'], 1);
			return;
		}

		$customer = $this->getCustomer($order_info['customer_id']);
		$total_point = 0;

		if ($customer) {
			$customer_group_id = $customer['customer_group_id'];
			// $order_products = $this->getOrderProducts($order_info['order_id']);

			$condition = $this->getCustomerGroupConditions($customer_group_id);
			if (isset($condition) && $condition['status'] && $condition['award_rate']) {
				$award_rate = floor($condition['award_rate']);
				$order_total = $this->getOrderTotal($order_info['order_id'], 'total');

				$shipping = $this->getOrderTotal($order_info['order_id'], 'shipping');
				if ($shipping) {
					if (!$this->config->get('total_point_include_shipping')) {
						$order_total -= $shipping;
					}
				}

				$total_point = floor($order_total) * $award_rate;

				// foreach ($order_products as $order_product) {
				// 	$product_points = floor($order_product['total']) * $award_rate;
				// 	$total_point += $product_points;
				// 	$this->setOrderProductPoints($order_product['order_product_id'], $product_points);
				// }
			}

			$awarded = $this->getOrderAwardPoint($order_info['order_id']);
			
			if (!$awarded && $total_point > 0) {
				$point = (float)$total_point;
				$this->setPointAwardStatus($order_info['order_id'], 1);
				$point_data = array(
					'customer_id' => $order_info['customer_id'],
					'description' => sprintf('Point Award Order ID: #%s', $order_info['order_id']),
					'points' => $point,
					'type' => self::AWARD,
					'order_id' => $order_info['order_id'],
				);

				$this->addPointTransaction($point_data);
			}
		}
	}

	// Point Adjustment
	public function getPointAdjustment($customer_point_adjustment_id) {
		$sql = "SELECT cpa.*, CONCAT(c.firstname, ' ', c.lastname) AS name, cb.username AS created_by_name, mb.username AS modified_by_name FROM " . DB_PREFIX . "customer_point_adjustment cpa LEFT JOIN " . DB_PREFIX . "customer c ON (cpa.customer_id = c.customer_id) LEFT JOIN " . DB_PREFIX . "user cb ON (cpa.created_by = cb.user_id) LEFT JOIN " . DB_PREFIX . "user mb ON (cpa.modified_by = mb.user_id) WHERE cpa.customer_point_adjustment_id  = '" . (int)$customer_point_adjustment_id  . "'";

		$query = $this->db->query($sql);

		return $query->row;
	}
	public function getPointByRecId($rec_id) {
		$sql = "SELECT * FROM " . DB_PREFIX . "customer_point WHERE `rec_id` = '". $rec_id ."'";

		$query = $this->db->query($sql);

		return count($query->row);
	}

	public function addPointAdjustment($data = array(), $user_id) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_point_adjustment SET 
			customer_id = '" . (int)$data['customer_id'] . "', 
			created_by = '" . (int)$user_id . "', 
			modified_by = NULL, 
			points = '" . (int)$data['points'] . "', 
			description = '" . $this->db->escape($data['description']) . "', 
			remark = '" . $this->db->escape($data['remark']) . "', 
			status = 'pending', 
			date_added = NOW(), 
			date_modified = NULL
		");
		
		$point_adjustment_id = $this->db->getLastId();

		return $point_adjustment_id;
	}

	public function deletePointAdjustment($customer_point_adjustment_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_point_adjustment WHERE customer_point_adjustment_id = '" . (int)$customer_point_adjustment_id . "'");
	}

	public function updatePointAdjustmentStatus($customer_point_adjustment_id, $status, $modified_by) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer_point_adjustment SET modified_by = '" . (int)$modified_by . "', date_modified = NOW(), status = '" . $this->db->escape($status) . "' WHERE customer_point_adjustment_id = '" . (int)$customer_point_adjustment_id . "'");
		$customer_point_adjustment_info = $this->getPointAdjustment($customer_point_adjustment_id);
		if($status == 'approved') {
			if($customer_point_adjustment_info) {
				$data = array(
					'customer_id' => $customer_point_adjustment_info['customer_id'],
					'description' => $customer_point_adjustment_info['description'],
					'points' => $customer_point_adjustment_info['points'],
					'type' => self::ADJUSTMENT,
				);

				$customer_point_id = $this->addPointTransaction($data);

				// Update Point Transaction ID to point adjustment
				$this->db->query("UPDATE " . DB_PREFIX . "customer_point_adjustment SET customer_point_id = '" . (int)$customer_point_id . "', date_modified = NOW() WHERE customer_point_adjustment_id = '" . (int)$customer_point_adjustment_id . "'");
			}
		}

		return $customer_point_adjustment_info;
	}
	
	public function setCustomerPointOrderId($customer_point_id, $order_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer_point SET order_id = '" . (int)$order_id . "' WHERE customer_point_id = '" . (int)$customer_point_id . "'");
	}

	public function addPointTransaction($data) {
		// if ($user_id) {
			// $sql = "INSERT INTO " . DB_PREFIX . "customer_point SET 
			// 	customer_id = '" . (int)$data['customer_id'] . "', 
			// 	type = '" . $this->db->escape($data['type']) . "', 
			// 	description = '" . $this->db->escape($data['description']) . "', 
			// 	points = '" . (float)$data['points'] . "', 
			// 	order_id = '" . (float)$data['order_id'] . "', 
			// 	user_id = '" . (int)$user_id . "', 
			// 	amount = '" . (float)$data['amount'] . "', 
			// 	conversion_rate = '" . (float)$data['conversion_rate'] . "', 
			// 	date_added = NOW()
			// ";
		// } else {
			$sql = "INSERT INTO " . DB_PREFIX . "customer_point SET 
				customer_id = '" . (int)$data['customer_id'] . "', 
				type = '" . $this->db->escape($data['type']) . "', 
				rec_id = '" . $this->db->escape($data['rec_id']) . "', 
				point_expiry = (STR_TO_DATE('" . $data['point_expiry'] . "' , '%d/%m/%Y')), 
				description = '" . $this->db->escape($data['description']) . "', 
				points = '" . (float)$data['amount'] . "', 
				order_id = '" . (float)$data['order_id'] . "', 
				date_added = (STR_TO_DATE('" . $data['date_added'] . "' , '%d/%m/%Y%H%i%s'))
			";

			// dd($sql);
		// }
		
		$this->db->query($sql);
		
		$point_transaction_id = $this->db->getLastId();

		$balance_points = $this->getCustomerPointBalance($data['customer_id']);

		$this->updateCustomerPointBalance($data['customer_id'], $balance_points);

		return $point_transaction_id;
	}

	public function getPointTransaction($customer_point_id) {
		$sql = "SELECT cp.*, CONCAT(c.firstname, ' ', c.lastname) AS name FROM " . DB_PREFIX . "customer_point cp LEFT JOIN " . DB_PREFIX . "customer c ON (cp.customer_id = c.customer_id) WHERE cp.customer_point_id = '" . (int)$customer_point_id . "'";

		$query = $this->db->query($sql);

		return $query->row;
	}

	public function getLatestPointAward($customer_id) {
		$sql = "SELECT * FROM " . DB_PREFIX . "customer_point 
			WHERE customer_id = '" . (int)$customer_id . "'
			AND type = '" . self::AWARD . "'
			ORDER BY date_added
			LIMIT 1
		";

		$query = $this->db->query($sql);

		return $query->row;
	}
}