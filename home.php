<?php
$servername = "localhost";
$username = "boldoo";
$password = "boldoo14563";
$database = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>