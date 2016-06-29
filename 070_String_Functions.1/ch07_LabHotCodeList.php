<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);  // strlen 量字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1); // substr 取得部分字串 (原始字串, 開始擷取的位置, 字串長度)
	$result = $ch . str_replace($ch, "", $result); // str_replace 字串取代 (取代前, 取代後, 要取代的字串)

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>