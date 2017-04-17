<?php
use adapter\Dog;
use adapter\DogAdapter;
spl_autoload_register(function($class){
	$file = str_replace('\\', DIRECTORY_SEPARATOR, __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR. $class . '.php');
	if(is_file($file)) {
		require_once($file);
	}
});

$dog = new Dog();
$dogAdapter = new DogAdapter($dog);

$dogAdapter->cry();
$dogAdapter->move();


