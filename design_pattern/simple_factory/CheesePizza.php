<?php
namespace simple_factory;
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
