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
				include("setting.php");
				session_start();
				if(!isset($_SESSION["login"])){
				echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
				}else{
			?>
				<a href="index.html" style="Color:#000000; text-align:right; padding-left:500px;"> Siteyi görüntüle </a><br><br>
				<a href="edithakkimda.php" style="Color:#000000;"> Hakkımda </a><br><br>
				<a href="editiletisim.php" style="Color:#000000;"> İletişim </a><br><br>
				<a href="mesajlar.php" style="Color:#000000;"> Mesajlar </a><br><br>
				<a href="addblog.php" style="Color:#000000;"> Blog Yaz </a><br><br>
				<input type="button" value=" Logout " onclick="location='logout.php'" />
		
				<?php
				}
			?>
		</div>
	</div>
        
</body>
</html>
