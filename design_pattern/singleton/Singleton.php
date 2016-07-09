<?php

class Singleton
{
	//對象靜態，保證唯一實例。定義為私用，防止外部訪問。
	private static $uniqueInstance;
	
	
	//構造函數私有，防止外部實例化
	private function __construct(){
		echo 'this is construct'."<br>";
	}
	
	/**
	 * 定義為靜態，方便外部調用。
	 * 如果非靜態，外部只能實例化，再調用。但構造函數為私有，外部無法實例化。
	 */
	public static function getInstance()
	{
		if(!self::$uniqueInstance){
			self::$uniqueInstance = new Singleton;
		}
		return self::$uniqueInstance;
		
	}
	
	public function test()
	{
		echo 'this is test'."<br>";
	}
	
	
}




