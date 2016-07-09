<?php

include 'Singleton.php';

//直接new會報錯，因為構造函數是私有的
//$singleton = new Singleton;
//$instance = $singleton->getInstance();
$instance = Singleton::getInstance();
$instance->test();
var_dump($instance);

exit;

$instance = $singleton->getInstance2();

var_dump($instance);
