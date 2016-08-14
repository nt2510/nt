<?php 
include_once ‘GiveGift.php’;

class You implements GiveGift
{
	public $mm;
	public function __construction(Beautiful $mm)
	{
		$this->mm = $mm;
	}

	public function giveFlowers()
	{
		echo $this->mm->getName().“give flowers<br>”;
	}

	public function giveBook()
	{
		echo $this->mm->getName().“give book<br>”;

	}
	
}
