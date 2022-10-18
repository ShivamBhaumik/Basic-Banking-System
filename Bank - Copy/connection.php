<?php

/*$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "user"
*/
// Create connection
$con =new mysqli('sql106.epizy.com', 'epiz_32819648', 'AOB0Bm1KFh', 'epiz_32819648_user');

// Check connection
if (!$con) {
  //echo "Connected successfully";
  die(mysqli_error($con));
}
//else{

//die("Connection failed: " . mysqli_connect_error();

//}

?>