<?php
namespace App\Logic;

/**
 * 微信菜单
 * @author ntlee
 * @version 2017-07-06
 *
 */
class WxMenuLogic extends BaseLogic 
{
	
	public function create()
	{
		$wxLogic = new WxLogic();
		$accessToken = $wxLogic->getToken();
		
	}

}


