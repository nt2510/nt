<?php 
include_once 'CoffeBeverage.php';

class Tea extends CoffeBeverage
{
	public function brew()
	{
		echo "brew tea <br>";	
	}
	
	public function addCondiments(){
		echo "add tea condiment <br>";
	}
	
}
