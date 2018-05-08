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
      <?php
      include("setting.php");
      session_start();
      if(!isset($_SESSION["login"])){
      echo "You are not allowed to view this page.";
      }else{
      ?>
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

      $sql = "SELECT adsoyad,mesaj,tarihsaat FROM mesajlar ORDER BY tarihsaat DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
      echo $row["adsoyad"].":<br>";
      echo $row["mesaj"]."<br>";
      echo $row["tarihsaat"]."<br><br>";
      }
      ?>
      <form action="delete_messages.php" method="post">
        <br><input type="submit" name="deletemessages" value=" DELETE ALL"/>
      </form> <?php
      }

      $conn->close();


      ?>
      </div>
      <?php
      }
      ?>

    </div>

</body>
</html>
