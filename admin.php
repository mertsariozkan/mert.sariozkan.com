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
      <a href="index.php" style="Color:#000000;"> See website </a><br><br>
      <a href="editabout.php" style="Color:#000000;"> Edit About Page </a><br><br>
      <a href="editcontact.php" style="Color:#000000;"> Edit Contact Page </a><br><br>
      <a href="messages.php" style="Color:#000000;"> Messages </a><br><br>
      <a href="addblog.php" style="Color:#000000;"> Write Blog </a><br><br>
      <input type="button" value=" Logout " onclick="location='logout.php'" />

      <?php
      }
      ?>

    </div>

</body>
</html>
