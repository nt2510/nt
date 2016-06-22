<?php
include_once 'Pizza.php';
class CheesePizza extends Pizza
{
	
	public function prepare()
	{
		echo 'cheese prepare'."<br>";
	}
	
	public function bake()
	{
		echo 'cheese bake'."<br>";
	}
	
}
