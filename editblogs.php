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

      include("setting.php");
      session_start();
      $_SESSION["edit"] = "set";
      if(!isset($_SESSION["login"])){
      echo "You are not allowed to view this page.";
      }else{
        $sql = "SELECT * FROM blog ORDER BY tarihsaat DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
        ?>
        <form action="result_blog.php" method="POST">
          <input type="number" name="id" value="<?php echo $row["ID"];?>" readonly style="background-color:lightgrey; border:none;"/>
          <input type="text" name="blogname" value="<?php echo $row["baslik"];?>"/><br><br>
          <textarea name="blogtext" rows="30" cols="60"><?php
              echo $row["icerik"];?>
          </textarea><br><br><?php
        echo $row["tarihsaat"]."<br><br>";
        ?>
        <input type="submit" name="edit" value=" Edit ">
        <input type="submit" name="delete" value="Delete">
        <br><br>
        </form> <?php
        }
        }
      }
      ?>
    </div>

</body>
</html>
