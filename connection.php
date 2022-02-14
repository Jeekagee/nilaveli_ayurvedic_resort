<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ayurvedic";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

function content($name) {
    global $conn;
    $sql = "SELECT * FROM content WHERE name='$name' LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row["content_eng"];
  }
?>