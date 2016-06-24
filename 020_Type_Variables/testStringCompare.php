<?php

$x = "ABC";
$y = "AB";
if ($x >= $y)   //$x 後面多一位數所以比$y大
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";


$x = "ABC";
$y = "BA";
if ($x >= $y)   //B 比 A 大,所以$y比較大
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";


$x = "123";
$y = "12";
if ($x >= $y)  //轉換為數字$x比較大
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";

$x = "123";
$y = "21";
if ($x >= $y)  //轉換為數字$x比較大
	echo "$x >= $y";
else
	echo "$x < $y";

echo "<hr>";
		
		
?>