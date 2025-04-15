<?php
require_once DIR_SYSTEM . '/library/barcode_generator/vendor/autoload.php';
require_once DIR_SYSTEM . '/library/barcode_generator/QRCodeGenerator.php';

use Opencart\System\Library\BarcodeGenerator\QRCodeGenerator;

class ModelAccountCoupon extends Model
{
	public function getCoupons($data = array())
	{
		$sql = "SELECT c.*, (SELECT COUNT(*) FROM `" . DB_PREFIX . "coupon_history` ch WHERE ch.coupon_id = c.coupon_id) AS total_used FROM `" . DB_PREFIX . "coupon` c WHERE customer_id = '" . (int)$this->customer->getId() . "' AND type IN ('F','P') ORDER BY date_added DESC";

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


	public function getTotalCoupons()
	{
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "coupon` WHERE customer_id = '" . (int)$this->customer->getId() . "' AND type IN ('F','P')");

		return $query->row['total'];
	}

	public function getTotalCouponHistoriesByCoupon($coupon)
	{
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "coupon_history` ch LEFT JOIN `" . DB_PREFIX . "coupon` c ON (ch.coupon_id = c.coupon_id) WHERE c.code = '" . $this->db->escape($coupon) . "'");

		if ($query->row['total'] == 0) {
			$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "coupon_history` ch LEFT JOIN `" . DB_PREFIX . "coupon_customer` c ON (ch.coupon_id = c.coupon_id) WHERE c.code = '" . $this->db->escape($coupon) . "'");
		}

		return $query->row['total'];
	}

	public function getTotalCouponHistoriesByCustomerId($coupon, $customer_id)
	{
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "coupon_history` ch LEFT JOIN `" . DB_PREFIX . "coupon` c ON (ch.coupon_id = c.coupon_id) WHERE c.code = '" . $this->db->escape($coupon) . "' AND ch.customer_id = '" . (int)$customer_id . "'");

		if ($query->row['total'] == 0) {
			$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "coupon_history` ch LEFT JOIN `" . DB_PREFIX . "coupon_customer` c ON (ch.coupon_id = c.coupon_id) WHERE c.code = '" . $this->db->escape($coupon) . "' AND ch.customer_id = '" . (int)$customer_id . "'");
		}

		return $query->row['total'];
	}

	public function getCouponHistoriesByCustomerId($customer_id, $start = 0, $limit = 10)
	{
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT ch.*, c.code as coupon_code, c.name as coupon_name, cc.code as customer_coupon_code FROM `" . DB_PREFIX . "coupon_history` ch LEFT JOIN `" . DB_PREFIX . "coupon` c ON ch.coupon_id = c.coupon_id LEFT JOIN `" . DB_PREFIX . "coupon_customer` cc ON (c.coupon_id = cc.coupon_id AND cc.customer_id = '" . (int)$customer_id . "') WHERE ch.customer_id = '" . (int)$customer_id . "' ORDER BY ch.date_added DESC LIMIT " . (int)$start . ", " . (int)$limit);

		return $query->rows;
	}

	public function getTotalCouponsHistoriesByCustomerId($customer_id)
	{
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "coupon_history` ch LEFT JOIN `" . DB_PREFIX . "coupon` c ON ch.coupon_id = c.coupon_id LEFT JOIN `" . DB_PREFIX . "coupon_customer` cc ON (c.coupon_id = cc.coupon_id AND cc.customer_id = '" . (int)$customer_id . "') WHERE ch.customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function getCoupon($coupon_id)
	{
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "coupon` WHERE voucher_serialNo = '" . $this->db->escape($coupon_id) . "'");

		return $query->row;
	}


	public function getAcilitCoupons()
	{
		$sql = "SELECT c.* ,(SELECT COUNT(*) FROM `" . DB_PREFIX . "coupon` ch WHERE ch.coupon_id = c.coupon_id) AS total FROM `" . DB_PREFIX . "coupon` c WHERE customer_id = '" . (int)$this->customer->getId() . "' ORDER BY date_added DESC";

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
	public function updateCouponCustomerId($voucher_id, $customer_id)
	{
		$sql = "UPDATE `" . DB_PREFIX . "coupon` SET `customer_id` = '" . (int)$customer_id . "' WHERE voucher_id = '" . $this->db->escape($voucher_id) . "'";

		$query = $this->db->query($sql);

		return true;
	}

	public function getCouponsProduct($data = array())
	{
		$sql = "SELECT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p.voucher_id IS NOT NULL AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_model'])) {
			$sql .= " AND p.model LIKE '" . $this->db->escape($data['filter_model']) . "%'";
		}

		if (!empty($data['filter_price'])) {
			$sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
		}

		if (isset($data['filter_quantity']) && $data['filter_quantity'] !== '') {
			$sql .= " AND p.quantity = '" . (int)$data['filter_quantity'] . "'";
		}


		if (isset($data['filter_sync_status']) && $data['filter_sync_status'] === '1') {
			$sql .= " AND (p.acilit_item_id != '0' AND p.acilit_item_id != '')";
		} else {
			if (isset($data['filter_sync_status']) && $data['filter_sync_status'] === '0') {
				$sql .= " AND (p.acilit_item_id = '0' OR p.acilit_item_id = '')";
			} else {
			}
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.price',
			'p.quantity',
			'p.status',
			'p.sync_status',
			'p.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY pd.name";
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

	public function generateVoucherQr($num)
	{
		$qrGenerator = new \Opencart\System\Library\BarcodeGenerator\QRCodeGenerator();

		$fileName = $num . '_qrcode.png';
		$filePath = DIR_IMAGE . 'qrcode/voucher/' . $fileName;

		$currentQr = $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon WHERE qr_made_at BETWEEN 
		NOW() - INTERVAL 10 MINUTE 
		AND NOW() AND voucher_serialNo = '" . $this->db->escape($num) . "'");

		if ((file_exists($filePath) && $currentQr->num_rows != 0)) {
			// Create directory if it doesn't exist
			return 'image/qrcode/voucher/' . $fileName;
		} else {
			$qrData = '||' . $num . '||' . date('YmdHis') . '||';
			$qrGenerator->setOptions(['outputType' => \chillerlan\QRCode\QRCode::OUTPUT_IMAGE_PNG]);
			$qrCode = $qrGenerator->generate($qrData, 300);
			file_put_contents($filePath, $qrCode);

			$update = $this->db->query("UPDATE " . DB_PREFIX . "coupon SET qr_made_at = FROM_UNIXTIME(UNIX_TIMESTAMP()) WHERE voucher_serialNo = '" . $this->db->escape($num) . "'");
		}

		return 'image/qrcode/voucher/' . $fileName;
	}

	public function getCustomerVouchers()
	{
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "coupon` WHERE customer_id = '" . (int)$this->customer->getId() . "' AND type IN ('F','P')");

		return $query->rows;
	}

	public function getAllVouchers()
	{
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "coupon` WHERE customer_id IN(0,'',NULL)");

		return $query->rows;
	}

	public function updateVoucherOwner($serial)
	{ // to claim voucher
		$query = $this->db->query("UPDATE `" . DB_PREFIX . "coupon` SET  customer_id = '" . (int)$this->customer->getId() . "' WHERE voucher_serialNo = '" . $serial . "'");

		return $query->row;
	}

	public function getCustomerCoupons($customer_id)
	{
		$query = $this->db->query("SELECT c.*, 
                                  GROUP_CONCAT(DISTINCT pd.name SEPARATOR ', ') AS product_names
                                  FROM " . DB_PREFIX . "coupon c
                                  LEFT JOIN " . DB_PREFIX . "coupon_product cp ON c.coupon_id = cp.coupon_id
                                  LEFT JOIN " . DB_PREFIX . "product p ON cp.product_id = p.product_id
                                  LEFT JOIN " . DB_PREFIX . "product_description pd ON p.product_id = pd.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
                                  WHERE c.customer_id = '" . (int)$customer_id . "'
                                  GROUP BY c.coupon_id
                                  ORDER BY c.date_start DESC");

		$coupons = array();

		foreach ($query->rows as $result) {
			$coupons[] = array(
				'name'        => $result['name'],
				'code'        => $result['code'],
				'discount'    => $result['discount'],
				'type'        => $result['type'],
				'total'       => $this->currency->format($result['total'], $this->session->data['currency']),
				'date_start'  => date($this->language->get('date_format_short'), strtotime($result['date_start'])),
				'date_end'    => date($this->language->get('date_format_short'), strtotime($result['date_end'])),
				'status'      => ($result['date_start'] <= date('Y-m-d') && ($result['date_end'] >= date('Y-m-d') || $result['date_end'] == '0000-00-00')) ? $this->language->get('text_active') : $this->language->get('text_expired'),
				'products'   => $result['product_names']
			);
		}

		return $coupons;
	}

	public function claimVoucher($product_id, $UID)
	{
		// Get voucher details from product
		$product_query = $this->db->query("SELECT voucher_id FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "' AND status = 1");
		// dd($product_query->row);
		if ($product_query->num_rows == 1 && $product_query->row['voucher_id']) {

			// Check if voucher is available and not claimed
			$voucher_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon WHERE voucher_id = '" . $this->db->escape($product_query->row['voucher_id']) . "' AND customer_id = 0 AND status = 1");
			if ($voucher_query->num_rows) {
				// Update coupon with customer_id
				$this->db->query("UPDATE " . DB_PREFIX . "coupon SET acilit_uid = '". $this->db->escape($UID) ."', customer_id = '" . (int)$this->customer->getId() . "' WHERE voucher_id = '" . $this->db->escape($product_query->row['voucher_id']) . "' AND voucher_serialNo = '" . $this->db->escape($voucher_query->row['voucher_serialNo']) . "' AND customer_id = 0 AND status = 1 LIMIT 1");
				return true;
			}
			return false;
		}
		return false;
	}

	public function redeemCheck($product_id)
	{
		$product_query = $this->db->query("SELECT voucher_id FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "' AND status = 1 LIMIT 1");

		// Check if customer already has this voucher
		$rows = $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon WHERE voucher_id = '" . $this->db->escape($product_query->row['voucher_id']) . "' AND customer_id = '" . (int)$this->customer->getId() . "'");

		// Return false if customer already has the voucher, true otherwise
		return $rows->num_rows === 0;
	}

	public function updateCouponQuantityDecreaseByOne($product_id)
	{
		$query = $this->db->query("UPDATE " . DB_PREFIX . "product SET quantity = quantity - 1 WHERE product_id = '" . (int)$product_id . "'");
		return $query->row;
	}
}
