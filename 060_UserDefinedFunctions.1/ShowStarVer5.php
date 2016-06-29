<?php

// 函式帶入參數
function ShowStar($iCount, $sWhat = "*")
{
	if ($iCount <= 0)  // $iCount <= 0 執行迴圈 return後 不執行for迴圈 
	{
		echo "iCount > 0 please";
		return;  
	}
	if ($iCount > 20)  // $iCount > 20 執行迴圈 return後 不執行for迴圈
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);
?>