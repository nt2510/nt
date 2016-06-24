<?php

include 'ArrayHandler.php';




include 'BubbleSort.php';
$bubbleSort = new BubbleSort;

include 'InsertionSort.php';
$insertionSort = new InsertionSort;


$arr = array(1,2);

$arrayHandler = new ArrayHandler;


$arrayHandler->setSort($bubbleSort);
$arrayHandler->sort($arr);

$arrayHandler->setSort($insertionSort);
$arrayHandler->sort($arr);

