<?php

					use Jobs\SyncOrder;
					use Jobs\PullPoints;
					use queue\Dispatcher;
					use Jobs\SyncLogin;
				
class ControllerAccountLogin extends Controller {
	private $error = array();

	public function index() {

				if($this->config->get('config_catalog_mode')) {

            if (defined('JOURNAL3_ACTIVE')) {
                if (\Journal3\Utils\Request::isAjax()) {
                    echo json_encode(array(
                        'status' => 'success',
                        'customer' => $this->customer->isLogged()
                    ), true);

                    exit;
                }
            }
            
					$this->response->redirect($this->url->link('common/home', '', true));
				}
			
		$this->load->model('account/customer');

					$this->document->addScript('https://unpkg.com/libphonenumber-js@1.9.9/bundle/libphonenumber-min.js');
					$this->document->addScript('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js');
					$this->document->addStyle('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css');
				

		// Login override for admin users
		if (!empty($this->request->get['token'])) {
			$this->customer->logout();
			$this->cart->clear();

			unset($this->session->data['order_id']);
			unset($this->session->data['payment_address']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['shipping_address']);
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['comment']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);

			$customer_info = $this->model_account_customer->getCustomerByToken($this->request->get['token']);

/*
			if ($customer_info && $this->customer->login($customer_info['email'], '', true)) {
*/
			if ($this->config->get('module_phone_verification_status')) {
				$username = $customer_info['telephone'];
			} else {
				$username = $customer_info['email'];
			}

			if ($customer_info && $this->customer->login($username, '', true)) {
				
				// Default Addresses
				$this->load->model('account/address');

				if ($this->config->get('config_tax_customer') == 'payment') {
					$this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
				}

				if ($this->config->get('config_tax_customer') == 'shipping') {
					$this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
				}


            if (defined('JOURNAL3_ACTIVE')) {
                if (\Journal3\Utils\Request::isAjax()) {
                    echo json_encode(array(
                        'status' => 'success',
                        'customer' => $this->customer->isLogged()
                    ), true);

                    exit;
                }
            }
            
				$this->response->redirect($this->url->link('account/account', '', true));
			}
		}

		if ($this->customer->isLogged()) {

            if (defined('JOURNAL3_ACTIVE')) {
                if (\Journal3\Utils\Request::isAjax()) {
                    echo json_encode(array(
                        'status' => 'success',
                        'customer' => $this->customer->isLogged()
                    ), true);

                    exit;
                }
            }
            
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$this->load->language('account/login');

		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			// Unset guest
			unset($this->session->data['guest']);

			// Default Shipping Address
			$this->load->model('account/address');

			if ($this->config->get('config_tax_customer') == 'payment') {
				$this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
			}

			if ($this->config->get('config_tax_customer') == 'shipping') {
				$this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
			}

			// Wishlist
			if (isset($this->session->data['wishlist']) && is_array($this->session->data['wishlist'])) {
				$this->load->model('account/wishlist');

				foreach ($this->session->data['wishlist'] as $key => $product_id) {
					$this->model_account_wishlist->addWishlist($product_id);

					unset($this->session->data['wishlist'][$key]);
				}
			}

			// Added strpos check to pass McAfee PCI compliance test (http://forum.opencart.com/viewtopic.php?f=10&t=12043&p=151494#p151295)
			if (isset($this->request->post['redirect']) && $this->request->post['redirect'] != $this->url->link('account/logout', '', true) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {

            if (defined('JOURNAL3_ACTIVE')) {
                if (\Journal3\Utils\Request::isAjax()) {
                    echo json_encode(array(
                        'status' => 'success',
                        'customer' => $this->customer->isLogged()
                    ), true);

                    exit;
                }
            }
            
				$this->response->redirect(str_replace('&amp;', '&', $this->request->post['redirect']));
			} else {

            if (defined('JOURNAL3_ACTIVE')) {
                if (\Journal3\Utils\Request::isAjax()) {
                    echo json_encode(array(
                        'status' => 'success',
                        'customer' => $this->customer->isLogged()
                    ), true);

                    exit;
                }
            }
            
				$this->response->redirect($this->url->link('account/account', '', true));
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
			'text' => $this->language->get('text_login'),
			'href' => $this->url->link('account/login', '', true)
		);

		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];

			unset($this->session->data['error']);
		} elseif (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->link('account/login', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['forgotten'] = $this->url->link('account/forgotten', '', true);

		// Added strpos check to pass McAfee PCI compliance test (http://forum.opencart.com/viewtopic.php?f=10&t=12043&p=151494#p151295)
		if (isset($this->request->post['redirect']) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
			$data['redirect'] = $this->request->post['redirect'];
		} elseif (isset($this->session->data['redirect'])) {
			$data['redirect'] = $this->session->data['redirect'];

			unset($this->session->data['redirect']);
		} else {
			$data['redirect'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}


		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} else {
			$data['telephone'] = '';
		}

		$data['phone_verification_status'] = $this->config->get('module_phone_verification_status');
				
		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} else {
			$data['email'] = '';
		}

		if (isset($this->request->post['password'])) {
			$data['password'] = $this->request->post['password'];
		} else {
			$data['password'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/login', $data));
	}

	protected function validate() {
		// Check how many login attempts have been made.

		if (!$this->config->get('module_phone_verification_status')) {
		$login_info = $this->model_account_customer->getLoginAttempts($this->request->post['email']);

		} else {
			$login_info = $this->model_account_customer->getLoginAttempts($this->request->post['telephone']);
		}

		if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
			$this->error['warning'] = $this->language->get('error_attempts');
		}

		// Check if customer has been approved.

		if (!$this->config->get('module_phone_verification_status')) {
		$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

		} else {
			$customer_info = $this->model_account_customer->getCustomerByTelephone($this->request->post['telephone']);
		}

		if ($customer_info && !$customer_info['status']) {
			$this->error['warning'] = $this->language->get('error_approved');
		}

		if (!$this->error) {
/*
			if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
*/
			if ($this->config->get('module_phone_verification_status')) {
				$username = $this->request->post['telephone'];
			} else {
				$username = $this->request->post['email'];
			}

			if (!$this->customer->login($username, $this->request->post['password'])) {
				

				if (!$this->config->get('module_phone_verification_status')) {
				$this->error['warning'] = $this->language->get('error_login');

				} else {
					$this->error['warning'] = $this->language->get('error_login_phone');
				}

/*
				$this->model_account_customer->addLoginAttempt($this->request->post['email']);
*/
				$this->model_account_customer->addLoginAttempt($username);
			} else {

					$dispatch_ERP = new Dispatcher($this->registry);
					$this->load->model('account/customer');

					$this->document->addScript('https://unpkg.com/libphonenumber-js@1.9.9/bundle/libphonenumber-min.js');
					$this->document->addScript('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js');
					$this->document->addStyle('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css');
				
					$customer = $this->model_account_customer->getCustomer($this->customer->getId());
					$sync_customer =  $dispatch_ERP->dispatch(new SyncLogin($customer['customer_id']));
				
/*
				$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
*/
				$this->model_account_customer->deleteLoginAttempts($username);
			}
		}


            if (defined('JOURNAL3_ACTIVE')) {
                if (\Journal3\Utils\Request::isAjax() && $this->error) {
                    echo json_encode(array(
                        'status' => 'error',
                        'response' => $this->error
                    ), true);

                    exit;
                }
            }
            
		return !$this->error;
	}
}
