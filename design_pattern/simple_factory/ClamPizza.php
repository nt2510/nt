<?php
namespace simple_factory;
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
