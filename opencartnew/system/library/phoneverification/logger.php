<?php

namespace phoneverification;

class Logger {
	public $log;
	public $max_files = 7;
	public $name = 'sms_otp';

	public function __construct() {
		$this->init();
	}

	public function write($message) {
		$this->writeLog($message);
	}

	protected function writeLog($message) {
		$log = $message;
		if (is_array($message)) {
			$log = '';
			foreach ($message as $key => $value) {
				if (is_array($value) || is_object($value)) {
					$log .= $key.': '.json_encode($value) . PHP_EOL;
				} else {
					$log .= $key.': '.$value . PHP_EOL;
				}
			}
		}

		$this->log->write($log);
	}

	protected function init() {
		if ($this->log == null) {
			$logFiles = glob(DIR_LOGS . $this->name . '*.log');

			if (count($logFiles) > $this->max_files) {
				usort($logFiles, function ($a, $b) {
					return strcmp($b, $a);
				});
				foreach (array_slice($logFiles, $this->max_files) as $file) {
					if (is_writable($file)) {
						unlink($file);
					}
				}
			}

			$timed_name = str_replace(
				['{filename}', '{date}'],
				[$this->name, date('Y-m-d')],
				"{filename}-{date}"
			);
			$filename = $timed_name . '.log';

			$this->log = new \Log($filename);
		}
	}
}