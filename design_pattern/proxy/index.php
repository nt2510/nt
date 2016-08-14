<?php

include 'Tea.php';
include 'Coffe.php';

//此處需實例化子類。因為抽象類是不能被實例化的。

$tea = new Tea();

$tea->prepareRecipe();

$coffe = new Coffe();

$coffe->prepareRecipe();
