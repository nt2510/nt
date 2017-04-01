<?php
use observer\WeatherSubject;
use observer\TempObserver;
use observer\HumidityObserver;
use observer\PressureObserver;

spl_autoload_register(function($class){
	$file = str_replace('\\', DIRECTORY_SEPARATOR, __DIR__ . DIRECTORY_SEPARATOR.'..'. DIRECTORY_SEPARATOR. $class . '.php');
	if(is_file($file)) {
		require_once($file);
	}
});

$weatherSubject = new WeatherSubject();
$tempObserver = new TempObserver();
$humidityObserver = new HumidityObserver();
$pressureObserver = new PressureObserver();

$weatherSubject->register($tempObserver);
$weatherSubject->register($humidityObserver);
$weatherSubject->register($pressureObserver);

$weatherSubject->notify();








