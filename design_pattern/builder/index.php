<?php

include_once 'KFCWaiter.php';
include_once 'MealA.php';
include_once 'MealB.php';

$mealA = new MealA();
$KFCWatier = new KFCWaiter($mealA);
$meal = $KFCWatier->product();


echo "食物是：".$meal->getFood()."<br>";
echo "飲品是：".$meal->getDrink()."<br>";





