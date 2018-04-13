<?php
/* Создать ассоциативный массив из 5 элементов, в котором ключи - это названия стран, а значения элементов - это столицы
стран. Вывести массив на экран */
$countries = array ('Ukraine' => "Kyiv",
    'Latvia' => 'Riga',
    'Japan' => 'Tokio',
    'Canada' => 'Ottawa',
    'Spain' => 'Madrid');
echo ("<b>Countries and their capitals:</b> <br/>");
foreach ($countries as $key => $value) {
    echo " $key $value <br/>";
}
