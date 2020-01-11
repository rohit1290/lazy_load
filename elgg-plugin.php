<?php
require_once dirname(__FILE__) . '/vendors/Mobile_Detect.php';

return [
	'bootstrap' => LazyLoad::class,
	'views' => [
		'default' => [
			'lazy_load.js' => elgg_get_simplecache_url('js', 'lazy_load/js'),
			'graphics/spacer.gif' => __DIR__ ."/graphics/spacer.gif",
		],
	],
];
