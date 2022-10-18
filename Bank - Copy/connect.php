<?php

/*$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "user"
*/
// Create connection
$con =new mysqli('localhost', 'root', '', 'user');

// Check connection
if (!$con) {
  //echo "Connected successfully";
  die(mysqli_error($con));
}
//else{

//die("Connection failed: " . mysqli_connect_error();

//}

?>