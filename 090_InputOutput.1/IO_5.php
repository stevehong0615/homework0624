<?php
	header("content-type: text/html; charset=utf-8");

	$contents = file_get_contents('data.txt');  // 讀取文件檔案的內容
	echo (str_replace("\r\n", "<br />", $contents));
?>