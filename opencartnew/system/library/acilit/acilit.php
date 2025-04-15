<?php 

namespace Acilit;

class Acilit
{
	// Host
	const API_HOST = 'https://dmsc.darson.com.my/DarsonAPI/api';

	// Auth
    const API_AUTH = '/Auth';

    // Member
    const API_MEMBER_CREATION = '/MemberCreation';
    const API_MEMBER_DETAILS_UPDATE = '/MemberDetailsUpdate?ContactNo=';
    const API_MEMBERS = '/Members?ContactNo=';
    const API_MEMBERS_TRANS = '/MembersTrans?ContactNo=';
    const API_MEMBER_ORDER_INVOICE = '/MemberOrderInvoice';
    const API_MEMBER_ORDER_INVOICE_ITEMS = '/MemberOrderInvoiceItems';

    // SKU
    const API_SKU = '/SKU';

    // Voucher
    const API_VOUCHER = '/Voucher';
    const API_VOUCHER_STATUS_UPDATE = '/VoucherStatusUpdate';

	public $host;
	public $client;
	public $username;
	public $password;
    public $token;

	public function __construct($credentials) {
		$this->host = self::API_HOST;
		$this->username = $credentials['username'];
		$this->password = $credentials['password'];
        $data['username'] = 'DarsonApi';
		$data['password'] = 'D@rSon@Api123';
		$options = array(
			'host' => $this->host,
			'username' => $this->username,
			'password' => $this->password,
			'token' => $this->token,
		);
        $this->client = new AcilitClient($options);
        
        $response = $this->authenticate($data);
        if($response && isset($response['Token'])){
            $this->client->setToken($response['Token']);
            // dd($this->client);

        }
       
	}

	// Auth
    public function authenticate($data) {
        return $this->client->post(self::API_AUTH, $data);
    }

    // Member
    public function createMember($data) {
        return $this->client->post(self::API_MEMBER_CREATION, $data);
    }

    public function updateClient($phone, $data) {
        return $this->client->post(self::API_MEMBER_DETAILS_UPDATE . $phone, $data);
    }

    public function getMembers($data = array()) {
        return $this->client->get(self::API_MEMBERS, $data);
    }

    public function getClientByPhone($phone) {
        return $this->client->get(self::API_MEMBERS.$phone);
    }

    public function getMemberTransactions($phone) {
        return $this->client->get(self::API_MEMBERS_TRANS.$phone);
    }

    // SKU
    public function getSKUs($data = array()) {
        return $this->client->get(self::API_SKU, $data);
    }

    // Voucher
    public function getVouchers($data = array()) {
        return $this->client->get(self::API_VOUCHER, $data);
    }

    public function updateVoucherStatus($data = array()) {
        return $this->client->post(self::API_VOUCHER_STATUS_UPDATE, $data);
    }

    // Member Order Invoice
    public function getMemberOrderInvoice($data = array()) {
        return $this->client->get(self::API_MEMBER_ORDER_INVOICE, $data);
    }

    public function getMemberOrderInvoiceItems($transaction_id) {
        return $this->client->get(self::API_MEMBER_ORDER_INVOICE_ITEMS . '?TransactionID=' . $transaction_id);
    }
}
