<?php
/* Создать функцию, которая принимает один аргумент в виде массива и дописывает в него последним элементом количество
значений массива */
function addtest(array & $arr)
{
    $length = count($arr);
    array_push($arr, $length);
}
$narray = [55, 31, 7, 102, 54, 1, 89];
addtest($narray);
echo '<pre>';
print_r($narray);
echo '</pre>';