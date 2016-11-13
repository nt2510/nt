<?php
include_once "Pay.php";
/**
 * 點數付款
 * @author ntlee
 * @version 2016-11-13
 *
 */
class CoinsPay implements Pay
{
	public function pay($params)
	{
		echo 'this is coins pay';
	}
	
	
	
}



