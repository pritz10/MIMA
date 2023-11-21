<?php require_once 'include/db.php';?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Musical - Music Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
    <!-- Google fonts -->
    <link href=//fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- top header -->
    <section class="w3l-top-header">
        <div class="container">
            <div class="top-content-w3ls d-flex align-items-center justify-content-between">
                <div class="top-headers">
                    <ul>
                        <li>
                            <p class="d-md-block d-none">Have any question ?</p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+1(21) 234 4567">+1(21) 234 4567</a>
                        </li>
                        <li class="me-0">
                            <i class="fa fa-envelope"></i><a href="mailto:mail@example.com">mail@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="top-headers top-headers-2">
                    <ul>
                        <li>
                            <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#twitter"><span class="fab fa-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#instagram"><span class="fab fa-instagram"></span></a>
                        </li>
                        <li class=" me-0">
                                    <a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //top header -->
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="files/Images/log.PNG" width="100">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="classes.html">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form action="#error" method="GET" class="d-flex search-header ms-lg-2">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
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
   


    <div id="carouselExampleCaptions" class="carousel carousel-fade">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="assets\images\about.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets\images\about1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="assets\images\about4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




  <div id="myCarousel" class="carousel " data-ride="carousel">
                <ol class="carousel-indicators">

                  <?php

                    $sql = "select * from mainslider ORDER BY id DESC LIMIT 3";  

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

                          $sql = "select * from mainslider ORDER BY id DESC LIMIT 10";  

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
 

    <!-- about section -->
    <section class="w3l-about py-5" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 section-width pe-xl-5 pt-lg-4">
                    <h3 class="title-style">Welcome to <span>Musical</span></h3>
                    <p class="mt-4">At corrupti odit At iure facere,
                        porro repellat officia quas, dolores magnam assumenda soluta odit
                        harum maiores fugiat accusamus eos nulla. Iure voluptatibus explicabo
                        officia.</p>
                    <p class="mt-4 pb-dm-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti
                        odit? At iure facere,
                        porro repellat officia quas, dolores magnam assumenda soluta odit
                        harum.</p>
                    <a href="about.html" class="btn btn-style mt-5"> Know more about us</a>
                </div>
                <div class="col-lg-6 history-info mt-lg-0 mt-5 pt-md-4 pt-2">
                    <div class="position-relative img-border">
                        <img src="assets/images/about.jpg" class="img-fluid radius-image" alt="video-popup">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- classes section -->
    <section class="w3l-classes py-5" id="classes">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center">Our Best Music <span>Classes</span></h3>
            <div class="row text-center justify-content-center">
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="grids-1 box-wrap p-lg-3">
                        <div class="icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h4><a href="#service" class="title-head mt-4 mb-2">Piano</a></h4>
                        <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                            eos. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="grids-1 box-wrap p-lg-3">
                        <div class="icon active">
                            <i class="fas fa-guitar"></i>
                        </div>
                        <h4><a href="#service" class="title-head mt-4 mb-2">Guitar</a></h4>
                        <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                            eos. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="grids-1 box-wrap p-lg-3">
                        <div class="icon">
                            <i class="fas fa-drum"></i>
                        </div>
                        <h4><a href="#service" class="title-head mt-4 mb-2">Trumpet</a></h4>
                        <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                            eos. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="grids-1 box-wrap p-lg-3">
                        <div class="icon">
                            <i class="fas fa-compact-disc"></i>
                        </div>
                        <h4><a href="#service" class="title-head mt-4 mb-2">DJ</a></h4>
                        <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                            eos. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="grids-1 box-wrap p-lg-3">
                        <div class="icon">
                            <i class="fas fa-play"></i>
                        </div>
                        <h4><a href="#service" class="title-head mt-4 mb-2">Musics</a></h4>
                        <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                            eos. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="grids-1 box-wrap p-lg-3">
                        <div class="icon">
                            <i class="fas fa-headphones-alt"></i>
                        </div>
                        <h4><a href="#service" class="title-head mt-4 mb-2">Listening</a></h4>
                        <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam fugiat accusamus
                            eos. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //classes section -->

    <!-- homeblock1 section -->
    <section class="w3l-homeblock1 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="title-style">Listen to <span>Music</span> Buzz anywhere</h3>
                    <h6 class="sub-title mt-md-4 mt-md-5 mt-4">Where words leave off, <br>Music Begins.</h6>
                    <a href="about.html" class="btn btn-style mt-lg-5 mt-4">View Classes</a>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-5 ps-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="column-w3-img position-relative">
                                <a href="#image"><img src="assets/images/img1.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                            <div class="column-w3-img position-relative mt-4">
                                <a href="#image"><img src="assets/images/img3.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="column-w3-img position-relative">
                                <a href="#image"><img src="assets/images/img4.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                            <div class="column-w3-img position-relative mt-4">
                                <a href="#image"><img src="assets/images/img2.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //homeblock1 section -->

    <!-- video section -->
    <section class="w3l-video-sec" id="video">
        <div class="container">
            <div class="row w3l-video">
                <div class="col-12">
                    <div class="videow3-right">
                        <div class="w3l-index5 py-5">
                            <div class="history-info align-self text-center py-5">
                                <div class="position-relative py-5">
                                    <a href="#small-dialog1"
                                        class="popup-with-zoom-anim play-view text-center position-absolute">
                                        <span class="video-play-icon">
                                            <span class="fa fa-play"></span>
                                        </span>
                                    </a>
                                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                        <iframe src="https://player.vimeo.com/video/12881072?h=9f0439706"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //video section -->

    <!-- join section -->
    <section class="w3l-whyblock py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="assets/images/about4.jpg" alt="" class="img-fluid radius-image">
                </div>
                <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                    <h3 class="title-style mb-4">Join the <span>Musical</span></h3>
                    <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <div class="two-grids mt-5">
                        <div class="grids_info">
                            <i class="fas fa-volume-up"></i>
                            <div class="detail">
                                <h4>Exclusive Releases</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-4">
                            <i class="fas fa-icons"></i>
                            <div class="detail">
                                <h4>Full DJ Sets & Podcasts</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //join section -->

    <!-- subscribe form section -->
    <section class="w3l-forms-9 pt-5 pb-lg-4" id="newsletter">
        <div class="container">
            <div class="main-midd text-center mx-auto" style="max-width:700px;">
                <h3 class="title-style mb-2">Subscribe to our daily <span>updates!</span></h3>
                <p class="">Enter your email address to register to our newsletter</p>

                <div class="main-midd-2 mt-md-5 mt-4 mx-auto" style="max-width:600px;">
                    <form action="#url" method="GET" class="d-sm-flex rightside-form">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                        <button class="btn btn-style" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //subscribe form section -->

    <!-- button with content section -->
    <section class="w3l-button-sec py-5">
        <div class="container py-5">
            <div class="w3-midhny-sec p-5">
                <div class="row align-items-center p-md-4">
                    <div class="col-xl-8 col-lg-9">
                        <div class="title-content-two pe-lg-5">
                            <h3 class="title-w3l mb-md-1 mb-4 d-md-flex align-items-center">Contact Us Now!
                                <a class="mt-md-0 mt-2" href="tel:+ 12 123 456 789">+ 12 123 456 789</a> </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 mt-lg-0 mt-sm-5 mt-4 text-lg-end">
                        <a href="about.html" class="btn btn-style ">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //button with content section -->

    <!-- footer -->
    <footer class="w3l-footer9">
        <div class="footer-inner-main py-5">
            <div class="container pt-lg-5 pt-md-4 pt-2 pb-2">
                <div class="row">
                    <div class="col-lg-4 sub-one-left pe-lg-5">
                        <h6>About </h6>
                        <p class="footer-phny">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                            ultrices in ligula. Semper at tempufddfel.Lorem ipsum dolor sit,l. Lorem ipsum dolor sit,
                            amet elit.</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                </li>
                                <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                        <h6>Links</h6>
                        <ul>
                            <li><a href="index.html">Home</a> </li>
                            <li><a href="about.html">About Us</a> </li>
                            <li><a href="classes.html">Classes</a> </li>
                            <li><a href="#blog">Blog Posts</a> </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                        <h6>Explore</h6>
                        <ul>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#privacypolicy">Privacy policy</a></li>
                            <li><a href="#offers">Offers</a></li>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#career">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 sub-one-left mt-lg-0 mt-5">
                        <h6>Twitter Feed</h6>
                        <ul>
                            <li class="w3tweet-holder-grids">
                                <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                <div class="w3tweet-text">
                                    <a target="_blank" href="#twitter">@Honynilf</a> Hi <a target="_blank"
                                        href="#twitter">@Honynilf</a> , can you please submit a ticket at <a
                                        target="_blank" href="#twitter">https://v.co/ij123A34J45A</a> <br>
                                    1 year ago.
                                </div>
                            </li>
                            <li class="w3tweet-holder-grids">
                                <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                <div class="w3tweet-text">
                                    <a target="_blank" href="#twitter">@Honynilf</a> Hi <a target="_blank"
                                        href="#twitter">@Honynilf</a> , can you please submit a ticket at <a
                                        target="_blank" href="#twitter">https://v.co/ij123A34J45A</a> and one of our
                                    support agent… <a target="_blank" href="#twitter">https://v.co/ij123A34J45A</a>
                                    2 year ago.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="copyright-footer mt-lg-5 mt-sm-4 mt-2 text-center">
                    <p class="copy-text">&copy; 2022 Musical. All rights reserved. Design by <a
                            href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
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

    <!-- banner slider -->
    <script>
        const slides = document.querySelectorAll(".slide");
        const nextButton = document.getElementById("next");
        const prevButton = document.getElementById("prev");
        const auto = true;
        const intervalTime = 5000;
        let slideInterval;

        const nextSlide = () => {
            const current = document.querySelector(".current");
            current.classList.remove("current");
            if (current.nextElementSibling) {
                current.nextElementSibling.classList.add("current");
            } else {
                slides[0].classList.add("current");
            }
        };

        const prevSlide = () => {
            const current = document.querySelector(".current");
            current.classList.remove("current");
            if (current.previousElementSibling) {
                current.previousElementSibling.classList.add("current");
            } else {
                slides[slides.length - 1].classList.add("current");
            }
        };

        nextButton.addEventListener("click", () => {
            nextSlide();
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });
        prevButton.addEventListener("click", () => {
            prevSlide();
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });

        if (auto) {
            slideInterval = setInterval(nextSlide, intervalTime);
        }
    </script>
    <!-- //banner slider -->

    <!-- video popup -->
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
    <!-- //video popup -->
    
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