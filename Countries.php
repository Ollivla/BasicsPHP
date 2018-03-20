<?php
$countries = array ('Ukraine' => "Kyiv",
    'Latvia' => 'Riga',
    'Japan' => 'Tokio',
    'Canada' => 'Ottawa',
    'Spain' => 'Madrid');
echo ("<b>Countries and their capitals:</b> <br/>");
foreach ($countries as $key => $value) {
    echo " $key $value <br/>";
}
