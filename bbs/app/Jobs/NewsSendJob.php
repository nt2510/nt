<?php
namespace App\Jobs;



use Illuminate\Support\Facades\Redis;

/**
 * 最新消息任务
 * @author ntlee
 * @version 2017-03-19
 */
class NewsSendJob implements Job
{
	
	public function handle(){
		$queue = new \App\Component\Queue\Queue();
		$job =  "send news job start";
				
		$key = 'device';
		
		
		$device = $queue->pop($key);
		var_dump($device);
	}
}


