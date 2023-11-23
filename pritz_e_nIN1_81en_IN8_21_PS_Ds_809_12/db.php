<?php 	
$localhost = "localhost";
$username = "u623909803_pritz";
$password = "Pritz@100";
$dbname = "u623909803_mim";
 // db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
  echo "Not  connected";
} else {
  //echo "Successfully connected";
 }
?>

