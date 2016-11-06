<?php

include 'Db.php';


$db = Db::getInstance();

$sql = "insert into `order` set user_id = 37,money=88,status=1,ispay=1,posttime='2016-11-06 17:00:00'";
//$id = $db->insert($sql);
//var_dump($id);

$sql = "update `order` set money=44 where id = 13";
$num = $db->update($sql);


$sql = "delete from `order`  where id = 12";
//$db->delete($sql);

$sql = "select * from `order`";
$res = $db->select($sql);
//var_dump($res);

