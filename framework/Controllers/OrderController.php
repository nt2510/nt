<?php
require_once 'BaseController.php';

/**
 * 訂單控制器
 * @author ntlee
 * @version 2016-11-13
 */
class OrderController extends BaseController
{
	public function add()
	{
		include BASE_PATH.'/Db.php';			
		$db = Db::getInstance();
		$sql = "insert into `order` set user_id = 37,money=88,status=1,ispay=1,posttime='2016-11-06 17:00:00'";
		$id = $db->insert($sql);

		$url = "index.php?module=order&action=detail&id={$id}";
		header("Location:".$url);

	}
	
	public function detail()
	{
		include BASE_PATH.'/Db.php';		
		$db = Db::getInstance();
		$id = intval($_GET['id']);
		$sql = "select * from `order` where id = {$id}";
		$res = $db->select($sql);
		//var_dump($res);
		include BASE_PATH .'/template/order.php';	
	}

}


