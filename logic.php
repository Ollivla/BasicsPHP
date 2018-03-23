<?php
//Вычислить значение выражения: false && true || false && true || !false && true
$a = true;
    //true
$b = !$a;
    //false
$c = $b && $a;
    //false, because $b is false
$d = !$b && $a;
    //true, because !$b and $a is true
$m = $c || $d;
    //true, because || is or, and I have $d - true
$f = $c || $c || $d;
    //true, because I have 1 value that = true ($d)
    /*$h = $a && $b || $a && $b || !$b && $a;
    even if I write completely, there will be true, because I have 1 value that equal true
    */
    echo 'Value of the expression: ';
var_dump($f);
//Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.
$x = 275;
$y = ($x % 2) == 0;
$x2 = 100;
$y2 = ($x2 % 2) == 0;
echo '<br/> Dividion the variables  by 2: ';
var_dump($y, $y2);