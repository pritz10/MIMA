<?php 	
$localhost = "localhost";
$username = "root";
$password = "";
 // db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
  echo "Not  connected";
} else {
  //echo "Successfully connected";
 }
?>
