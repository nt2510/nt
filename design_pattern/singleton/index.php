<?php
use singleton\Singleton;

spl_autoload_register(function($class){
	$file = str_replace('\\', DIRECTORY_SEPARATOR, __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR. $class . '.php');
	if(is_file($file)) {
		require_once($file);
	}
});

//直接new會報錯，因為構造函數是私有的
//$singleton = new Singleton;
//$instance = $singleton->getInstance();
$instance = Singleton::getInstance();
$instance->test();
var_dump($instance);


