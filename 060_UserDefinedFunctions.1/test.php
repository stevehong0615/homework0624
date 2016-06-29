<html>

<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>

<body>

    <form method="post">
        <input type="text" name="txtNumber">
        <input type="submit" name="btnOK" value="OK">
    </form>
    <HR>
    <?php

        function ShowStar($iCount, $sWhat = "$")  // $iCount = $_POST['txtNumber']
        {
	
	        if ($iCount <= 0)
	        {
	            
	            echo "請輸入大於0的數字";
	            return;
	            
	        }
	        
	        if($iCount > 20)
	        {
	            
	            echo "請輸入小於或等於20的數字";
	            return;
	            
	        }
	
	        $result = "";
	        for ($i = 1; $i <= $iCount; $i++)
	        {
		
		        $result .= $sWhat;
		
	        }
	
	        echo $result;
	
            }

        ShowStar($_POST['txtNumber']);

    ?>
</body>

</html>