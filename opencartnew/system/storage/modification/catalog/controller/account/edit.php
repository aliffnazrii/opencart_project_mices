<?php
class ControllerAccountEdit extends Controller {
	private $error = array();

	public function index() {

				if($this->config->get('config_catalog_mode')) {
					$this->response->redirect($this->url->link('common/home', '', true));
				}
			
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/edit', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/edit');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		$this->load->model('account/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_account_customer->editCustomer($this->customer->getId(), $this->request->post);


					$dispatcher = new queue\Dispatcher($this->registry);
					$dispatcher->dispatch(new jobs\SyncMember($this->customer->getId()));
				
			$this->session->data['success'] = $this->language->get('text_success');


			if (isset($this->request->post['redirect']) && $this->request->post['redirect'] != $this->url->link('account/logout', '', true) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
				$this->response->redirect(str_replace('&amp;', '&', $this->request->post['redirect']));
			} else {
			
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
			'text' => $this->language->get('text_edit'),
			'href' => $this->url->link('account/edit', '', true)
		);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}


		if (isset($this->request->post['redirect']) ) {
			$data['redirect'] = $this->request->post['redirect'];
		} elseif (isset($this->session->data['redirect'])) {
			$data['redirect'] = $this->session->data['redirect'];
			unset($this->session->data['redirect']);
		} else {
			$data['redirect'] = '';
		}
			
		if (isset($this->error['firstname'])) {
			$data['error_firstname'] = $this->error['firstname'];
		} else {
			$data['error_firstname'] = '';
		}

		if (isset($this->error['lastname'])) {
			$data['error_lastname'] = $this->error['lastname'];
		} else {
			$data['error_lastname'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = '';
		}

		if (isset($this->error['custom_field'])) {
			$data['error_custom_field'] = $this->error['custom_field'];
		} else {
			$data['error_custom_field'] = array();
		}

		$data['action'] = $this->url->link('account/edit', '', true);

		if ($this->request->server['REQUEST_METHOD'] != 'POST') {
			$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());
		}

		if (isset($this->request->post['firstname'])) {
			$data['firstname'] = $this->request->post['firstname'];
		} elseif (!empty($customer_info)) {
			$data['firstname'] = $customer_info['firstname'];
		} else {
			$data['firstname'] = '';
		}

		if (isset($this->request->post['lastname'])) {
			$data['lastname'] = $this->request->post['lastname'];
		} elseif (!empty($customer_info)) {
			$data['lastname'] = $customer_info['lastname'];
		} else {
			$data['lastname'] = '';
		}

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} elseif (!empty($customer_info)) {
			$data['email'] = $customer_info['email'];
		} else {
			$data['email'] = '';
		}

		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} elseif (!empty($customer_info)) {
			$data['telephone'] = $customer_info['telephone'];
		} else {
			$data['telephone'] = '';
		}

		if (isset($this->request->post['custom_field']['account'])) {
			$data['account_custom_field'] = $this->request->post['custom_field']['account'];
		} elseif (isset($customer_info)) {
			$data['account_custom_field'] = json_decode($customer_info['custom_field'], true);
		} else {
			$data['account_custom_field'] = array();
		}

		// Custom Fields
		$data['custom_fields'] = array();

		$this->load->model('tool/upload');
		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'account') {
				if($custom_field['type'] == 'file' && isset($data['account_custom_field'][$custom_field['custom_field_id']])) {
					$code = $data['account_custom_field'][$custom_field['custom_field_id']];

					$data['account_custom_field'][$custom_field['custom_field_id']] = array();

					$upload_result = $this->model_tool_upload->getUploadByCode($code);
					
					if($upload_result) {
						$data['account_custom_field'][$custom_field['custom_field_id']]['name'] = $upload_result['name'];
						$data['account_custom_field'][$custom_field['custom_field_id']]['code'] = $upload_result['code'];
					} else {
						$data['account_custom_field'][$custom_field['custom_field_id']]['name'] = "";
						$data['account_custom_field'][$custom_field['custom_field_id']]['code'] = $code;
					}
					$data['custom_fields'][] = $custom_field;
				} else {
					$data['custom_fields'][] = $custom_field;
				}
			}
		}


            if (defined('JOURNAL3_ACTIVE')) {
                if (isset($this->error['fax'])) {
			        $data['error_fax'] = $this->error['fax'];
		        } else {
			        $data['error_fax'] = '';
		        }

		        if (isset($this->error['company'])) {
			        $data['error_company'] = $this->error['company'];
		        } else {
			        $data['error_company'] = '';
		        }

		        if (isset($this->error['address_2'])) {
			        $data['error_address_2'] = $this->error['address_2'];
		        } else {
			        $data['error_address_2'] = '';
		        }
            }
            

		if (isset($this->request->post['confirm_telephone'])) {
			$data['confirm_telephone'] = $this->request->post['confirm_telephone'];
		} elseif (!empty($customer_info)) {
			$data['confirm_telephone'] = $customer_info['telephone'];
		} else {
			$data['confirm_telephone'] = '';
		}

        if (!empty($customer_info)) {
        	$data['telephone_verified'] = isset($customer_info['telephone_verified']) ? $customer_info['telephone_verified'] : 0;
        } elseif ($data['confirm_telephone'] && $data['telephone'] && $data['confirm_telephone'] == $data['telephone']) {
        	$data['telephone_verified'] = 1;
        } else {
        	$data['telephone_verified'] = 0;
        }

        if (!$data['confirm_telephone'] || !$data['telephone'] || $data['confirm_telephone'] != $data['telephone']) {
        	$data['telephone_verified'] = 0;
        }
			
		$data['back'] = $this->url->link('account/account', '', true);


		$data['module_phone_verification_status'] = $this->config->get('module_phone_verification_status');
		if ($data['module_phone_verification_status']) {
			$data['phone_verification'] = $this->load->controller('extension/module/phone_verification', $data);
		} else {
			$data['phone_verification'] = '';
		}
			
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/edit', $data));
	}

	protected function validate() {
		if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
			$this->error['firstname'] = $this->language->get('error_firstname');
		}

		if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
			$this->error['lastname'] = $this->language->get('error_lastname');
		}

		if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error['email'] = $this->language->get('error_email');
		}

		if (($this->customer->getEmail() != $this->request->post['email']) && $this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
			$this->error['warning'] = $this->language->get('error_exists');
		}


				/*
			
		if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
			$this->error['telephone'] = $this->language->get('error_telephone');
		}

				*/
			

		// Custom field validation
		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'account') {
				if ($custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
					$this->error['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
				} elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
					$this->error['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
				}
			}
		}


            if (defined('JOURNAL3_ACTIVE')) {
                if ($this->journal3->settings->get('accountAccountFirstNameField') !== 'required') {
                    unset($this->error['firstname']);
                }

                if ($this->journal3->settings->get('accountAccountLastNameField') !== 'required') {
                    unset($this->error['lastname']);
                }

                if ($this->journal3->settings->get('accountAccountTelephoneField') !== 'required') {
                    unset($this->error['telephone']);
                }

                if ($this->journal3->settings->get('accountAddressAddress1Field') !== 'required') {
                    unset($this->error['address_1']);
                }

                if ($this->journal3->settings->get('accountAddressCityField') !== 'required') {
                    unset($this->error['city']);
                }

                if ($this->journal3->settings->get('accountAddressCountryField') !== 'required') {
                    unset($this->error['country']);
                }

                if ($this->journal3->settings->get('accountAddressRegionField') !== 'required') {
                    unset($this->error['zone']);
                }

                if ($this->journal3->isOC2()) {
                    if (($this->journal3->settings->get('accountAccountFaxField') === 'required') && !\Journal3\Utils\Arr::get($this->request->post, 'fax')) {
                        $this->error['fax'] = sprintf($this->language->get('error_custom_field'), $this->language->get('entry_fax'));
                    }

                    if (($this->journal3->settings->get('accountAddressCompanyField') === 'required') && !\Journal3\Utils\Arr::get($this->request->post, 'company')) {
                        $this->error['company'] = sprintf($this->language->get('error_custom_field'), $this->language->get('entry_company'));
                    }

                    if (($this->journal3->settings->get('accountAddressAddress2Field') === 'required') && !\Journal3\Utils\Arr::get($this->request->post, 'address_2')) {
                        $this->error['address_2'] = sprintf($this->language->get('error_custom_field'), $this->language->get('entry_address_2'));
                    }
                }
            }
            
		return !$this->error;
	}
}