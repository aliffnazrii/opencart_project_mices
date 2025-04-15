<?php

// require_once('/Applications/XAMPP/xamppfiles/htdocs/oc30/system/vendor/var-dumper/index.php');

$options = array();
if (isset($argv)) {
	foreach ($argv as $arg) {
		parse_str($arg, $args);
		$options = array_merge($options, $args);
	}
}

foreach ($options as $key => $value) {
	if ($value) {
		$_GET[$key] = $value;
	}
}

$route = 'extension/module/queue';
$_GET['route'] = $route;

$current_dir = dirname(__FILE__);

$root_dir = dirname(dirname(dirname($current_dir)));

$path = isset($options['path']) ? '/'.$options['path'] : '';

$app_dir = $root_dir . $path;

chdir($app_dir);

if (file_exists($app_dir . '/index.php')) {
	require_once $app_dir . '/index.php';
} else {
	die('file not found');
}
