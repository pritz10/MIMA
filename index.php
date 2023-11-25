
<?php
$title = "Mim Dance Academy";
require_once 'include/header.php'; ?>
<br><br><br>
<section>
<div data-aos="fade-down"  data-aos-duration="1000">
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

                  <?php 
                   $i++;}
                  ?>

                      </ol>

                    <div class="carousel-inner">

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

                          <div class="carousel-item <?=$active;?>">

                          <img class="d-block w-100 " src="<?php echo $row['ImageUrl']; ?>" loading="lazy">
                           
                              <div class="carousel-caption  d-md-block">
                              <h5><?php echo $row['Title']; ?></h3>
                              <p class="pt-3"><?php echo $row['Description']; ?></p>
                               

                              </div>   

                          </div>

                          <?php $i++; } ?>                          <?php  ?>

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
              </section>
<!--           
              <section class="about py-lg-4 py-md-3 py-sm-3 py-3" data-aos="zoom-in-up" id="about" style="background: black;">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
              <div class="row text-center">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body" style="background: lightgoldenrodyellow;">
        <h5 class="card-title">Check our dance classes</h5>
        <p class="card-text">Talk with our expert team for best guidance</p>
       <a  class="btn btn-success" href="https://api.whatsapp.com/send?phone=+91 89182 12479&text=Hello, Music in Motion Dance Academy !"style="font-weight: bolder;"><i class='fab fa-whatsapp'></i> Whatsapp us</a>
 <br><br><a class="btn btn-warning" href="tel:+918918212479" style="font-weight: bolder;">Call us at 8918212479</a>


       </div>
    </div>
  </div>
   
</div></div></section> -->
            
<section class="about py-lg-4 py-md-3 py-sm-3 py-3" data-aos="zoom-in-up"  data-aos-once="true"id="about" style="background: black;">
         <div class="container ">
              <div class="row text-center">
  <div class="col-sm-12">
    <div class="card">
     <a  href="tel:+918918212479" style="font-weight: bolder;"><img src="files/Images/h.gif" class="img-fluid" alt="Cal Us"></a>


      
  </div>
   
</div></div></section>
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about" style="background: black;">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="agile-abt-info text-center">
               <h2>What Makes Me Different?
               </h2>
            </div >
           
               <p class="text-justify" style="color: wheat;">How many times a dance teacher has told you that you need to work on your basics like it's the magic button that will suddenly make you a better dancer?
<br>The truth is that basic moves are overrated and most of the time they don't contribute to your growth as a dancer.
Don't get us wrong having a strong foundation as a dancer is extremely important but unfortunately, most dance teachers only focus on the technical aspect of dancing, and very few are teaching the psychological element of dancing...
We believe dancing is 70% mental and 30% physical you can know all the moves and techniques in the world if your mindset is not right you don't stand a chance in the dance industry.
<br><br><strong>That's why MIM Dance Academy is different not only do we dive deep into the technical aspect of freestyle dancing, but we also equip you with the mental toughness needed to make a name for yourself in the dance industry.
</strong>  </p>
             
            <div class="row agile-info-grid pt-lg-4 pt-md-4 pt-3">
               <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
                  <div class="white-shadow" data-aos="zoom-in" data-aos-delay="500" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                        <img src="files/Images/dance.png" width="100" alt="">
                      </div>
                     <div class="abt-sub-info">
                        <h4>Classical</h4>
                        <p style="color: wheat;">delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="about.html">Learn more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
               <div class="white-shadow" data-aos="zoom-in" data-aos-delay="700" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                     <img src="files/Images/dancer.png" width="100" alt="">
                     </div>
                     <div class="abt-sub-info">
                        <h4>Advisors</h4>
                        <p style="color: wheat;">delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="about.html">Learn more</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4  w3layouts-abut-list text-center">
               <div class="white-shadow" data-aos="zoom-in" data-aos-delay="900" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                     <img src="files/Images/tango.png" width="100" alt="">
                     </div>
                     <div class="abt-sub-info">
                        <h4>Salsa</h4>
                        <p style="color: wheat;">delectus reiciendis maiores alias consequatur aut.maiores alias</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="about.html">Learn more</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="slid-img">
         <div class="agile-abt-info text-center">
               <h2>Upcoming Events
               </h2>
            </div >
            <ul id="flexiselDemo1">
               
            <?php

$sql = "select * from devents ORDER BY Id DESC LIMIT 5";  

$result = mysqli_query($connect,$sql); // fetch data from database

  if(mysqli_num_rows($result) > 0)  

  {  

      while($data = mysqli_fetch_array($result))  

      {                

  ?>
                  <li>
                  <div class="agileinfo_port_grid">
                  <a href="<?php echo $data['ImageUrl']; ?>" class="lsb-preview" data-lsb-group="header">
                        <div class="agileit-folio_grid">
                           <img src="<?php echo $data['ImageUrl']; ?>" class="img-thumbnail" class="img-fluid" />
                        </div>
                     </a>
                  </div>
               </li>  
<?php

}}

  else

  {

    echo" No data";

  }?>
                
              
              
               
            </ul>
         </div>
      </section>
      <!--//about -->
      <!--slider-img-->
      <section class="side-img py-lg-4 py-md-3 py-sm-3 py-3" data-aos="fade-right">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
          
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
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3" style="background:black" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3">Opportunities</h3><p class="text-justify" style="color: wheat;">THE MIM Dance Academy is dedicated to all dancers of any style the formation is designed in such a way that you can find value in it regardless of your dance level.

Our goal is to assist you in creating the best version of yourself and developing a strong identity as a dancer therefore, the information we share is adaptable to each individual. </p>
            <div class="row service-both">
               <div class="col-lg-5 wthree-left-img-ser" data-aos="zoom-out-right" data-aos-duration="3000">
                  <img src="files/Images/bk.jpg" class="img-thumbnail" alt="Mim Dance Academy Sikkim">
               </div>
               <div class="col-lg-7 right-ser-list pt-lg-5 pt-md-4 pt-3">
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                     <img src="files/Images/breakdance.png" width="100" alt="">

                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                       
                        <p style="color: wheat;"> Each will get a chance to participate in any kind of reality show local and National.</p>
                     </div>
                  </div>
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                     <img src="files/Images/rock-n-roll.png" width="100" alt="">
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                     <p style="color: wheat;"> 
                     Best students of music in motion will get a chance featured in music videos.</p>

                     </div>
                  </div>
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                     <img src="files/Images/twist.png" width="100" alt="">
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                     <p style="color: wheat;"> Chance to teach at schools as a part of the MIM company</>
</div>
                  </div>
                  <div class="row service-agile-shadow ">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                     <img src="files/Images/cheerleader.png" width="100" alt="">
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                     <p style="color: wheat;"> Opportunity to get selected for the Music in Motion Company</p>

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
      <?php require_once 'include/footer.php';?>
