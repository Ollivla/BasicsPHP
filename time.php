<?php
// Вычислить количество секунд в году и присвоить это значение переменной. Вычислить остаток от деления этого значения на 2
$sec_in_min = 60;
$sec_in_year = $sec_in_min * 60 * 24 * 365;
$sec_in_leapyear = $sec_in_min * 60 * 24 * 366;
$rem_division = $sec_in_year % 2;
$rem_division2 = $sec_in_leapyear % 2;
echo "Seconds per year: {$sec_in_year} <br/>
Seconds per leap-year: {$sec_in_leapyear} <br/>
Remainder of the division on 2: {$rem_division} <br/>
Remainder of the division on 2 (leap-year): {$rem_division2}";