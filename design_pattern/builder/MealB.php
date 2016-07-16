<?php

include_once 'MealBuilder.php';

class MealB extends MealBuilder
{
	public function buildFood()
	{
		$this->meal->setFood('雞翅');
	}
	
	public function buildDrink()
	{
		$this->meal->setDrink('可樂');
	}
}





