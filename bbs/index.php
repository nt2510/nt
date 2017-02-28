<?php

require 'vendor/autoload.php';

$module = $_REQUEST['module'] ? $_REQUEST['module'] : 'Index';
$module = ucfirst($module);
$action = $_REQUEST['action'] ? $_REQUEST['action'] : 'Index';
$namespaces = "App\Home";
define('BASE_PATH',str_replace('','/',dirname(__FILE__)));//定义系统目录
$moduleFile = BASE_PATH."/app"."/Home/".$module."Controller.php";//die($moduleFile);
if(!file_exists($moduleFile)) die('不存在的module');
//require_once $moduleFile;
$moduleName = $namespaces.'\\'.$module."Controller";
$controller = new $moduleName;
$controller->{$action}();








