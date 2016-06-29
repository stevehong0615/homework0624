<?php

$a = array('1', '2');
foreach ($a as $k => $x)  // foreach (陣列名稱 as $key => 值)
{
	$x = '3';
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>