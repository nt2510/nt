<?php
namespace strategy;
class ArrayHandler
{
	private $sortObj;
	public function sort($arr)
	{
		$this->sortObj->sort($arr);
	}
	
	public function setSort(Sort $obj){
		$this->sortObj = $obj;
	}
}




