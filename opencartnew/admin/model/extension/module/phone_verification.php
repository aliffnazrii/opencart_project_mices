<?php
class ModelExtensionModulePhoneVerification extends Model {
	public function getSmsOtp($data) {
		$sql = "SELECT * FROM " . DB_PREFIX . "sms_otp";

		if (!empty($data['filter_phone_number'])) {
			$sql .= " WHERE phone_number LIKE '%" . $this->db->escape($data['filter_phone_number']) . "%'";
		}

		$sort_data = array(
			'phone_number',
			'sms_otp_id',
			'code',
			'created_at',
			'expired_at',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sms_otp_id";
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

	public function getTotalSmsOtp($data) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "sms_otp";

		if (!empty($data['filter_phone_number'])) {
			$sql .= " WHERE phone_number LIKE '%" . $this->db->escape($data['filter_phone_number']) . "%'";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getSmsOtpAttempts($data) {
		$sql = "SELECT * FROM " . DB_PREFIX . "sms_otp_attempt";

		if (!empty($data['filter_phone_number'])) {
			$sql .= " WHERE phone_number LIKE '%" . $this->db->escape($data['filter_phone_number']) . "%'";
		}

		$sort_data = array(
			'phone_number',
			'sms_otp_attempt_id',
			'total',
			'date_added',
			'date_modified',
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sms_otp_attempt_id";
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

	public function getTotalSmsOtpAttempts($data) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "sms_otp_attempt";

		if (!empty($data['filter_phone_number'])) {
			$sql .= " WHERE phone_number LIKE '%" . $this->db->escape($data['filter_phone_number']) . "%'";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function resetAttempts($attempts_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "sms_otp_attempt SET total = 0 WHERE sms_otp_attempt_id = '" . (int)$attempts_id . "'");
	}

	public function getSmsOtpAttemptsById($attempts_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_otp_attempt WHERE sms_otp_attempt_id = '" . (int)$attempts_id . "'");

		return $query->row;
	}

	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "sms_otp (
			sms_otp_id int(11) NOT NULL AUTO_INCREMENT,
			customer_id int(11) NOT NULL,
			phone_number varchar(32) NOT NULL,
			code varchar(6) NOT NULL,
			status tinyint(1) NOT NULL DEFAULT 1,
			created_at datetime NOT NULL,
			expired_at datetime NOT NULL,
			PRIMARY KEY (sms_otp_id)
		)");

		$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "sms_otp_attempt (
			`sms_otp_attempt_id` int(11) NOT NULL AUTO_INCREMENT,
			`phone_number` varchar(32) NOT NULL,
			`total` int(4) NOT NULL,
			`date_added` datetime NOT NULL,
			`date_modified` datetime NOT NULL,
			PRIMARY KEY (`sms_otp_attempt_id`)
		)");

		if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer LIKE 'telephone_verified'")->row) {
			$this->db->query("ALTER TABLE " . DB_PREFIX . "customer ADD telephone_verified tinyint(1) NOT NULL DEFAULT 0 AFTER telephone");
		}

		if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer_login LIKE 'telephone'")->row) {
			$this->db->query("ALTER TABLE " . DB_PREFIX . "customer_login ADD telephone varchar(32) NOT NULL AFTER email");
		}
	}
}