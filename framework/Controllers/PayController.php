<?php
require_once 'BaseController.php';

/**
 * 付款類
 * @author ntlee
 * @version 2016-11-13
 */
class PayController extends BaseController
{
	public function pay()
	{
		include 'PayHandle.php';
		$payHandle = new PayHandle();
		$payType = intval($_POST['payType']) ? intval($_POST['payType']) : 1;
		if($payType == 1){
			include 'CoinsPay.php';
			$coinsPay = new CoinsPay();
			$payHandle->setPayMethod($coinsPay);
			$payHandle->pay($params);
		}else{	
			include 'IOSPay.php';
			$iOSPay = new IOSPay();
			$payHandle->setPayMethod($iOSPay);
			$payHandle->pay($params);
		}
		
		
	}
	
}


