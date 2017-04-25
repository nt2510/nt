<?php
namespace App\Home;

use MongoDB;

/**
 * mongo
 * @author ntlee
 * @version 2017-04-25
 */
class MongoController extends BaseController
{
	
	public function index()
	{
		$mongodb = MongoDB::getInstance('nt','order');
		$filter = ['id'=>['$gt'=>1]];
		$option = ['sort'=>['id'=>-1]];
		$result = $mongodb->select($filter,$option);var_dump($result);
		
		$newData = ['user_id'=>333,'price'=>66,'id'=>3];
		$where = ['id'=>3];
		$mongodb->update($where, $newData);
		
		$data = ['id'=>3,'user_id'=>33,'price'=>58];
		$mongodb->insert($data);	
	}
		
}


