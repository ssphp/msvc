<?php

class c_index
{
	function index()
	{
		$url1 = $_SERVER["PHP_SELF"].'/package/class/action.html';
		$url2 = '/package/class/action.html';
		$r = S( 'package.class.action' );
		if( $r['error'] )
			$service_result = '调用 package.class.action 失败！';
		else
			$service_result = '调用 package.class.action 成功！ 返回信息：<br/>'.json_encode( $r, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );

		return V( [url1=>$url1, url2=>$url2, service_result=>$service_result] );
	}
}