<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Mert Sarıözkan</title>
</head>

<body>
    
    <div class="contentBox" style="margin-top:100px">
    	<div class="innerBox" style="padding:30px; text-align:center;">
        	<?php
				session_start();
				ob_start();
				session_destroy();
				echo "Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz";
				header("Refresh: 2; url=index.php");
				ob_end_flush();
			?>
		</div>
	</div>
        
</body>
</html>
