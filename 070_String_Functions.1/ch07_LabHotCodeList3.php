<?php
$sData = "";
$f = fopen("pick3.txt", "r"); //開啟檔案
while (!feof($f))  //是否為文件結尾
{
	$line = fgets($f); 
	$sData .= Trim($line); // 移除字串前後空白
}
fclose($f);
//echo $sData;

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);  // 量字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);
	$result = $ch . str_replace($ch, "", $result);

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>