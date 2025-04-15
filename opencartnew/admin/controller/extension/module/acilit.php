<?php

	use Jobs\PushOrder;
	use Acilit\Acilit;
	use Acilit\AcilitMember;
	use acilit\AcilitProduct;
	use acilit\AcilitModel;
	use queue\Dispatcher;
	use jobs\SyncOrder;
	use jobs\UpdateInventory;
	use Acilit\AcilitLoader;
	use Acilit\AcilitOrder;
	use Acilit\AcilitOutlet;

	class Controllerextensionmoduleacilit extends Controller
	{

		private $module = 'extension/module/acilit';
		private $error = array();
		private $model_module = 'model_extension_module_acilit';
		private $token = 'user_token';
		private $code = 'module_acilit';

		public function __construct($registry)
		{
			parent::__construct($registry);

			// $this->acilit_outlet = new AcilitOutlet($this->registry);

			$this->acilit_member = new AcilitMember($this->registry);
			$this->acilit_model = new AcilitModel($this->registry);
		}

		public function install()
		{
			$this->load->model($this->module);
			$this->{$this->model_module}->install();

			
		}

		public function installExtraColumn()
		{
			// Check and add columns to coupon table
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "coupon LIKE 'acilit_voucher_id'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "coupon ADD COLUMN acilit_voucher_id varchar(255) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "coupon LIKE 'customer_id'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "coupon ADD COLUMN customer_id int(11) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "coupon LIKE 'voucher_id'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "coupon ADD COLUMN voucher_id varchar(255) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "coupon LIKE 'voucher_serialNo'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "coupon ADD COLUMN voucher_serialNo varchar(255) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "coupon LIKE 'mapping'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "coupon ADD COLUMN mapping int(11) DEFAULT 0");
			}

			// Check and add columns to product table
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product LIKE 'pointRedeem'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "product ADD COLUMN pointRedeem int(11) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product LIKE 'category'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "product ADD COLUMN category varchar(255) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product LIKE 'is_voucher'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "product ADD COLUMN is_voucher tinyint(1) DEFAULT 0");
			}

			// Check and add column to customer table
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer LIKE 'acilit_uid'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "customer ADD COLUMN acilit_uid varchar(255) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "coupon LIKE 'acilit_uid'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "coupon ADD COLUMN acilit_uid varchar(255) DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "coupon LIKE 'qr_made_at'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "coupon ADD COLUMN qr_made_at TIMESTAMP DEFAULT NULL");
			}
			if (!$this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "customer LIKE 'qr_made_at'")->num_rows) {
				$this->db->query("ALTER TABLE " . DB_PREFIX . "customer ADD COLUMN qr_made_at TIMESTAMP DEFAULT NULL");
			}
		}

		public function index()
		{
			$this->load->language($this->module);

			$this->load->model('setting/setting');
			$this->load->model($this->module);

			if (($this->request->server['REQUEST_METHOD'] == "POST")) {

				$this->model_setting_setting->editSetting($this->code, $this->request->post);


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
				'_username',
				'_password',
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
				'_sync_voucher_status',
				'_sync_point_status',
				'_prioritize_product_special',
			);

			foreach ($fields as $field) {
				if (isset($this->request->post[$this->code . $field])) {
					$data[$this->code . $field] = $this->request->post[$this->code . $field];
				} else {
					$data[$this->code . $field] = $this->config->get($this->code . $field);
				}
			}


			$data['action'] = $this->url->link($this->module, $this->token . '=' . $this->session->data[$this->token], true);
			$data['pull_settings_url'] = $this->url->link($this->module . '/pullSettings', $this->token . '=' . $this->session->data[$this->token], true);

			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');

			$this->response->setOutput($this->load->view($this->module, $data));
		}

	

		public function order()
		{
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
				'href' => $this->url->link('marketplace/exntension/acilit/order', 'user_token=' . $this->session->data['user_token'], true)
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

			if (isset($this->request->get['filter_acilit_order_id'])) {
				$filter_acilit_order_id = $this->request->get['filter_acilit_order_id'];
			} else {
				$filter_acilit_order_id = '';
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

			if (isset($this->request->get['filter_acilit_order_id'])) {
				$url .= '&filter_acilit_order_id=' . $this->request->get['filter_acilit_order_id'];
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
				'filter_acilit_order_id' => $filter_acilit_order_id,
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
					'acilit_order_id' => $result['acilit_order_id'],
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

			if (isset($this->request->get['filter_acilit_order_id'])) {
				$url .= '&filter_acilit_order_id=' . $this->request->get['filter_acilit_order_id'];
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
			$data['sort_acilit_order_id'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.acilit_order_id' . $url, true);
			$data['sort_customer'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=customer' . $url, true);
			$data['sort_total'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.total' . $url, true);
			$data['sort_sales_date'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.sales_date' . $url, true);
			$data['sort_date_added'] = $this->url->link($this->module . '/order', 'user_token=' . $this->session->data['user_token'] . '&sort=xo.date_added' . $url, true);

			$data['filter_order_id'] = $filter_order_id;
			$data['filter_acilit_order_id'] = $filter_acilit_order_id;
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

		public function inventory()
		{
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
				'href' => $this->url->link('marketplace/exntension/acilit/inventory', 'user_token=' . $this->session->data['user_token'], true)
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
					'acilit_inventory_log_id'      => $result['acilit_inventory_log_id'],
					'product_id'      	=> $result['product_id'],
					'product_option_value_id'      	=> $result['product_id'],
					'option'      		=> $result['option_name'] ?? '-',
					'product'      		=> $result['product'],
					'model'      		=> $result['option_model'] ?? $result['product_model'],
					'acilit_item_id'    => $result['acilit_item_id'],
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

	

		public function validateProduct()
		{
			$json = array();

			if (!isset($this->request->post['model']) || !$this->request->post['model']) {
				return $this->outputError('Model is Required!');
			}

			$model = $this->request->post['model'];

			$option = array(
				'page' => 1,
				'pageSize' => 10,
				'itemfilter' => $model,

			);


			$result = $this->acilit->getSKUs($option);
			// dd($result = $this->acilit->getSKUs($option));



			if (isset($result[0]['Barcode']) && count($result) >0 ) {
				$acilit_item = $result;

				$json['model'] =  $this->request->post['model'];
				// $json['acilit_item_id'] = $acilit_item['id'] ? $acilit_item['id'] : '';
				$json['quantity'] = 2;
				$json['price'] = $result[0]['NormalPrice'];
				$json['product_description'] = $result[0]['LongDesc'];
				$json['item_code'] = $result[0]['Item_Code'];
				$json['acilit_item_id'] = $result[0]['Barcode'];
				$json['name'] = $result[0]['LongDesc'];
				$json['description'] = $result[0]['LongDesc'];
				
				// $this->load->model('catalog/product');
				// $this->model_catalog_product->editProduct($this->request->get['product_id'], $result[0]);


				$this->output($json);
			} else {
				return $this->outputError('Model Not Found');
				$this->output('error my bro');
			}
		}
		

		// public function resyncOrder()
		// {
		// 	$json = array();
		// 	$order_id = isset($this->request->get['order_id']) ? $this->request->get['order_id'] : 0;

		// 	$order = $this->acilit_model->getOrder($order_id);

		// 	if ($order) {
		// 		$dispatcher = new queue\bus\Dispatcher();

		// 		$customer = $this->acilit_model->getCustomer($order['customer_id']);
		// 		if (!$customer['acilit_client_id']) {
		// 			$this->dispatcher->dispatch(new jobs\SyncMember($customer['customer_id']));
		// 		}

		// 		$job = new PushOrder($order['order_id']);
		// 		$job->setRegistry($this->registry);

		// 		$job_id = $dispatcher->dispatch($job);

		// 		$this->acilit_model->setOrderError($order_id, '');
		// 		$this->acilit_model->updateAcilitOrderSyncStatus($order_id, 0, $job_id);

		// 		$json['success'] = 'Order Pushed!';
		// 	} else {
		// 		$json['error'] = 'Order Not Found!';
		// 	}

		// 	$this->output($json);
		// }

		

		private function outputError($error = 'Error occurred')
		{
			$json['error'] = $error;
			$this->output($json);
		}

		private function output($json)
		{
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}




	


		public function test()
		{

			$acilit_loader = new AcilitLoader($this->registry);

			$acilit = $acilit_loader->loadAcilit();


			$response = $acilit->getVouchers();

		}
		public function test2()
		{
			// var_dump('here');

			$acilit_loader = new AcilitLoader($this->registry);

			$acilit = $acilit_loader->loadAcilit();

			$data['ContactNo'] = 60189839423;
			$response = $acilit->getMembers($data);


		}

		public function testProduct()
		{
			$acilit_loader = new AcilitLoader($this->registry);

			$acilit = $acilit_loader->loadAcilit();
			$data['page'] = 1;
			$data['pageSize'] = 10;
			$response = $acilit->getSKUs($data);

		}

		public function test_coupon()
		{
			$acilit_loader = new AcilitLoader($this->registry);

			$acilit = $acilit_loader->loadAcilit();
			
			// $data['page'] = 1;
			// $data['pageSize'] = 10;
			$response = $acilit->getVouchers();
		}

		public function addColumnOrder(){
			$this->load->model($this->module);
			$this->{$this->model_module}->addColumnOrder();
		}
	}
