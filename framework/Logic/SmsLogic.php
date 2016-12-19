<?php
require_once 'BaseLogic.php';
include_once BASE_PATH."/include/Observer.php";
/**
 * 簡訊邏輯類
 * @author ntlee
 * @version 2016-12-19
 */
class SmsLogic extends BaseLogic implements Observer
{
	public function update()
	{
		echo 'sms send you.';
	}
}


