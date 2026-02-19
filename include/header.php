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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MIMA, mima, Author Pritam Shah Music in motion dance academy, dance academy in sikkim, sikkim, gangtok , mim dance academy" />
    
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/lsb.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;900&display=swap" rel="stylesheet"> 

    <style>
        /* SEXY REGISTER BUTTON */
        .btn-register-sexy {
            background: linear-gradient(45deg, #FF512F 0%, #DD2476 100%) !important;
            color: white !important;
            border: none !important;
            border-radius: 50px !important;
            padding: 8px 20px !important;
            font-weight: 800 !important;
            text-transform: uppercase;
            font-size: 11px !important;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(221, 36, 118, 0.4);
            transition: all 0.3s ease-in-out;
            text-decoration: none !important;
            white-space: nowrap;
        }

        .btn-register-sexy:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(221, 36, 118, 0.6);
            filter: brightness(1.1);
        }

        /* Nav link hover color */
        .navbar-nav .nav-link:hover { color: #FF512F !important; }

        /* Desktop specific margin */
        @media (min-width: 992px) {
            .btn-register-sexy {
                margin-left: 15px;
                font-size: 13px !important;
                padding: 10px 25px !important;
            }
        }

        /* Mobile specific positioning */
        @media (max-width: 991px) {
            .navbar-brand img { width: 80px; }
            .btn-register-sexy {
                margin-right: 10px; /* Space between button and hamburger */
                padding: 6px 15px !important;
                font-size: 10px !important;
            }
            .navbar-toggler {
                padding: 0.25rem 0.5rem;
                background-color: rgba(255,255,255,0.8);
            }
        }
    </style>
</head>
<body>
    <div class="header-outs" id="home">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: black; padding: 5px 15px;">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="index">
                <img src="files/Images/log.PNG" width="100" alt="Logo">
            </a>
            
            <!-- Flex container for Button + Hamburger -->
            <div class="d-flex align-items-center ml-auto">
                <!-- REGISTER BUTTON (Always visible outside hamburger) -->
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZ9knl-kDLgbtfdbNGWk527XV9ZtfLQ0K8Yass5d6Kz6BPZQ/viewform?usp=send_form" target="_blank" class="btn-register-sexy">
                   <i class="fas fa-edit d-none d-sm-inline"></i> Register
                </a>

                <!-- Hamburger Menu Icon -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item active">
                        <a class="nav-link" style="font-weight: 900; color: white !important;" href="index">Home</a>
                    </li>
                    <li class="nav-item"><a href="class" class="nav-link" style="color: white !important;">Class</a></li>
                    <li class="nav-item"><a href="about" class="nav-link" style="color: white !important;">About</a></li>
                    <li class="nav-item"><a href="founders" class="nav-link" style="color: white !important;">Founders</a></li>
                    <li class="nav-item"><a href="faculty" class="nav-link" style="color: white !important;">Faculty</a></li>
                    <li class="nav-item"><a href="store" class="nav-link" style="color: white !important;">Store</a></li>
                    <li class="nav-item"><a href="gallery" class="nav-link" style="color: white !important;">Gallery</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="danceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #333; color: white !important; border-radius: 5px; padding: 5px 15px !important; margin: 5px;">
                            Dance Camps
                        </a>
                        <div class="dropdown-menu" aria-labelledby="danceDropdown">
                            <a href="summer" class="dropdown-item">Summer Camp</a>
                            <a href="winter" class="dropdown-item">Winter Camp</a>
                            <a href="bigdance" class="dropdown-item">Sikkim Big Dance Camp</a>
                        </div>
                    </li>

                    <li class="nav-item"><a href="contact" class="nav-link" style="color: white !important;">Contact</a></li>
                    <li class="nav-item"><a href="serv" class="nav-link" style="color: white !important;">Donate</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Scripts -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>