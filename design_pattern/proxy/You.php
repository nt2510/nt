<?php 
include_once 'GiveGift.php';
include_once 'BeautifulGirl.php';

class You implements GiveGift
{
	public $mm;
	public function __construct(BeautifulGirl $mm)
	{
		$this->mm = $mm;
	}

	public function giveFlowers()
	{
		echo $this->mm->getName()."give flowers<br>";
	}

	public function giveBook()
	{
		echo $this->mm->getName()."give book<br>";

	}
	
}
