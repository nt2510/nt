<?php
include_once 'CoffeBeverage.php';

class Coffe extends CoffeBeverage
{
	public function brew()
	{
		echo "brew coffe <br>";	
	}
	
	public function addCondiments(){
		echo "brew sugar <br>";
	}
	
}




