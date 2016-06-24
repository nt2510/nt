<?php

include 'ImageFile.php';
include 'TextFile.php';
include 'Folder.php';



$bigFolder = new Folder;

$imageFile = new ImageFile;
$textFile = new TextFile;

$bigFolder->add($imageFile);
$bigFolder->add($textFile);

$smallFolder = new Folder;
$smallFolder->add($imageFile);
$smallFolder->add($textFile);
$smallFolder->display();
echo "-----------<br>";





