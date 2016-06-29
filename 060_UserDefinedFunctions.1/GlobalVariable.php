<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;  // 呼叫全域變數的$a, $a = 20, 再設一個全域變數 $c
	//echo "a = $a<br>";
	return $c = ($b + $a);  // $b = 40
}
// 請預測答案是多少?
echo myFunction(40) + $c;
?>