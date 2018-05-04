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
      ob_start();
      if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
      $_SESSION["login"] = "true";
      $_SESSION["user"] = $user;
      $_SESSION["pass"] = $pass;
      header("Location:admin.php");
      }else{
      echo "Wrong username or password.<br>";
      echo "You are redirected to homepage.";
      header("Refresh: 2; url=index.php");
      }
      ob_end_flush();
      ?>

    </div>

</body>
</html>
