<?php

$far = $_POST['temp'];

$celsius = ($far - 32) * (5 / 9);

echo $far . " graus Fahrenheit corresponde a " . $celsius . " graus Celsius";;

?>