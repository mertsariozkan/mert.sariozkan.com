
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Mert Sarıözkan</title>
</head>

<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="homepage.php">Anasayfa</a></div>
        <div class="topNaviagationLink"><a href="hakkimda.php">Hakkımda</a></div>
        <div class="topNaviagationLink"><a href="blog.php">Blog</a></div>
        <div class="topNaviagationLink"><a href="homepage.php">Projeler</a></div>
	    <div class="topNaviagationLink"><a href="iletisim.php">İletişim</a></div>
	</div>
    <div id="mainPicture">
    	<div class="picture">
        	
        </div>
    </div>
        <div class="contentBox">
    	<div class="innerBox">
		<div style="padding:50px">
        	<?php
				$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mertsariozkan";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT iletisimbilgileri FROM iletisim";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["iletisimbilgileri"];
    }
} 

$conn->close();
		
			
			?>
			</div>
			<br><br><br>
			<div>
				<form action="messagesended.php" method="POST" style="padding-left:50px; padding-bottom:50px">
					Ad Soyad: 
					<input type="text" name="adsoyad"> <br><br>
					Mesaj: 
					<textarea name="mesaj" rows="10" cols="50" style="position:relative; left:17px;"></textarea><br><br>
					<input type="submit" value=" Gönder " style="position:relative; left:200px;">
				</form>
			</div>
    </div>
</div>
        
</body>
</html>