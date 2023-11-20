<?php require_once 'include/header.php';?>
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
                        <h3 class="mb-lg-4 mb-3 title">We Will Make You  A  <span>Professional Dancer</span></h3>
                        <p class="mr-5">Music in Motion Dance Academy have a great team of Professional Trainers who can help you to enhance your skill</p>
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
                            <h4>Improvement</h4>
                        </div>
                        <div class="banner-style-1 banner-style-2 d-flex align-items-center">
                            <i class="fas fa-shield-alt primary-clr-bg"></i>
                            <h4>99.99% Success</h4>
                        </div>
                        <div class="banner-style-1 banner-style-3 d-flex align-items-center">
                            <i class="fas fa-chart-area blue-clr-bg"></i>
                            <h4>Moves</h4>
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
                            <h5 class="mb-2"><a href="about.html">Clasical Dance</a></h5>
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
                            <h5 class="mb-2"><a href="about.html">Hip Hops</a></h5>
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
                            <h5 class="mb-2"><a href="about.html">Music</a></h5>
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
                        <h6 class="imginfo__title">Have a talk Today!</h6>
                        <p>We are just a call away for you moves to be skilled<br> We will sort everything. </p>
                        <a href="tel:http://90984654986"><span class="fa fa-phone mr-2"></span> +91984654684</a>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">Best trainers that
                        will increase your dance moves</h3>
                    <p class="mt-lg-4 mt-3 mb-sm-5 mb-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <div class="two-grids mt-md-0 mt-md-5 mt-4">
                        <div class="grids_info">
                            <i class="fas fa-user-clock primary-clr-bg"></i>
                            <div class="detail">
                                <h4>Start dancing in  minutes</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                        <div class="grids_info mt-5">
                            <i class="fas fa-laptop-house green-clr-bg"></i>
                            <div class="detail">
                                <h4>Moves will be enhances</h4>
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
                        <h4><a href="#url">Clasical</a></h4>
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
                        <h4><a href="#url">Salsa</a></h4>
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
                        <h4><a href="#url">Hip Hops</a></h4>
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
                        <h4><a href="#url">Break Dance</a></h4>
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
                        <h4><a href="#url">Group Dance</a></h4>
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
                        <h4><a href="#url">Folk Dance Focused</a></h4>
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
                    <h3 class="title-style pr-xl-5">We help you kids to dance like poemand help them to grow and succeed</h3>
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
    <?php require_once 'include/footer.php';?>
