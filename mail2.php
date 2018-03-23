<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
echo "Вывод Post запроса:<br/>";
$string = serialize($_POST);
print_r($_POST);
echo "<br/> Сериализация: <br/>";
print_r($string);



