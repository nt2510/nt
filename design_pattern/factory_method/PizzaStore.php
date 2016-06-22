<?php

abstract class PizzaStore
{
	
	public function orderPizza($type)
	{
		/* include_once 'SimplePizzaFactory.php';
		
		$factory = new SimplePizzaFactory;
		$pizza = $factory->createPizza($type); */
		
		//以前調用簡單工廠來創建對象，現在調用子類來創建
		$pizza = $this->createPizza($type);
		
		$pizza->prepare();
		$pizza->bake();
		
		return $pizza;
	}
	
	abstract public function createPizza($type);
	
}