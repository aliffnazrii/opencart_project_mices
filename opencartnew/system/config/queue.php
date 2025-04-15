<?php
$_['connections'] = array(
	'acilit' => array(
		'table' => DB_PREFIX . 'acilit_jobs',
		'queue' => 'item',
	),
	'push_notification' => array(
		'table' => DB_PREFIX . 'push_notification_jobs',
		'queue' => 'item',
	),
	'create_coupon' => array(
		'table' => DB_PREFIX . 'coupon_jobs',
		'queue' => 'create_coupon',
	),
);
