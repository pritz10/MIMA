<?php 	
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "sicb";
 // db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
  echo "Not  connected";
} else {
  session_start();
  //echo "Successfully connected";
 }
?>