<?php
namespace adapter;
class DogAdapter implements Robot
{
	private $dog;
	
	public function __construct(Dog $dog)
	{
		$this->dog = $dog;
	}
	
	public function cry()
	{
		echo "狗適配器準備叫<br>";
		$this->dog->wang();
	}

	public function move()
	{
		echo "狗適配器準備慢慢移動<br>";
		$this->dog->run();
	}
}


