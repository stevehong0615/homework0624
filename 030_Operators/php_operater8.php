<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php"); //@ 不顯示錯誤訊息
    echo "flag 2<br>";  //require("MyLibrary.php")錯誤所以此行不會執行

?>