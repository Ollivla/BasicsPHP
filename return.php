<?php
function primery($i){
    if($i == 1 or $i == 0)return false;
    for($j = 2; $j * $j <= $i; $j++)
    {
        if($i % $j == 0)return false;
    }
    return true;
}

$number = '66, 78, 17, 30, 25, 99, 43, 50, 7, 211, 5, 27, 19, 335, 456, 2, 983, 433';
$array = explode(', ', $number);
foreach($array as $key => $value)
{
    if(!primery($value)) unset($array["$key"]);
}
$number2 = implode(', ', $array);
echo $number2;