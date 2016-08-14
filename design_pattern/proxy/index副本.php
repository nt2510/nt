<?php
include ‘BeautifulGirl.php';
//include ‘HerChum.php';
exit();

$mm = new Beautiful(‘女神’);
$herChum = new HerChum($mm);


$herChum->giveFlowers();
$herChum->giveBook();
?>
