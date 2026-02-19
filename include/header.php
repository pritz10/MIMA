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
<style>
/* Register button styles */
.register-btn {
    background: linear-gradient(45deg, #FF416C, #FF4B2B);
    color: white !important;
    padding: 8px 25px !important;
    border-radius: 50px;
    font-weight: 700 !important;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-left: 15px;
    transition: all 0.3s ease;
    border: none;
    box-shadow: 0 4px 15px rgba(255, 65, 108, 0.3);
    position: relative;
    overflow: hidden;
    display: inline-block;
    text-decoration: none !important;
    border: 2px solid transparent;
}
.register-btn:hover {
    background: transparent;
    color: #FF416C !important;
    border-color: #FF416C;
    box-shadow: 0 6px 20px rgba(255, 65, 108, 0.4);
    transform: translateY(-2px);
    text-decoration: none !important;
}
.register-btn:active {
    transform: translateY(0);
    box-shadow: 0 2px 10px rgba(255, 65, 108, 0.3);
}

/* Pulse animation */
.register-btn {
    animation: pulse 2s infinite;
}
@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 65, 108, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 65, 108, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 65, 108, 0);
    }
}

/* Mobile styles */
@media (max-width: 991px) {
    .register-mobile-wrapper {
        display: flex;
        align-items: center;
        margin-right: 10px;
    }
    .register-btn {
        margin-left: 0;
        padding: 6px 20px !important;
        font-size: 13px;
        animation: none; /* Remove pulse on mobile for better performance */
    }
    .navbar-toggler {
        order: 2;
        margin-left: 10px;
    }
    .navbar-brand {
        margin-right: auto;
    }
    .navbar .container, 
    .navbar .navbar-collapse {
        display: flex;
        align-items: center;
    }
}

/* Desktop specific */
@media (min-width: 992px) {
    .register-btn {
        padding: 8px 28px !important;
        font-size: 14px;
    }
    .nav-item .register-btn {
        margin-top: 5px;
        margin-bottom: 5px;
    }
}

/* Add a shine effect */
.register-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.7s ease;
}
.register-btn:hover::before {
    left: 100%;
}

/* Ensure proper spacing in nav */
.navbar-nav {
    align-items: center;
}
.navbar-nav .nav-item .register-btn {
    margin-left: 10px;
}
</style>
    </head>
   <body>
      <div class="header-outs" id="home">
             <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: black; padding-top: 8px; padding-bottom: 8px;">
               <div class="container-fluid" style="display: flex; align-items: center; width: 100%;">
                 <a class="navbar-brand" href="index" style="margin-right: auto;"><img src="files/Images/log.PNG" width="100" style="max-height: 50px; width: auto;"></a>
                 
                 <!-- Register button for mobile - positioned before toggler -->
                 <div class="register-mobile-wrapper d-lg-none">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZ9knl-kDLgbtfdbNGWk527XV9ZtfLQ0K8Yass5d6Kz6BPZQ/viewform?usp=send_form" class="register-btn" target="_blank">
                        <i class="fas fa-pen"></i> Register Now
                    </a>
                 </div>
                 
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" 
                         style="border: 1px solid rgba(255,255,255,0.3);">
                    <span class="navbar-toggler-icon" style="background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\");"></span>
                 </button>
                 
                 <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                       <li class="nav-item active">
                          <a class="nav-link" style="font-weight: 900; color: white;" href="index">Home <span class="sr-only">(current)</span></a>
                       </li>
                       <li class="nav-item">
                          <a href="class" class="nav-link" style="color: white;">Class</a>
                       </li>
                       <li class="nav-item">
                          <a href="about" class="nav-link" style="color: white;">About</a>
                       </li>
                       <li class="nav-item">
                          <a href="founders" class="nav-link" style="color: white;">Founders</a>
                       </li>
                       <li class="nav-item">
                          <a href="faculty" class="nav-link" style="color: white;">Faculty</a>
                       </li>
                       <li class="nav-item">
                          <a href="store" class="nav-link" style="color: white;">Store</a>
                       </li>
                       <li class="nav-item">
                          <a href="gallery" class="nav-link" style="color: white;">Gallery</a>
                       </li>
                       <li class="nav-item dropdown">
                          <button class="btn btn-link nav-link dropdown-toggle" type="button" id="dropdownMenu2" 
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                                  style="color: white; background: transparent; border: none; box-shadow: none; font-weight: normal;">
                            Dance Camps
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="background: #222; border: none;">
                             <a href="summer" class="dropdown-item" style="color: white; background: transparent;">Summer Camp</a>
                             <a href="winter" class="dropdown-item" style="color: white; background: transparent;">Winter Camp</a>
                             <a href="bigdance" class="dropdown-item" style="color: white; background: transparent;">Sikkim Big Dance Camp</a>
                          </div>
                       </li>
                       <li class="nav-item">
                          <a href="contact" class="nav-link" style="color: white;">Contact</a>
                       </li>
                       <li class="nav-item">
                          <a href="serv" class="nav-link" style="color: white;">Donate</a>
                       </li>
                       <!-- Register button inside nav for desktop -->
                       <li class="nav-item d-none d-lg-block">
                          <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZ9knl-kDLgbtfdbNGWk527XV9ZtfLQ0K8Yass5d6Kz6BPZQ/viewform?usp=send_form" 
                             class="nav-link register-btn" target="_blank">
                             <i class="fas fa-pen"></i> Register Now
                          </a>
                       </li>
                    </ul>
                 </div>
               </div>
            </nav>
       </div>
      <!-- //Navigation -->
      <!-- Slideshow 4 -->