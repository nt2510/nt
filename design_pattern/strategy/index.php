<?php
use strategy\ArrayHandler;
use strategy\BubbleSort;
use strategy\InsertionSort;

spl_autoload_register(function($class){
	$file = str_replace('\\', DIRECTORY_SEPARATOR, __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR. $class . '.php');
	if(is_file($file)) {
		require_once($file);
	}
});

	
$arr = array(1,2);
$arrayHandler = new ArrayHandler;

//策略一
$arrayHandler->setSort(new BubbleSort());
$arrayHandler->sort($arr);

//策略二
$arrayHandler->setSort(new InsertionSort());
$arrayHandler->sort($arr);

