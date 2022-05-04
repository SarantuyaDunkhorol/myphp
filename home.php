<?php
$servername = "localhost";
$username = "boldoo";
$password = "boldoo14563";
$database = "test";

// Холболт үүсгэх
$conn = mysqli_connect($servername, $username, $password,$database);

// Холболтыг шалгах
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
