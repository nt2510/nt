<?php
namespace App\Home;

require_once 'BaseController.php';

/**
 * 方案類
 * @author ntlee
 * @version 2016-11-13
 */
class PlanController extends BaseController
{
	public function index()
	{
		include BASE_PATH .'/template/index.php';
	}
	
	

}


