<?php
$a = 129;
$b = 127;
if ($a > $b){
    echo "$a is bigger than $b";
} else {
    echo "$b is bigger than $a";
}
$c = $a * $b;
if (($a * $b) > 1500){
    echo"<br/>multiplication result of {$a} * {$b} bigger than 1500 and equals: {$c}" ;
} else {
    echo"<br/>multiplication result of {$a} * {$b} less than 1500 and equals: {$c}";
}