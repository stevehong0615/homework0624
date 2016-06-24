<?php
$a = 20;
function myfunction($b) {
	//print "a=$a<br>";
	$a = 30;
	//print "a=$a<br>";
	global $a, $c;  // 呼叫全域變數的$a, $a = 20
	//print "a=$a<br>";
	return $c = ($b + $a);
	
}
print myfunction(40) + $c;
?>