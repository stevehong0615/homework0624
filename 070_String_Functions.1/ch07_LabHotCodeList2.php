<?php
$f = fopen("pick3.txt", "r");  // 開啟檔案 讀取
while (!feof($f)) // 是否到文件的結尾
{
	$line = fgets($f); // fget 一次讀一行
	echo "$line<br>";
}
fclose($f);  // 關閉檔案
echo "--End--";
?>