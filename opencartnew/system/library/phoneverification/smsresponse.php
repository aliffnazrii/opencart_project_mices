<?php

namespace phoneverification;

trait SMSResponse {
	public function successResponse($response) {
		return $this->APIresponse(1, $response);
	}

	public function failedResponse($response) {
		return $this->APIresponse(0, $response);
	}

	protected function APIresponse($status, $response) {
		return array(
			'status' => $status,
			'response' => $response
		);
	}
}