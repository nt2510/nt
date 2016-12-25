<?php
namespace App\Logic;

use App\Component\Observer;

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


