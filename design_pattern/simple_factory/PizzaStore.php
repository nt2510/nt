<?php
namespace simple_factory;
class PizzaStore
{
	
	public function orderPizza($type)
	{	
		$factory = new SimplePizzaFactory;
		$pizza = $factory->createPizza($type);
		
		$pizza->prepare();
		$pizza->bake();
		
		return $pizza;
	}
	
}