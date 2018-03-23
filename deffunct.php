<?php
function myFun(array $a){
    sort($a);
    echo "<pre>";
      print_r($a);
   echo "</pre>";
}
$a = ['juice', 'water', 'coffee', 'tea', 'milk', 375, 5];
myFun($a);