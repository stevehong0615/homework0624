<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";
foreach ($season as $value){   // foreach (陣列名稱 as 陣列值)
	echo $value;
}

?>