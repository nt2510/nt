<?php
include_once 'PizzaStore.php';
class NYPizzaStore extends PizzaStore
{
	
	
	
	public function createPizza($type){
		include_once 'NYCheesePizza.php';
		include_once 'NYClamPizza.php';
		$pizza = NULL;
		if($type == 'cheese'){
			$pizza = new NYCheesePizza();
		}elseif($type == 'clam'){
			$pizza = new NYClamPizza();
		}
		return $pizza;
	}
	
}