<?php

use EPoint\EPoint;
use Acilit\AcilitLoader;
use Acilit\AcilitPoint;

class ControllerExtensionTotalPoint extends Controller {
	private $error = array();

	public $module = 'extension/total/point';
	public $model_module = 'model_extension_total_point';

	public function __construct($registry) {
        parent::__construct($registry);

		$this->epoint = new EPoint($registry);
    }

	private function getTransactionTypes() {
		$this->load->language($this->module);

		$transaction_types = array(
			EPoint::AWARD => $this->language->get('text_transaction_award'),
			EPoint::REFUND => $this->language->get('text_transaction_refund'),
			EPoint::REDEEM => $this->language->get('text_transaction_redeem'),
			// EPoint::REDEEM_PRODUCT => $this->language->get('text_transaction_redeem_product'),
			EPoint::ADJUSTMENT => $this->language->get('text_transaction_adjustment')
		);

		return $transaction_types;
	}

	public function install() {
		$this->load->model($this->module);

		$this->{$this->model_module}->install();
	}

	public function index() {
		$this->load->language($this->module);

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$old_conditions = $this->config->get('total_point_condition');
			$new_conditions = $this->request->post['total_point_condition'];

			$this->model_setting_setting->editSetting('total_point', $this->request->post);

			$this->updatePointsExpire($old_conditions, $new_conditions);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/total/point', 'user_token=' . $this->session->data['user_token'], true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->module, 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link($this->module, 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true);

		$this->load->model('customer/customer_group');

		$customer_groups = $this->model_customer_customer_group->getCustomerGroups();
		
		foreach ($customer_groups as $customer_group) {
			if ($customer_group['customer_group_id'] != $this->config->get('config_imp_customer_group_id')) {
				$data['customer_groups'][] = $customer_group;
			}
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$data['total_point_condition'] = $this->getModuleSettingValue('total_point_condition');
		$data['total_point_award_order_status'] = $this->getModuleSettingValue('total_point_award_order_status');
		$data['total_point_award_coupon_order_status'] = $this->getModuleSettingValue('total_point_award_coupon_order_status');
		$data['total_point_award_order_from'] = $this->getModuleSettingValue('total_point_award_order_from');
		$data['total_point_include_shipping'] = $this->getModuleSettingValue('total_point_include_shipping');
		$data['total_point_sort_order'] = $this->getModuleSettingValue('total_point_sort_order');
		$data['total_point_status'] = $this->getModuleSettingValue('total_point_status');
		$data['total_point_redeem_multiple'] = $this->getModuleSettingValue('total_point_redeem_multiple');
		$data['total_point_redeem_min'] = $this->getModuleSettingValue('total_point_redeem_min');

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->module, $data));
	}

	public function history() {
		if ($this->config->get('total_point_status')) {
			$this->load->language($this->module);

			if (isset($this->request->get['page'])) {
				$page = (int)$this->request->get['page'];
			} else {
				$page = 1;
			}

			if (isset($this->request->get['render']) && $this->request->get['render']) {
				$render = true;
			} else {
				$render = false;
			}

			$limit = 10;

			$data['histories'] = array();

			$this->load->model($this->module);

			$results = $this->{$this->model_module}->getPointHistories($this->request->get['order_id'], ($page - 1) * $limit, $limit);

			foreach ($results as $result) {
				$data['histories'][] = array(
					'type'        => $result['type'],
					'description' => $result['description'],
					'points'      => number_format($result['points']),
					'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added']))
				);
			}

			$history_total = $this->{$this->model_module}->getTotalPointHistories($this->request->get['order_id']);

			$pagination = new Pagination();
			$pagination->total = $history_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link($this->module . '/history', 'user_token=' . $this->session->data['user_token'] . '&render=1&order_id=' . $this->request->get['order_id'] . '&page={page}', true);

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($history_total - $limit)) ? $history_total : ((($page - 1) * $limit) + $limit), $history_total, ceil($history_total / $limit));

			$output = $this->load->view($this->module . '_history', $data);

			if ($render) {
				$this->response->setOutput($output);
			} else {
				return $output;
			}
		}
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->module)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	protected function getModuleSettingValue($key, $default = '', $checkbox = false) {
        if ($checkbox) {
            if ($this->request->server['REQUEST_METHOD'] == 'POST' && !isset($this->request->post[$key])) {
                return $default;
            } else {
                return $this->config->get($key);
            }
        }

        if (isset($this->request->post[$key])) {
            return $this->request->post[$key]; 
        } else if ($this->config->has($key)) {
            return $this->config->get($key);
        } else {
            return $default;
        }
    }

	public function transaction() {
		$this->load->language($this->module);

		$this->document->setTitle($this->language->get('heading_title_transaction'));
		$data['heading_title'] = $this->language->get('heading_title_transaction');

		$this->load->model($this->module);

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_type'])) {
			$filter_type = $this->request->get['filter_type'];
		} else {
			$filter_type = '';
		}

		if (isset($this->request->get['filter_order_id'])) {
			$filter_order_id = $this->request->get['filter_order_id'];
		} else {
			$filter_order_id = '';
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'cp.customer_point_id';
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

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_type'])) {
			$url .= '&filter_type=' . $this->request->get['filter_type'];
		}

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_redunded'])) {
			$url .= '&filter_redunded=' . $this->request->get['filter_redunded'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title_transaction'),
			'href' => $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['transaction_types'] = $this->getTransactionTypes();

		$data['point_transactions'] = array();

		$filter_data = array(
			'filter_name'       => $filter_name,
			'filter_type'       => $filter_type,
			'filter_order_id'   => $filter_order_id,
			'filter_date_added' => $filter_date_added,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$point_transaction_total = $this->{$this->model_module}->getTotalPointTransactions($filter_data);

		$results = $this->{$this->model_module}->getPointTransactions($filter_data);

		foreach ($results as $result) {
			$data['point_transactions'][] = array(
				'customer_point_id' => $result['customer_point_id'],
				'name'              => $result['name'],
				'type'              => $data['transaction_types'][$result['type']] ?? ucfirst($result['type']),
				'order_id'          => $result['order_id'],
				'order_url'         => $result['order_id'] ? $this->url->link('sale/order/info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $result['order_id'] . $url, true) : '',
				'points'            => number_format($result['points']),
				'date_added'        => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'view'              => $this->url->link($this->module . '/info', 'user_token=' . $this->session->data['user_token'] . '&customer_point_id=' . $result['customer_point_id'] . $url, true)
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_type'])) {
			$url .= '&filter_type=' . $this->request->get['filter_type'];
		}

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_no'] = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . '&sort=cp.customer_point_id' . $url, true);
		$data['sort_name'] = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_type'] = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . '&sort=cp.type' . $url, true);
		$data['sort_order_id'] = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . '&sort=cp.order_id' . $url, true);
		$data['sort_points'] = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . '&sort=cp.points' . $url, true);
		$data['sort_date_added'] = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . '&sort=cp.date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_type'])) {
			$url .= '&filter_type=' . $this->request->get['filter_type'];
		}

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $point_transaction_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($point_transaction_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($point_transaction_total - $this->config->get('config_limit_admin'))) ? $point_transaction_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $point_transaction_total, ceil($point_transaction_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] = $filter_name;
		$data['filter_type'] = $filter_type;
		$data['filter_order_id'] = $filter_order_id;
		$data['filter_date_added'] = $filter_date_added;

		$data['module'] = $this->module;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->module . '_transaction_list', $data));
	}

	public function info() {
		$this->load->model($this->module);

		if (isset($this->request->get['customer_point_id'])) {
			$customer_point_id = $this->request->get['customer_point_id'];
		} else {
			$customer_point_id = 0;
		}

		$point_transaction_info = $this->epoint->getPointTransaction($customer_point_id);

		if ($point_transaction_info) {
			$this->load->language($this->module);

			$this->document->setTitle($this->language->get('heading_title_transaction'));
			$data['heading_title'] = $this->language->get('heading_title_transaction');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_type'])) {
				$url .= '&filter_type=' . $this->request->get['filter_type'];
			}

			if (isset($this->request->get['filter_order_id'])) {
				$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title_transaction'),
				'href' => $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . $url, true)
			);

			$data['cancel'] = $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . $url, true);

			$data['user_token'] = $this->session->data['user_token'];

			$data['customer_point_id'] = (int)$this->request->get['customer_point_id'];

			$data['transaction_types'] = $this->getTransactionTypes();

			$data['name'] = $point_transaction_info['name'];
			$data['type'] = $point_transaction_info['type'];
			$data['order_id'] = (int)$point_transaction_info['order_id'];
			$data['description'] = $point_transaction_info['description'];
			$data['points'] = number_format($point_transaction_info['points']);
			$data['date_added'] = date($this->language->get('datetime_format'), strtotime($point_transaction_info['date_added']));

			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			
			$this->response->setOutput($this->load->view($this->module . '_transaction_info', $data));
		} else {
			return new Action('error/not_found');
		}
	}

	//Point Adjustments
	public function adjustment() {
		$this->load->language($this->module);

		$this->document->setTitle($this->language->get('heading_title_adjustment'));

		$this->load->model($this->module);

		$this->getPointAdjustmentList();
	}

	public function addPointAdjustment() {
		$this->load->language($this->module);

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model($this->module);

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateAdjustmentForm()) {
			$this->epoint->addPointAdjustment($this->request->post, $this->user->getId());

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_created_by'])) {
				$url .= '&filter_created_by=' . urlencode(html_entity_decode($this->request->get['filter_created_by'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_modified_by'])) {
				$url .= '&filter_modified_by=' . urlencode(html_entity_decode($this->request->get['filter_modified_by'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}
	
			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}
	
			if (isset($this->request->get['filter_date_modified'])) {
				$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
			}
	
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
	
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getPointAdjustmentForm();
	}

	public function adjustmentInfo() {
		$this->load->model($this->module);

		$this->load->language($this->module);
		$this->document->setTitle($this->language->get('heading_title_adjustment'));
		$data['heading_title'] = $this->language->get('heading_title_adjustment');

		if (isset($this->request->get['customer_point_adjustment_id'])) {
			$customer_point_adjustment_id = $this->request->get['customer_point_adjustment_id'];
		} else {
			$customer_point_adjustment_id = 0;
		}

		$point_adjustment_info = $this->epoint->getPointAdjustment($customer_point_adjustment_id);

		if ($point_adjustment_info) {

			$this->document->setTitle($this->language->get('heading_title_adjustment'));

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_created_by'])) {
				$url .= '&filter_created_by=' . urlencode(html_entity_decode($this->request->get['filter_created_by'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_modified_by'])) {
				$url .= '&filter_modified_by=' . urlencode(html_entity_decode($this->request->get['filter_modified_by'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}
	
			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}
	
			if (isset($this->request->get['filter_date_modified'])) {
				$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
			}
	
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
	
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title_adjustment'),
				'href' => $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url, true)
			);

			$data['can_update'] = $point_adjustment_info['status'] == 'pending' && in_array($this->user->getId(), $this->config->get('config_point_approver_id') ?? []);
			$data['cancel'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url, true);

			$data['user_token'] = $this->session->data['user_token'];

			$data['customer_point_adjustment_id'] = $point_adjustment_info['customer_point_adjustment_id'];
			$data['customer_name'] = $point_adjustment_info['name'];
			$data['created_by'] = $point_adjustment_info['created_by_name'];
			$data['modified_by'] = $point_adjustment_info['modified_by_name'] ?? '-';
			$data['description'] = $point_adjustment_info['description'];
			$data['points'] = number_format($point_adjustment_info['points']);
			$data['remark'] = $point_adjustment_info['remark'];
			$data['status'] = ucfirst($point_adjustment_info['status']);
			$data['date_modified'] = $point_adjustment_info['date_modified'] ? date($this->language->get('datetime_format'), strtotime($point_adjustment_info['date_modified'])) : '-';
			$data['date_added'] = date($this->language->get('datetime_format'), strtotime($point_adjustment_info['date_added']));

			$data['modal_update_adjustment'] = $this->url->link($this->module . '/modalUpdatePointAdjustmentStatus', '', true);
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');

			$this->response->setOutput($this->load->view($this->module . '_adjustment_info', $data));
		} else {
			return new Action('error/not_found');
		}
	}

	public function deletePointAdjustment() {
		$this->load->language($this->module);

		$this->document->setTitle($this->language->get('heading_title_adjustment'));

		$this->load->model($this->module);

		if (isset($this->request->post['selected']) && $this->validateDeletePointAdjustment()) {
			foreach ($this->request->post['selected'] as $customer_point_adjustment_id) {
				$this->epoint->deletePointAdjustment($customer_point_adjustment_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_created_by'])) {
				$url .= '&filter_created_by=' . urlencode(html_entity_decode($this->request->get['filter_created_by'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_modified_by'])) {
				$url .= '&filter_modified_by=' . urlencode(html_entity_decode($this->request->get['filter_modified_by'], ENT_QUOTES, 'UTF-8'));
			}
	
			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}
	
			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}
	
			if (isset($this->request->get['filter_date_modified'])) {
				$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
			}
	
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
	
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		$this->getPointAdjustmentList();
	}

	public function approvePointAdjustment() {
		$json = $this->updatePointAdjustmentStatus($this->request->post['customer_point_adjustment_id'], 'approved', $this->user->getId());
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function rejectPointAdjustment() {
		$json = $this->updatePointAdjustmentStatus($this->request->post['customer_point_adjustment_id'], 'rejected', $this->user->getId());
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	protected function updatePointAdjustmentStatus($point_adjustment_id, $status, $modified_by) {
		$json = array();

		if (!$this->user->hasPermission('access', 'extension/total/point')) {
			$json['error'] = $this->language->get('error_permission_adjustment');
		} else {
			$this->load->model($this->module);
			$this->load->language($this->module);

			$point_adjustment = $this->epoint->updatePointAdjustmentStatus($point_adjustment_id, $status, $modified_by);

			$datetime_format = $this->request->post['type'] == 'info' ? 'datetime_format' : 'date_format_short';

			$json['success'] = $this->language->get('text_adjustment_update_success');
			$json['modified_by'] = $point_adjustment['modified_by'];
			$json['modified_by_name'] = $point_adjustment['modified_by_name'];
			$json['status'] = ucfirst($point_adjustment['status']);
			$json['date_modified'] = date($this->language->get($datetime_format), strtotime($point_adjustment['date_modified']));
		}
		return $json;
	}

	public function modalUpdatePointAdjustmentStatus() {
		$this->load->language($this->module);

		$this->load->model($this->module);

		$data = array();

		$status = $this->request->get['status'];
		$data['customer_point_adjustment_id'] = $this->request->get['customer_point_adjustment_id'] ?? null;
		$data['user_token'] = $this->session->data['user_token'];
		$data['type'] = $this->request->get['type'] ?? 'list';

		if($status == 'approved') {
			$data['heading_title'] = $this->language->get('text_approve_adjustment');
			$data['action'] = $this->url->link($this->module . '/approvePointAdjustment', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['heading_title'] = $this->language->get('text_reject_adjustment');
			$data['action'] = $this->url->link($this->module . '/rejectPointAdjustment', 'user_token=' . $this->session->data['user_token'], true);
		}
		$this->response->setOutput($this->load->view($this->module . '_adjustment_update_modal', $data));
	}

	protected function getPointAdjustmentList() {
		$data['heading_title'] = $this->language->get('heading_title_adjustment');
		$data['text_list'] = $this->language->get('text_point_adjustment_list');

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_created_by'])) {
			$filter_created_by = $this->request->get['filter_created_by'];
		} else {
			$filter_created_by = '';
		}

		if (isset($this->request->get['filter_modified_by'])) {
			$filter_modified_by = $this->request->get['filter_modified_by'];
		} else {
			$filter_modified_by = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = '';
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$filter_date_modified = $this->request->get['filter_date_modified'];
		} else {
			$filter_date_modified = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'cpa.date_added';
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

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_created_by'])) {
			$url .= '&filter_created_by=' . urlencode(html_entity_decode($this->request->get['filter_created_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_modified_by'])) {
			$url .= '&filter_modified_by=' . urlencode(html_entity_decode($this->request->get['filter_modified_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title_adjustment'),
			'href' => $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link($this->module . '/addPointAdjustment', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link($this->module . '/deletePointAdjustment', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['point_adjustments'] = array();

		$filter_data = array(
			'filter_name'       	=> $filter_name,
			'filter_created_by'     => $filter_created_by,
			'filter_modified_by'    => $filter_modified_by,
			'filter_status'     	=> $filter_status,
			'filter_date_added' 	=> $filter_date_added,
			'filter_date_modified' 	=> $filter_date_modified,
			'sort'              	=> $sort,
			'order'             	=> $order,
			'start'             	=> ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'             	=> $this->config->get('config_limit_admin')
		);

		$point_adjustment_total = $this->{$this->model_module}->getTotalPointAdjustments($filter_data);

		$results = $this->{$this->model_module}->getPointAdjustments($filter_data);

		foreach ($results as $result) {
			$data['point_adjustments'][] = array(
				'customer_point_adjustment_id' => $result['customer_point_adjustment_id'],
				'customer_point_id' 	 => $result['customer_point_id'] ?? '-',
				'name'              	 => $result['name'],
				'points'            	 => number_format($result['points']),
				'status'            	 => ucfirst($result['status']),
				'created_by_name'        => $result['created_by_name'],
				'modified_by_name'       => $result['modified_by_name'] ? $result['modified_by_name'] : '-',
				'can_update'      		 => $result['status'] == 'pending' && in_array($this->user->getId(), $this->config->get('config_point_approver_id') ?? []),
				'date_added'        	 => $result['date_added'] ?  date($this->language->get('date_format_short'), strtotime($result['date_added'])) : '-',
				'date_modified'        	 => $result['date_modified'] ? date($this->language->get('date_format_short'), strtotime($result['date_modified'])) : '-',
				'view'              	 => $this->url->link($this->module . '/adjustmentInfo', 'user_token=' . $this->session->data['user_token'] . '&customer_point_adjustment_id=' . $result['customer_point_adjustment_id'], true)
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

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_created_by'])) {
			$url .= '&filter_created_by=' . urlencode(html_entity_decode($this->request->get['filter_created_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_modified_by'])) {
			$url .= '&filter_modified_by=' . urlencode(html_entity_decode($this->request->get['filter_modified_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_customer_point_id'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=cpa.customer_point_id' . $url, true);
		$data['sort_points'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=cpa.points' . $url, true);
		$data['sort_status'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=cpa.status' . $url, true);
		$data['sort_created_by'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=created_by_name' . $url, true);
		$data['sort_modified_by'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=modified_by_name' . $url, true);
		$data['sort_date_added'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=cpa.date_added' . $url, true);
		$data['sort_date_modified'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . '&sort=cpa.date_modified' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_created_by'])) {
			$url .= '&filter_created_by=' . urlencode(html_entity_decode($this->request->get['filter_created_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_modified_by'])) {
			$url .= '&filter_modified_by=' . urlencode(html_entity_decode($this->request->get['filter_modified_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $point_adjustment_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($point_adjustment_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($point_adjustment_total - $this->config->get('config_limit_admin'))) ? $point_adjustment_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $point_adjustment_total, ceil($point_adjustment_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] 			= $filter_name;
		$data['filter_created_by'] 		= $filter_created_by;
		$data['filter_modified_by']		= $filter_modified_by;
		$data['filter_status'] 			= $filter_status;
		$data['filter_date_added'] 		= $filter_date_added;
		$data['filter_date_modified'] 	= $filter_date_modified;

		$data['module'] = $this->module;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['autocomplete_name'] = $this->url->link($this->module . '/autocompleteName','', true);
		$data['filter_url'] = $this->url->link($this->module . '/adjustment', '', true);
		$data['modal_update_adjustment'] = $this->url->link($this->module . '/modalUpdatePointAdjustmentStatus', '', true);
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->module . '_adjustment_list', $data));
	}

	protected function getPointAdjustmentForm() {
		$data['text_form'] = $this->language->get('text_add_adjustment');

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['customer'])) {
			$data['error_customer'] = $this->error['customer'];
		} else {
			$data['error_customer'] = '';
		}

		if (isset($this->error['description'])) {
			$data['error_description'] = $this->error['description'];
		} else {
			$data['error_description'] = '';
		}

		if (isset($this->error['points'])) {
			$data['error_points'] = $this->error['points'];
		} else {
			$data['error_points'] = '';
		}

		if (isset($this->error['remark'])) {
			$data['error_remark'] = $this->error['remark'];
		} else {
			$data['error_remark'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_created_by'])) {
			$url .= '&filter_created_by=' . urlencode(html_entity_decode($this->request->get['filter_created_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_modified_by'])) {
			$url .= '&filter_modified_by=' . urlencode(html_entity_decode($this->request->get['filter_modified_by'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_add_adjustment'),
			'href' => $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['action'] = $this->url->link($this->module . '/addPointAdjustment', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['cancel'] = $this->url->link($this->module . '/adjustment', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$this->load->model($this->module);

		if (isset($this->request->post['customer_id'])) {
			$data['customer_id'] = $this->request->post['customer_id'];
		} else {
			$data['customer_id'] = '';
		}

		if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];
		} else {
			$data['description'] = '';
		}

		if (isset($this->request->post['points'])) {
			$data['points'] = $this->request->post['points'];
		} else {
			$data['points'] = '';
		}

		if (isset($this->request->post['remark'])) {
			$data['remark'] = $this->request->post['remark'];
		} else {
			$data['remark'] = '';
		}

		$data['autocomplete_name'] = $this->url->link($this->module . '/autocompleteName','', true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->module . '_adjustment_form', $data));
	}

	protected function validateAdjustmentForm() {
		if (!$this->user->hasPermission('access', 'extension/total/point')) {
			$this->error['warning'] = $this->language->get('error_permission_adjustment');
		}

		if (empty($this->request->post['customer_id'])) {
			$this->error['customer'] = $this->language->get('error_customer');
		}

		if (empty($this->request->post['description'])) {
			$this->error['description'] = $this->language->get('error_description');
		}

		if ((int)$this->request->post['points'] == 0) {
			$this->error['points'] = $this->language->get('error_points');
		}

		if (empty($this->request->post['remark'])) {
			$this->error['remark'] = $this->language->get('error_remark');
		}

		return !$this->error;
	}

	public function validateDeletePointAdjustment() {
		if (!$this->user->hasPermission('access', 'extension/total/point')) {
			$this->error['warning'] = $this->language->get('error_permission_adjustment');
		}

		$this->load->model($this->module);

		$count_approved = 0;
		$count_rejected = 0;

		foreach ($this->request->post['selected'] as $customer_point_adjustment_id) {
			$point_adjustment_info = $this->epoint->getPointAdjustment($customer_point_adjustment_id);

			if ($point_adjustment_info['status'] == 'approved') {
				$count_approved++;
			} else if ($point_adjustment_info['status'] == 'rejected') {
				$count_rejected++;
			}
		}

		if ($count_approved > 0 || $count_rejected > 0) {
			$this->error['warning'] = $this->language->get('error_delete_point_adjustment');
		}

		return !$this->error;
	}

	public function autocompleteName() {
		$json = array();

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_created_by']) || isset($this->request->get['filter_modified_by'])) {
			$this->load->model('customer/customer');
			$this->load->model('user/user');
			$this->load->model($this->module);

			$filter_data = array(
				'start' => 0,
				'limit' => 5
			);

			if (isset($this->request->get['filter_name'])) {
				$filter_data['filter_name'] = $this->request->get['filter_name'];
				$results = $this->model_customer_customer->getCustomers($filter_data);
			} else if (isset($this->request->get['filter_created_by'])) {
				$filter_data['filter_username'] = $this->request->get['filter_created_by'];
				$results = $this->model_user_user->getUsers($filter_data);
			} else if (isset($this->request->get['filter_modified_by'])) {
				$filter_data['filter_username'] = $this->request->get['filter_modified_by'];
				$results = $this->model_user_user->getUsers($filter_data);
			}

			if (isset($this->request->get['filter_name'])) {
				foreach ($results as $result) {
					$json[] = array(
						'customer_id'       => $result['customer_id'],
						'customer_group_id' => $result['customer_group_id'],
						'name'              => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
						'customer_group'    => $result['customer_group'],
						'firstname'         => $result['firstname'],
						'lastname'          => $result['lastname'],
						'email'             => $result['email'],
						'telephone'         => $result['telephone'],
						'custom_field'      => json_decode($result['custom_field'], true),
						'address'           => $this->model_customer_customer->getAddresses($result['customer_id'])
					);
				}

				$sort_order = array();

				foreach ($json as $key => $value) {
					$sort_order[$key] = $value['name'];
				}
			} else {
				foreach ($results as $result) {
					$json[] = array(
						'user_id'       => $result['user_id'],
						'user_group_id' => $result['user_group_id'],
						'username'      => $result['username'],
						'firstname'     => $result['firstname'],
						'lastname'      => $result['lastname'],
						'email'         => $result['email'],
					);
				}

				$sort_order = array();

				foreach ($json as $key => $value) {
					$sort_order[$key] = $value['username'];
				}
			}
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function customers() {
		$this->load->language($this->module);

		$this->document->setTitle($this->language->get('heading_title_customer_list'));
		$data['heading_title'] = $this->language->get('heading_title_customer_list');

		$this->load->model($this->module);

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_debtor_code'])) {
			$filter_debtor_code = $this->request->get['filter_debtor_code'];
		} else {
			$filter_debtor_code = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'total';
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

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_debtor_code'])) {
			$url .= '&filter_debtor_code=' . urlencode(html_entity_decode($this->request->get['filter_debtor_code'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title_customer_list'),
			'href' => $this->url->link($this->module . '/customers', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['points'] = array();

		$filter_data = array(
			'filter_name'       => $filter_name,
			'filter_debtor_code'       => $filter_debtor_code,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$results_total = $this->{$this->model_module}->getTotalCustomersTotalPoint($filter_data);

		$results = $this->{$this->model_module}->getCustomersTotalPoint($filter_data);

		foreach ($results as $result) {
			$data['points'][] = array(
				'name'              => $result['name'],
				'total'            	=> number_format($result['total']),
				'view'              => $this->url->link($this->module . '/transaction', 'user_token=' . $this->session->data['user_token'] . '&filter_name='. urlencode(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')), true)
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link($this->module . '/customers', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_points'] = $this->url->link($this->module . '/customers', 'user_token=' . $this->session->data['user_token'] . '&sort=total' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $results_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->module . '/customers', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($results_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($results_total - $this->config->get('config_limit_admin'))) ? $results_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $results_total, ceil($results_total / $this->config->get('config_limit_admin')));

		$data['total_points'] = number_format($this->{$this->model_module}->getTotalExistingPoints());

		$data['filter_name'] = $filter_name;

		$data['module'] = $this->module;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->module . '_customer_list', $data));
	}

	public function customer() {
		$this->load->language($this->module);

		$this->load->model($this->module);

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['point_transactions'] = array();

		$filter_data = array(
			'filter_customer_id' => $this->request->get['customer_id'],
			'start'           => ($page - 1) * 10,
			'limit'           => 10
		);

		$results = $this->{$this->model_module}->getPointTransactions($filter_data);

		foreach ($results as $result) {
			$data['point_transactions'][] = array(
				'points'      => number_format($result['points']),
				'description' => $result['description'],
				'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$data['balance'] = number_format($this->epoint->getCustomerPoint($this->request->get['customer_id']));
		$data['text_total_points'] = sprintf($this->language->get('text_total_points'), $data['balance']);

		$results_total = $this->{$this->model_module}->getTotalPointTransactions($filter_data);

		$pagination = new Pagination();
		$pagination->total = $results_total;
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link($this->module . '/customer', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $this->request->get['customer_id'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($results_total) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($results_total - 10)) ? $results_total : ((($page - 1) * 10) + 10), $results_total, ceil($results_total / 10));

		$this->response->setOutput($this->load->view($this->module . '_customer', $data));
	}

	private function updatePointsExpire($old_conditions, $new_conditions) {
		foreach ($new_conditions as $customer_group_id => $new_condition) {
			if ($new_condition['point_expiry_month'] != $old_conditions[$customer_group_id]['point_expiry_month']) {
				$customers = $this->epoint->getCustomersByGroup($customer_group_id);
				foreach ($customers as $customer) {
					if (!$new_condition['point_expiry_month'] || !$customer['points']) {
						// If renewal is removed
						$new_renewal_date = '';
					} else {
						$latest_point_award = $this->epoint->getLatestPointAward($customer['customer_id']);
						if ($latest_point_award) {
							$new_renewal_date = date('Y-m-d', strtotime($latest_point_award['date_added'] . '+' . $new_condition['point_expiry_month'] . ' months'));
						} else {
							$new_renewal_date = date('Y-m-d', strtotime('+' . $new_condition['point_expiry_month'] . ' months'));
						}

					}

					$this->epoint->setCustomerExpiredPoints($customer['customer_id'], $new_renewal_date);
				}
			}
		}
	}

	public function syncPoint(){
		$acilit_loader = new AcilitLoader($this->registry);

		$acilit = $acilit_loader->loadAcilit();

		$acilit_point =$this->acilit_point = new AcilitPoint($this->registry);

		$data['ContactNo'] = '601119891036';
		
		$response = $acilit_point->syncPoint($data);

		dd($response);


	}
}