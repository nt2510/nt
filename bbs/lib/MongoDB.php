<?php
/**
 * MongoDB操作類
 * @author ntlee
 * @version 2017-04-25
 *
 */
class MongoDB
{
	//對象靜態，保證唯一實例。定義為私用，防止外部訪問。
	private static $uniqueInstance;	
	private $manager;
	private $bulk;
	private $database;
	private $collection;
	
	/**
	 * 構造函數私有，防止外部實例化
	 */
	private function __construct($database='',$collection=''){			
		$manager = $this->connection();
		$this->setManager($manager);
		$this->setDatabase($database);
		$this->setCollection($collection);
	}
	
	/**
	 * 防止克隆
	 */
	private function __clone()
	{
		
	}
	
	private function connection()
	{
		$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
		return $manager;		
	}
	
	private function setManager($manager){
		$this->manager = $manager;
	}
	
	private function setDatabase($database){
		$this->database = $database;
	}
	
	private function setCollection($collection){
		$this->collection = $collection;
	}
	
	private function setBulk()
	{
		$bulk = new MongoDB\Driver\BulkWrite();
		$this->bulk = $bulk;
	}
	
	private function executeWrite()
	{
		$result = $this->manager->executeBulkWrite($this->database.'.'.$this->collection, $this->bulk);
		return $result;
	}
	
	private function executeQuery($query)
	{		
		$result = $this->manager->executeQuery($this->database.'.'.$this->collection, $query);
		return $result;
	}
	
	/**
	 * 定義為靜態，方便外部調用。
	 * 如果非靜態，外部只能實例化，再調用。但構造函數為私有，外部無法實例化。
	 */
	public static function getInstance($database, $collection)
	{
		if(!(self::$uniqueInstance instanceof self)){
			self::$uniqueInstance = new self($database, $collection);
		}
		return self::$uniqueInstance;		
	}	

	public function select($filter,$option)
	{	
		$query = new MongoDB\Driver\Query($filter,$option);
		$result = $this->executeQuery($query);
		return $result;	
	}
	
	public function insert($data)
	{
		$this->setBulk();
		$this->bulk->insert($data);		
		$result = $this->executeWrite();				
		return $result;		
	}
	
	public function delete($where)
	{
		$this->setBulk();
		$this->bulk->delete($where);
		$result = $this->executeWrite();
		return $result;
	}
	
	public function update($where,$newData)
	{
		$this->setBulk();
		$this->bulk->update($where,$newData);
		$result = $this->executeWrite();
		return $result;
	}
		
}




