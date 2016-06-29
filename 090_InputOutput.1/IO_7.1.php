<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while ($line = fgets($f))
{
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>
