<?php
namespace App\Logic;

use App\Logic\SmsLogic;
use App\Logic\BaseLogic;
use App\Logic\CouponLogic;
use App\Component\Subject;
use App\Component\Observer;

/**
 * 訂單邏輯類
 * @author ntlee
 * @version 2016-12-19
 */
class OrderLogic extends BaseLogic implements Subject
{
	private $observers = array();
	
	public function registerObserver(Observer $observer)
	{
		if(!in_array($observer, $this->observers)){
			$this->observers[] = $observer;
		}
	}
	
	public function deleteObserver(Observer $observer)
	{
	
	}
	
	public function notify()
	{
		foreach($this->observers as $observer){
			$observer->update();
		}
	}
	
	public function useObserver()
	{
		$smsLogic = new SmsLogic();
		$this->registerObserver($smsLogic);
		
		$couponLogic = new CouponLogic();
		$this->registerObserver($couponLogic);
		
		$this->notify();
	}
}


