<?php 

namespace Xilnex;

class Xilnex
{
	// Host
	const API_HOST = 'https://api.xilnex.com';

	// Outlet
	const API_COMPANY_INFO_ALL = '/logic/v2/companyinfo/all';

	// Items
	const API_ITEM_ALL = '/logic/v2/items';
	const API_ITEM_SEARCH = self::API_ITEM_ALL . '/search';
	const API_ITEM_STOCK_BY_OUTLET = '/logic/v2/stocks/outlet';
	const API_ITEM_STOCK_BY_OUTLET_AND_ID = '/logic/v2/stocks/item';

	// Sales
	const API_ORDER = '/logic/v2/sales';
	const API_SALES_SYNC = self::API_ORDER . '/sync';
	const API_GET_SALES_BY_CUSTOMERS = self::API_ORDER . '/summary';
	const API_PUSH_SALES_INVOICE = self::API_ORDER . '/salesinvoice';
	const API_GET_ORDER = '/logic/v2/sales/search';
	const API_CANCEL_ORDER = '/logic/v2/sales/invoices/{id}/cancel';

	// Clients
	const API_CLIENTS = '/logic/v2/clients';
	const API_CLIENTS_LATEST = '/apps/v2/sync/clients';
	const API_CLIENT_BY_PHONE = self::API_CLIENTS . '/query?mobile=';
	const API_CLIENT_BY_EMAIL = self::API_CLIENTS . '/query?email=';
	const API_CLIENTS_BY_QUERY = self::API_CLIENTS . '/query';

	// Sync
	const API_SYNC_CLIENT_TYPE = '/apps/v2/sync/customertypes';
	const API_GET_PAYMENT_METHODS = '/logic/v2/payments/others';

	// Voucher
	const API_VOUCHER = '/logic/v2/voucher';
	


	public $host;
	public $client;
	public $appid;
	public $token;
	public $auth;

	public function __construct($credentials) {
		$this->host = self::API_HOST;
		$this->appid = $credentials['appid'];
		$this->token = $credentials['token'];
		$this->auth = $credentials['auth'];

		$options = array(
			'host' => $this->host,
			'appid' => $this->appid,
			'token' => $this->token,
			'auth' => $this->auth
		);

		$this->client = new XilnexClient($options);
	}

	public function getAllCompanyInfo() {
		return $this->client->get(self::API_COMPANY_INFO_ALL);
	}

	public function getAllItems($data) {
		return $this->client->get(self::API_ITEM_ALL, $data);
	}

	public function getItemStockByOutlet($data) {
		return $this->client->get(self::API_ITEM_STOCK_BY_OUTLET, $data);
	}

	public function getItemStockByOutletAndId($data) {
		return $this->client->get(self::API_ITEM_STOCK_BY_OUTLET_AND_ID, $data);
	}

	public function searchItem($data) {
		return $this->client->get(self::API_ITEM_SEARCH, $data);
	}

	public function syncSalesByOutletsAndTimestamp($data) {
		return $this->client->get(self::API_SALES_SYNC, $data);
	}

	public function addToSalesInvoice($data, $outlet) {
		return $this->client->post(self::API_PUSH_SALES_INVOICE . '/' . rawurlencode($outlet), $data);
	}

	public function getOrder($data) {
		return $this->client->get(self::API_GET_ORDER, $data);
	}

	public function getClientById($id) {
		return $this->client->get(self::API_CLIENTS . '/' . $id);
	}

	public function createClient($data) {
		return $this->client->post(self::API_CLIENTS, $data);
	}

	public function getClientByPhone($phone) {
		$data = array (
			'mobile' => $phone
		);

		return $this->client->get(self::API_CLIENTS_BY_QUERY, $data);
	}

	public function getClientByEmail($email) {
		$data = array (
			'email' => $email
		);

		return $this->client->get(self::API_CLIENTS_BY_QUERY, $data);
	}

	public function getClientsByQuery($data) {
		return $this->client->get(self::API_CLIENTS_BY_QUERY, $data);
	}

	public function getClients($data) {
		return $this->client->get(self::API_CLIENTS, $data);
	}

	public function getClientsLatest($data) {
		return $this->client->get(self::API_CLIENTS_LATEST, $data);
	}

	public function cancelOrder($id, $data) {
		return $this->client->put(str_replace('{id}', $id, self::API_CANCEL_ORDER), $data);
	}

	public function getOrderById($id, $data) {
		return $this->client->get(self::API_ORDER . '/' . $id, $data);
	}

	public function getOrders($data) {
		return $this->client->get(self::API_GET_ORDER, $data);
	}


	// Sync 
	public function getClientTypes($data = array()) {
		return $this->client->get(self::API_SYNC_CLIENT_TYPE, $data);
	}

	public function updateClient($client_id, $data) {
		return $this->client->put(self::API_CLIENTS . '/' . $client_id, $data);
	}

	public function getVouchers() {
		$data = array (
			'clientId' => 9002,
			'limit' => 20
		);

		return $this->client->get(self::API_VOUCHER, $data);
	}
}