<?php 
include_once ‘GiveGift.php’;
include_once ‘You.php’;

class HerChum implements GiveGift
{
	public $you;
	
	public function __construction(Beautiful $mm)
	{
		$this->you = new You($mm);
	}

	public function giveFlowers()
	{
		$this->you->giveFlowers();
	}

	public function giveBook()
	{
		
		$this->you->giveBook();
	}
	
}
