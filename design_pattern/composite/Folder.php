<?php
include_once 'File.php';
class Folder extends File
{
	public $files = array();
	
	public function add($obj)
	{
		$this->files[] = $obj;
	}
	
	public function display()
	{
		foreach($this->files as $obj){
			$obj->display();
		}
	}
}




