<?php

include_once 'CondimentDecorator.php';
/**
 * 
 * 
 */
class Milk extends CondimentDecorator
{
	private $bevarage;
	
	public function __construct(Bevarage $bevarage)
	{
		$this->bevarage = $bevarage;
	}
	
	public function getDescription2()
	{
		return $this->bevarage->getDescription.'+milk';
	}
	
	public function cost()
	{
		return $this->bevarage->cost.'+0.5';
	}
}





