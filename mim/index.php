<?php require_once 'include/db.php';?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MIM Dance Academy</title>
    <!-- google-fonts -->
    <link
        href="//fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="index.php">
                        <img src="files/Images/log.PNG" width="100">
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <!-- search button -->
                        <div class="search-right ml-xl-3 ml-1 mr-xl-1">
                            <form action="#error" method="GET" class="search-box position-relative">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                    autofocus="" class="search-popup">
                                <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- //search button -->
                    </ul>
                </div>
                <!-- //search button -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <div id="myCarousel" class="carousel   carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">

                  <?php

                    $sql = "select * from mainslider ORDER BY id DESC LIMIT 5";  

                      $result = mysqli_query($connect, $sql); 

                      $count = mysqli_num_rows($result);  

                      $i=0;

                      foreach($result as $row)

                      {

                      $active='';

                      if($i==0)

                      {

                      $active='active';

                      }

                      ?>

                      <li data-target="#myCarousel" data-slide-to="<?=$i;?>" class="<?=$active;?>"></li>

                      <?php $i++;}    ?>

                      </ol>

                    <div class="carousel-inner">

                          <?php

                          $sql = "select * from mainslider ORDER BY id DESC LIMIT 5";  

                          $result = mysqli_query($connect, $sql); 

                          $count = mysqli_num_rows($result);  

                          $i=0;

                          foreach($result as $row)

                          {

                          $active='';

                          if($i==0)

                          {

                          $active='active';

                          }

                          ?>

                          <div class="carousel-item <?=$active;?>">

                          <img class="d-block w-100" src="<?php echo $row['ImageUrl']; ?>" loading="lazy">
                           
                              <div class="carousel-caption  d-md-block">
                              <h5><?php echo $row['Title']; ?></h3>
                              <p class="pt-3"><?php echo $row['Description']; ?></p>
                               

                              </div>   

                          </div>

                          <?php $i++; } ?>
                        </div>



                      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">

                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                      <span class="sr-only">Previous</span>

                      </a>

                      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">

                      <span class="carousel-control-next-icon" aria-hidden="true"></span>

                      <span class="sr-only">Next</span>

                      </a>

                      </div>

                      </div>

                      </div>
 
              </div>
              </div>


    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-image">

        </div>
        <div class="banner-content">
            <div class="container pt-5 pb-md-4">
                <div class="row align-items-center py-4">
                    <div class="col-md-6 pr-lg-5">
                        <h3 class="mb-lg-4 mb-3 title">We Promote Your <span>Business</span></h3>
                        <p class="mr-5">Nemo enim ipsam oluptatem quia reoluptas sit aspernatur aut odit aut fugit, sed
                            quia
                            consequuntur
                            magni dolores eosqui ratione.</p>
                        <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                            <a class="btn btn-style" href="about.html">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5 mb-lg-0 mb-5 right-banner-2 position-relative">
                        <div class="sub-banner-image">
                            <img src="assets/images/banner-img.jpg"
                                class="img-fluid radius-image-full position-relative" alt=" ">
                        </div>
                        <div class="banner-style-1 d-flex align-items-center">
                            <i class="fas fa-chart-line green-clr-bg"></i>
                            <h4>Business Analysis</h4>
                        </div>
                        <div class="banner-style-1 banner-style-2 d-flex align-items-center">
                            <i class="fas fa-shield-alt primary-clr-bg"></i>
                            <h4>99.99% Success</h4>
                        </div>
                        <div class="banner-style-1 banner-style-3 d-flex align-items-center">
                            <i class="fas fa-chart-area blue-clr-bg"></i>
                            <h4>Strategy</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- 3grids section -->
    <section class="about-section py-5">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4 pb-xl-4" style="max-width:600px">
                <h3 class="title-style mb-2">We Provides Shortage Remarkable Ideas!</h3>
                <p>Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                    repellat.</p>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-md-6">
                    <div class="about-single p-3">
                        <div class="about-icon mb-4">
                            <i class="fas fa-business-time primary-clr-bg"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-2"><a href="about.html">Development</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                                laudan sit accusa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="about-single p-3">
                        <div class="about-icon mb-4">
                            <i class="fas fa-chart-pie green-clr-bg"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-2"><a href="about.html">Integration</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                                laudan sit accusa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-2">
                    <div class="about-single p-3">
                        <div class="about-icon mb-4">
                            <i class="fas fa-shipping-fast blue-clr-bg"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-2"><a href="about.html">Branding</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                                laudan sit accusa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //3grids section -->

    <!-- home block 3 -->
    <section class="w3l-servicesblock py-5">
        <div class="container pb-lg-5">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="assets/images/home1.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Price Quote Today!</h6>
                        <p>Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit. </p>
                        <a href="tel:http://1(800)7654321"><span class="fa fa-phone mr-2"></span> 1-800-654-3210</a>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">We have business skills that
                        will increase your earnings</h3>
                    <p class="mt-lg-4 mt-3 mb-sm-5 mb-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <div class="two-grids mt-md-0 mt-md-5 mt-4">
                        <div class="grids_info">
                            <i class="fas fa-user-clock primary-clr-bg"></i>
                            <div class="detail">
                                <h4>Start your own business in minutes</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                        <div class="grids_info mt-5">
                            <i class="fas fa-laptop-house green-clr-bg"></i>
                            <div class="detail">
                                <h4>Open a business account online</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home block 3 -->

    <!-- home page service block -->
    <section class="home-services py-5" id="services">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4 pb-xl-4" style="max-width:600px">
                <h3 class="title-style mb-2">What's Services We Are Offering to Our Customers</h3>
                <p>Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                    repellat.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-laptop-code blue-clr-bg"></i>
                        </div>
                        <h4 class="number">01</h4>
                        <h4><a href="#url">Cloud Computing</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="#read" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-chart-bar primary-clr-bg"></i>
                        </div>
                        <h4 class="number">02</h4>
                        <h4><a href="#url">Business Strategy</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="#read" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-copy green-clr-bg"></i>
                        </div>
                        <h4 class="number">03</h4>
                        <h4><a href="#url">Reports Analysis</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="#read" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-marker primary-clr-bg"></i>
                        </div>
                        <h4 class="number">04</h4>
                        <h4><a href="#url">Decision Maker</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="#read" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-user-cog green-clr-bg"></i>
                        </div>
                        <h4 class="number">05</h4>
                        <h4><a href="#url">Customer Oriented</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="#read" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-coins blue-clr-bg"></i>
                        </div>
                        <h4 class="number">06</h4>
                        <h4><a href="#url">Solution Focused</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="#read" class="read">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page service block -->

    <!-- video section -->
    <section class="w3l-ab-section py-5">
        <div class="container py-md-5 py-4">
            <div class="row py-lg-4">
                <div class="col-lg-6 section-width align-self">
                    <h3 class="title-style pr-xl-5">We help businesses launch, grow and succeed</h3>
                    <p class="mt-lg-4 mt-3 pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti
                        odit? At iure facere,
                        porro repellat officia quas, dolores magnam assumenda soluta odit
                        harum
                        voluptate inventore ipsa maiores fugiat accusamus eos nulla. Iure voluptatibus explicabo
                        officia.</p>
                    <a href="services.html" class="btn btn-style mt-4">Our Services</a>
                </div>
                <div class="col-lg-6 history-info mt-5 pt-lg-0 pt-5">
                    <div class="position-relative img-border">
                        <img src="assets/images/video.jpg" class="img-fluid video-popup-image" alt="video-popup">

                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/80590590" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //video section -->

    <!-- footer -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-3 col-6 footer-list-29">
                                <ul>
                                    <h6 class="footer-title-29">Company</h6>
                                    <li><a href="services.html">About Our Services</a></li>
                                    <li><a href="#projects">Our Projects</a></li>
                                    <li><a href="#blog">View Our Blog</a></li>
                                    <li><a href="about.html">Check Our Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-6 footer-list-29">
                                <ul>
                                    <h6 class="footer-title-29">Quick Links</h6>
                                    <li><a href="#management">Management</a></li>
                                    <li><a href="services.html">Department Services</a></li>
                                    <li><a href="#appointment">Make Appointment</a></li>
                                    <li><a href="about.html">Our Business Growth</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                                <ul>
                                    <h6 class="footer-title-29">Support</h6>
                                    <li><a href="#live">Live Chart</a></li>
                                    <li><a href="#faq">Faq's</a></li>
                                    <li><a href="#support"> Support</a></li>
                                    <li><a href="#terms">Terms of Service</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                                <h6 class="footer-title-29">More Info</h6>
                                <ul>
                                    <li><a href="#privacy">Privacy Policy</a></li>
                                    <li><a href="#terms"> Terms of Service</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="#support"> Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 footer-contact-list mt-lg-0 mt-md-5 mt-4">
                        <h6 class="footer-title-29">Social Media</h6>
                        <div class="main-social-footer-29">
                            <a href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#twitter" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#google"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#instagram" class="instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                        <!-- copyright -->
                        <p class="copy-footer-29 mt-4">© 2021 Marketplace. All rights reserved. Design by <a
                                href="https://w3layouts.com/" target="_blank">
                                W3Layouts</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner image moving effect -->
    <script>
        var lFollowX = 0,
            lFollowY = 0,
            x = 0,
            y = 0,
            friction = 1 / 30;

        function animate() {
            x += (lFollowX - x) * friction;
            y += (lFollowY - y) * friction;

            translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

            $('.banner-image').css({
                '-webit-transform': translate,
                '-moz-transform': translate,
                'transform': translate
            });

            window.requestAnimationFrame(animate);
        }

        $(window).on('mousemove click', function (e) {

            var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
            var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
            lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
            lFollowY = (10 * lMouseY) / 100;

        });

        animate();
    </script>
    <!-- //banner image moving effect -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>