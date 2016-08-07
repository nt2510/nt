<?php

include_once 'CondimentDecorator.php';
/**
 * 
 * 
 */
class Mocha extends CondimentDecorator
{
	private $bevarage;
	
	public function __construct(Bevarage $bevarage)
	{
		$this->bevarage = $bevarage;
	}
	
	public function getDescription2()
	{
		return $this->bevarage->getDescription.'+Mocha';
	}
	
	public function cost()
	{
		return $this->bevarage->cost.'+0.5';
	}
}





