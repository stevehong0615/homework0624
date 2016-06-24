<?php
  $d = mktime(13, 30, 0, 9, 10, 2012); // mktime(H, i, s, m, d, Y) 取得時間戳記
  echo $d;  //秒數
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);
?>
