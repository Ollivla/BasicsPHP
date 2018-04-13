<?php
// Создать алгоритм обмена значениями двух переменных не используя третьей
$a = 5;
$b = 1;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a=5, but after exchange = {$a},<br/> b=1, but after exchange = {$b}.";