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
:root {
    --stage-black: #0A0A0A;
    --brass: #C9932E;
    --brass-bright: #E0AC4C;
    --wine: #7A1B2E;
    --ivory: #F2ECE1;
    --ivory-dim: rgba(242,236,225,0.7);
}

/* Modern Navigation Styles */
.navbar {
    background: var(--stage-black) !important;
    padding: 15px 20px !important;
    box-shadow: 0 1px 0 rgba(201,147,46,0.25);
    border-bottom: 1px solid rgba(201,147,46,0.15);
}

.navbar-brand {
    padding: 0;
    margin-right: 30px;
}

.navbar-brand img {
    max-height: 45px;
    width: auto;
    transition: transform 0.3s ease;
}

.navbar-brand:hover img {
    transform: scale(1.04);
}

.navbar-nav {
    align-items: center;
    gap: 5px;
}

.nav-item {
    position: relative;
}

.nav-link {
    color: var(--ivory) !important;
    font-weight: 500 !important;
    font-size: 14px;
    padding: 8px 12px !important;
    letter-spacing: 0.3px;
    transition: color 0.25s ease;
    position: relative;
}

/* Diagonal sweep underline — a "step", not a fade */
.nav-link::before {
    content: '';
    position: absolute;
    left: 12px;
    right: 12px;
    bottom: 4px;
    height: 2px;
    background: linear-gradient(90deg, var(--brass), var(--wine));
    transform: scaleX(0) skewX(-15deg);
    transform-origin: left;
    transition: transform 0.3s ease;
}

.nav-link:hover {
    color: var(--brass-bright) !important;
}
.nav-link:hover::before {
    transform: scaleX(1) skewX(-15deg);
}

/* Active nav item indicator */
.nav-item.active .nav-link {
    color: var(--brass-bright) !important;
}
.nav-item.active .nav-link::before {
    transform: scaleX(1) skewX(-15deg);
    background: var(--brass);
}

/* Dropdown styles */
.dropdown {
    position: relative;
}
.dropdown .btn-link {
    color: var(--ivory) !important;
    font-weight: 500 !important;
    font-size: 14px;
    padding: 8px 12px !important;
    letter-spacing: 0.3px;
    text-decoration: none !important;
}
.dropdown .btn-link:hover {
    color: var(--brass-bright) !important;
}
.dropdown-menu {
    background: #141414;
    border: 1px solid rgba(201,147,46,0.2);
    border-left: 2px solid var(--brass);
    border-radius: 2px;
    padding: 6px 0;
    margin-top: 5px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.6);
}
.dropdown-item {
    color: var(--ivory-dim);
    font-size: 13px;
    padding: 9px 20px;
    letter-spacing: 0.3px;
    transition: all 0.2s ease;
}
.dropdown-item:hover {
    background: rgba(201,147,46,0.12);
    color: var(--brass-bright);
    padding-left: 26px;
}

/* Register button — clipped corner, solid brass, no gradient pill */
.register-btn {
    background: var(--brass);
    color: var(--stage-black) !important;
    padding: 9px 26px !important;
    clip-path: polygon(10px 0, 100% 0, calc(100% - 10px) 100%, 0 100%);
    font-weight: 700 !important;
    font-size: 13px;
    letter-spacing: 0.5px;
    margin-left: 10px;
    transition: all 0.25s ease;
    display: inline-block;
    text-decoration: none !important;
    white-space: nowrap;
}
.register-btn i {
    margin-right: 8px;
    font-size: 12px;
}
.register-btn:hover {
    background: var(--brass-bright);
    color: var(--stage-black) !important;
    transform: translateY(-1px);
}

/* Mobile styles */
@media (max-width: 991px) {
    .navbar {
        padding: 15px 15px !important;
    }

    .navbar .container-fluid {
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .navbar-brand {
        margin-right: 0;
        flex-shrink: 0;
    }

    .navbar-brand img {
        max-height: 40px;
    }

    .register-mobile-wrapper {
        display: flex;
        align-items: center;
        margin-left: auto;
        margin-right: 10px;
    }

    .register-btn {
        padding: 7px 20px !important;
        font-size: 12px;
        margin-left: 0;
        white-space: nowrap;
    }

    .register-btn i {
        margin-right: 5px;
    }

    .navbar-toggler {
        order: 2;
        padding: 8px 10px;
        border: 1px solid rgba(201,147,46,0.3);
        border-radius: 2px;
        flex-shrink: 0;
    }

    .navbar-toggler-icon {
        width: 22px;
        height: 22px;
    }

    #navbarSupportedContent {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--stage-black);
        padding: 20px;
        border-top: 1px solid rgba(201,147,46,0.15);
        box-shadow: 0 12px 30px rgba(0,0,0,0.6);
        max-height: 80vh;
        overflow-y: auto;
    }

    .navbar-nav {
        align-items: stretch;
        gap: 0;
        width: 100%;
    }

    .nav-item {
        width: 100%;
        margin: 2px 0;
    }

    .nav-link, .dropdown .btn-link {
        padding: 12px 15px !important;
        font-size: 14px;
        display: block;
        width: 100%;
        text-align: left;
        border-radius: 2px;
    }

    .nav-link::before {
        display: none;
    }
    .nav-link:hover, .dropdown .btn-link:hover {
        background: rgba(201,147,46,0.08);
    }

    .dropdown .btn-link {
        width: 100%;
        text-align: left;
        position: relative;
    }

    .dropdown .btn-link::after {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
    }

    .dropdown-menu {
        position: static !important;
        float: none;
        width: 100%;
        margin-top: 5px;
        margin-bottom: 10px;
        background: #1a1a1a;
        border: none;
        border-left: 2px solid var(--brass);
        box-shadow: none;
        transform: none !important;
    }

    .dropdown-item {
        padding: 10px 25px;
        font-size: 13px;
    }
}

/* Desktop adjustments */
@media (min-width: 992px) {
    .navbar-nav {
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    .nav-link, .dropdown .btn-link {
        font-size: 13px;
        padding: 8px 10px !important;
    }

    .register-btn {
        padding: 8px 24px !important;
    }
}

/* Extra large screens */
@media (min-width: 1200px) {
    .nav-link, .dropdown .btn-link {
        font-size: 14px;
        padding: 8px 12px !important;
    }
}

/* Hide register button in desktop menu on mobile */
@media (max-width: 991px) {
    .d-none.d-lg-block {
        display: none !important;
    }
}
</style>
    </head>
   <body>
      <div class="header-outs" id="home">
         <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container-fluid">
               <!-- Logo -->
               <a class="navbar-brand" href="index">
                  <img src="files/Images/log.PNG" alt="MIM Dance Academy">
               </a>
               
               <!-- Mobile Register Button (Always Visible) -->
               <div class="register-mobile-wrapper d-lg-none">
                  <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZ9knl-kDLgbtfdbNGWk527XV9ZtfLQ0K8Yass5d6Kz6BPZQ/viewform?usp=send_form" 
                     class="register-btn" target="_blank">
                     <i class="fas fa-pen"></i> Register
                  </a>
               </div>
               
               <!-- Hamburger Menu Button -->
               <button class="navbar-toggler" type="button" data-toggle="collapse" 
                       data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                       aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               
               <!-- Navigation Menu -->
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index">Home</a>
                     </li>
                     <li class="nav-item">
                        <a href="class" class="nav-link">Class</a>
                     </li>
                     <li class="nav-item">
                        <a href="about" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="founders" class="nav-link">Founders</a>
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
                     
                     <!-- Dance Camps Dropdown -->
                     <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link dropdown-toggle" type="button" 
                                id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false">
                           Dance Camps
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                           <a href="summer" class="dropdown-item">Summer Camp</a>
                           <a href="winter" class="dropdown-item">Winter Camp</a>
                           <a href="bigdance" class="dropdown-item">Sikkim Big Dance Camp</a>
                        </div>
                     </li>
                     
                     <li class="nav-item">
                        <a href="contact" class="nav-link">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a href="serv" class="nav-link">Donate</a>
                     </li>
                     
                     <!-- Desktop Register Button -->
                     <li class="nav-item d-none d-lg-block">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZ9knl-kDLgbtfdbNGWk527XV9ZtfLQ0K8Yass5d6Kz6BPZQ/viewform?usp=send_form" 
                           class="nav-link register-btn" target="_blank">
                           <i class="fas fa-pen"></i> Register
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <!-- //Navigation -->
      <!-- Slideshow 4 -->