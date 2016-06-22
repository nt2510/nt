<?php

class PizzaStore
{
	
	public function orderPizza($type)
	{
		include_once 'SimplePizzaFactory.php';
		
		$factory = new SimplePizzaFactory;
		$pizza = $factory->createPizza($type);
		
		$pizza->prepare();
		$pizza->bake();
		
		return $pizza;
	}
	
}