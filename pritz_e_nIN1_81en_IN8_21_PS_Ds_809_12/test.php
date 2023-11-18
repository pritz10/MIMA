<?php include('db.php');   
session_start();  
    $user_check = $_SESSION['us'];
    echo "pros";

    if(!isset($_SESSION['us'])) {
      echo 'Set and not empty, and no undefined index error!';
   }
    echo $user_check;
 $load= "Loading...\n".$user_check;
  $ses_sql = mysqli_query($connect,"select Username from adminn where Username = '$user_check' ");
  $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $login_session = $row['Username'];
      if(!isset($_SESSION['us'])){
        echo $user_check = $_SESSION['us'];
     // header("location:getin");
      //die();
   }
?>