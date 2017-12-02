<?php

/**
 * 根控制器，用于处理 /xxxx.xxx
 * @author star
 */
class c_pages
{
	function __construct()
	{
		$GLOBALS['V']['nav_list'] = [
			[ page=>'s', name=>'S Framework' ],
			[ page=>'model', name=>'Model' ],
			[ page=>'service', name=>'Service' ],
			[ page=>'view', name=>'View' ],
			[ page=>'controller', name=>'Controller' ],
			[ page=>'tag', name=>'TagLib' ],
			[ page=>'lang', name=>'Lang' ],
			[ page=>'config', name=>'Config' ],
			[ page=>'download', name=>'Download' ],
		];
	}

	function __call( $action, $args )
	{
		foreach( $GLOBALS['V']['nav_list'] as &$nav )
			$nav['selected'] = $nav['page'] == $action;

		return V();
	}

	function lang()
	{
		return V( [zh_langs=>@file_get_contents( MSVC::$ROOT.'langs/zh' )] );
	}

	function config()
	{
		$data = [];
		$data['root_config'] = $this->_load_config_file( MSVC::$ROOT.'config.php' );
		$data['user_config'] = $this->_load_config_file( MSVC::$ROOT.'/user_config.php' );
		$data['site_config'] = $this->_load_config_file( MSVC::$ROOT.'/web/config.php' );
		return V( $data );
	}

	function _load_config_file( $file )
	{
		return str_replace( '<', '&lt;', @file_get_contents( $file ) );
	}

}
