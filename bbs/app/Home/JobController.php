<?php
namespace App\Home;

use DB;
use App\Jobs\NewsSyncJob;
use App\Jobs\NewsSendJob;
use App\Jobs\RecomJob;

/**
 * 任务
 * @author ntlee
 * @version 2017-03-19
 */
class JobController extends BaseController
{
	
	public function index()
	{
		echo 'this is index'."<br>";
		$newsJob = new NewsSyncJob();
		$newsJob->handle();
	}
	
	public function syncNews()
	{
		for($i=0;$i<3;$i++){
			$newsJob = new NewsSyncJob();
			$newsJob->handle();
		}
	}
	
	public function sendNews()
	{
		for($i=0;$i<3;$i++){
			$newsJob = new NewsSendJob();
			$newsJob->handle();
		}
	}
}


