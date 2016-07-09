<?php

include_once 'Command.php';
include_once 'Television.php';
class CloseTvCommand implements Command
{
	public $tv;
	
	public function __construct()
	{
		$this->tv = new Television;
	}
	
	public function execute()
	{
		$this->tv->closeTv();
	}
}



