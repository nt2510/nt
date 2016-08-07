<?php

include_once 'HomeBlend.php';
include_once 'DarkRoast.php';
include_once 'Milk.php';
include_once 'Mocha.php';




$homeBlend = new HomeBlend();
echo $homeBlend->getDescription().'$'.$homeBlend->cost()."<br>";


$darkRoast = new DarkRoast();
$milk = new Milk($darkRoast);
$mocha = new Mocha($darkRoast);


echo $milk->getDescription().'$'.$milk->cost()."<br>";
echo $mocha->getDescription().'$'.$mocha->cost()."<br>";







