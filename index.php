<?php
    include('includes/dbconnect.php');

    $sql = "SELECT firstname, lastname, nickname, phone, age FROM users";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $data = array('firstname','lastname','nickname','phone','age');
      $fn = $row[$data[0]];
      $ln = $row[$data[1]];
      $fn_look = "<p style=\"font-size: 20px\">".$fn."</p>";
      $ln_look = "<p style=\"font-size: 10px\">".$ln."</p>";
    echo "First name: ". $fn_look . "<br>". "Last name".$ln_look;
  }
} else {
  echo "0 results";
}

//   $a = array(
//       "firstname" => "Erkhembayar",
//       "lastname" => "Bayarsaikhan",
//       "nickname" => "Erkhemee",
//       "phone" => "99212537",
//       "age" => 19
//   );

//   $a = array();
//   array_push($a, "Bilguun", "Delete");
//   print_r($a);
  
// $sql = "INSERT INTO users (firstname, lastname, nickname, phone, age)
// VALUES ('Bumbayar', 'Enkhnaran','Bumaa', '85457240',20)";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form action="changepassword.php" method="post">
	<h4>Change Password</h4>
	<br><br>
	<label>Username</label>
	<input type="text" name="user">
	<br><br>
	<label>Old Password</label>
	<input type="password" name="pass">
	<br><br>
	<label>New Password</label>
	<input type="password" name="pass">
	<br><br>
	<button name="submit">Submit</button>
</form>

    </body>
    </html>
// changepassword
<?php 
session_start();
include 'config.php';
error_reporting(0);
$username = $_POST['user'];
        $password = $_POST['pass'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT password login user_info WHERE 
       user_id='$user'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE user_info SET pass='$newpassword' where 

 name='$user'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>
