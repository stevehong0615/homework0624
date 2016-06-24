<?php

// while迴圈

$iSum = 0;
$i = 1;  //初始值為1
while ($i <= 10)  //1 加到 10 的總和, 為每一次的迴圈做準備
{
	$iSum += $i;  
	$i += 1;
}
echo $iSum;

echo "<hr>";

$iSum = 0;
$i = 0;  // 初始值為0
while ($i < 10)
{
	$i++;
	$iSum += $i;	
}
echo $iSum
?>