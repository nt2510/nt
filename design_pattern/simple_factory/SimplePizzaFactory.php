<?php
namespace simple_factory;
class SimplePizzaFactory
{
	
	public function createPizza($type)
	{
		include_once 'CheesePizza.php';
		include_once 'ClamPizza.php';
		$pizza = NULL;
		if($type == 'cheese'){
			$pizza = new CheesePizza();
		}elseif($type == 'clam'){
			$pizza = new ClamPizza();
		}
		return $pizza;
	}
	
	
	
}
