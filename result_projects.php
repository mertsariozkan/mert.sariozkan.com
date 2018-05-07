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
      $projecttext = $_POST["projecttext"];
      $projectname = $_POST["projectname"];

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      if(!isset($_SESSION["edit"])) {
      if($projecttext!=null || $projectname!=null) {
      $sql = "INSERT INTO projeler (baslik,icerik) VALUES ('$projectname','$projecttext')";
      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    }
    else {
      $id = $_POST["id"];
      if(isset($_POST["edit"])) {
        $sql="UPDATE projeler SET baslik='$projectname',icerik='$projecttext' WHERE ID='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Project is updated.";
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else if(isset($_POST["delete"])) {
        $sql="DELETE FROM projeler WHERE ID='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Project is deleted.";
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
        unset($_SESSION["edit"]);
      }

      $conn->close();
      ?>

    </div>

</body>
</html>
