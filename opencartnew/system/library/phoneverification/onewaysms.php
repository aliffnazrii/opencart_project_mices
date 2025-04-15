<?php

namespace PhoneVerification;

use phoneverification\Logger;
use phoneverification\SMSResponse;

class ONEWAYSMS {
    use SMSResponse;

    protected $host = 'http://gatewayd2.onewaysms.sg:10002/api.aspx';
    protected $username;
    protected $password;
    protected $senderid;
    protected $otp_message = 'Your COCORO Life verification code is: %s. Expires in 10 minutes. Do not share this code with others.';
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
            throw new \Exception('Password is required');
        }

        if (isset($config['senderid']) && $config['senderid']) {
            $this->senderid = $config['senderid'];
        } else {
            throw new \Exception('Sender ID is required');
        }

        $this->logger = new Logger();
    }

    public function send($phone, $message) {
        $query_string = "apiusername=" . $this->username  . "&apipassword=" . $this->password;
        $query_string .= "&senderid=" . rawurlencode($this->senderid) . "&mobileno=" . rawurlencode($phone);
        $query_string .= "&message=" . rawurlencode(stripslashes($message)) . "&languagetype=1";        
        $url = $this->host . '?' . $query_string; 

        $response = @implode ('', file($url)); 

        if ($response) {                       
            if ($response > 0) {
                return $this->successResponse("MT ID : " . $response);
            }        
            else {
                $error = $this->apiError($response);
            }
        } else {                    
            $error = $this->apiError(0);     
        } 
        
        return $this->failedResponse($error);
    }

    public function apiError($error_code) {
        switch ($error_code) {
            case "-100":
                $response = 'Username or password is invalid.';
                return $response;
            case "-200":
                $response = 'Sender ID parameter is invalid.';
                return $response;
            case "-300":
                $response = 'Mobile no parameter is invalid.';
                return $response;
            case "-400":
                $response = 'Language type is invalid.';
                return $response;
            case "-500":
                $response = 'Invalid characters in message.';
                return $response;
            case "-600":
                $response = 'Insufficient credit balance.';
                return $response;
            default:
                $response = 'Internal system error. Please contact customer support.';
                return $response;
        }
    }
}
