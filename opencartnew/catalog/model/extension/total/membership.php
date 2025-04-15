<?php
class ModelExtensionTotalMembership extends Model {
	public function getTotal($total) {

		$xilnex_model = new Xilnex\XilnexModel($this->registry);
		$this->load->language('extension/total/membership', 'membership');

		$customer_group_id = $this->customer->getGroupId();
		$conditions = $this->config->get('module_xilnex_membership_tier');
		$condition = isset($conditions[$customer_group_id]) ? $conditions[$customer_group_id] : false;

		if ($condition) {
			if (!$condition['overlap_coupon']) {
				foreach ($total['totals'] as $order_total) {
					if ($order_total['code'] == 'coupon') {
						return;
					}
				}
			}

			$cart_products = $this->cart->getProducts() ?? array();

			// if (!$condition['overlap_product_promo']) {
			// 	foreach($cart_products as $product) {
			// 		if ($product['promo']) {
			// 			return;
			// 		}
			// 	}
			// }
			
			// $customer_type = $xilnex_model->getCustomerTypeFromXilnexId($condition['xilnex_customer_type']);

			// $discount_percentage = $customer_type['discount_percentage'];

			$discount_percentage = (int)$condition['membership_discount'];

			if ($discount_percentage > 0) {
				$total_product_price = 0;
				foreach ($cart_products as $product) {
					if (!$condition['overlap_product_promo'] && $product['promo']) {
						continue;
					}
					$total_product_price += $product['price'] * $product['quantity'];
				}

				$discount_percentage = $discount_percentage * 0.01;
				$discount_total = $total_product_price * $discount_percentage;

				if ($discount_total <= 0) {
					return;
				}

				$total['totals'][] = array(
					'code'       => 'membership',
					'title'      => sprintf($this->language->get('membership')->get('text_membership'), (int)($discount_percentage * 100) .'%'),
					'value'      => -$discount_total,
					'sort_order' => $this->config->get('total_membership_sort_order')
				);

				$total['total'] -= $discount_total;
			}
		}
	}

	public function confirm($order_info, $order_total) {
		
	}

	public function unconfirm($order_id) {
		
	}
}
