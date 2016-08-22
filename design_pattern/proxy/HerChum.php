<?php 
include_once 'GiveGift.php';
include_once 'You.php';
include_once 'BeautifulGirl.php';

class HerChum implements GiveGift
{
	public $you;
	
	public function __construct(BeautifulGirl $mm)
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
