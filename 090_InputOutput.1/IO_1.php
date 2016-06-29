<?php

echo "Path and FileName:" . __FILE__ . "<br />";  // 取得路徑+檔名
echo "Path: " . dirname ( __FILE__ ). "<br />";  // 取得目錄前的完整路徑, 不含檔名
echo "Filename: " . basename ( __FILE__ ) . "<br />";  // 取得檔名
echo "Filesize: " . filesize ( __FILE__ )?>  // 去得檔案大小
