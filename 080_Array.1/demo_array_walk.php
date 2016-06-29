<?php
$result = '';
function glue ($val) // 函式帶入參數
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
array_walk ($array, 'glue'); // array_walk (陣列, 函式)
echo $result;
?>