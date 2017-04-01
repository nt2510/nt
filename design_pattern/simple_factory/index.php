<?php
use simple_factory\PizzaStore;

spl_autoload_register(function($class){
	$file = str_replace('\\', DIRECTORY_SEPARATOR, __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR. $class . '.php');
	if(is_file($file)) {
		require_once($file);
	}
});

$pizzaStore = new PizzaStore();

$pizzaStore->orderPizza('cheese');
$pizzaStore->orderPizza('clam');




