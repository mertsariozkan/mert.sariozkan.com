
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mertsariozkan";
$hakkimdatext = $_POST["hakkimdatext"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($hakkimdatext!=null) {
$sql = "DELETE FROM hakkimda";
if ($conn->query($sql) === TRUE) {
    echo "Deleted<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO hakkimda (ID,hakkimdatext) VALUES (1,'$hakkimdatext')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>