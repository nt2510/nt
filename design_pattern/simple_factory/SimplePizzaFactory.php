<?php
namespace simple_factory;
class SimplePizzaFactory
{
	
	public function createPizza($type)
	{
		$pizza = NULL;
		if($type == 'cheese'){
			$pizza = new CheesePizza();
		}elseif($type == 'clam'){
			$pizza = new ClamPizza();
		}
		return $pizza;
	}
	
	
	
}
