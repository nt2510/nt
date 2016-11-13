<?php


$module = $_REQUEST['module'] ? $_REQUEST['module'] : 'Index';
$action = $_REQUEST['action'] ? $_REQUEST['action'] : 'Index';

define('BASE_PATH',str_replace('','/',dirname(__FILE__)));//定义系统目录
$moduleFile = BASE_PATH."/Controllers/".$module."Controller.php";//die($moduleName);
if(!file_exists($moduleFile)) die('不存在的module');
require_once $moduleFile;
$moduleName = $module."Controller";
$controller = new $moduleName;
$controller->{$action}();






