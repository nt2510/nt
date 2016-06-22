<?php
include_once 'Pizza.php';
class ChicagoCheesePizza extends Pizza
{
	
	public function prepare()
	{
		echo 'chicago cheese prepare'."<br>";
	}
	
	public function bake()
	{
		echo 'chicago cheese bake'."<br>";
	}
	
}
