<?php

namespace Xilnex;

class XilnexClient
{
	public $host;
	public $appid;
	public $token;
	public $auth;

	private $logFileName = "xilnex_log.log";
	private $logFileNameError = "xilnex_error.log";

	public function __construct($config)
	{
		$this->host = $config['host'];
		$this->appid = $config['appid'];
		$this->token = $config['token'];
		$this->auth = $config['auth'];
	}

	public function get($url, $data = array()) {
		return $this->call($url, 'GET', $data);
	}

	public function post($url, $data = array()) {
		return $this->call($url, 'POST', $data);
	}
	
	public function put($url, $data = array()) {
		return $this->call($url, 'PUT', $data);
	}

	public function call($endpoint, $method = 'GET', $data = array()) {
		$headers = array(
			'Content-Type: application/json'
		);

		if ($this->appid) {
			$headers[] = 'appid: ' . $this->appid;
		}

		if ($this->token) {
			$headers[] = 'token: ' . $this->token;
		}

		if ($this->auth) {
			$headers[] = 'auth: ' . $this->auth;
		}

		$url = $this->host . $endpoint;

		if (isset($data['path_para'])) {
			$url .= '/' . $data['path_para'];
			unset($data['path_para']);
		}
		
		if ($method == 'GET' && $data) {
			$query = array();
			foreach ($data as $key => $value) {
				$query[$key] = $value;
			}
			$data = array();

			$url .= '?' . http_build_query($query);
		}

		$options = array(
			CURLOPT_URL            => $url,
			CURLOPT_HTTPHEADER     => $headers,
			CURLOPT_CUSTOMREQUEST  => strtoupper($method),
			CURLOPT_ENCODING       => 'UTF-8',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FAILONERROR    => false,
			CURLOPT_VERBOSE        => false,
			CURLOPT_SSL_VERIFYPEER => false,
        );

        if (!empty($data)) {
        	$options[CURLOPT_POSTFIELDS] = json_encode($data);
        }

        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        $errno = curl_errno($ch);
        curl_close($ch);

        $log_data = array(
        	'url' => $url,
        	'http_code' => $info['http_code'],
        	'curl_err' => $errno,
        	'request' => is_array($data) ? json_encode($data) : $data,
        	'response' => $response,
        );

        $result = json_decode($response, true);

		// Log all error
        if ((isset($log_data['http_code']) && $log_data['http_code'] != 200) || (isset($log_data['response']) && isset($log_data['response']['error']) && $log_data['response']['error'])) {
        	$log = new \Log($this->logFileNameError);
			$log->write($log_data);
        } else {
			if (strtoupper($method) != 'GET') {
				$log_data['request'] = '';
				
				$log = new \Log($this->logFileName);
				$log->write($log_data);
			}
		}

        return $result;
	}
}