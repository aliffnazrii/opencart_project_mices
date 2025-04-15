<?php
namespace PhoneVerification;

use phoneverification\Logger;
use phoneverification\SMSResponse;
class ISMS {
	use SMSResponse;

	public $username;
	public $password;
	public $senderid;
	public $host = 'https://www.isms.com.my/RESTAPI.php';
	public $logger;

	public function __construct($config) {
		if (isset($config['username']) && $config['username']) {
			$this->username = $config['username'];
		} else {
			throw new \Exception('Username is required');
		}

		if (isset($config['password']) && $config['password']) {
			$this->password = $config['password'];
		} else {
			throw new \Exception('Username is required');
		}

		if (isset($config['senderid']) && $config['senderid']) {
			$this->senderid = $config['senderid'];
		} else {
			throw new \Exception('Username is required');
		}

		$this->logger = new Logger();
	}

	public function curlPost($post) {
		$data = array(
			'senderid' => $this->senderid,
			'agreedterm' => 'YES',
			'method' => 'isms_send_all_id',
			'recipient' => $post
		);
		
		$payload = json_encode($data);

		$auth = $this->username . ':' . $this->password;
		$headers = array(
			'Content-Type: application/json',
			'Authorization: Basic '. base64_encode($auth),
			// 'Content-Length: ' . strlen($payload)
		);

		$ch = curl_init($this->host);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$response = curl_exec($ch);

		$errno = curl_errno($ch);
		$http_info = curl_getinfo($ch);
		curl_close($ch);

		$log = array(
			'EP' => $this->host,
			'REQUEST' => $data,
			'RESPONSE' => $response 
		);

		if ($errno) {
			$log['CURL_ERR'] = $errno;
		} else {
			$log['HTTP_CODE'] = $http_info['http_code'];
		}
		$this->logger->write($log);

		return $response;
	}

	public function send($phone, $message) {
        $data = array(
        	array(
				'dstno' => $phone,
				'msg' => $message,
				'type'  => '1'
			)	
        );

        $result = $this->curlPost($data);
        $response = (array)json_decode($result);

        if ($response && isset($response[0])) {
        	list($code, $message) = explode('=', $response[0]);
        	$code = trim($code);
        	// $code = 2000;
        	if ($code == '2000') {
        		return $this->successResponse($response);
        	}
        }
		
		return $this->failedResponse($response);
    }

	public function apiError($error_code ) {
		switch ($error_code) {
			case "-1000":  	//Unknown error
				$response = 'Error processing request. Please try again';
				return $response;
			case "-1009": 	//Invalid destination number by customer
				$response = 'Invalid phone number. Please enter correct phone number';
				return $response;
			default:  		// Authentication failed, account expired etc.
				$response = 'Internal system error. Please contact customer support.';
				return $response;
		}
    }
}