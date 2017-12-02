<?php

$config = [

	// 指定站点映射关系，只在根配置下有效，default 表示未指出的站点，如未设置 default 将拒绝不在列表的域名进行访问
	'SITE' => [
		'xxx.com'			=>	'web',
		'www.xxx.com'			=>	'web',
		'm.xxx.com'			=>	'wap',
		'admin.xxx.com'			=>	'admin',
		'default'			=>	'web',
	],

];
