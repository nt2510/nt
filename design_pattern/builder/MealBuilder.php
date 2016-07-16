<?php

include_once 'Meal.php';
/**
 * 構造者
 * 
 */
abstract class MealBuilder
{
	public $meal;
	
	public function __construct()
	{
		$this->meal= new Meal();
	}
	
	public abstract function buildFood();
	
	public abstract function buildDrink();
	
	public function getMeal()
	{
		return $this->meal;
	}
}





