<?php

//for迴圈

for ($i = 1; $i <= 3; $i++) {  
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0)
		    break;  //餘數為0跳出迴圈, 若為break 2 則跳出兩層迴圈
	}
	echo "-----<br>";
}


?>