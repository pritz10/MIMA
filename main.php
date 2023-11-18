
<?php require_once 'include/header.php';?>

<div data-aos="hjg-down">
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
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



     
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="agile-abt-info text-center">
               <h2>We Will Make You<br> As A Professional Dancer 
               </h2>
            </div >
            <div class="text-center info-sub-w3 pb-lg-4 pb-md-3 pb-sm-3 pb-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
               </p>
            </div>
            <div class="row agile-info-grid pt-lg-4 pt-md-4 pt-3">
               <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
                  <div class="white-shadow">
                     <div class="abut-wls-gride-dance">
                        <span class="fab fa-slideshare banner-icon" aria-hidden="true"></span>
                     </div>
                     <div class="abt-sub-info">
                        <h4>Best Performance</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="about.html">Learn more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
                  <div class="white-shadow">
                     <div class="abut-wls-gride-dance">
                        <span class="far fa-smile banner-icon" aria-hidden="true"></span>
                     </div>
                     <div class="abt-sub-info">
                        <h4>Online Advisors</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="about.html">Learn more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4  w3layouts-abut-list text-center">
                  <div class="white-shadow">
                     <div class="abut-wls-gride-dance">
                        <span class="fab fa-angellist banner-icon" aria-hidden="true"></span>
                     </div>
                     <div class="abt-sub-info">
                        <h4>New Technologies</h4>
                        <p>delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="about.html">Learn more</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slid-img">
            <ul id="flexiselDemo1">
               <li>
                  <div class="agileinfo_port_grid">
                     <a href="images/s1.jpg" class="lsb-preview" data-lsb-group="header">
                        <div class="agileit-folio_grid">
                           <img src="images/s1.jpg" alt=" " class="img-fluid" />
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="agileinfo_port_grid mt-lg-4 mt-3">
                     <a href="images/s2.jpg" class="lsb-preview" data-lsb-group="header">
                        <div class="agileit-folio_grid">
                           <img src="images/s2.jpg" alt=" " class="img-fluid" />
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="agileinfo_port_grid">
                     <a href="images/s3.jpg" class="lsb-preview" data-lsb-group="header">
                        <div class="agileit-folio_grid">
                           <img src="images/s3.jpg" alt=" " class="img-fluid" />
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="agileinfo_port_grid mt-lg-4 mt-3">
                     <a href="images/s4.jpg" class="lsb-preview" data-lsb-group="header">
                        <div class="agileit-folio_grid">
                           <img src="images/s4.jpg" alt=" " class="img-fluid" />
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="agileinfo_port_grid">
                     <a href="images/s2.jpg" class="lsb-preview" data-lsb-group="header">
                        <div class="agileit-folio_grid">
                           <img src="images/s2.jpg" alt=" " class="img-fluid" />
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <div class="agileinfo_port_grid mt-lg-4 mt-3">
                     <a href="images/s3.jpg" class="lsb-preview" data-lsb-group="header">
                        <div class="agileit-folio_grid">
                           <img src="images/s3.jpg" alt=" " class="img-fluid" />
                        </div>
                     </a>
                  </div>
               </li>
            </ul>
         </div>
      </section>
      <!--//about -->
      <!--slider-img-->
      <section class="side-img py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="agile-bar-grid  pb-lg-4">
               <div class="bar-w3ls-both-side text-center pb-lg-4 pb-md-3 pb-3">
                  <h4 class="text-white">You may be a skillful, effective employer but if you don’t trust your personnel and the opposite.</h4>
                  <div class="text-center info-sub-w3 pb-lg-4 pb-md-3 pb-sm-3 pb-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6 col-md-6 left-side-w3layouts">
                     <div class="iteam-bar">
                        <h5 class="pb-3">Tap-Dance</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped " role="progressbar" style="width: 75%"></div>
                        </div>
                     </div>
                     <div class="iteam-bar pt-lg-4 pt-3">
                        <h5 class="pb-3">Belly Dance</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%"></div>
                        </div>
                     </div>
                     <div class="iteam-bar pt-lg-4  pt-3">
                        <h5 class="pb-3">Contemporary</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%" ></div>
                        </div>
                     </div>
                     <div class="iteam-bar pt-lg-4 pt-3">
                        <h5 class="pb-3">Jazz & Funk</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" ></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 right-side-w3layouts">
                     <div class="iteam-bar">
                        <h5 class="pb-3">Hip-PoP</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"></div>
                        </div>
                     </div>
                     <div class="iteam-bar pt-lg-4 pt-3">
                        <h5 class="pb-3">Salsa</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" ></div>
                        </div>
                     </div>
                     <div class="iteam-bar pt-lg-4 pt-3">
                        <h5 class="pb-3">Cha_Cha</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" ></div>
                        </div>
                     </div>
                     <div class="iteam-bar pt-lg-4 pt-3">
                        <h5 class="pb-3">Ballent</h5>
                        <div class="progress my-bar">
                           <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" ></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="jst-must-info pt-lg-4 pt-md-3 pt-3">
               <div class="stats-info row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-1">
                     <div class="counter">3500</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Coffee</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-2">
                     <div class="counter">650</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Happy Client</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-3">
                     <div class="counter">10</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Expereince</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-4">
                     <div class="counter">1010</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Expert Worker</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//images slider  -->
      <!--service -->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Best Services</h3>
            <div class="row service-both">
               <div class="col-lg-5 wthree-left-img-ser">
                  <img src="images/ser1.jpg" class="img-thumbnail" alt="">
               </div>
               <div class="col-lg-7 right-ser-list pt-lg-5 pt-md-4 pt-3">
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                        <span class="far fa-gem"></span>
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                        <h4>
                           Lorem Ipsum Dolor
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                  </div>
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                        <span class="fas fa-hourglass-half"></span>
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                        <h4>consectetur adipiscing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                  </div>
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                        <span class="fas fa-american-sign-language-interpreting"></span>
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                        <h4>
                           Lorem Ipsum Dolor
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                  </div>
                  <div class="row service-agile-shadow ">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                        <span class="fas fa-chess-queen"></span>
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                        <h4>Tempor Incididunt</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//service -->			
      <!--schedual-->
      <section class="schedule py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-right clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">SCHEDULE PROGRAM</h3>
            <div class="table-responsive p-2 fact">
               <table class="table timetable mb-0">
                  <thead>
                     <tr>
                        <th scope="col">Time</th>
                        <th scope="col">MONDAY</th>
                        <th scope="col">TUESDAY</th>
                        <th scope="col">WEDNESDAY</th>
                        <th scope="col">THURSDAY</th>
                        <th scope="col">FRIDAY</th>
                        <th scope="col">SATURDAY</th>
                        <th scope="col">SUNDAY</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row">05.00 - 06.00</th>
                        <td class="event-list"><a href="class.html">HiP-POP<span class="pt-1">05.00 - 06.00</span></a> </td>
                        <td></td>
                        <td class="event-list"><a href="class.html">Salsa<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Rock<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Belly-Dance<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Tap-dance <span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                     </tr>
                     <tr>
                        <th scope="row">05.00 - 06.00</th>
                        <td class="event-list"><a href="class.html">HiP-POP<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Salsa<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                        <td class="event-list"><a href="class.html">Rock<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                        <td class="event-list"><a href="class.html">Tap-dance<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                     </tr>
                     <tr>
                        <th scope="row">05.00 - 06.00</th>
                        <td class="event-list"><a href="class.html">HiP-POP<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                        <td class="event-list"><a href="class.html">Salsa<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Rock<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Belly-Dance<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                        <td></td>
                     </tr>
                     <tr>
                        <th scope="row">05.00 - 06.00</th>
                        <td></td>
                        <td class="event-list"><a href="class.html">HiP-POP<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Salsa<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                        <td class="event-list"><a href="class.html">Belly-Dance<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td class="event-list"><a href="class.html">Tap-dance<span class="pt-1">05.00 - 06.00</span></a></td>
                        <td></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </section>
      <!--//schedual-->
      <!--testimonial-->
      <section class="testimonial py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Dancers Says</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner text-center">
                  <div class="carousel-item active client-img">
                     <img class="img-fluid" src="images/t1.jpg" alt="">
                     <div class="client-matter py-lg-4 py-md-3 py-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                        <h6 class="pt-lg-3 pt-2">Kelly West</h6>
                     </div>
                  </div>
                  <div class="carousel-item client-img">
                     <img class="img-fluid" src="images/t2.jpg" alt="">
                     <div class="client-matter py-lg-4 py-md-3 py-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                        <h6 class="pt-lg-3 pt-2">Sunny Jack</h6>
                     </div>
                  </div>
                  <div class="carousel-item client-img">
                     <img class="img-fluid" src="images/t3.jpg" alt="">
                     <div class="client-matter py-lg-4 py-md-3 py-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                        <h6 class="pt-lg-3 pt-2">jolly Deo</h6>
                     </div>
                  </div>
               </div>
             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!--//testimonial -->
      <!--footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row ">
               <div class="dance-agile-info col-lg-3 col-md-6 col-sm-6 ">
                  <h4 class="pb-lg-3 pb-3"><a href="index.html">Sway</a></h4>
                  <div class="bottom-para pb-sm-3 pb-2">
                     <p>ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla</p>
                  </div>
                  <div class="bottom-social pt-2">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <h4 class="pb-lg-3 pb-3">Usefull Links</h4>
                  <nav class="border-line">
                     <ul class="nav flex-column">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a href="about.html" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                           <a href="class.html" class="nav-link">Class</a>
                        </li>
                        <li class="nav-item">
                           <a href="gallery.html" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="dance-agile-info col-lg-3 col-md-6 col-sm-6 ">
                  <h4 class="pb-lg-3 pb-3">Twitter Us</h4>
                  <div class="bottom-para pb-3">
                     <p>ultricies nec, pellentesque eu, pretium quis,</p>
                  </div>
                  <div class="bottom-para">
                     <p>ultricies nec, pellentesque eu, pretium quis</p>
                  </div>
               </div>
               <div class="dance-agile-info col-lg-3 col-md-6 col-sm-6">
                  <h4 class="pb-lg-3 pb-3">Our Posts</h4>
                  <div class="footer-post d-flex mb-2">
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="class.html">
                        <img src="images/f1.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="#">
                        <img src="images/f2.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1">
                        <a href="class.html">
                        <img src="images/f3.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                  </div>
                  <div class="footer-post d-flex">
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="class.html">
                        <img src="images/f4.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="class.html">
                        <img src="images/f5.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1">
                        <a href="class.html">
                        <img src="images/f6.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copy-agile-right text-center text-white py-2">
            <p> 
               © 2018 Sway. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav: true,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	  
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!--slider flexisel -->
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 4,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 3
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      <!-- slider-pop-up -->
      <script src="js/lsb.min.js"></script>
      <script>
         $(window).load(function() {
         	  $.fn.lightspeedBox();
         	});
      </script>
      <!-- //slider-pop-up -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>