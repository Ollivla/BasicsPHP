<?php
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