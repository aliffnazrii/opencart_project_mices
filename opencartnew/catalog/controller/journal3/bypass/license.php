<?php
class ControllerJournal3BypassLicense extends Controller {
	public function index() {
		/*
		1. go to 'admin/view/javascript/journal3/dist/journal.js'
		2. replace '"https://my.journal-theme.com/api"' to 'window.location.origin + "/index.php?route=journal3/bypass"'
		*/
 
		$json = array(
			'status' => 'success',
		);
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}