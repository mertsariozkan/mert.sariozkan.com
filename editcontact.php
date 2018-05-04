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
      <form action="result_contact.php" method="POST">
      <textarea name="iletisimtext" rows="30" cols="60"></textarea><br>
      <input type="submit" value=" Save ">
      </form>
      <?php
      }
      ?>

    </div>

</body>
</html>
