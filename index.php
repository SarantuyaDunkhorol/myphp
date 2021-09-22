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
