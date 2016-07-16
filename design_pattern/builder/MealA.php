<?php

include_once 'MealBuilder.php';

class MealA extends MealBuilder
{
	public function buildFood()
	{
		$this->meal->setFood('漢堡');
	}
	
	public function buildDrink()
	{
		$this->meal->setDrink('橙汁');
	}
}




