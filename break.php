<?php
// Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400
echo "First prime: <br/>";
for($i = 200; $i <= 400; $i++){
    $counter = 0;
    for($j = 1; $j <= $i; $j++){
        if($i % $j == 0){
            $counter++;
        }
    }
    if($counter ==2 ){
        echo $i."<br/>";
break;
    }
}