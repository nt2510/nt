<?php

class PayHandle
{
	public $payMehtod;
	
	public function pay($params)
	{
		$this->payMethod->pay($params);
	}
	
	public function setPayMethod(Pay $payObj)
	{
		$this->payMethod = $payObj;
	}
	
	
	
	
	
}
