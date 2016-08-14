<?php

abstract class CoffeBeverage
{
	
	public function prepareRecipe()
	{
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		$this->addCondiments();
	}
	
	public function boilWater()
	{
		echo "boil water <br>";
	}
	
	public abstract function brew();
	
	
	public function pourInCup()
	{
		echo "pour in cup <br>";
	}
	
	public abstract function addCondiments();
}




