<?php
class ControllerExtensionModulePhoneVerification extends Controller {
	private $error = array();

	public function index($data = array()) {
		if ($data) {
			$this->load->language('extension/module/phone_verification');

			if (!isset($data['otp_forgotten'])) {
				$data['otp_forgotten'] = false;
			}

			$data['otp_resend'] = $this->config->get('module_phone_verification_resend_interval') ? (int)$this->config->get('module_phone_verification_resend_interval') : 60;

			return $this->load->view('extension/module/phone_verification', $data);
		}
	}

    public function otp() {
		$this->load->language('extension/module/phone_verification');

		$this->load->model('extension/module/phone_verification');

		$this->document->setTitle($this->language->get('heading_title'));

		$json = array();
		$success = false;

		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
			$phone = $this->request->post['phone'];

			$vendor = $this->config->get('module_phone_verification_vendor');
			$setting = $this->config->get('module_phone_verification_setting');
			$vendor_setting = $setting[$vendor];

			$code = $this->generateOtpCode();

			$message = $this->config->get('module_phone_verification_message');
			$message = str_replace('{code}', $code, $message);

			if ($this->config->get('module_phone_verification_sandbox')) {
				$json['otp'] = $code;

				$result['status'] = 1;
			} else {
				$phone_verification = new PhoneVerification($vendor, $vendor_setting);

				$result = $phone_verification->sendOTP($phone, $message);
			}

			if (isset($result['status']) && $result['status']) {
				$otp_data = array(
					'customer_id'  => $this->customer->getId(),
					'phone_number' => $phone,
					'code'         => $code,
					'expired_at'   => date('Y-m-d H:i:s', strtotime('+5 minute')),
				);

				$this->model_extension_module_phone_verification->deleteOldSmsOtp();

				$this->model_extension_module_phone_verification->addSmsOtp($otp_data);

				$this->model_extension_module_phone_verification->addSmsOtpAttempts($phone);

				$this->session->data['otp_code'] = $code;

				$json['message'] = $this->language->get('text_otp_sent');

				$success = true;
			} elseif (isset($result['error']) && $result['error']) {
				$json['error'] = $result['error'];
			} else {
				$json['error'] = $this->language->get('error_process');
			}
		}

		$json['success'] = $success;

		if (!$success) {
			if (isset($this->error['telephone'])) {
				$json['error'] = $this->error['telephone'];
			} 

			if (isset($this->error['registered'])) {
				$json['error'] = $this->error['registered'];
			} 

			if (isset($this->error['exceed'])) {
				$json['error'] = $this->error['exceed'];
			}

			if (isset($this->error['error'])) {
				$json['error'] = $this->error['error'];
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }

    public function test() {
    	// $setting = $this->config->get('module_phone_verification_setting');

    	// $sms = new PhoneVerification('isms', $setting['isms']);

    	// $code = $this->generateOtpCode();

    	// $message = $this->config->get('module_phone_verification_message');
    	// $message = str_replace('{code}', $code, $message);

    	// $result = $sms->sendOTP('60188713090', $message);
    	
    }

	protected function validate() {
		$daily_limit = $this->config->get('module_phone_verification_daily_limit') ?: 5;

		$sms_attempt = $this->model_extension_module_phone_verification->getSmsOtpAttempts($this->request->post['phone']);

		if ($sms_attempt && ($sms_attempt['total'] >= $daily_limit) && strtotime('-1 hour') < strtotime($sms_attempt['date_modified'])) {
			$this->error['exceed'] = $this->language->get('error_exceed');
		}

		if ((utf8_strlen($this->request->post['phone']) < 3) || (utf8_strlen($this->request->post['phone']) > 32)) {
			$this->error['telephone'] = $this->language->get('error_phone');
		}

		$total = $this->model_extension_module_phone_verification->checkPhoneNumber($this->request->post['phone']);
		
		if ($total && !$this->request->post['otp_forgotten']) {
			$this->error['registered'] = $this->language->get('error_registered');
		} elseif (!$total && $this->request->post['otp_forgotten']) {
			$this->error['registered'] = $this->language->get('error_not_registered');
		}

		if (!$this->config->get('module_phone_verification_vendor')) {
			$this->error['error'] = $this->language->get('error_process');
		}

		if ($setting = (array)$this->config->get('module_phone_verification_setting')) {
			$vendor = $this->config->get('module_phone_verification_vendor');
			if ($vendor && !isset($setting[$vendor])) {
				$this->error['error'] = $this->language->get('error_process');
			}
		}

		if (!$this->config->get('module_phone_verification_message')) {
			$this->error['error'] = $this->language->get('error_process');
		}

		return !$this->error;
	}

	protected function generateOtpCode() {
		$this->load->model('extension/module/phone_verification');

		$exists = true;
		while ($exists) {
			$numbers = range(0, 9);
			shuffle($numbers);

			$rand = array_rand($numbers, 6);
			$rand[0] = $rand[1];

			shuffle($rand);
			$code = implode('', $rand);

			$exists = $this->model_extension_module_phone_verification->getTotalSmsOtpByCode($code);
		}

		return $code;
	}
}