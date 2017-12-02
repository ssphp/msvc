<?php

/**
 * 导图控制器
 * @author star
 */
class c_mind
{

	/**
	 * 在调用本控制器类的每个 Action 之前进行处理
	 * @param string $action 请求的 Action
	 * @return false - 数据验证失败或其他情况禁止继续调用， true(或null) - 继续调用，其他结果 - 直接用该数据结束本次请求
	 */
	function _willCall( $action )
	{
		header('Content-type: image/svg+xml; charset=UTF-8');
		if( !method_exists( $this, $action ) ) return V();
	}

}
