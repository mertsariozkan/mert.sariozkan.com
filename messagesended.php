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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mertsariozkan";
$adsoyad = $_POST["adsoyad"];
$mesaj = $_POST["mesaj"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mesajlar (adsoyad,mesaj) VALUES ('$adsoyad','$mesaj')";

if ($conn->query($sql) === TRUE) {
    echo "Mesaj başarıyla gönderildi. <br>";
	echo "Anasayfaya yönlendiriliyorsunuz.";
	header("Refresh: 2; url=homepage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
		</div>
	</div>
        
</body>
</html>