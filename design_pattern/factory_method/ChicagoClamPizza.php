<?php
include_once 'Pizza.php';
class ChicagoClamPizza extends Pizza
{
	public function prepare()
	{
		echo 'chicago clam prepare'."<br>";
	}
	
	public function bake()
	{
		echo 'chicago clam bake'."<br>";
	}
	
}
