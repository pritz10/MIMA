<?php
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security "max-age=63072000; includeSubDomains');
header('set Referrer-Policy same-origin');
require_once 'include/db.php';?>
 
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Music In Motion Dance Academy | MIMA</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="MIMA, mima, Music in motion dance academy, dance academy in sikkim, sikkim, gangtok , mim dance academy" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Slider -->
      <link href="css/lsb.css" rel="stylesheet" type="text/css">
      <!-- //slider-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Felipa" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       
 
    </head>
   <body>
      <div class="header-outs" id="home">
             <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: black; padding:0;">
               <a class="navbar-brand" href="index.html"><img src="files/Images/log.PNG" width="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" style="font-weight: 900;" href="index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                     <a href="#" class="nav-link">Gallery</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="#" href="class.html">Class</a>
                        <a href="#"  href="typography.html">Typography</a>
                        </div>
                     </li>
                     <li class="nav-item">
                     <a href="#"class="nav-link">Contact</a>
                     </li>
                  
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                           <div class="btn-group" role="group" aria-label="First group">
                             <button type="button" class="btn btn-danger"><span class="nav-link fab fa-google-plus-g"></span></button>
                             <button type="button" class="btn btn-danger">                        <span class="nav-link fab fa-whatsapp"></span>
                             </button>
                             <button type="button" class="btn btn-danger"><span class="nav-link fab fa-facebook"></span>
                             </button>
                             
                            </div>
                         </div>
                     
                   
                      
                  </ul>
                  
               </div>
            </nav>
       </div>
      <!-- //Navigation -->
      <!-- Slideshow 4 -->
 
