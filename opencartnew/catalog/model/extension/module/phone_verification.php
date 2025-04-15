<?php
class ModelExtensionModulePhoneVerification extends Model {
	public function getSmsOtp($phone_number, $code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_otp WHERE phone_number = '" . $this->db->escape($phone_number) . "' AND code = '" . $this->db->escape($code) . "' AND status = 1 AND expired_at > NOW() ORDER BY created_at DESC LIMIT 1");

		return $query->row;
	}

	public function getCustomerSmsOtp($phone_number, $code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_otp WHERE phone_number = '" . $this->db->escape($phone_number) . "' AND code = '" . $this->db->escape($code) . "' AND status = 1 AND expired_at > NOW() AND customer_id = '" . (int)$this->customer->getId() . "' ORDER BY created_at DESC LIMIT 1");

		return $query->row;
	}

	public function addSmsOtp($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "sms_otp SET customer_id = '" . (int)$data['customer_id'] . "', phone_number = '" . $this->db->escape($data['phone_number']) . "', code = '" . $this->db->escape($data['code']) . "', created_at = NOW(), expired_at = '" . $this->db->escape($data['expired_at']) . "'");
	}

	public function getTotalSmsOtpByCode($code) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "sms_otp WHERE code = '" . $this->db->escape($code) . "'");

		return $query->row['total'];
	}

	// public function disableSmsOtp($phone_number) {
	// 	$this->db->query("UPDATE " . DB_PREFIX . "sms_otp SET status = '0' WHERE phone_number = '" . $this->db->escape($phone_number) . "'");
	// }
	public function disableSmsOtp($sms_otp_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "sms_otp SET status = '0' WHERE sms_otp_id = '" . (int)$sms_otp_id . "'");
	}

	public function verifyCustomerPhoneNumber($customer_id, $phone_number) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET telephone = '" . $this->db->escape($phone_number) . "' , telephone_verified = 1 WHERE customer_id = '" . $this->db->escape($customer_id) . "'");
	}

	public function deleteOldSmsOtp() {
		$this->db->query("DELETE FROM " . DB_PREFIX . "sms_otp WHERE TIMESTAMPDIFF(HOUR, expired_at, NOW()) >= 24");
	}

	public function getVerfiedPhone($phone_number) {
		$query = $this->db->query("SELECT status FROM " . DB_PREFIX . "sms_otp WHERE phone_number = '" .$this->db->escape($phone_number) . "' ORDER BY created_at DESC LIMIT 1");
		
		return $query->row;
	}

	public function checkPhoneNumber($phone_number) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE telephone = '" . $this->db->escape($phone_number) . "' AND telephone_verified = 1");

		return $query->num_rows;
	}

	public function getTotalPhoneNumberDailyOtp($phone_number) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "sms_otp WHERE phone_number = '" . $this->db->escape($phone_number) . "' AND DATE(created_at) = DATE(NOW())");

		return $query->row['total'];
	}

	public function addSmsOtpAttempts($phone_number) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sms_otp_attempt WHERE phone_number = '" . $this->db->escape($phone_number) . "'");

		if (!$query->num_rows) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "sms_otp_attempt SET phone_number = '" . $this->db->escape($phone_number) . "', total = 1, date_added = '" . $this->db->escape(date('Y-m-d H:i:s')) . "', date_modified = '" . $this->db->escape(date('Y-m-d H:i:s')) . "'");
		} else {
			$this->db->query("UPDATE " . DB_PREFIX . "sms_otp_attempt SET total = (total + 1), date_modified = '" . $this->db->escape(date('Y-m-d H:i:s')) . "' WHERE sms_otp_attempt_id = '" . (int)$query->row['sms_otp_attempt_id'] . "'");
		}
	}

	public function getSmsOtpAttempts($phone_number) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sms_otp_attempt` WHERE phone_number = '" . $this->db->escape($phone_number) . "'");

		return $query->row;
	}
}