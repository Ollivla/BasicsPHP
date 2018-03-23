<?php
function test(array $drinks)
{
    echo '<pre>';
    print_r($drinks);
    echo '</pre>';
}
$drinks = ['juice', 'water', 'coffee', 'tea', 'milk'];
test($drinks);