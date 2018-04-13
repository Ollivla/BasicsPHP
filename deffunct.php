<?php
/* Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre> В зависимости от значения второго
аргумента функции, выводить используя var_dump или print_r. По умолчанию использовать print_r */
function myFun(array $a){
    sort($a);
    echo "<pre>";
      print_r($a);
   echo "</pre>";
}
$a = ['juice', 'water', 'coffee', 'tea', 'milk', 375, 5];
myFun($a);