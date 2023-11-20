<?php require_once 'include/db.php';?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cooking - Restaurants Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    Cooking<i class="fas fa-bread-slice ms-1"></i>
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
                    <form action="#search" method="GET" class="d-flex search-header ms-lg-2">
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
    <!-- //header -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
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
    <section class="w3l-main-slider" id="home">
        <div class="banner-content">
                                
                          

            <div id="demo-1"
            data-zs-src='["<?php

$sql = "select * from mainslider ORDER BY id DESC LIMIT 5";  

$result = mysqli_query($connect, $sql); 

$count = mysqli_num_rows($result);  

$i=0;

foreach($result as $row)

{

    echo $row['ImageUrl'];}

?>"]'  
                data-zs-overlay="dots">
                <div class="demo-inner-content text-center">
                    <div class="container">
                        <div class="banner-info">
                            <h5>Cooking is Easy</h5>
                            <h3 class="mt-2 mb-5">Passion For Cooking</h3>
                            <p>Helping You To Be Chef at Your Own House</p>
                            <a href="about.html" class="btn btn-style mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- about section -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="title-style">Learn how to cook from your house</h3>
                    <p class="mt-3">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
                        Mumquam eius modi tempora incidunt ut labore et.</p>
                    <div class="row mt-lg-5 mt-4">
                        <div class="col-sm-6 grids_info">
                            <i class="fas fa-utensils"></i>
                            <div class="detail mt-sm-4 mt-3">
                                <h4>Easy Manual</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 grids_info mt-sm-0 mt-4">
                            <i class="fas fa-bread-slice"></i>
                            <div class="detail mt-sm-4 mt-3">
                                <h4> For Everyone</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5 mt-lg-0 mt-5">
                    <div class="row align-items-center">
                        <div class="col">
                            <img src="assets/images/about1.jpg" alt="" class="img-fluid radius-image">
                        </div>
                        <div class="col">
                            <img src="assets/images/about2.jpg" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- courses section -->
    <section class="w3l-courses py-5" id="courses">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <h5 class="sub-title text-center">Our Cooking Classes</h5>
            <h3 class="title-style text-center">Popular Courses</h3>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="classes.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="assets/images/c1.jpg" alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="classes.html" class="receipe blue">Beginner</a>
                                <a href="classes.html" class="receipe yellow ml-2">New</a>
                            </div>
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p>$53.00</p>
                                <ul class="rating-star">
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star-o"></span></li>
                                </ul>
                            </div>
                            <a href="classes.html" class="course-desc">How to make singapore chicken rise at home
                            </a>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fas fa-users"></span>
                                    <span class="meta-value"> 68 Students enrolled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="classes.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="assets/images/c2.jpg" alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="classes.html" class="receipe blue">Cooking</a>
                                <a href="classes.html" class="receipe yellow ml-2">Recipe</a>
                            </div>
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p>$70.00</p>
                                <ul class="rating-star">
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star-o"></span></li>
                                </ul>
                            </div>
                            <a href="classes.html" class="course-desc">Make a delicious vegan burger at home</a>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fas fa-users"></span>
                                    <span class="meta-value"> 44 Students enrolled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="classes.html" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="assets/images/c3.jpg" alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="classes.html" class="receipe blue">Beginner</a>
                                <a href="classes.html" class="receipe yellow ml-2">Free</a>
                            </div>
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p>$69.00</p>
                                <ul class="rating-star">
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star-o"></span></li>
                                </ul>
                            </div>
                            <a href="classes.html" class="course-desc">How to make simple delicious noodles</a>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fas fa-users"></span>
                                    <span class="meta-value"> 74 Students enrolled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mx-auto text-more text-center pt-lg-4">
                    <a href="classes.html" class="btn btn-style">View All Courses</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //courses section -->

    <!-- why section -->
    <section class="w3l-whyblock py-5">
        <div class="pb-lg-5 pb-md-4 pb-2">
            <div class="row align-items-center m-0">
                <div class="col-lg-6 ps-0">
                    <img src="assets/images/about.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                    <h5 class="sub-title">Our Features</h5>
                    <h3 class="title-style mb-4">Why Choose Us?</h3>
                    <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <div class="two-grids mt-5">
                        <div class="grids_info">
                            <i class="fas fa-trophy"></i>
                            <div class="detail">
                                <h4>We Are Winners of 50 Competitions</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                            <i class="fas fa-user-friends"></i>
                            <div class="detail">
                                <h4>27 Professional Chefs-Trainers</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                            <i class="fas fa-hourglass-half"></i>
                            <div class="detail">
                                <h4>Guaranteed Fast Employment</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why section -->

    <!-- team section -->
    <div class="w3l-team-grids-sec py-5" id="team">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <h5 class="sub-title text-center">Team of Professionals</h5>
            <h3 class="title-style text-center">Our Best Chefs</h3>
            <div class="row cards justify-content-center">
                <div class="col-lg-4 col-md-6 mt-5">
                    <a href="#img" class="card">
                        <img src="assets/images/team1.jpg" class="card__image radius-image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <div class="card__header-text">
                                    <h3 class="card__title">Olive Yew</h3>
                                    <span class="card__status">Masterchef</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam nonummy nibh.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <a href="#img" class="card">
                        <img src="assets/images/team2.jpg" class="card__image radius-image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <div class="card__header-text">
                                    <h3 class="card__title">Aida Joe</h3>
                                    <span class="card__status">Masterchef</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam nonummy nibh.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <a href="#img" class="card">
                        <img src="assets/images/team3.jpg" class="card__image radius-image" alt="" />
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>
                                <div class="card__header-text">
                                    <h3 class="card__title">Teri Dac</h3>
                                    <span class="card__status">Masterchef</span>
                                </div>
                            </div>
                            <p class="card__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam nonummy nibh.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //team section -->

    <!-- content block1 -->
    <section class="w3l-content-block1 py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 col-md-8 title-content py-md-5">
                    <h3 class="title-style text-white">Join Our Cooking Class, Become a Chef</h3>
                    <p class="mt-3 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit
                        sunt in culpa qui officia
                        sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
                    <a href="about.html" class="btn btn-style mt-5">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- //content block1 -->

    <!-- blog section -->
    <section class="w3l-blog py-5" id="blog">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="sub-title text-center">Latest News</h5>
            <h3 class="title-style text-center">Our Fresh Blog Posts</h3>
            <div class="row inner-sec-w3ls justify-content-center">
                <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-5">
                    <div class="card img">
                        <div class="card-body img">
                            <a href="#blog" class="d-block">
                                <img src="assets/images/blog1.jpg" alt="" class="img-fluid radius-image">
                            </a>
                            <div class="blog-des">
                                <ul class="admin-post mb-3">
                                    <li>
                                        <a href="#admin"><span class="fas fa-user"></span> by Admin</a>
                                    </li>
                                    <li>
                                        <a href="#recipes"><span class="fas fa-tags"></span> Recipes</a>
                                    </li>
                                    <li>
                                        <a href="#comments"><span class="fas fa-comments"></span> 3</a>
                                    </li>
                                </ul>
                                <h5 class="card-title mb-3"><a href="#blog">
                                        The Importance Of Food Elements & Tips for Cooking </a></h5>
                                <p>Excepteur sint occaecat cupidatat non, sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-5">
                    <div class="card img">
                        <div class="card-body img">
                            <a href="#blog" class="d-block">
                                <img src="assets/images/blog2.jpg" alt="" class="img-fluid radius-image">
                            </a>
                            <div class="blog-des">
                                <ul class="admin-post mb-3">
                                    <li>
                                        <a href="#admin"><span class="fas fa-user"></span> by Admin</a>
                                    </li>
                                    <li>
                                        <a href="#classes"><span class="fas fa-tags"></span> Classes</a>
                                    </li>
                                    <li>
                                        <a href="#comments"><span class="fas fa-comments"></span> 4</a>
                                    </li>
                                </ul>
                                <h5 class="card-title mb-3"><a href="#blog">
                                        How To Cook Turkey On Natural Gas Grills</a>
                                </h5>
                                <p>Excepteur sint occaecat cupidatat non, sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-5">
                    <div class="card img">
                        <div class="card-body img">
                            <a href="#blog" class="d-block">
                                <img src="assets/images/blog3.jpg" alt="" class="img-fluid radius-image">
                            </a>
                            <div class="blog-des">
                                <ul class="admin-post mb-3">
                                    <li>
                                        <a href="#admin"><span class="fas fa-user"></span> by Admin</a>
                                    </li>
                                    <li>
                                        <a href="#coach"><span class="fas fa-tags"></span> Coach</a>
                                    </li>
                                    <li>
                                        <a href="#comments"><span class="fas fa-comments"></span> 6</a>
                                    </li>
                                </ul>
                                <h5 class="card-title mb-3"><a href="#blog">Chef Olive explains the
                                        role of best cooking tips</a></h5>
                                <p>Excepteur sint occaecat cupidatat non, sunt in culpa qui officia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog section -->

    <!-- instagram-feeds -->
    <div class="projects" id="special">
        <div class="projects-grids">
            <div class="istagram-feeds">
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s1.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s2.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s6.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s4.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s5.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s3.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s7.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="projects-w3l-grid-info">
                    <a href="#blog"><img src="assets/images/blog-s8.jpg" class="img-fluid" alt="" />
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-top">
                            <span class="fab fa-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //instagram-feeds -->
    <!-- footer -->
    <footer class="w3l-footer-16">
        <div class="footer-top-16 py-5">
            <div class="container pt-lg-5 pt-md-4 pt-2 pb-lg-4 pb-2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h3>About Us</h3>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nerihe re impedit quo
                            minus id qd maxime aceat facere.</p>
                        <div class="columns-2 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 column ps-xl-5 mt-sm-0 mt-4">
                        <h3>Quick Link</h3>
                        <ul class="footer-gd-16">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="classes.html">Classes</a></li>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#blog">Blog Posts</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6 column ps-xl-5 pe-lg-0 mt-lg-0 mt-4">
                        <h3>Contact Info</h3>
                        <ul class="footer-contact-list">
                            <li class=""><i class="fas fa-map-marker-alt"></i><span>10001, 5th Avenue,
                                    #32841 block, USA</span></li>
                            <li class="mt-2"><i class="fas fa-phone-alt"></i><span><a href="tel:+12 23456790">+1223
                                        456 790</a></span></li>
                        </ul>
                        <div class="footer-botm mt-3">
                            <h6>Open Hours:</h6>
                            <p class="mt-2"><span>Mon – Sat</span> : 9Am – 6Pm</p>
                            <p> <span>Sunday</span> : CLOSED</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 column mt-lg-0 mt-4 ps-xl-5">
                        <h3>Subscribe</h3>
                        <form action="#" class="subscribe d-flex" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button class="button-style"><span class="fa fa-paper-plane"
                                    aria-hidden="true"></span></button>
                        </form>
                        <p class="mt-4">Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-section text-center py-4">
            <p class="copy-text py-1">&copy; 2022 Cooking. All rights reserved. Design by <a
                    href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
            </p>
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

    <!-- slider-js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/jquery.zoomslider.min.js"></script>
    <!-- //slider-js -->

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