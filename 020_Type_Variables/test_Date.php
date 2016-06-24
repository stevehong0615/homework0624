<?php
  $x = getdate();  
  echo gettype($x), "<br>";  // getdate的資料型態為陣列
  
  $x = date('Y-m-d H:i:s');
  echo $x, "<br>";
  echo gettype($x), "<br>"; //資料型態為string
  
  $x = gmdate('Y-m-d H:i:s'); //取得目前的格林威治時間
  echo $x, "<br>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));  //轉換為秒數
  echo $x, "<br>";
  echo gettype($x), "<br>";  //strtotime的資料型態為integer
  
?>