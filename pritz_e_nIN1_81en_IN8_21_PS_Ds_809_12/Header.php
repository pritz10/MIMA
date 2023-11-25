<?php include('db.php');   session_start();
   if (empty($_SESSION['key'])){
$_SESSION['key'] = bin2hex(random_bytes(32));
   }
   $csrf = hash_hmac('sha256', 'this is written by pritz', $_SESSION['key']);
    
 $user_check = $_SESSION['us'];
 
 $load= "Loading...\n".$user_check;

   $ses_sql = mysqli_query($connect,"select Username from adminn where Username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

     $login_session = $row['Username'];

        if(!isset($_SESSION['us'])){

       header("location:getin");         die();
  }
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="Pritam Shah">

    <meta http-equiv="refresh" content="900;url=getout" />



    <title>SICB-Dashboard</title>

    <!-- Custom fonts for this template-->

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">



    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"

        rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

      <!-- Custom styles for this page -->

      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
 

<script>
function lettersOnly(input) {
    //var regex = /[^a-z]/gi;
    var regex = /[^A-Za-z0-9 ]/g;
    input.value = input.value.replace(regex,"");
}
</script>

<script>

  var quill = new Quill('#message', {

    theme: 'snow'

  });

</script>

    

 <script>

   $(document).ready(function() {

  $('#dataTable').DataTable();  

   });

   </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->

    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">

                <div class="sidebar-brand-icon">

                  <img src="../files/Images/displayimages/mainlogo.png" width="105px" alt="">

                </div>

                <div class="sidebar-brand-text mx-3"> </div>

            </a>

            <!-- Divider -->

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item active">

                <a class="nav-link" href="index">

                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>Dashboard</span></a>
 
            </li>

               
            <!-- Divider -->

            <hr class="sidebar-divider">



            <!-- Heading -->

            <div class="sidebar-heading">

                Main Page

            </div>



            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">

<a class="nav-link" href="updates">

    <i class="fas fa-fw fa fa-shower"></i>

    <span>Updates</span></a>

</li>

            <li class="nav-item">

<a class="nav-link" href="headmessage">

    <i class="fas fa-fw fa fa-user"></i>

    <span>Head Message</span></a>

</li>

              <!-- Nav Item - Charts -->

              <li class="nav-item">

                <a class="nav-link" href="Staff">

                    <i class="fas fa-fw fa-chart-area"></i>

                    <span>Staff</span></a>

            </li>
            <li class="nav-item">

<a class="nav-link" href="devents">

    <i class="fas fa-fw fa-chart-area"></i>

    <span>Events</span></a>

</li>
            <!-- Nav Item - Utilities Collapse Menu -->

            <li class="nav-item">

                <a class="nav-link" href="Research">

                    <i class="fas fa-fw fa fa-file"></i>

                    <span>PDFs</span></a>

            </li>
            <li class="nav-item">

<a class="nav-link" href="flowers">

    <i class="fas fa-fw fa fa-cloud"></i>

    <span>SICB Images</span></a>

</li>
            <li class="nav-item">

                <a class="nav-link" href="Visitors">

                    <i class="fas fa-fw fa fa-lightbulb"></i>

                    <span>Visitors</span></a>

            </li>

 
           

             

            <!-- Divider -->

            <hr class="sidebar-divider">



           



            <!-- Sidebar Toggler (Sidebar) -->

            <div class="text-center d-none d-md-inline">

                <button class="rounded-circle border-0" id="sidebarToggle"></button>

            </div>



            



        </ul>

        <!-- End of Sidebar -->



        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">



            <!-- Main Content -->

            <div id="content">



                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Sidebar Toggle (Topbar) -->

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

                        <i class="fa fa-bars"></i>

                    </button>



                    <!-- Topbar Search -->

                    



                    <!-- Topbar Navbar -->

                    <ul class="navbar-nav ml-auto">



                         

                    <li class="nav-item dropdown no-arrow mx-1">

                        

                            <a class="nav-link dropdown-toggle" href="#" style="color: black;" ><i class="fas fa-calendar fa-fw"> </i><?php

                                echo  date("d-F");?>  

                               

                                

                             </a>

                         

                           

                        </li>



                        <li class="nav-item dropdown no-arrow mx-1">

                        

                            <a class="nav-link dropdown-toggle" href="#" style="color: red;" ><i class="fas fa-clock fa-fw"> </i>



                               <span id="timer"></span>

                                

                             </a>

                         

                           

                        </li>

                        



                        <div class="topbar-divider d-none d-sm-block"></div>



                        <!-- Nav Item - User Information -->

                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"  role="button"

                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span class="mr-2 d-none d-lg-inline text-gray-600  ">Hello,  <?php echo  $user_check; ?> </span>

                                <img class="img-profile rounded-circle"

                                    src="img/undraw_profile.svg">

                            </a>

                            <!-- Dropdown - User Information -->

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"

                                aria-labelledby="userDropdown">

                                

                                

                                <?php

                                    $style = "";





                                    if (strcmp($user_check, "prits") == 0) {

                                        $style = "style='display:visbile;'";



                                    }

                                    else {

                                        $style = "style='display:none;'";

                                    }

                                    ?>

                                <a class="dropdown-item" <?php echo $style;?> href="fghg">

                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                                    Settings

                                </a>

                                

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="getout">

                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                                    Logout

                                </a>

                            </div>

                        </li>



                    </ul>



                </nav>

                <!-- End of Topbar -->

