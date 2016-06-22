<?php

include 'NYPizzaStore.php';
include 'ChicagoPizzaStore.php';
$NYPizzaStore = new NYPizzaStore();
$chicagoPizzaStore = new ChicagoPizzaStore();


$NYPizzaStore->orderPizza('cheese');
$NYPizzaStore->orderPizza('clam');


$chicagoPizzaStore->orderPizza('cheese');
$chicagoPizzaStore->orderPizza('clam');

