<?php
namespace App\Jobs;



use Illuminate\Support\Facades\Redis;

/**
 * 最新消息任务
 * @author ntlee
 * @version 2017-03-19
 */
class NewsSyncJob implements Job
{
	
	public function handle(){
		$queue = new \App\Component\Queue\Queue();
		$job =  "sys news job start";
				
		$key = 'device';
		$queue->push($key,$job);
		
		
		echo $job;
	}
}


