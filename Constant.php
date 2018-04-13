<?php
/* Определить константы, которые соответствуют названиям нескольких стран мира. Используя эти константы,
сформировать массив из соответствующих значений */
const LT = 'Latvia';
const JP = 'Japan';
const SP = 'Spain';
const UA = 'Ukraine';
$countries=array(LT, JP, SP, UA);
echo 'List of countries:</br>';
foreach ($countries as $key => $value) {
    echo "<ul><li>$value <br/></li></ul>";
}
