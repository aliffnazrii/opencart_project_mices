<?php
class PhoneVerification {
	private $vendor;

	public function __construct($vendor, $config) {
		$class = 'PhoneVerification\\' . $vendor;

		if (class_exists($class)) {
			$this->vendor = new $class($config);
		} else {
			throw new \Exception('Error: Could not load SMS vendor ' . $vendor . '!');
		}
	}

	public function sendOTP($phone, $message) {
		$response = $this->vendor->send($phone, $message);
		return $response;
	}
}