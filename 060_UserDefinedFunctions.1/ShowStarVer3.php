<?php

// 函式帶入參數
function ShowStar($iCount, $sWhat = "*")  // $iCount = $iHowMany
{
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