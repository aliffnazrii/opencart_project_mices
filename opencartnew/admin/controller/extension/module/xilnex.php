<?php

use Jobs\PushOrder;
use Xilnex\Xilnex;
use Xilnex\XilnexMember;
use xilnex\XilnexProduct;
use xilnex\XilnexModel;
use queue\Dispatcher;
use jobs\SyncOrder;
use jobs\UpdateInventory;
use Xilnex\XilnexLoader;
use Xilnex\XilnexOrder;
use Xilnex\XilnexOutlet;

class ControllerExtensionModuleXilnex extends Controller {

    private $module = 'extension/module/xilnex';
	private $error = array();
    private $model_module = 'model_extension_module_xilnex';
    private $token = 'user_token';
    private $code = 'module_xilnex';

    public function __construct($registry) {
        parent::__construct($registry);

        $this->xilnex_outlet = new XilnexOutlet($this->registry);

        $this->xilnex_member = new XilnexMember($this->registry);
        $this->xilnex_model = new XilnexModel($this->registry);
    }

    public function install() {
        $this->load->model($this->module);
        $this->{$this->model_module}->install();
    }

    public function index() {
        $this->load->language($this->module);

        $this->load->model('setting/setting');
        $this->load->model($this->module);

        if (($this->request->server['REQUEST_METHOD'] == "POST") ) {
			$old_conditions = $this->config->get($this->code . '_membership_tier');
			$new_conditions = $this->request->post[$this->code . '_membership_tier'];
            $this->model_setting_setting->editSetting($this->code, $this->request->post);

			$this->updateCustomerRenewal($old_conditions, $new_conditions);

            $this->session->data['success'] = $this->language->get('text_success');
        } 
        
        $this->document->setTitle($this->language->get('heading_title'));

        $data['user_token'] = $this->session->data[$this->token];

        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/exntension', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->module, 'user_token=' . $this->session->data['user_token'], true)
		);

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

        $this->load->model('customer/customer_group');
		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$this->load->model('localisation/order_status');
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$data['outlets'] = $this->{$this->model_module}->getAllOutlets();

        $fields = array(
			// General
			'_appid', 
			'_token', 
			'_auth', 
			'_status', 

			// Customer
			'_default_customer_outlet', 
			'_membership_tier',
			'_membership_upgrade_status',
			'_membership_renew_status',
			'_sync_customer_status',

			// Order
			'_pull_order_date', 
			'_order_sync_status', 
			'_order_complete_status', 
			'_order_canceled_status', 
			'_shipping_item_code',
			'_push_order_outlet',
			'_allow_membership_w_coupon',
			'_alert_order_fail',
			'_alert_order_fail_email',

			// Product
			'_sync_product_quantity_outlet',
			'_sync_product_status',
			'_prioritize_product_special',
		);

		foreach($fields as $field) {
			if (isset($this->request->post[$this->code . $field])) {
				$data[$this->code . $field] = $this->request->post[$this->code . $field];
			} else {
				$data[$this->code . $field] = $this->config->get($this->code . $field);
			}
		}

		$data['customer_types'] = $this->xilnex_model->getCustomerTypes();

        $data['action'] = $this->url->link($this->module, $this->token . '=' . $this->session->data[$this->token], true);
		$data['pull_settings_url'] = $this->url->link($this->module . '/pullSettings', $this->token . '=' . $this->session->data[$this->token], true);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->module, $data));
    }

	public function outlet() {
		$this->load->language($this->module);

        $this->load->model('setting/setting');
        $this->load->model($this->module);

        $this->document->setTitle($this->language->get('heading_title_outlet'));

        $data['heading_title'] = $this->language->get('heading_title_outlet');

        $data['user_token'] = $this->session->data[$this->token];

        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/exntension', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketplace/exntension/xilnex/outlet', 'user_token=' . $this->session->data['user_token'], true)
		);

		$outlets = $this->{$this->model_module}->getAllOutlets();
		foreach($outlets as $outlet){
			$data['outlets'][] = array(
				'xilnex_outlet_id' => $outlet['xilnex_outlet_id'],
				'name' => $outlet['name'],
				'location_id' => $outlet['location_id'],
			);
		}

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->module . '_outlet', $data));
	}

	public function order() {
		$this->load->language($this->module);
        $this->load->model('setting/setting');
        $this->load->model($this->module);
		
        $this->document->setTitle($this->language->get('heading_title_order'));

        $data['heading_title'] = $this->language->get('heading_title_order');

        $data['user_token'] = $this->session->data[$this->token];

        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/exntension', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketplace/exntension/xilnex/order', 'user_token=' . $this->session->data['user_token'], true)
		);

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
		
        // Orders
        if (isset($this->request->get['filter_order_id'])) {
			$filter_order_id = $this->request->get['filter_order_id'];
		} else {
			$filter_order_id = '';
		}

		if (isset($this->request->get['filter_xilnex_order_id'])) {
			$filter_xilnex_order_id = $this->request->get['filter_xilnex_order_id'];
		} else {
			$filter_xilnex_order_id = '';
		}

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = '';
		}

		if (isset($this->request->get['filter_sales_date'])) {
			$filter_sales_date = $this->request->get['filter_sales_date'];
		} else {
			$filter_sales_date = '';
		}

		if (isset($this->request->get['filter_has_error'])) {
			$filter_has_error = $this->request->get['filter_has_error'];
		} else {
			$filter_has_error = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'o.order_id';
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

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_xilnex_order_id'])) {
			$url .= '&filter_xilnex_order_id=' . $this->request->get['filter_xilnex_order_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_sales_date'])) {
			$url .= '&filter_sales_date=' . $this->request->get['filter_sales_date'];
		}

		if (isset($this->request->get['filter_has_error'])) {
			$url .= '&filter_has_error=' . $this->request->get['filter_has_error'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		// if (isset($this->request->get['page'])) {
		// 	$url .= '&page=' . $this->request->get['page'];
		// }

        $filter_data = array(
			'filter_order_id'        => $filter_order_id,
			'filter_xilnex_order_id' => $filter_xilnex_order_id,
			'filter_customer'	     => $filter_customer,
			'filter_sales_date'	     => $filter_sales_date,
			'filter_has_error'	     => $filter_has_error,
			'sort'                   => $sort,
			'order'                  => $order,
			'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                  => $this->config->get('config_limit_admin')
		);
        
		$data['orders'] = array();

        $order_total = $this->{$this->model_module}->getTotalOrders($filter_data);

		$results = $this->{$this->model_module}->getOrders($filter_data);

		foreach ($results as $result) {
			$order_resync = '';
			// if (!$result['synced'] && !$result['job_id']) {
			if (!$result['synced']) {
				$order_resync = $this->url->link($this->module . '/resyncOrder', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $result['order_id'], true);
			}

			$data['orders'][] = array(
				'order_id'      => $result['order_id'],
                'xilnex_order_id' => $result['xilnex_order_id'],
				'customer'      => $result['customer'],
				'outlet'      	=> $result['outlet'],
				'order_status'  => $result['status'] ? $result['status'] : '-',
				'job_id'  		=> $result['job_id'],
                'sync_order_status' => $result['synced'] ? 1 : 0,
				'total'         => $this->currency->format($result['total'], $this->config->get('config_currency')),
				'error'         => htmlentities($result['error']),
				'date_added'    => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'date_modified' => date($this->language->get('date_format_short'), strtotime($result['date_modified'])),
				'sales_date' 	=> $result['sales_date'] == '0000-00-00 00:00:00' ? '-' : date($this->language->get('date_format_short'), strtotime($result['sales_date'])),
				'view'          => $this->url->link('sale/order/info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $result['order_id'], true),
				'resync'		=> $order_resync,
			);
		}

        $pagination = new Pagination();
		$pagination->total = $order_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_xilnex_order_id'])) {
			$url .= '&filter_xilnex_order_id=' . $this->request->get['filter_xilnex_order_id'];
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_sales_date'])) {
			$url .= '&filter_sales_date=' . $this->request->get['filter_sales_date'];
		}

		if (isset($this->request->get['filter_has_error'])) {
			$url .= '&filter_has_error=' . $this->request->get['filter_has_error'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_order_id'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.order_id' . $url, true);
		$data['sort_xilnex_order_id'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.xilnex_order_id' . $url, true);
		$data['sort_customer'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=customer' . $url, true);
		$data['sort_total'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.total' . $url, true);
		$data['sort_sales_date'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.sales_date' . $url, true);
		$data['sort_date_added'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.date_added' . $url, true);

		$data['filter_order_id'] = $filter_order_id;
		$data['filter_xilnex_order_id'] = $filter_xilnex_order_id;
		$data['filter_customer'] = $filter_customer;
		$data['filter_sales_date'] = $filter_sales_date;
		$data['filter_has_error'] = $filter_has_error;

		$data['sort'] = $sort;
		$data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->module . '_order', $data));
	}

	public function productOutlets() {
		$this->load->language($this->module);
        $this->load->model($this->module);
		
        $this->document->setTitle($this->language->get('heading_title_outlet_products'));

        $data['heading_title'] = $this->language->get('heading_title_outlet_products');

        $data['user_token'] = $this->session->data[$this->token];

        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/exntension', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketplace/exntension/xilnex/productOutlets', 'user_token=' . $this->session->data['user_token'], true)
		);

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
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'date_added';
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

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		// if (isset($this->request->get['page'])) {
		// 	$url .= '&page=' . $this->request->get['page'];
		// }

        $filter_data = array(
			'sort'                   => $sort,
			'order'                  => $order,
			'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                  => $this->config->get('config_limit_admin')
		);
        
		$data['products'] = array();

        $product_total = $this->{$this->model_module}->getTotalProductOutlets($filter_data);

		$results = $this->{$this->model_module}->getProductOutlets($filter_data);

		foreach ($results as $result) {
			$data['products'][] = array(
				'xilnex_product_outlet_id'	=> $result['xilnex_product_outlet_id'],
				'xilnex_location_id' 	=> $result['xilnex_location_id'],
				'product_id'      		=> $result['product_id'],
				'product_option_value_id' => $result['product_option_value_id'],
				'option' 				=> $result['option_name'] ?? '-',
				'product'      			=> $result['product'],
				'model'      			=> $result['item_code'],
				'outlet'      			=> $result['outlet'],
				'xilnex_item_id'    	=> $result['xilnex_item_id'],
				'price'      			=> $result['xilnex_sales_price'],
				'quantity'    			=> $result['xilnex_quantity'],
				'date_added'    		=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'date_modified'    		=> date($this->language->get('date_format_short'), strtotime($result['date_modified'])),
			);
		}

        $pagination = new Pagination();
		$pagination->total = $product_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->module . '/productOutlets', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->module . '_products', $data));
	}

	public function inventory() {
		$this->load->language($this->module);
        $this->load->model($this->module);
		
        $this->document->setTitle($this->language->get('heading_title_inventory'));

        $data['heading_title'] = $this->language->get('heading_title_inventory');

        $data['user_token'] = $this->session->data[$this->token];

        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/exntension', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketplace/exntension/xilnex/inventory', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (isset($this->request->get['filter_model'])) {
			$filter_model = $this->request->get['filter_model'];
		} else {
			$filter_model = '';
		}

		if (isset($this->request->get['filter_start_date'])) {
			$filter_start_date = $this->request->get['filter_start_date'];
		} else {
			$filter_start_date = '';
		}

		if (isset($this->request->get['filter_end_date'])) {
			$filter_end_date = $this->request->get['filter_end_date'];
		} else {
			$filter_end_date = '';
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
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'date_added';
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

		if (isset($this->request->get['filter_model'])) {
			$url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_start_date'])) {
			$url .= '&filter_start_date=' . $this->request->get['filter_start_date'];
		}

		if (isset($this->request->get['filter_end_date'])) {
			$url .= '&filter_end_date=' . $this->request->get['filter_end_date'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		// if (isset($this->request->get['page'])) {
		// 	$url .= '&page=' . $this->request->get['page'];
		// }

        $filter_data = array(
			'filter_model'           => $filter_model,
			'filter_start_date'      => $filter_start_date,
			'filter_end_date'        => $filter_end_date,
			'sort'                   => $sort,
			'order'                  => $order,
			'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                  => $this->config->get('config_limit_admin')
		);
        
		$data['inventory_logs'] = array();

        $order_total = $this->{$this->model_module}->getTotalInventoryLogs($filter_data);

		$results = $this->{$this->model_module}->getInventoryLogs($filter_data);

		foreach ($results as $result) {
			$data['inventory_logs'][] = array(
				'xilnex_inventory_log_id'      => $result['xilnex_inventory_log_id'],
				'product_id'      	=> $result['product_id'],
				'product_option_value_id'      	=> $result['product_id'],
				'option'      		=> $result['option_name'] ?? '-',
				'product'      		=> $result['product'],
				'model'      		=> $result['option_model'] ?? $result['product_model'],
				'xilnex_item_id'    => $result['xilnex_item_id'],
				'old_quantity'      => $result['old_quantity'],
				'new_quantity'      => $result['new_quantity'],
				'remark'      		=> $result['remark'],
				'date_added'    	=> date('d/m/Y H:i', strtotime($result['date_added'])),
			);
		}

        $pagination = new Pagination();
		$pagination->total = $order_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->module . '/inventory', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['filter_model'] = $filter_model;
		$data['filter_start_date'] = $filter_start_date;
		$data['filter_end_date'] = $filter_end_date;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->module . '_inventory', $data));
	}

	public function tierHistory() {
		$this->load->language($this->module);
        $this->load->model($this->module);
		
        $this->document->setTitle($this->language->get('heading_title_tier_history'));

        $data['heading_title'] = $this->language->get('heading_title_tier_history');

        $data['user_token'] = $this->session->data[$this->token];

        $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/exntension', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->module, 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title_tier_history'),
			'href' => $this->url->link($this->module . '/tierHistory', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = '';
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$filter_customer_id = $this->request->get['filter_customer_id'];
		} else {
			$filter_customer_id = '';
		}

		if (isset($this->request->get['filter_telephone'])) {
			$filter_telephone = $this->request->get['filter_telephone'];
		} else {
			$filter_telephone = '';
		}

		if (isset($this->request->get['filter_start_date'])) {
			$filter_start_date = $this->request->get['filter_start_date'];
		} else {
			$filter_start_date = '';
		}

		if (isset($this->request->get['filter_end_date'])) {
			$filter_end_date = $this->request->get['filter_end_date'];
		} else {
			$filter_end_date = '';
		}

		if (isset($this->request->get['table_only'])) {
			$table_only = (int)$this->request->get['table_only'];
		} else {
			$table_only = 0;
		}
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'date_added';
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

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode(html_entity_decode($this->request->get['filter_customer'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . $this->request->get['filter_customer_id'];
		}

		if (isset($this->request->get['filter_telephone'])) {
			$url .= '&filter_telephone=' . urlencode(html_entity_decode($this->request->get['filter_telephone'], ENT_QUOTES, 'UTF-8'));
		}
		
		if (isset($this->request->get['filter_start_date'])) {
			$url .= '&filter_start_date=' . $this->request->get['filter_start_date'];
		}

		if (isset($this->request->get['filter_end_date'])) {
			$url .= '&filter_end_date=' . $this->request->get['filter_end_date'];
		}

		if (isset($this->request->get['table_only'])) {
			$url .= '&table_only=' . $this->request->get['table_only'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

        $filter_data = array(
			'filter_customer'        => $filter_customer,
			'filter_customer_id'     => $filter_customer_id,
			'filter_telephone'     	 => $filter_telephone,
			'filter_start_date'      => $filter_start_date,
			'filter_end_date'        => $filter_end_date,
			'sort'                   => $sort,
			'order'                  => $order,
			'start'                  => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                  => $this->config->get('config_limit_admin')
		);
        
		$data['customer_group_histories'] = array();

        $history_total = $this->{$this->model_module}->getTotalCustomerGroupHistory($filter_data);

		$results = $this->{$this->model_module}->getCustomerGroupHistory($filter_data);

		foreach ($results as $result) {
			$data['customer_group_histories'][] = array(
				'customer_group_history_id'  	=> $result['customer_group_history_id'],
				'customer_id'      				=> $result['customer_id'],
				'customer'      				=> $result['customer'],
				'telephone'      				=> $result['telephone'],
				'customer_url'      			=> $this->url->link('customer/customer/edit', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $result['customer_id'], true),
				'old_customer_group_id'      	=> $result['old_customer_group_id'],
				'new_customer_group_id'      	=> $result['new_customer_group_id'],
				'old_customer_group'      		=> $result['old_customer_group'],
				'new_customer_group'      		=> $result['new_customer_group'],
				'description'      				=> $result['description'],
				'updated_by'      				=> $result['updated_by'],
				'updated_by_name'      			=> $result['updated_by'] ? $result['updated_by_name'] : 'System',
				'date_added'    				=> date('d/m/Y H:i A', strtotime($result['date_added'])),
			);
		}

        $pagination = new Pagination();
		$pagination->total = $history_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link($this->module . '/tierHistory', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($history_total - $this->config->get('config_limit_admin'))) ? $history_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $history_total, ceil($history_total / $this->config->get('config_limit_admin')));

		$data['filter_customer'] = $filter_customer;
		$data['filter_telephone'] = $filter_telephone;
		$data['filter_start_date'] = $filter_start_date;
		$data['filter_end_date'] = $filter_end_date;
		$data['table_only'] = $table_only;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view($this->module . '_customer_group_history', $data));
	}

	public function validateProduct() {
		$json = array();

		if (!isset($this->request->post['model']) || !$this->request->post['model']) {
			return $this->outputError('Model is Required!');
		}

		$option = array(
			'code' => $this->request->post['model']
		);

		// $result = $this->xilnex->searchItem($option); use dummy data first

		if (isset($result['data']['items']) && count($result['data']['items']) > 0) {
            $xilnex_item = $result['data']['items'][0];

			$param = array(
				'path_para' => $xilnex_item['id'],
			);

			// Get Stocks
			$item_stocks = $this->xilnex->getItemStockByOutletAndId($param);
			$quantity = 0;
			foreach ($item_stocks['data']['stocks'] as $stock) {
				$outlet = $this->xilnex_model->getOutletByNames($stock['outlet']);
				if ($outlet) {
					if (in_array($outlet['location_id'], $this->config->get('module_xilnex_sync_product_quantity_outlet'))) {
						$quantity += $stock['onhandQuantity'];
					}
				}
			}

			$json['model'] = $this->request->post['model'];
			$json['xilnex_item_id'] = $xilnex_item['id'];
			$json['quantity'] = $quantity;
			$json['price'] = $xilnex_item['salesPrice'];
			$json['weight'] = $xilnex_item['weight'];
			$json['length'] = $xilnex_item['length'];
			$json['width'] = $xilnex_item['width'];
			$json['height'] = $xilnex_item['height'];
		}

		$this->output($json);
	}

	public function resyncOrder() {
		$json = array();
		$order_id = isset($this->request->get['order_id']) ? $this->request->get['order_id'] : 0;

		$order = $this->xilnex_model->getOrder($order_id);

		if ($order) {
			$dispatcher = new queue\bus\Dispatcher();

			$customer = $this->xilnex_model->getCustomer($order['customer_id']);
			if (!$customer['xilnex_client_id']) {
				$this->dispatcher->dispatch(new jobs\SyncMember($customer['customer_id']));
			}

			$job = new PushOrder($order['order_id']);
			$job->setRegistry($this->registry);

			$job_id = $dispatcher->dispatch($job);

			$this->xilnex_model->setOrderError($order_id, '');
			$this->xilnex_model->updateXilnexOrderSyncStatus($order_id, 0, $job_id);

			$json['success'] = 'Order Pushed!';
		} else {
			$json['error'] = 'Order Not Found!';
		}

		$this->output($json);
	}

	public function pullSettings() {
        $this->load->language($this->module);
		
		if ($this->config->get($this->code . '_status')) {
			$this->xilnex_outlet->syncOutlet();
			$this->xilnex_member->syncCustomerType();
			$this->session->data['success'] = $this->language->get('text_pull_settings_success');
		} else {
			$this->session->data['error'] = $this->language->get('error_settings_not_pulled');
		}
		$this->response->redirect($this->url->link($this->module, 'user_token=' . $this->session->data['user_token'], true));
	}

	private function outputError($error = 'Error occurred') {
		$json['error'] = $error;
		$this->output($json);
	}

	private function output($json) {
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function updateCustomerRenewal($old_member_conditions, $new_member_conditions) {
		foreach ($new_member_conditions as $customer_group_id => $new_member_condition) {
			if ($new_member_condition['renewal_duration'] != $old_member_conditions[$customer_group_id]['renewal_duration']) {
				$customers = $this->xilnex_model->getCustomersByGroup($customer_group_id);
				foreach ($customers as $customer) {
					if (!$new_member_condition['renewal_duration']) {
						// If renewal is removed
						$this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], null);
					} else {
						// If renewal duration is changed
						if ($customer['last_tier_renewal']) {
							$new_renewal_date = date('Y-m-d', strtotime($customer['last_tier_renewal'] . ' +' . $new_member_condition['renewal_duration'] . ' months'));
							$this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], $new_renewal_date, 0);
						} else {
							$new_renewal_date = date('Y-m-d', strtotime('+' . $new_member_condition['renewal_duration'] . ' months'));
							$this->xilnex_model->updateCustomerTierRenewal($customer['customer_id'], $new_renewal_date, 1);
						}

						// $this->xilnex_member->upgradeMember($customer);
						// $this->xilnex_member->checkRenewalCondition($customer);
					}
				}
			}
		}
	}

	public function tempGetOrderXilnex() {
		$xilnex_loader = new XilnexLoader($this->registry);

        $xilnex = $xilnex_loader->loadXilnex();

		$xilnex_order_id = 90069;
		$xilnex_order = $xilnex->getOrderById($xilnex_order_id, [
			'limit' => 1,
		]);

		dd($xilnex_order);
	}

	public function tempGetCustomerXilnex() {
		$xilnex_loader = new XilnexLoader($this->registry);

        $xilnex = $xilnex_loader->loadXilnex();

		$xilnex_customer_id = 900356;
		$xilnex_customer = $xilnex->getClientById($xilnex_customer_id);

		dd($xilnex_customer);
	}

	public function tempGetCustomer() {
		$sql = "SELECT * FROM `" . DB_PREFIX . "customer` WHERE customer_id = '16134'";
		$query = $this->db->query($sql);

		dd($query->row);
	}

	public function tempOrder() {
		// $sql = "SELECT * FROM `" . DB_PREFIX . "xilnex_jobs` WHERE queue = 'update_stock'";
		// $sql = "SELECT * FROM `" . DB_PREFIX . "xilnex_order` WHERE xilnex_order_id = 0";
		// $sql = "SELECT * FROM `" . DB_PREFIX . "product_option_value` WHERE product_id = 2491";
		$sql = "SELECT * FROM `" . DB_PREFIX . "xilnex_product_outlet` WHERE item_code = '8898-YL-S'";
		
		$query = $this->db->query($sql);
		dd($query->rows);
	}

	public function tempCoupon() {
		// $sql = "SELECT * FROM `" . DB_PREFIX . "coupon` WHERE coupon_id = '3790'";
		$sql = "SELECT * FROM `" . DB_PREFIX . "coupon_jobs`";
		$query = $this->db->query($sql);
		dd($query->rows);
	}

	public function tempCustomer() {
		// $sql = "SELECT * FROM `" . DB_PREFIX . "customer` WHERE customer_id = '16200'";
		$sql = "SELECT customer_id FROM `" . DB_PREFIX . "order` WHERE DATE(date_added) > DATE('" . $this->config->get('module_xilnex_pull_order_date') . "') GROUP BY customer_id";
		$query = $this->db->query($sql);

		$customer_ids = array_column($query->rows, 'customer_id');
		// dd($customer_ids);

		$customer_ids_string = implode(',', $customer_ids);
		$sql = "SELECT * FROM `" . DB_PREFIX . "customer` WHERE customer_id IN (" . $customer_ids_string . ")";
		$query = $this->db->query($sql);

		$upgrade_customer = [];
		foreach ($query->rows as $customer) {
			$upgrade = $this->xilnex_member->checkMemberUpgradeCondition($customer);
			if ($upgrade) {
				$upgrade_customer[] = [
					'customer_id' => $customer['customer_id'],
					'customer_group_id' => $customer['customer_group_id'],
					'new_customer_group_id' => $upgrade,
					'firstname' => $customer['firstname'],
					'lastname' => $customer['lastname'],
				];
			}
		}
		dd($upgrade_customer);

		foreach ($upgrade_customer as $customer) {
			$this->xilnex_member->upgradeMember($customer);
		}


		// $this->xilnex_member->checkMemberUpgradeCondition($query->row);
		// $this->xilnex_member->checkRenewalCondition($query->row);
		
		dd($query->rows);
	}

	protected function getUniqueCodes($loop_count) {
		$chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$codes = array();

		for ($k = 0; $k < $loop_count; $k++) {
			$code  = '';

			for ($i = 0; $i < 5; $i++) {
				$code .= $chars[mt_rand(0, strlen($chars) - 1)];
			}

			if (in_array($code, $codes)) {
				$loop_count++;
			} else {
				$codes[] = $code;
			}
		}

		return $codes;
	}

	private function saveToFile($data, $file_name) {
		// Path to your JSON file
		$file = $file_name . '.json';

		// Check if the file exists
		if (file_exists($file)) {
			// Get the existing content
			$jsonData = file_get_contents($file);
			
			// Decode the JSON data into an array
			$dataArray = json_decode($jsonData, true);

			// Handle cases where the file is empty or invalid JSON
			if (!is_array($dataArray)) {
				$dataArray = array();
			}
		} else {
			// If the file doesn't exist, create a new array
			$dataArray = array();
		}

		// Add new data to the array
		$dataArray = array_merge($dataArray, $data);

		// Encode the array back to JSON
		$jsonData = json_encode($dataArray, JSON_PRETTY_PRINT);

		// Write the updated JSON back to the file
		if (file_put_contents($file, $jsonData)) {
			// echo "Data successfully added to JSON file.";
		} else {
			// echo "Error writing data to JSON file.";
		}
	}
}