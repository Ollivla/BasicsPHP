<?php
/* Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for. Простое число - это число
   которое делится только на себя и на 1 */
echo "It is prime: <br/>";
    for($i = 1; $i <= 100; $i++){
        $n = 0; //счётчик делителей
        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $n++;
            }
        }
        if($n ==2 ){ //если всего 2 делителя (1 и само число)
            echo $i."<br/>"; //
        }
    }