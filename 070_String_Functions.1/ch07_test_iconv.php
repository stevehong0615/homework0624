<?php
  
  // iconv 來源編碼傳換成指定編碼
  // header("content-type: text/html; charset=utf-8");
  header("content-type: text/html; charset=big5");
  $s = "許功蓋";
  echo strlen($s), ", ";  // 9
  echo strlen(iconv("UTF-8", "big5", $s));
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);
?>
