<?php
// if $y > 0 than we see the result of {return $x / $y}
// if $y = 0 we see 'Error'
function test($x = 1, $y = 0)
{
    if ($y == 0) {
       echo die('Error');
    }
    return $x / $y;
}
echo test();