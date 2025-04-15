<?php
class ControllerAccountCoupon extends Controller
{
	public function claim()
	{
		$this->load->language('account/coupon');
		$json = array();

		if (!$this->customer->isLogged()) {
			$json['error'] = $this->language->get('error_login');
		} else if (!isset($this->request->post['product_id'])) {
			$json['error'] = $this->language->get('error_product');
		} else {
			try {
				$product_id = (int)$this->request->post['product_id'];

				$this->load->model('account/coupon');
				$result = $this->model_account_coupon->claimVoucher($product_id);

				if ($result === true) {
					$json['success'] = $this->language->get('text_success_redeem');
				} else {
					$json['error'] = $result;
				}
			} catch (Exception $e) {
				$json['error'] = $this->language->get('error_system');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	}

	public function index()
	{
		$this->load->language('account/coupon');
		$this->load->model('account/coupon');

		if (isset($this->request->get['page'])) {
			$page = max(1, (int)$this->request->get['page']);
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = 10;
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home'),
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/coupon'),
		);

		$this->document->setTitle($this->language->get('heading_title'));

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_empty'] = $this->language->get('text_empty');
		$data['button_continue'] = $this->language->get('button_continue');

		$data['vouchers'] = array();

		$filter_data = array(
			'start' => ($page - 1) * $limit,
			'limit' => $limit
		);

		$voucher_total = $this->model_account_coupon->getTotalCoupons();
		$results = $this->model_account_coupon->getCustomerVouchers($filter_data);

		foreach ($results as $result) {

			
			$data['vouchers'][] = array(
				'voucher_id'  => $result['voucher_id'],
				'code'        => $result['code'],
				'name'        => $result['name'],
				// 'description' => $result['description'],
				'amount'      => $this->currency->format($result['discount'], $this->session->data['currency']),
				'status'      => $result['status'],
				'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'date_end'    => date($this->language->get('date_format_short'), strtotime($result['date_end'])),
				'path' => $this->model_account_coupon->generateVoucherQr($result['voucher_serialNo']),
				'serial' => $result['voucher_serialNo'],
			);
		}


		$pagination = new Pagination();
		$pagination->total = $voucher_total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('account/coupon', 'page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($voucher_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($voucher_total - $limit)) ? $voucher_total : ((($page - 1) * $limit) + $limit), $voucher_total, ceil($voucher_total / $limit));

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');


		
		

		$this->response->setOutput($this->load->view('account/coupon', $data));

	}
	
	public function redeem()
	{
		$this->load->language('account/coupon');

		$json = array();

		if (isset($this->request->post['code'])) {
			$code = $this->request->post['code'];

			$this->load->model('account/coupon');

			$search = $this->model_account_coupon->getCoupon($code);

			// dd($search['customer_id']);

			if (isset($search['coupon_id']) && ($search['customer_id'] == 0 || $search['customer_id'] == '')) {
				$update = $this->model_account_coupon->updateCouponCustomerId($code);
			}
		}

		// dd($update);

		if ($update) {
			$this->session->data['success'] = $this->language->get('text_success_redeem');
		} else {
			$this->session->data['error'] = $this->language->get('error_coupon');
		}
		$this->response->redirect($this->url->link('account/coupon', '', true));
		// $this->response->setOutput($this->load->view('account/coupon', $data));
	}

	// public function claim()
	// {
	// 	$this->load->model('account/coupon');

	// 	$product_id = $this->request->post['product_id'];

	// 	$claim = $this->model_account_coupon->claimVoucher($product_id);

	// 	dd($claim);	

	// 	if ($claim) {
	// 		return true;
	// 	}
	// 	return false;
	// }
}
