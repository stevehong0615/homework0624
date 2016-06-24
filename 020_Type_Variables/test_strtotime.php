<?php
  $d = strtotime("2012-09-10"); //轉換為秒數的時間戳記
  // $d = strtotime("2012-09-10 -3 days");  //若是一個禮拜 +7 days, day是否加s都可以
  // $d = strtotime("2012-09-10 +1 month");
  echo $d;
  echo "<br>";
  echo date("Y-m-d", $d);
?>
