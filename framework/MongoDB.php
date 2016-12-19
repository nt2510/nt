<?php

class MonDB
{
	//對象靜態，保證唯一實例。定義為私用，防止外部訪問。
	private static $uniqueInstance;
	public  $conn;
	
	//構造函數私有，防止外部實例化
	private function __construct(){		
		$m = new MongoClient();
		$db = $m->nt;
		
		$db = new \MongoDB\Driver\Manager("mongodb://".self::MG_USERNAME.":".self::MG_PWD."@".self::MG_IP.":".self::MG_PORT);
		dd($db);
		
		$this->conn = $db;
	}
	
	/**
	 * 防止克隆
	 */
	private function __clone()
	{
		
	}
	
	/**
	 * 定義為靜態，方便外部調用。
	 * 如果非靜態，外部只能實例化，再調用。但構造函數為私有，外部無法實例化。
	 */
	public static function getInstance()
	{
		if(!(self::$uniqueInstance instanceof self)){
			self::$uniqueInstance = new self;
		}
		return self::$uniqueInstance;
		
	}
	
	public function select($sql)
	{	
		
	}
	
	public function insert($sql)
	{
			
	}
	
	public function delete($sql)
	{
		
	}
	
	public function update($sql)
	{
		
	}
	
	
}




