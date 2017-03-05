<?php

$arr = array(2,6,8,9,3,7,5,1,10,4);
bubbleSort($arr);
insertSort($arr);
selectionSort($arr);

/*冒泡排序*/
function bubbleSort($arr)
{
	echo "<br>冒泡排序前：<br>";
	print_r($arr);
	$num = count($arr);
	//$i<$num-1即可，因為最後一位一定是最大的，沒必要$i=$num-1
	for($i=0;$i<$num-1;$i++){
		//$j的循環是為了保證$i的位置是最小值
		for($j=$num-1;$j>$i;$j--){
			if($arr[$i]>$arr[$j]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	echo "<br>冒泡排序後：<br>";
	print_r($arr);
	return $arr;
}

/*插入排序*/
/*它的工作原理是通过构建有序序列，对于未排序数据，在已排序序列中从后向前扫描，找到相应位置并插入
 1. 从第一个元素开始，该元素可以认为已经被排序
 2. 取出下一个元素，在已经排序的元素序列中从后向前扫描
 3. 如果该元素（已排序）大于新元素，将该元素移到下一位置
 4. 重复步骤3，直到找到已排序的元素小于或者等于新元素的位置
 5. 将新元素插入到该位置中
 6. 重复步骤2~5*/
function insertSort($arr)
{
	echo "<br>插入排序前：<br>";
	print_r($arr);
	$num = count($arr);
	for($i=1;$i<$num;$i++){
		for($j=$i;$j>0;$j--){
			//此處是$j與$j-1比，因為是從後往前
			if($arr[$j]<$arr[$j-1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$j-1];
				$arr[$j-1] = $temp;
			}
		}
	}
	echo "<br>插入排序後：<br>";
	print_r($arr);
	return $arr;
}

/*選擇排序*/
/*將要排序的對象分作兩部份，一個是已排序的，一個是未排序的。如果排序是由小而大，從後端未排序部份選擇一個最小值，並放入前端已排序部份的最後一個。*/
function selectionSort($arr)
{
	echo "<br>選排序前：<br>";
	print_r($arr);
	$num = count($arr);
	for($i=0;$i<$num;$i++){
		$min = $i;
		for($j=$i+1;$j<$num;$j++){
			if($arr[$j]<$arr[$min]){
				$min = $j;
			}
		}
		$temp = $arr[$i];
		$arr[$i] = $arr[$min];
		$arr[$min] = $temp;
	}
	echo "<br>選擇排序後：<br>";
	print_r($arr);
	return $arr;
}




