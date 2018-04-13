<?php
// Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
function test(array $drinks)
{
    echo '<pre>';
    print_r($drinks);
    echo '</pre>';
}
$drinks = ['juice', 'water', 'coffee', 'tea', 'milk'];
test($drinks);