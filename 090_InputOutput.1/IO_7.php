<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f))
{
	$line = fgets($f);  // 一次讀一行
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>
