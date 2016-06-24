<?php
  $x = 3;
  if ($x >= 10 && foo())  //兩邊都成立傳yes, 若前面不成立foo()不會執行
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())  //兩邊都成立傳yes, 前面不成立時foo()還是會執行
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>