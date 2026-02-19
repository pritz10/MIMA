<?php 
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security: max-age=63072000; includeSubDomains');
header('Referrer-Policy: same-origin');
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require_once 'include/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?> | Music In Motion Dance Academy</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fontawesome-all.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<style>

/* Sexy Register Button */
.btn-register-sexy {
    background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
    color: white !important;
    border: none;
    border-radius: 50px;
    padding: 8px 25px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(245, 87, 108, 0.4);
    transition: all 0.3s ease-in-out;
    display: inline-block;
}

.btn-register-sexy:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 25px rgba(245, 87, 108, 0.6);
    background: linear-gradient(45deg, #f5576c 0%, #f093fb 100%);
    color: white !important;
}

/* Mobile register hidden by default */
.mobile-register {
    display: none;
}

/* Mobile view adjustments */
@media (max-width: 991px) {

    .mobile-register {
        display: inline-block;
        position: absolute;
        right: 70px;
        top: 12px;
        padding: 6px 15px;
        font-size: 11px;
        z-index: 9999;
    }

    .desktop-register {
        display: none;
    }
}

</style>
</head>

<body>

<div class="header-outs" id="home">

<nav class="navbar fixed-top navbar-expand-lg navbar-light" 
     style="background:black; padding-top:0; padding-bottom:0; position:relative;">

    <a class="navbar-brand" href="index">
        <img src="files/Images/log.PNG" width="100">
    </a>

    <!-- Mobile Register Button -->
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZ9knl-kDLgbtfdbNGWk527XV9ZtfLQ0K8Yass5d6Kz6BPZQ/viewform?usp=send_form"
       target="_blank"
       class="btn-register-sexy mobile-register">
       Register
    </a>

    <!-- Hamburger -->
    <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <ul class="navbar-nav">

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

            <li class="nav-item">
                <a href="contact" class="nav-link">Contact</a>
            </li>

            <li class="nav-item">
                <a href="serv" class="nav-link">Donate</a>
            </li>

            <!-- Desktop Register Button -->
            <li class="nav-item desktop-register">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeZ9knl-kDLgbtfdbNGWk527XV9ZtfLQ0K8Yass5d6Kz6BPZQ/viewform?usp=send_form"
                   target="_blank"
                   class="btn-register-sexy ml-3">
                   Register
                </a>
            </li>

        </ul>
    </div>
</nav>

</div>

<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
