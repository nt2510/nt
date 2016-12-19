<?php
require_once 'BaseLogic.php';
include_once BASE_PATH."/include/Observer.php";
/**
 * 優惠券邏輯類
 * @author ntlee
 * @version 2016-12-19
 */
class CouponLogic extends BaseLogic implements Observer
{
	public function update()
	{
		echo 'coupon give you.';
	}
}


