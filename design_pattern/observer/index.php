<?php

include 'WeatherSubject.php';
include 'TempObserver.php';
include 'HumidityObserver.php';
include 'PressureObserver.php';

$weatherSubject = new WeatherSubject();
$tempObserver = new TempObserver();
$humidityObserver = new HumidityObserver();
$pressureObserver = new PressureObserver();

$weatherSubject->register($tempObserver);
$weatherSubject->register($humidityObserver);
$weatherSubject->register($pressureObserver);

$weatherSubject->notify();








