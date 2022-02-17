<?php
session_start();
$language=$_GET['language'];
if (isset($_GET['language'])) {
    
// Set session variables
$_SESSION["language"] = $_GET['language'];
header("location: index.php");
}
?>