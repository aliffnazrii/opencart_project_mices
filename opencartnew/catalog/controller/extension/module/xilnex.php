<?php

use Jobs\PullOrder;
use Jobs\PushOrder;
use Jobs\SyncCustomers;
use jobs\syncorder;
use jobs\syncoutlet;
use jobs\syncproduct;
use jobs\syncmember;
use Jobs\UpdatePrice;
use queue\Dispatcher;
use xilnex\XilnexModel;
use xilnex\XilnexProduct;
use xilnex\XilnexOutlet;
use xilnex\XilnexMember;
use Xilnex\XilnexOrder;
// adsda
class ControllerExtensionModuleXilnex extends Controller {

	public function __construct($registry) {
        parent::__construct($registry);

        $this->xilnex_product = new XilnexProduct($this->registry);
		$this->xilnex_order = new XilnexOrder($this->registry);
        $this->xilnex_model = new XilnexModel($this->registry);
		$this->dispatcher = new Dispatcher($this->registry); 
    }

	// Members
	// Run Twice a Day
	public function syncMember() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_sync_customer_status')) {
			$non_member = $this->xilnex_model->getNonMember();

			foreach ($non_member as $member) {
				$this->dispatcher->dispatch(new SyncMember($member['customer_id']));
			}
		}
	}

	// Run Twice a Day
	public function pullNewMember() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_sync_customer_status')) {
			$date = date('Y-m-d\TH:i:s.v\Z', strtotime('today'));
			$this->dispatcher->dispatch(new SyncCustomers($date));
		}
	}

	// Member Tier
	// Run Every Day
	public function tierRenewal() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_membership_renew_status')) {
			$customers = $this->xilnex_model->getCustomerTierRenewals();

			foreach ($customers as $customer) {
				$this->dispatcher->dispatch(new Jobs\RenewMemberTier($customer));
			}
		}
	}

	// Products
	// Run every day
	public function syncProduct() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_sync_product_status')) {
			$items = $this->xilnex_model->getAllProductNotYetSync();
			
			foreach ($items as $item) {
				if ($item['model'] && !$item['xilnex_item_id']) {
					$this->dispatcher->dispatch(new SyncProduct($item));
				}
			}
	
			$item_options = $this->xilnex_model->getAllProductOptionNotYetSync();
			foreach ($item_options as $item) {
				if ($item['model'] && !$item['xilnex_item_id']) {
					$this->dispatcher->dispatch(new SyncProduct($item, 1));
				}
			}
		}
	}
	
	// Run every hour
	public function updatePrice() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_sync_product_status')) {
			$items = $this->xilnex_model->getAllItems();
			foreach ($items as $item) {
				$this->dispatcher->dispatch(new UpdatePrice($item));
			}

			$item_options = $this->xilnex_model->getAllItemOptions();
			foreach ($item_options as $item) {
				$this->dispatcher->dispatch(new UpdatePrice($item, 1));
			}
		}
	}

	// Run every hour
	public function updateStock() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_sync_product_status')) {
			$items = $this->xilnex_model->getAllItems();
			foreach ($items as $item) {
				$this->dispatcher->dispatch(new Jobs\UpdateStock($item));
			}

			$item_options = $this->xilnex_model->getAllItemOptions();
			foreach ($item_options as $item) {
				$this->dispatcher->dispatch(new Jobs\UpdateStock($item, 1));
			}
		}
	}

	// Outlet
	// Run once a day
	public function syncOutlet() {
		if ($this->config->get('module_xilnex_status')) {
			$this->dispatcher->dispatch(new SyncOutlet());
		}
	}

	// Order
	// Run every hour
	// public function syncOrder() {
	// 	if ($this->config->get('module_xilnex_status')) {
	// 		$pending_order = $this->xilnex_model->getPendingXilnexOrder();

	// 		foreach ($pending_order as $order) {
	// 			$getOrder = $this->xilnex->getOrder([
	// 				'orderNo' => $order['order_id'],
	// 				'limit' => 1,
	// 			]);

	// 			if (isset($getOrder['status']) && $getOrder['status'] == 'SuccessQuery') {
	// 				if (!isset($getOrder['data']['sales'][0]['orderNo'])) {
	// 					$this->dispatcher->dispatch(new SyncOrder($order['order_id']));
	// 				}
	// 			}
	// 		}
	// 	}
	// }

	public function pushOrders() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_pull_order_date')) {
			// $date_from = $this->config->get('module_xilnex_pull_order_date');
			$date_from = date('Y-m-d');

			$completed_unsync_orders = $this->xilnex_model->getPendingUnsyncOrder($date_from);

			foreach ($completed_unsync_orders as $order) {
				$customer = $this->xilnex_model->getCustomer($order['customer_id']);
				if (!$customer['xilnex_client_id']) {
					$this->dispatcher->dispatch(new SyncMember($customer['customer_id']));
				}

				$job = new jobs\PushOrder($order['order_id']);
				$job->setRegistry($this->registry);

				$dispatcher = new queue\bus\Dispatcher();
				$job_id = $dispatcher->dispatch($job);
				
				$exist = $this->xilnex_model->getXilnexOrderByOrderId($order['order_id']);

				if (!$exist) {
					$this->xilnex_model->saveXilnexOrder([
						'order_id' => $order['order_id'],
						'xilnex_order_id' => '', 
						'xilnex_client_id' => '', 
						'xilnex_location_id' => '', 
						'sales_person' => '', 
						'total' => '0', 
						'sales_date' => '0000-00-00 00:00:00', 
						'error' => '',
						'job_id' => $job_id,
						'synced' => 0,
						'status' => ''
					]);
				}
			}
		}
	}

	public function pullOrders() {
		if ($this->config->get('module_xilnex_status') && $this->config->get('module_xilnex_pull_order_date')) {
			$date_from = $this->config->get('module_xilnex_pull_order_date');
			// $date_from = date('Y-m-d\TH:i:s.v\Z', strtotime($date_from));
			$date_from = date('Y-m-d\TH:i:s.v\Z', strtotime('-1 days'));
		
			$customers = $this->xilnex_model->getMembers();

			foreach ($customers as $customer) {
				if ($customer['xilnex_client_id']) {
					$this->dispatcher->dispatch(new PullOrder($date_from, $customer['xilnex_client_id']));
				}
			}
		}
	}
}
