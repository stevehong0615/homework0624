<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy',    // array(陣列位置 => 值)
                     'myHeight'=>191, 
                     'myWeight'=>91);
    echo "大家好，我的名字叫".$myArray['myName']
?>