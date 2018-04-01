

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mertsariozkan";
$blogtext = $_POST["blogtext"];
$blogname = $_POST["blogname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($blogtext!=null || $blogname!=null) {

$sql = "INSERT INTO blog (baslik,icerik) VALUES ('$blogname','$blogtext')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>