<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<title>Mert Sarıözkan</title>
</head>
<body>
    <div class="header">
    </div>

    <div class="topnav">
      <a href="index.php">Homepage</a>
      <a href="about.php">About</a>
      <a href="blog.php">Blog</a>
      <a href="projects.php">Projects</a>
      <a href="contact.php">Contact</a>
    </div>

    <div class="contentbox">
      <div style="padding:50px">
        	<?php
				      $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "mertsariozkan";
              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              $sql = "SELECT iletisimbilgileri FROM iletisim";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
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
					Name Surname:
					<input type="text" name="adsoyad"> <br><br>
					Message:
					<textarea name="mesaj" rows="10" cols="50" style="position:relative; left:17px;"></textarea><br><br>
					<input type="submit" value=" Send " name="send" style="position:relative; left:200px;">
				</form>
			</div>

    </div>

</body>
</html>
