<?php

$x = 100;
$y = &$x;  //找出$x的位置

$y = 200;  //$x被改為200
echo "x = $x </br>";

unset($x);
echo "y = $y </br>";

?>