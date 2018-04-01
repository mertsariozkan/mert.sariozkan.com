

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mertsariozkan";
$iletisimtext = $_POST["iletisimtext"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($iletisimtext!=null) {
$sql = "DELETE FROM iletisim";
if ($conn->query($sql) === TRUE) {
    echo "Deleted<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO iletisim (iletisimbilgileri) VALUES ('$iletisimtext')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>