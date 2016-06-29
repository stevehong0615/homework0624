<?php

// strtok 逐一分割字串 (被分割的字串, 切割字符(可以設定很多個))
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
$s = strtok($showStr, " ");
while ($s != "")
{
   echo $s. "*" . "<br>";
   $s = strtok(" .|/");
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}
?>