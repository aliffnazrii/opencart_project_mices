<?php

use queue\Worker;
class ControllerExtensionModuleQueue extends Controller {
	public function __construct($registry) {
		parent::__construct($registry);

		$config = $registry->get('config');

		if ($registry->has('db')) {
			if (defined('QUEUE_DB_USERNAME') && defined('QUEUE_DB_PASSWORD')) {
				$db = $registry->get('db');

				if (method_exists($db, 'recreate')) {
					$db->recreate($config->get('db_engine'), $config->get('db_hostname'), QUEUE_DB_USERNAME, QUEUE_DB_PASSWORD, $config->get('db_database'), $config->get('db_port'));
				}
			}	
		}
	}

	public function index() {
		$options = $this->request->get;
		
		if (!getenv('SERVER_NAME')) {
			$server_name = explode("/", trim(HTTPS_SERVER, 'https://'));
			putenv('SERVER_NAME=' . $server_name[0]);
		}

		$worker = new Worker($this->registry, $options);
		$worker->run();
	}

	protected function getOption($key) {
		return isset($this->request->get[$key]) ? $this->request->get[$key] : null;
	}

	public function install() {
		$source = $this->request->get['source'] ?: null;
		if ($source !== 'cli') {
			echo 'Support CLI only';exit;
		}

		if (isset($this->request->get['name']) && $this->request->get['name']) {
			$table = $this->request->get['name'];
			$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . $table ."` (
				`id` bigint unsigned NOT NULL AUTO_INCREMENT,
				`queue` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
				`payload` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
				`attempts` int unsigned NOT NULL,
				`reserved_at` int unsigned DEFAULT NULL,
				`available_at` int unsigned NOT NULL,
				`created_at` int unsigned NOT NULL,
				PRIMARY KEY (`id`),
				KEY `jobs_queue_index` (`queue`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8");
		}
	}
}