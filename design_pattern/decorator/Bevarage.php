<?php


abstract class Bevarage
{
	
	private $description = 'no description';
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public abstract function cost();
}





