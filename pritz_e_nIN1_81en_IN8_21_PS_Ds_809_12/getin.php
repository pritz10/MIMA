<?php
session_start(); 
require_once 'db.php';
 if(isset($_SESSION['us'])){
    echo $_SESSION['us'];
     header("location:index");
   }
 if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload'){
    $errorMsg = "";
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']); 
    if (!empty($username) || !empty($password)) {

        if(isset($_POST['g-recaptcha-response']))
        {
            $recaptcha = $_POST['g-recaptcha-response'];
        }
        if(!$recaptcha){
            echo'<div class="alert alert-danger text-center" style="font-weight:bold;">"Please verify recaptcha"</div>';            
        }
       else{

            $secret="6LcDGyUfAAAAAJzUGIsbJBCXcroxLu9L9y-98PPg";
            $url='https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptcha;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            curl_close($ch);
            $responseKeys= json_decode($output,true);
             if($responseKeys['success'])
            {
                $query  = "SELECT * FROM adminn WHERE Username = '$username'";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) == 1){
                  while ($row = mysqli_fetch_assoc($result)) {
                    if (password_verify($password, $row['Password'])) {
                      $_SESSION['us']=$username;
                      $errorMsg = "Preparing for launch, ".$username;
                      echo'<div class="alert alert-success text-center" style="font-weight:bold;">'.$errorMsg.'</div>';
                       echo"<script>location.href='index';</script>";
         
                         $created_date = date("d-F-Y");
                      $sql = "UPDATE updatedate set UpdateDate='$created_date';";
                      if (mysqli_query($connect, $sql)) {            
                          echo'loading...';
                          header("location:index");
                      }
                      
                    }
                    else{
                        $errorMsg = "Username or Password is invalid";
                        echo'<div class="alert alert-danger text-center" style="font-weight:bold;">'.$errorMsg.'</div>';
          
                    }    
                  }
                }else{
                  $errorMsg = "No user found on this username";
                  echo'<div class="alert alert-danger text-center" style="font-weight:bold;">'.$errorMsg.'</div>';
          
                } 
            }
            else{
                echo'<div class="alert alert-danger text-center" style="font-weight:bold;">"Some security issue! please try again in some time"</div>';

            }
        }
  }else{
    $errorMsg = "Email and Password is required";
    echo'<div class="alert alert-danger text-center" style="font-weight:bold;">'.$errorMsg.'</div>';

  }
}
?>



 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="900;url=getout" />

    <title>Get In</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block " style="background: url('/files/Images/bk.jpg');  background-position: center;
                            background-size: cover;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Music in Motion Dance Academy Dashboard</h1>
                                    </div>
                                    <form method="post"  class="user" action="getin" enctype="multipart/form-data" style="padding:10px;">                                        

                                         <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" required
                                                placeholder="Enter Admin Name...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" required
                                                id="exampleInputPassword" name="password" placeholder="Secret Key...">
                                        </div>
                                      
                                        <div class="g-recaptcha"  data-sitekey="6LcDGyUfAAAAANS8PBSq09XHWvKEjCqlsqTtnkV0"></div>
      <br/>
                                        
                                        <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-warning btn-user btn-block" id="upload-file"><i class="fa fa-user" aria-hidden="true"></i> Log In...</button>

                                       
        


                                    </form>
                                    <hr>
                                    <div class="text-center">
                                    <?php echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  ?>
                                        <br>
                                        <p class="small">Tracking user initiated</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>