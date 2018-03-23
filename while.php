<?php
echo "It is prime: <br/>";
$i = 2;
while ($i <= 100) {
    $counter=0;
    for ($j = 1; $j <= $i; $j++) {
        if($i % $j == 0){
            $counter++;
        }
    }
    if($counter ==2 ){
        echo $i."<br/>";
    }
    $i=$i+1;
}