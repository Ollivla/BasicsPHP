<?php
/* Как можно упростить функцию test() в данном скрипте:
function test($x, $y)
{
	if ($y == 0) {
		return false;
	}

	return $x / $y;

}

echo test(1, 0) or die('Error');
echo 'Unreached line';
*/

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