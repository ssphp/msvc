<?php

/**
 * 此运行环境特有的配置（建议默认配置使用生产环境，只在开发和测试环境中做特殊配置）
 */

	// 增加测试环境的站点映射
	$config['SITE']['top.msvc.net'] = 'web';

	// 测试环境使用特定的资源域名访问本地资源
	$config['VIEW_REPLACE']['res\.msvc\.top'] = 'res.top.msvc.net';
