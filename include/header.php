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
require_once 'include/db.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?> | Music In Motion Dance Academy | mim dance academy</title>

    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MIMA, mima, Author Pritam Shah Music in motion dance academy, dance academy in sikkim, sikkim, gangtok , mim dance academy" />
    
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <!--Slider -->
    <link href="css/lsb.css" rel="stylesheet" type="text/css">
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;900&display=swap" rel="stylesheet"> 

    <style>
        /* SEXY REGISTER BUTTON CSS */
        .btn-register-sexy {
            background: linear-gradient(45deg, #FF512F 0%, #DD2476 100%) !important; /* Vibrant Orange-Red Gradient */
            color: white !important;
            border: none !important;
            border-radius: 50px !important; /* Pill Shape */
            padding: 10px 28px !important;
            font-weight: 800 !important;
            text-transform: uppercase;
            font-size: 13px !important;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(221, 36, 118, 0.4); /* Glow effect */
            transition: all 0.4s ease-in-out;
            display: inline-block;
            margin-left: 15px;
            text-decoration: none !important;
        }

        .btn-register-sexy:hover {
            transform: translateY(-3px) scale(1.05); /* Lifts up and grows slightly */
            box-shadow: 0 8px 25px rgba(221, 36, 118, 0.6);
            color: white !important;
            filter: brightness(1.1);
        }

        /* Navbar link colors for better visibility on black */
        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.8) !important;
            transition: 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #FF512F !important;
        }

        /* Mobile Adjustments */
        @media (max-width: 991px) {
            .btn-register-sexy {
                margin-left: 0 !important;
                margin-top: 20px !important;
                margin-bottom: 20px !important;
                width: 100%; /* Full width on mobile menu */
                text-align: center;
                display: block;
            }
            .navbar-collapse {
                background: rgba(0,0,0,0.9); /* Darker mobile menu */
                padding: 20px;
                border-radius: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header-outs" id="home">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: black; padding-top:0; padding-bottom:0;">
            <a class="navbar-brand" href="index">
                <img src="files/Images/log.PNG" width="100" alt="Logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center">
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
                    
                    <!-- Updated Dropdown Structure for Bootstrap -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="danceCampsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #333; color: white !important; border-radius: 5px; padding: 5px 15px !important; margin: 5px;">
                            Dance Camps
                        </a>
                        <div class="dropdown-menu" aria-labelledby="danceCampsDropdown">
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

                    <!-- SEXY REGISTER BUTTON -->
                    <li class="nav-item">
                        <a href="register" class="btn-register-sexy">
                           <i class="fas fa-sign-in-alt me-1"></i> Register Now
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Scripts (Required for Dropdown and Toggler) -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>