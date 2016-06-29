<?php

// 函式帶入參數
function test($i) {
	return $i + 1;
}

// $x = 1;
// echo test($x);

$x = 2;
$p = "test";
echo $p($x); // echo test(2)

?>