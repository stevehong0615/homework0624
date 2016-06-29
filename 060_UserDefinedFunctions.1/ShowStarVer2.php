<?php

// 函式引用參數
function ShowStar($iCount) // $iCount = $iHowMany
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";  // $result = $result . "*";
	}
	echo $result;
}

$iHowMany = 3;
ShowStar($iHowMany);
?>