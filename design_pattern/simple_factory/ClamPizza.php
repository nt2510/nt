<?php
include_once 'Pizza.php';
class ClamPizza extends Pizza
{
	public function prepare()
	{
		echo 'clam prepare'."<br>";
	}
	
	public function bake()
	{
		echo 'clam bake'."<br>";
	}
	
}
