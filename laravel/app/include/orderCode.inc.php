<?php
/**
 * 分三段 1 001 001
 * 第一段，大類別，1物件 2套餐 3加值
 * 第二段，小類別，如物件下的出租、出售、頂讓，套餐下的出租、出售
 * 第二段，更小類別，如出租物件下的普通、vip，出售套餐下的普通套餐
 * 
 */
$codeConfig = array(
	'1001001'=>array('name'=>'普通', 'money'=>500, 'day'=>90),
	'1001002'=>array('name'=>'vip', 'money'=>800, 'day'=>90),
	'1001003'=>array('name'=>'超級曝光', 'money'=>1000, 'day'=>90),
	'1001004'=>array('name'=>'黃金曝光', 'money'=>1500, 'day'=>90),
		
		
	'2001001'=>array('name'=>'新手套餐', 'money'=>1200, 'day'=>90),
	'2001002'=>array('name'=>'普通套餐', 'money'=>2200, 'day'=>90),
	'2001003'=>array('name'=>'超級套餐', 'money'=>3580, 'day'=>90),
		
		
	'3001001'=>array('name'=>'定時更新', 'money'=>150, 'day'=>90),
	'3001002'=>array('name'=>'加急標簽', 'money'=>150, 'day'=>90),
	'3001003'=>array('name'=>'精選推薦', 'money'=>1500, 'day'=>90),
	'3001004'=>array('name'=>'移動置頂', 'money'=>400, 'day'=>90),
	'3001005'=>array('name'=>'移動精選', 'money'=>1500, 'day'=>90),
		
		
);
