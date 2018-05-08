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
      session_start();
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "mertsariozkan";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      if(isset($_POST["add"])) {
        $blogtext = $_POST["blogtext"];
        $blogname = $_POST["blogname"];
        if($blogtext!=null || $blogname!=null) {
          $sql = "INSERT INTO blog (baslik,icerik) VALUES ('$blogname','$blogtext')";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
      }
      else if(isset($_POST["edit"])) {
        $blogtext = $_POST["blogtext"];
        $blogname = $_POST["blogname"];
        $id = $_POST["id"];
        $sql="UPDATE blog SET baslik='$blogname',icerik='$blogtext' WHERE ID='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Blog is updated.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else if(isset($_POST["delete"])) {
        $id = $_POST["id"];
        $sql="DELETE FROM blog WHERE ID='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Blog is deleted.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else {
        echo "Nothing changed in Blog page.";
      }

      $conn->close();
      ?>

    </div>

</body>
</html>
