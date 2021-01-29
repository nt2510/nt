<?php
require 'vendor/autoload.php';


//https://segmentfault.com/a/1190000021422461
/*
//run stack
$stack = App\Queue\ImmutableStack::createEmpty();
var_dump($stack);
$stack = $stack->push('stack_a');
var_dump($stack);
$stack = $stack->push('stack_b');
var_dump($stack);
$stack = $stack->push('stack_c');
var_dump($stack);
echo $stack->peek();
$stack = $stack->pop();
var_dump($stack);
echo $stack->peek();

//run queue
$queue = App\Queue\ImmutableQueue::createEmpty();
$queue = $queue->enQueue('queue_a');
var_dump($queue);
$queue = $queue->enQueue('queue_b');
var_dump($queue);
$queue = $queue->enQueue('queue_c');
var_dump($queue);

$queue = $queue->deQueue();
var_dump($queue);
echo $queue->head();*/

//110011,1010
/*$a = '110011';
$b = '1010';



$a = '11010';
$b = '00101001';
$result = binplus($a,$b);
var_dump($result);
//https://blog.csdn.net/penglonghu/article/details/25960629
function binplus($arg1,$arg2)
{
    if ($arg1 == '' || $arg2 == '') {
        return false;
    }
    $tmpsum = bindec($arg1) + bindec($arg2);
    return decbin($tmpsum);
}


function addBinary($a, $b) {
    $aSize = strlen($a);
    $bSize = strlen($b);
//Step 1:计算出每个字符串的长度后，进行比较，以0来填充字符串确保两个字符串位数相同
    while ($aSize > $bSize) {
        $b = '0' . $b;
        ++$bSize;
    }
    while ($aSize < $bSize) {
        $a = '0' . $a;
        ++$aSize;
    }
    for ($i = $aSize - 1; $i >= 0; $i--) {
//Step 2: 经Step 1后，两字符串位数已经相同，$aSize-1后的下标即为最后一位数的下标，即从末位开始进行相加
        $a[$i] = $a[$i] + $b[$i];
        if ($i != 0) {
//当下标没有到第一个字符的时候，判断相加之和是否大于1，大于1则需要进位
            if ($a[$i] > 1) {
//把相加之和取模2后的值赋值给当前下标对应值
                $a[$i] = $a[$i] % 2;
//顺便把前一个下标对应值先加一个进位，这样在下一轮循环的时候，该值已为最新值了
                $a[$i - 1] = $a[$i - 1] + 1;
            }
        } else {
//由于下标0比较特殊，可能两数相加后，会产生一个位数大1的数，则需要再连接一个字符1在字符串前，最后才是正确结果。
            if ($a[$i] > 1) {
                $a[$i] = $a[$i] % 2;
                $a = '1' . $a;
            }
        }
    }
    return $a;
}*/

calculateChange('16.00','19.54');

function calculateChange($price, $cash)
{
    $arr =array(
        'PENNY'=> '0.01',
        'NICKEL'=> '0.05',
        'DIME' => '0.10',
        'QUARTER'=> '0.25',
        'HALF DOLLAR' => '0.50',
        'ONE' => '1.00',
        'TWO' => '2.00',
        'FIVE' => '5.00',
        'TEN' => '10.00',
        'TWENTY' => '20.00',
        'FIFTY' => '50.00',
        'ONE HUNDRED' => '100.00');
    arsort($arr);

    if($price > $cash){
        return 'ERROR';
    }elseif($price == $cash){
        return 'ZERO';
    }else{
        $moneyNum = $cash - $price;
        //$change = changeMoney($arr,$moneyNum);
        return '';
        //return $change;
    }

}
//http://www.php20.cn/article/182
function changeMoney($moneyArr,$moneyNum)
{

    $changeMethod = [];
    while ($faceValue = array_shift($moneyArr)) {
        if ($faceValue <= $moneyNum) {
            $quotient = floor($moneyNum / $faceValue);
            $moneyNum -= intval($quotient * $faceValue);
            if (isset($changeMethod[$faceValue])) {
                $changeMethod[$faceValue] += $quotient;
            } else {
                $changeMethod[$faceValue] = $quotient;
            }
        }

        if ($moneyNum == 0) {
            break;
        }
    }
    if ($moneyNum>0){
    }
    return $changeMethod;
}

