<?php
include 'BeautifulGirl.php';
include 'HerChum.php';


$mm = new BeautifulGirl('女神');
$herChum = new HerChum($mm);


$herChum->giveFlowers();
$herChum->giveBook();
?>
