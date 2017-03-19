<?php
namespace App\Component\Queue;



/**
 * 队列
 * @author ntlee
 * @version 2017-03-19
 */
class Queue
{
	public $redis;
	public function __construct()
	{
		$this->redis = new \Predis\Client(array('host'=>'192.168.8.117','port'=>'6379'));
	}
	
	public function push($key,$value)
	{
		$this->redis->rpush($key,$value);
	}
	
	public function pop($key)
	{
		$value = $this->redis->lpop($key);
		
		return $value;
	}
}


