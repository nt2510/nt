<?php


class KFCWaiter
{
	public $mealBuilder;
	
	public function __construct(MealBuilder $mealBuilder)
	{
		$this->mealBuilder = $mealBuilder;
	}
	
	/**
	 * 做套餐
	 */
	public function product()
	{
		
		$this->mealBuilder->buildFood();
		$this->mealBuilder->buildDrink();
		
		return $this->mealBuilder->getMeal();
		
	}
	
	
	
}





