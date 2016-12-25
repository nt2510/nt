<?php
namespace App\Home;

require_once 'BaseController.php';

//require_once BASE_PATH.'/app/Logic/OrderLogic.php';
use App\Logic\OrderLogic;
use Db;
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
		$db = Db::getInstance();//var_dump($db);
		$sql = "insert into `order` set user_id = 37,money=88,status=1,ispay=1,posttime='2016-11-06 17:00:00'";
		$id = $db->insert($sql);
		//var_dump($sql);
		//var_dump($id);//exit;
		
		$orderLogic = new OrderLogic();
		$orderLogic->useObserver();
		
		exit;

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
	
	public function orderNum()
	{	
		include_once BASE_PATH.'/MongoDB.php';
		$db = MonDB::getInstance();
		$db = $db->conn;
		//$db->createCollection('order_item_use');
		$order = $db->order;
		
		$data = array('name'=>'best book', 'stauts'=>0);
		//$order->insert($data);
		
		$data = $order->find();
		foreach($data as $val){
			var_dump($val['name']);
		}
		
		$order->update(array('code'=>'10'), array('name'=>'where is animals'));
	}
}


