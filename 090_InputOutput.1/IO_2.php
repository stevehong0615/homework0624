<?php

$fileDir = dirname ( __FILE__ );
$fileResource = opendir ( $fileDir );  //取得目錄下所有檔案

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>  // 回傳值為String , 執行一次讀取一次
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>  //關閉目錄下所有檔案
</body>
</html>
