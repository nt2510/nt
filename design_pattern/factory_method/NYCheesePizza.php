<?php
include_once 'Pizza.php';
class NYCheesePizza extends Pizza
{
	
	public function prepare()
	{
		echo 'NY cheese prepare'."<br>";
	}
	
	public function bake()
	{
		echo 'NY cheese bake'."<br>";
	}
	
}
