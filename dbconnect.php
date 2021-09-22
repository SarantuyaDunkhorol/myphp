<?php

$servername = "localhost";
$username = "bilguun";
$password = "bilguun123";
$database = "test";

// create connection
$conn = mysqli_connect($servername,$username,$password,$database);
// 1st servername
// 2nd username
// 3rd password
// 4th database

// check connection

if(!$conn){
  echo "connection failed: " . mysqli_connect_error();
}

?>