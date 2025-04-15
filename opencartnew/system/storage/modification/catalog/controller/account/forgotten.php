<?php
class ControllerAccountForgotten extends Controller {
	private $error = array();

	public function index() {

				if($this->config->get('config_catalog_mode')) {
					$this->response->redirect($this->url->link('common/home', '', true));
				}
			
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$this->load->language('account/forgotten');

		$this->document->addScript('https://unpkg.com/libphonenumber-js@1.9.9/bundle/libphonenumber-min.js');
		$this->document->addScript('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js');
		$this->document->addStyle('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css');
			

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('account/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_account_customer->editCode($this->request->post['email'], token(40));

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('account/login', '', true));

			}
			
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_forgotten'),
			'href' => $this->url->link('account/forgotten', '', true)
		);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}


			if ($this->config->get('module_phone_verification_status')) {
				if (isset($this->error['otp_code'])) {
					$data['error_otp_code'] = $this->error['otp_code'];
				} else {
					$data['error_otp_code'] = '';
				}

				if (isset($this->error['telephone'])) {
					$data['error_telephone'] = $this->error['telephone'];
				} else {
					$data['error_telephone'] = '';
				}

				if (isset($this->request->post['telephone'])) {
					$data['telephone'] = $this->request->post['telephone'];
				} else {
					$data['telephone'] = '';
				}
			}

			$data['module_phone_verification_status'] = $this->config->get('module_phone_verification_status');
			if ($data['module_phone_verification_status']) {
				$data['otp_forgotten'] = true;

				$data['phone_verification'] = $this->load->controller('extension/module/phone_verification', $data);
			} else {
				$data['phone_verification'] = '';
			}
			
		$data['action'] = $this->url->link('account/forgotten', '', true);

		$data['back'] = $this->url->link('account/login', '', true);

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} else {
			$data['email'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/forgotten', $data));
	}

	protected function validate() {
		if (!isset($this->request->post['email'])) {
			$this->error['warning'] = $this->language->get('error_email');
		} elseif (!$this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
			$this->error['warning'] = $this->language->get('error_email');
		}
		
		// Check if customer has been approved.
		$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

		if ($customer_info && !$customer_info['status']) {
			$this->error['warning'] = $this->language->get('error_approved');
		}


		}
			
		return !$this->error;
	}
}
