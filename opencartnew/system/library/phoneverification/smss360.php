<?php

namespace PhoneVerification;

use phoneverification\Logger;
use phoneverification\SMSResponse;

class SMSS360 {
    use SMSResponse;

    protected $host = 'https://www.smss360.com/api/sendsms.php';
    protected $email;
    protected $api_key;
    protected $otp_message = 'Your code is %s';
    public $logger;

    public function __construct($config) {
        if (isset($config['email']) && $config['email']) {
            $this->email = $config['email'];
        } else {
            throw new \Exception('Email is required');
        }

        if (isset($config['key']) && $config['key']) {
            $this->api_key = $config['key'];
        } else {
            throw new \Exception('API key is required');
        }

        $this->logger = new Logger();
    }

    public function generateReference()
    {
        $referenceID = mt_rand(1000000, 9999999);
        return $referenceID;
    }

    public function sendOtp($otp, $phone_number)
    {
        $message = sprintf($this->otp_message, $otp);
        return $this->send($phone_number, $message);
    }

    public function send($phone, $message)
    {
        $params = array(
            'key' => $this->api_key,
            'email' => $this->email,
            'recipient' => $phone,
            'message' => $message,
            'referenceID' => $this->generateReference(),
        );
        $url = $this->host . '?' . http_build_query($params);

        $xml = file_get_contents($url);
        $result = $this->xml2Array($xml);

        $log = array(
            'EP' => $this->host,
            'REQUEST' => json_encode($params),
            'RESPONSE' => json_encode($result)
        );

        $this->logger->write($log);

        if ($result && isset($result['statusCode'])) {
            if ($result['statusCode'] == '1606') {
                return $this->successResponse($result);
            }
        }

        return $this->failedResponse($result);
    }

    protected function xml2Array($xml)
    {
        $xml = simplexml_load_string($xml);
        return json_decode(json_encode($xml), true);
    }
}
