<?php
$array = array (25, 30, 775, 12, 5, 9, 145, 678, 90, 807);
function fun_array ($array, $index = 4){
    //at first display array element with a key 4 and then other remaining elements
    if ($array && isset($array) && is_array($array)){
        echo $array[$index++].' ';
        if(count($array) > $index) fun_array ($array, $index);

    } else return false;
}
fun_array ($array);