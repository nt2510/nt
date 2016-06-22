<?php
include_once 'PizzaStore.php';
class ChicagoPizzaStore extends PizzaStore
{
	
	
	public function createPizza($type)
	{
		include_once 'ChicagoCheesePizza.php';
		include_once 'ChicagoClamPizza.php';
		$pizza = NULL;
		if($type == 'cheese'){
			$pizza = new ChicagoCheesePizza();
		}elseif($type == 'clam'){
			$pizza = new ChicagoClamPizza();
		}
		return $pizza;
	}
}