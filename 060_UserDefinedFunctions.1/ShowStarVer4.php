<?php

// 函式帶入參數
function ShowStar($iCount, $sWhat = "*")  // $iCount = $iHowMany
{
	if ($iCount > 0)
	{
		if ($iCount <= 20)
		{
			$result = "";
			for ($i = 1; $i <= $iCount; $i++)
			{
				$result .= $sWhat;
			}
			echo $result;
		}
		else 
			echo "iCount <= 20 please.";  // $iCount 大於 20 會執行
	}
	else
	{
		echo "iCount > 0 please.";  // $iCount 小於 0 會執行
	}
}

$iHowMany = 21;
ShowStar($iHowMany);
?>