<?php
class ControllerExtensionModulePhoneVerification extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/phone_verification');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/phone_verification', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['sms_otp'] = $this->url->link('extension/module/phone_verification/smsOtp', 'user_token=' . $this->session->data['user_token'], true);
		$data['sms_otp_attempts'] = $this->url->link('extension/module/phone_verification/smsOtpAttempts', 'user_token=' . $this->session->data['user_token'], true);
		$data['setting'] = $this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/phone_verification', $data));
	}

	public function smsOtp() {
		$this->load->language('extension/module/phone_verification');

		$this->document->setTitle($this->language->get('text_sms_otp'));

		$this->load->model('extension/module/phone_verification');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/phone_verification', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_sms_otp'),
			'href' => $this->url->link('extension/module/phone_verification/smsOtp', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['cancel'] = $this->url->link('extension/module/phone_verification', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['filter_phone_number'])) {
			$filter_phone_number = $this->request->get['filter_phone_number'];
		} else {
			$filter_phone_number = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'sms_otp_id';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$filter_data = array(
			'filter_phone_number'    => $filter_phone_number,
			'sort'                   => $sort,
			'order'                  => $order,
			'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                  => $this->config->get('config_limit_admin')
		);

		$sms_total = $this->model_extension_module_phone_verification->getTotalSmsOtp($filter_data);

		$results = $this->model_extension_module_phone_verification->getSmsOtp($filter_data);

		$data['sms_otps'] = array();

		foreach ($results as $result) {
			$data['sms_otps'][] = array(
				'sms_otp_id'   => $result['sms_otp_id'],
				'phone_number' => $result['phone_number'],
				'code'         => $result['code'],
				'status'       => $result['status'],
				'created_at'   => $result['created_at'],
				'expired_at'   => $result['expired_at'],
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$pagination = new Pagination();
		$pagination->total = $sms_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('extension/module/phone_verification/smsOtp', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($sms_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($sms_total - $this->config->get('config_limit_admin'))) ? $sms_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $sms_total, ceil($sms_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['filter_phone_number'] = $filter_phone_number;

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/phone_verification_otp', $data));
	}

	public function smsOtpAttempts() {
		$this->load->language('extension/module/phone_verification');

		$this->document->setTitle($this->language->get('text_sms_otp_attempts'));

		$this->load->model('extension/module/phone_verification');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/phone_verification', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_sms_otp_attempts'),
			'href' => $this->url->link('extension/module/phone_verification/smsOtpAttempts', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['cancel'] = $this->url->link('extension/module/phone_verification', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['filter_phone_number'])) {
			$filter_phone_number = $this->request->get['filter_phone_number'];
		} else {
			$filter_phone_number = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'sms_otp_attempt_id';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$filter_data = array(
			'filter_phone_number'    => $filter_phone_number,
			'sort'                   => $sort,
			'order'                  => $order,
			'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                  => $this->config->get('config_limit_admin')
		);

		$attempts_total = $this->model_extension_module_phone_verification->getTotalSmsOtpAttempts($filter_data);

		$results = $this->model_extension_module_phone_verification->getSmsOtpAttempts($filter_data);

		$data['sms_otp_attempts'] = array();

		foreach ($results as $result) {
			$data['sms_otp_attempts'][] = array(
				'sms_otp_attempt_id' => $result['sms_otp_attempt_id'],
				'phone_number' 		 => $result['phone_number'],
				'total'         	 => $result['total'],
				'date_added'   	     => $result['date_added'],
				'date_modified'   	 => $result['date_modified'],
				'reset' 			 => $this->url->link('extension/module/phone_verification/reset', 'user_token=' . $this->session->data['user_token'] .'&attempt_id=' . $result['sms_otp_attempt_id'],true),
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$pagination = new Pagination();
		$pagination->total = $attempts_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('extension/module/phone_verification/smsOtp', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($attempts_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($attempts_total - $this->config->get('config_limit_admin'))) ? $attempts_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $attempts_total, ceil($attempts_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['filter_phone_number'] = $filter_phone_number;

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/phone_verification_otp_attempts', $data));
	}

	public function setting() {
		$this->load->language('extension/module/phone_verification');

		$this->document->setTitle($this->language->get('text_setting'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_phone_verification', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} elseif (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/phone_verification', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_setting'),
			'href' => $this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('extension/module/phone_verification', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_phone_verification_status'])) {
			$data['module_phone_verification_status'] = $this->request->post['module_phone_verification_status'];
		} else {
			$data['module_phone_verification_status'] = $this->config->get('module_phone_verification_status');
		}

		if (isset($this->request->post['module_phone_verification_sandbox'])) {
			$data['module_phone_verification_sandbox'] = $this->request->post['module_phone_verification_sandbox'];
		} else {
			$data['module_phone_verification_sandbox'] = $this->config->get('module_phone_verification_sandbox');
		}

		if (isset($this->request->post['module_phone_verification_resend_interval'])) {
			$data['module_phone_verification_resend_interval'] = $this->request->post['module_phone_verification_resend_interval'];
		} else {
			$data['module_phone_verification_resend_interval'] = $this->config->get('module_phone_verification_resend_interval');
		}

		if (isset($this->request->post['module_phone_verification_daily_limit'])) {
			$data['module_phone_verification_daily_limit'] = $this->request->post['module_phone_verification_daily_limit'];
		} else {
			$data['module_phone_verification_daily_limit'] = $this->config->get('module_phone_verification_daily_limit');
		}

		if (isset($this->request->post['module_phone_verification_required_checkout'])) {
			$data['module_phone_verification_required_checkout'] = $this->request->post['module_phone_verification_required_checkout'];
		} else {
			$data['module_phone_verification_required_checkout'] = $this->config->get('module_phone_verification_required_checkout');
		}

		if (isset($this->request->post['module_phone_verification_vendor'])) {
			$data['module_phone_verification_vendor'] = $this->request->post['module_phone_verification_vendor'];
		} else {
			$data['module_phone_verification_vendor'] = $this->config->get('module_phone_verification_vendor');
		}

		if (isset($this->request->post['module_phone_verification_message'])) {
			$data['module_phone_verification_message'] = $this->request->post['module_phone_verification_message'];
		} else {
			$data['module_phone_verification_message'] = $this->config->get('module_phone_verification_message');
		}

		$data['vendors'] = $this->smsVendors();

		foreach ($data['vendors'] as $vendor_key => $vendor_value) {			
			$post_data = isset($this->request->post['module_phone_verification_setting'][$vendor_key]) ? $this->request->post['module_phone_verification_setting'][$vendor_key] : '';

			$request = $this->$vendor_key();

			foreach ($request as $request_key => $request_value) { 
				
				if (isset($post_data[$request_key])) {  
					$vendor_setting = array( 
						'language' 	=> $request_value,  
						'value' 	=> $post_data[$request_key]
					);
				} else {
					$vendor_setting = array( 
						'language' 	=> $request_value,  
						'value' 	=> $this->config->get('module_phone_verification_setting')[$vendor_key][$request_key]
					);
				}

				$data['setting'][$vendor_key][$request_key] = $vendor_setting;
			}
		}

		$files = array();

		foreach (glob(DIR_LOGS . 'sms_otp-*.log') as $log) {
			if (is_file($log)) {
				$files[basename($log)] = array(
					'name' => basename($log),
					'path' => $log,
					'last_modified' => filemtime($log),
					'size' => filesize($log)
				);
			}
		}

		$sort = array();

        foreach ($files as $file) {
            $sort[] = $file['last_modified'];
        }

        array_multisort($sort, SORT_DESC, $files);
        
        $data['log_files'] = array();
        foreach ($files as $log) {
        	$data['log_files'][] = array(
        		'name' => $log['name'],
        		'download' => $this->url->link('extension/module/phone_verification/downloadLog', 'user_token=' . $this->session->data['user_token'] . '&log=' . $log['name'], true),
        		'delete' => $this->url->link('extension/module/phone_verification/deleteLog', 'user_token=' . $this->session->data['user_token'] . '&log=' . $log['name'], true),
        		'size' => $this->bytesToHumanString($log['size'])
        	);
        }

		$data['vendor'] = $this->config->get('module_phone_verification_vendor');

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/phone_verification_setting', $data));
	}

	public function reset() {
		$this->load->language('extension/module/phone_verification');

		$this->load->model('extension/module/phone_verification');

		if (isset($this->request->get['attempt_id']) && $this->request->get['attempt_id']) {
			$attempt_id = $this->request->get['attempt_id'];

			$this->model_extension_module_phone_verification->resetAttempts($attempt_id);

			$attempt_info = $this->model_extension_module_phone_verification->getSmsOtpAttemptsById($attempt_id);

			$this->session->data['success'] = sprintf($this->language->get('text_reset'), $attempt_info['phone_number']);
		} 

		$this->response->redirect($this->url->link('extension/module/phone_verification/smsOtpAttempts', 'user_token=' . $this->session->data['user_token'], true));
	}

	public function install() {
		$this->load->model('extension/module/phone_verification');
		$this->model_extension_module_phone_verification->install();
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/phone_verification')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function smsVendors() {
		$data = array(
			'isms' 		=> $this->language->get('text_isms'),
			'smss360' 	=> $this->language->get('text_smss360'),
			'smshub' 	=> $this->language->get('text_smshub'),
			'onewaysms' => $this->language->get('text_onewaysms')
		);

		return $data;
	}

	public function isms() {
		$data = array(
			'username' 	=> $this->language->get('entry_username'),
			'password' 	=> $this->language->get('entry_password'),
			'senderid' 	=> $this->language->get('entry_sender_id'),
		);

		return $data;
	}
	
	public function smss360() {
		$data = array(
			'email'	=> $this->language->get('entry_email'),
			'key' 	=> $this->language->get('entry_key'),
		);

		return $data;
	}

	public function onewaysms() {
		$data = array(
			'username' 	=> $this->language->get('entry_username'),
			'password' 	=> $this->language->get('entry_password'),
			'senderid' 	=> $this->language->get('entry_sender_id'),
		);

		return $data;
	}

	public function smshub() {
		//pending
		$data = array();

		return $data;
	}

	public function downloadLog() {
		$this->load->language('extension/module/phone_verification');

		if (isset($this->request->get['log']) && $this->request->get['log']) {
			$file = DIR_LOGS . $this->request->get['log'];
			if (file_exists($file) && filesize($file) > 0) {
				$this->response->addheader('Pragma: public');
				$this->response->addheader('Expires: 0');
				$this->response->addheader('Content-Description: File Transfer');
				$this->response->addheader('Content-Type: application/octet-stream');
				$this->response->addheader('Content-Disposition: attachment; filename="' . basename($file) . '"');
				$this->response->addheader('Content-Transfer-Encoding: binary');

				$this->response->setOutput(file_get_contents($file, FILE_USE_INCLUDE_PATH, null));
			} else {
				$this->session->data['error'] = sprintf($this->language->get('error_log'), basename($file), '0B');

				$this->response->redirect($this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true));
			}
		} else {
			$this->response->redirect($this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true));
		}
	}
	
	public function deleteLog() {
		$this->load->language('extension/module/phone_verification');
		
		if (isset($this->request->get['log']) && $this->request->get['log']) {
			$file = DIR_LOGS . $this->request->get['log'];

			if (is_file($file)) {
				unlink($file);
			}

			$this->session->data['success'] = sprintf($this->language->get('text_success_log'), basename($file));

			$this->response->redirect($this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true));
		} else {
			$this->response->redirect($this->url->link('extension/module/phone_verification/setting', 'user_token=' . $this->session->data['user_token'], true));
		}
	}

	public function bytesToHumanString($size) {
		$suffix = array(
			'B',
			'KB',
			'MB',
			'GB',
			'TB',
			'PB',
			'EB',
			'ZB',
			'YB'
		);

		$i = 0;

		while (($size / 1024) > 1) {
			$size = $size / 1024;
			$i++;
		}

		return round(substr($size, 0, strpos($size, '.') + 4), 2) . $suffix[$i];
	}
}