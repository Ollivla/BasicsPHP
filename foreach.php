<?php
$arr = array(
    'a'  => 21,
    'b' => 17,
    'c'  => 18,
    'd' => 300,
    'e'  => 511,
    'f'  => 337,
    'j' => 510,
    'h'  => 332,
    'i' => 300,
    'g'  => 4);

echo 'Array values that are divided by 3: <br/>';
foreach ($arr as $item) {
        if($item % 3 == 0)
            echo "$item <br/>";
}