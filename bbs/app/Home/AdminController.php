<?php
namespace App\Home;

use App\Logic\OrderLogic;
use Db;
/**
 * 訂單控制器
 * @author ntlee
 * @version 2016-11-13
 */
class AdminController extends BaseController
{
	
	public function doReg()
	{
		include BASE_PATH.'/Db.php';
		$db = Db::getInstance();//var_dump($db);
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$pwd = md5($pwd);
		$posttime = date('Y-m-d H:i:s');
		$sql = "insert into `admin` set username = '{$username}', password='{$pwd}', posttime='{$posttime}'";
		$id = $db->insert($sql);
		var_dump($sql);
		//var_dump($id);//exit;
	
		//$orderLogic = new OrderLogic();
		//$orderLogic->useObserver();
		var_dump($id);
		exit;
	
		$url = "index.php?module=order&action=detail&id={$id}";
		header("Location:".$url);
	
	}
	
	public function reg()
	{
		include BASE_PATH.'/Db.php';
	
		//var_dump($res);
		include BASE_PATH .'/template/adminReg.php';
	}
	
	
	
}

