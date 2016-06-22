<?php
include_once 'Pizza.php';
class NYClamPizza extends Pizza
{
	public function prepare()
	{
		echo 'NY clam prepare'."<br>";
	}
	
	public function bake()
	{
		echo 'NY clam bake'."<br>";
	}
	
}
