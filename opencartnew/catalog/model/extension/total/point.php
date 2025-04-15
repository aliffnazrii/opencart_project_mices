<?php

use EPoint\EPoint;
class ModelExtensionTotalPoint extends Model {
	public function __construct($registry) {
		parent::__construct($registry);

		$this->epoint = new EPoint($this->registry);
	}

	public function getTotal($total) {
		if (isset($this->session->data['point'])) {
			$this->load->language('extension/total/point', 'point');

			$cg_id = $this->customer->getGroupId();
			$condition = $this->epoint->getCustomerGroupConditions($cg_id);

			if ($condition && $condition['status'] && $condition['redeem_rate']) {
				$points = $this->epoint->getCustomerPoint($this->customer->getId());

				if ($this->session->data['point'] <= $points) {
					$discount_total = $this->session->data['point'] * $condition['redeem_rate'];
					$total['totals'][] = array(
						'code'       => 'point',
						'title'      => sprintf($this->language->get('point')->get('text_point'), $this->session->data['point']),
						'value'      => -$discount_total,
						'sort_order' => $this->config->get('total_point_sort_order')
					);

					$total['total'] -= $discount_total;
				}
			}
		}
	}

	public function confirm($order_info, $order_total) {
		$this->load->language('extension/total/point');

		$points = 0;

		$start = strpos($order_total['title'], '(') + 1;
		$end = strrpos($order_total['title'], ')');

		if ($start && $end) {
			$points = substr($order_total['title'], $start, $end - $start);
		}

		$redeem = $this->epoint->getOrderRedeemPoint($order_info['order_id']);
		if (!$redeem) {
			$this->load->model('account/customer');

			$customer_points = $this->epoint->getCustomerPoint($order_info['customer_id']);

			if ($customer_points >= $points) {
				$description = sprintf($this->language->get('text_redeem_order_id'), (int)$order_info['order_id']);

				$point_data = array(
					'customer_id' => $order_info['customer_id'],
					'description' => $description,
					'points' => -$points,
					'type' => EPoint::REDEEM,
					'order_id' => $order_info['order_id'],
				);

				$this->epoint->addPointTransaction($point_data);
			} else {
				return $this->config->get('config_fraud_status_id');
			}
		}
	}

	public function unconfirm($order_id) {
		$this->load->language('extension/total/point');
		
		$redeem = $this->epoint->getOrderRedeemPoint($order_id);

		if ($redeem) {
			$description = sprintf($this->language->get('text_refund_order_id'), (int)$redeem['order_id']);

			$point_data = array(
				'customer_id' => $redeem['customer_id'],
				'description' => $description,
				'points' => -$redeem['points'],
				'type' => EPoint::REFUND,
				'order_id' => $redeem['order_id'],
			);

			$this->epoint->addPointTransaction($point_data);
		}
	}
}
