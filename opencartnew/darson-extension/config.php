<?php

return array(
	'export' => array(
		'3.0' => array(
			'system/library/acilit/*',
			'system/library/jobs/*',
			'system/library/queue/*',
			
			'system/library/barcode_generator/*',
			'system/library/epoint/*',
			'system/acilit_changes.ocmod.xml',
			'system/queue.ocmod.xml',
			'system/config/queue.php',
			'admin/controller/extension/module/acilit.php',

			'admin/controller/extension/module/acilit/*.php',
			'admin/language/en-gb/extension/module/acilit.php',
			'admin/model/extension/module/acilit.php',
			'admin/view/template/extension/module/acilit.twig',
			'catalog/controller/extension/module/queue.php',
			'system/acilit_changes.ocmod.xml',
		
			'admin/view/template/catalog/voucher_form.twig',
			'catalog/view/theme/journal3/template/account/redeem.twig',
			'catalog/view/theme/journal3/template/journal3/voucher_card.twig',
			'catalog/view/theme/journal3/template/account/point.twig',
			'catalog/view/theme/journal3/template/account/coupon.twig',
			'admin/model/extension/total/point.php',

			'catalog/controller/account/point.php',
			'catalog/controller/account/coupon.php',
			'catalog/language/en-gb/account/point.php',
			'catalog/language/en-gb/account/coupon.php',
			'catalog/model/account/point.php',
			'catalog/model/account/coupon.php',

			'catalog/controller/extension/total/point.php',
			'catalog/model/extension/total/point.php',
			'catalog/language/en-gb/extension/total/point.php',
			'catalog/view/template/extension/total/point.twig',
			
			'admin/controller/extension/total/point.php',
			'admin/model/extension/total/point.php',
			'admin/language/en-gb/extension/total/point.php',
			'admin/view/template/extension/total/point.twig',

			'catalog/controller/extension/module/acilit.php',
		),
		'1.5' => array()
	),
	'twig_to_tpl' => array(),
	'build' => array(
		'3.0' => array(
			'3.0/admin/*' => 'upload/admin',
			'3.0/catalog/*' => 'upload/catalog',
			'3.0/module.ocmod.xml' => ''
		),
		'2.3' => array(
			'3.0/admin/*' => 'upload/admin',
			'3.0/catalog/*' => 'upload/catalog',
			'3.0/module.ocmod.xml' => ''
		),
		'2.0' => array(
			'3.0/admin/*' => 'upload/admin',
			'3.0/catalog/*' => 'upload/catalog',
			'3.0/module.ocmod.xml' => ''
		),
		'1.5' => array(
			'3.0/admin/*' => 'upload/admin',
			'3.0/catalog/*' => 'upload/catalog',
			'1.5/vqmod/xml/module.xml' => 'vqmod/xml/'
		),
		'extra' => array()
	)
);
