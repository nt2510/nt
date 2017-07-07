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
		
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$accessToken}";
		
		$data = '{
		     "button":[
		     {
		          "type":"click",
		          "name":"首页",
		          "key":"home"
		      },
		      {
		           "type":"click",
		           "name":"简介",
		           "key":"introduct"
		      },
		      {
		           "name":"菜单",
		           "sub_button":[
		            {
		               "type":"click",
		               "name":"hello word",
		               "key":"V1001_HELLO_WORLD"
		            },
		            {
		               "type":"click",
		               "name":"赞一下我们",
		               "key":"V1001_GOOD"
		            }]
		       }]
			}';
		$res = $wxLogic->httpQuest($url,$data);
		return json_decode($res, true);
	}

}


