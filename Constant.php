<?php
const LT = 'Latvia';
const JP = 'Japan';
const SP = 'Spain';
const UA = 'Ukraine';
$countries=array(LT, JP, SP, UA);
echo 'List of countries:</br>';
foreach ($countries as $key => $value) {
    echo "<ul><li>$value <br/></li></ul>";
}
