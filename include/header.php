<?php
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security "max-age=63072000; includeSubDomains');
header('set Referrer-Policy same-origin');
header("Pragma-directive: no-cache");  
header("Cache-directive: no-cache");  
header("Cache-control: no-cache");  
header("Pragma: no-cache");  
header("Expires: 0");
require_once 'include/db.php';?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?> | Music In Motion Dance Academy| mim dance academy | mimdanceacademy </title>


<!--meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="description" content="MIMA, mima, Author Pritam Shah Music in motion dance academy, dance academy in sikkim, sikkim, gangtok , mim dance academy" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {slide
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
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;900&display=swap" rel="stylesheet"> 
    </head>
   <body>
      <div class="header-outs" id="home">
             <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: black; padding-top:0;padding-bottom:0;">
               <a class="navbar-brand" href="index"><img src="files/Images/log.PNG" width="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" style="font-weight: 900;" href="index">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                     <a href="class" class="nav-link">Class</a>
                     </li>
                     <li class="nav-item">
                        <a href="about" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="faculty" class="nav-link">Faculty</a>
                     </li>
                     <li class="nav-item">
                     <a href="store" class="nav-link">Store</a>
                     </li>
                     <li class="nav-item">
                     <a href="gallery" class="nav-link">Gallery</a>
                     </li>
                     <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dance Camps
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <a href="summer" class="dropdown-item" type="button">Summer Camp</a>

     <a href="winter" class="dropdown-item" type="button">Winter Camp</a>
     <a href="bigdance" class="dropdown-item" type="button">Sikkim Big Dance Camp</a>

  </div>
</div>
                     <li class="nav-item">
                     <a href="contact"class="nav-link">Contact</a>
                     </li>
                   
                              
                            
                     
                   
                      
                  </ul>
                  
               </div>
            </nav>
       </div>
      <!-- //Navigation -->
      <!-- Slideshow 4 -->
 