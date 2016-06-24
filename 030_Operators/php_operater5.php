<?php
  $x = 1;
  $y = $x++;
  echo "x = $x, y = $y";
  
  echo "<br>";

  $x = 1;
  $y = ++$x;
  echo "x = $x, y = $y";
  
  echo "<br>";
?>


<?php

  // 上面的php程式區塊可以看成下面的撰寫方式

  $x = 1;
  $y = $x;
  $x++;
  echo "x = $x, y = $y";  // $x 輸出後才會+1, 所以$y = 1
  
  echo "<br>";
  
  $x = 1;
  $x++;
  $y = $x;
  echo "x = $x, y = $y"  //$x 先+1後再輸出, 所以$y = 2

?>