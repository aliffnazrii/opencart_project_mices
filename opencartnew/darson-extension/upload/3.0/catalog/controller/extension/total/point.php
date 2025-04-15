<?php

use EPoint\EPoint;
class ControllerExtensionTotalPoint extends Controller {
	public function __construct($registry) {
		parent::__construct($registry);

		$this->epoint = new EPoint($this->registry);
	}

	public function index() {
		// $points = $this->epoint->getCustomerPoint($this->customer->getId());
		$points = floor($this->customer->getRewardPoints($this->customer->getId()));

		if ($points && $this->config->get('total_point_status')) {
			$condition = $this->epoint->getCustomerGroupConditions($this->customer->getGroupId());
			$status = $condition['status'];
			$point_conversion = number_format(1 / $condition['redeem_rate']);
			$default_currency = $this->currency->format(1, $this->config->get('config_currency'));
			
			if ($status) {
				$this->load->language('extension/total/point');

				$data['heading_title'] = sprintf($this->language->get('heading_title'), number_format($points));

				$data['entry_point'] = sprintf($this->language->get('entry_point'), $point_conversion, $default_currency);

				$min_point_redeem = $this->config->get('total_point_redeem_min') ?? 0;
				$data['help_point'] = sprintf($this->language->get('help_point'), $min_point_redeem);

				$point_redeem_multiple = $this->config->get('total_point_redeem_multiple') ?? 0;
				if ($point_redeem_multiple) {
					$data['help_point2'] = sprintf($this->language->get('help_point2'), $point_redeem_multiple, $point_redeem_multiple, $point_redeem_multiple * 2, $point_redeem_multiple * 3);
				} else {
					$data['help_point2'] = '';
				}

				if (isset($this->session->data['point'])) {
					$data['point'] = $this->session->data['point'];
				} else {
					$data['point'] = '';
				}

				return $this->load->view('extension/total/point', $data);
			}			
		}
	}

	public function validatePoint() {
		$this->load->language('extension/total/point');

		$json = array();

		$points = $this->epoint->getCustomerPoint($this->customer->getId());

		$customer_group_id = $this->customer->getGroupId();

		$condition = $this->epoint->getCustomerGroupConditions($customer_group_id);

		if ($this->request->post['point'] == '') {
			unset($this->session->data['point']);
			
			$json['success'] = $this->language->get('text_point_removed');
		} else {
			if ($condition && $condition['status']) {
				$points = $this->epoint->getCustomerPoint($this->customer->getId());

				if ($this->request->post['point'] > $points) {
					$json['error'] = sprintf($this->language->get('error_points'), $this->request->post['point']);
				}
				
				if (floor($this->request->post['point']) != $this->request->post['point']) {
					$json['error'] = $this->language->get('error_point_decimal');
				}

				$min_point_redeem = $this->config->get('total_point_redeem_min') ?? 0;
				if ($min_point_redeem && $min_point_redeem > $this->request->post['point']) {
					$json['error'] = sprintf($this->language->get('error_point_min'), $min_point_redeem);
				}

				$point_redeem_multiple = $this->config->get('total_point_redeem_multiple') ?? 0;
				if ($point_redeem_multiple && $this->request->post['point'] % $point_redeem_multiple != 0) {
					$json['error'] = sprintf($this->language->get('error_point_multiply'), $point_redeem_multiple);
				}

				if (!$json) {
					$this->session->data['point'] = abs($this->request->post['point']);

					$json['success'] = $this->language->get('text_success');
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function point() {
		$this->load->language('extension/total/point');

		$json = array();

		$points = $this->epoint->getCustomerPoint($this->customer->getId());

		$customer_group_id = $this->customer->getGroupId();

		$condition = $this->epoint->getCustomerGroupConditions($customer_group_id);

		if ($this->request->post['point'] == '' || $this->request->post['point'] == 0) {
			unset($this->session->data['point']);
			
			$json['success'] = $this->language->get('text_point_removed');
		} else {
			if ($condition && $condition['status']) {
				$points = $this->epoint->getCustomerPoint($this->customer->getId());

				if ($this->request->post['point'] > $points) {
					$json['error'] = sprintf($this->language->get('error_points'), $this->request->post['point']);
				} else {
					if (floor($this->request->post['point']) != $this->request->post['point']) {
						$json['error'] = $this->language->get('error_point_decimal');
					}

					$min_point_redeem = $this->config->get('total_point_redeem_min') ?? 0;
					if ($min_point_redeem && $min_point_redeem > $this->request->post['point']) {
						$json['error'] = sprintf($this->language->get('error_point_min'), $min_point_redeem);
					}

					$point_redeem_multiple = $this->config->get('total_point_redeem_multiple') ?? 0;
					if ($point_redeem_multiple && $this->request->post['point'] % $point_redeem_multiple != 0) {
						$json['error'] = sprintf($this->language->get('error_point_multiply'), $point_redeem_multiple);
					}

					if (!isset($json['error'])) {
						$this->session->data['point'] = abs($this->request->post['point']);
					}
				}

				if (!$json) {
					$this->session->data['point'] = abs($this->request->post['point']);

					$this->session->data['success'] = $this->language->get('text_success');

					if (isset($this->request->post['redirect'])) {
						$json['redirect'] = $this->url->link($this->request->post['redirect']);
					} else {
						$json['redirect'] = $this->url->link('checkout/cart');
					}
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function cliAwardPoint() {
		if ($this->config->get('total_point_status')) {
			$this->load->model('checkout/order');

			$orders = $this->epoint->getOrderPendingAwardPoint();

			foreach ($orders as $order) {
				$order_id = $order['order_id'];
				$latest_order_status = $this->epoint->getLatestOrderStatus($order_id);

				if (in_array($latest_order_status['order_status_id'], $this->config->get('total_point_award_order_status'))) {
					$order_info = $this->model_checkout_order->getOrder($order_id);

					$this->epoint->award($order_info);
					$this->epoint->setPointAwardStatus($order_id, 1);
				}
			}
		}
	}

	public function checkPointExpiry() {
		if ($this->config->get('total_point_status')) {
			$customers = $this->epoint->getCustomerExpiredPoints();
			$point_conditions = $this->config->get('total_point_condition');

			foreach ($customers as $customer) {
				if (isset($point_conditions[$customer['customer_group_id']]) && $point_conditions[$customer['customer_group_id']]['status']) {
					$point_condition = $point_conditions[$customer['customer_group_id']];
					$expire_within_months = $point_condition['point_expiry_month'];

					$new_expiry_date = date('Y-m-d', strtotime('+' . $expire_within_months . ' months'));
					$this->epoint->setCustomerExpiredPoints($customer['customer_id'], $new_expiry_date);

					$point_balance = $this->epoint->getCustomerPoint($customer['customer_id']);
	
					$description = $point_balance . ' points expired after ' . $expire_within_months . ' months';

					$point_data = array(
						'customer_id' => $customer['customer_id'],
						'description' => $description,
						'points' => -$point_balance,
						'type' => EPoint::EXPIRED,
						'order_id' => 0,
					);

					$this->epoint->addPointTransaction($point_data);
				}
			}
		}
	}

	public function refreshCustomerPointBalance() {
		$customers = $this->epoint->getCustomers();
		
		foreach ($customers as $customer) {
			$point_balance = $this->epoint->getCustomerPointBalance($customer['customer_id']);
			$this->epoint->updateCustomerPointBalance($customer['customer_id'], $point_balance);
		}
	}
}
