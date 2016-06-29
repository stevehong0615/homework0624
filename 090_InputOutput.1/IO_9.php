<?php
header("Content-Type: image/png");  // MIME ; 圖片類型在header指定

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename)); 
fclose($filename);

?>