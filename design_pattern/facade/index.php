<?php

include 'WatchTvFacade.php';
include 'Tv.php';
include 'Light.php';
include 'AirCondition.php';


$tv = new Tv();
$light = new Light();


$airCondition = new AirCondition();

$watchTvFacade = new WatchTvFacade($light, $airCondition, $tv);

$watchTvFacade->on();  
$watchTvFacade->off();
