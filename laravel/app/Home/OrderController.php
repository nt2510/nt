<?php

namespace App\Home;

use App\Http\Controllers\Controller;
use App\Model\Order;
use DB;

class OrderController extends Controller
{
    
	public function add()
	{
		$order = new Order();
		$user_id = 37;
		$ispay = 1;
		$money = 2150;
		$data = array('user_id'=>$user_id,'money'=>$money, 'status'=>1, 'ispay'=>$ispay,'posttime'=>date('Y-m-d H:i:s'));
		$oid = DB::table('order')->insertGetId($data);
		include_once app_path('include/orderCode.inc.php');
		
		$orderCodeArr = array('1001001', '3001001', '3001003');
		foreach($orderCodeArr as $code){
			
			$data = array('user_id'=>$user_id, 'status'=>1, 'ispay'=>$ispay,'posttime'=>date('Y-m-d H:i:s'));
			$data['code'] = $code;
			
			$codeArr = $codeConfig[$code];
			if(!$codeArr) continue;
			$data['money'] = $codeArr['money'];
			$data['start_time'] = date('Y-m-d H:i:s');
			$day = $codeArr['day'];
			$end_time = time() + $day*24*3600;
			$data['end_time'] = date('Y-m-d H:i:s',$end_time);
			
			$oiid = DB::table('order_item')->insertGetId($data);
			
		}
		dd($oiid);
		
		dd($order);
		echo 'vccd';
		dd('eve');
		
	}
	
    
  
}
