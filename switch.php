<?php
$a = 96;
$b = 678;
    echo 'Switch for $a: <br/>';
switch ($a) {
    case ($a<=10): echo "Less than 10 and equals $a <br/>"; break;
    case ($a<=100): echo "Bigger than 10, but less than 100 and equals $a  <br/>"; break;
    case ($a<=1000): echo "Bigger than 100, but less than 1000 and equals $a  <br/>"; break;
}
    echo 'Switch for $b: <br/>';
switch ($b) {
    case ($b<=10): echo "Less than 10 and equals $b <br/>"; break;
    case ($b<=100): echo "Bigger than 10, but less than 100 and equals $b <br/>"; break;
    case ($b<=1000): echo "Bigger than 100, but less than 1000 and equals $b <br/>"; break;
}
    echo 'Comparison of $a and $b: <br/>';
switch ($a) {
    case ($a>$b): echo "$a is bigger than $b"; break;
    case ($a<$b): echo "$a is smaller than $b"; break;
}