<?php

class Db
{
	//對象靜態，保證唯一實例。定義為私用，防止外部訪問。
	private static $uniqueInstance;
	private $conn;
	
	//構造函數私有，防止外部實例化
	private function __construct(){		
		$conn = new PDO('mysql:host=127.0.0.1;dbname=bbs','root','');
		$conn->exec('set names utf8');
		
		$this->conn = $conn;
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
	
	public function test()
	{
		echo 'this is test'."<br>";
	}
	
	public function select($sql)
	{	
		$res = $this->conn->query($sql);
		$result = $res->fetchAll();
			
		return $result;	
	}
	
	public function insert($sql)
	{
		$this->statement($sql);
		$id = $this->getLastInsertId();
		return $id;		
	}
	
	public function delete($sql)
	{
		return $this->affectStatement($sql);
	}
	
	public function update($sql)
	{
		return $this->affectStatement($sql);
	}
	
	public function statement($sql)
	{
		$state = $this->conn->prepare($sql);		
		$res = $state->execute();
		return $res;
	}
	
	public function affectStatement($sql)
	{
		$state = $this->conn->prepare($sql);		
		$state->execute();
		$res = $state->rowCount();
		return $res;
	} 
	
	public function getLastInsertId()
	{
		return $this->conn->lastInsertId();
	}
}




