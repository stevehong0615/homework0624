<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);  // 切割字串
$f = fopen("data2.txt", "w"); // "a" 為附加 , "w" 為寫入
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);   // 函式寫入文件 , "\n" 換行符號
}
fclose($f);
echo "-- Done --"

?>
