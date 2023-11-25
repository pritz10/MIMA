<?php
$title = "About Us";
require_once 'include/header.php'; ?>

      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li style="color:blanchedalmond">
                  <a href="index.php">Home</a>
                  <span>/</span>
               </li>
               <li style="color:blanchedalmond">About</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3" style="background: black;">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Us</h3>
            <div class="row abt-inner-agile pb-lg-3 pb-3">
               <div class="col-lg-6 col-md-6 abut-inner-right">
                  <h4 style="color: wheat;">Choose A Best For You <br>Which Is You Like</h4>
                  <div class="">

<div class="position-relative">

<div id="myCarouselw" class="carousel slide carousel-fade" data-ride="carousel">

<!-- Indicators -->

<ol class="carousel-indicators">

<?php

$sql = "select * from flowers ORDER BY Id DESC LIMIT 5";  

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

<li data-target="#myCarouselw" data-slide-to="<?=$i;?>" class="<?=$active;?>"></li>

<?php $i++;}    ?>

</ol>



<!-- Wrapper for slides -->

<div class="carousel-inner text-center">

<?php

$sql = "select * from flowers ORDER BY Id DESC LIMIT 5";  

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

<img src="<?php echo $row['ImageUrl']; ?>" class="img-fluid" loading="lazy">
<a href="about_sicb" class="read">Some Glimpses of MIM Dance Academy</a>

<div class="carousel-caption  d-md-block">

<h5><?php echo $row['Title']; ?></h3>

</div>   

</div>

<?php $i++; } ?>









</div>



<a class="carousel-control-prev" href="#myCarouselw" role="button" data-slide="prev">

<span class="carousel-control-prev-icon" aria-hidden="true"></span>

<span class="sr-only">Previous</span>

</a>

<a class="carousel-control-next" href="#myCarouselw" role="button" data-slide="next">

<span class="carousel-control-next-icon" aria-hidden="true"></span>

<span class="sr-only">Next</span>

</a>

</div>

</div>

</div>
             
               </div>
               <div class="col-lg-6 col-md-6 abut-inner-left">
                  <p class="text-justify" style="color: wheat;">Music-In-Motion (MIM) Dance Academy was founded in the year 2014 and was registered in Tadong, Gangtok, East Sikkim (Regd as Book No-IV, Volume No-12 and Serial No-336-IV/12/336), later relocated  Mg Marg - New Market Below karma Salon Gangtok, East Sikkim.
<strong>Mr Pravesh Tamang</strong>, a well-trained and versatile artist is the Founder of the Academy and <strong>Miss. Durga Subba</strong> , a talented dancer and choreographer is the Co-founder. Other faculties of the Academy are; Sagar Sarkar (Dance Teacher) Maya Sonar (Dance Teacher) & Bishal Chettri ( Gymnastics Trainer)
<br>MIM Academy has been actively supporting the artists till today and has also represented the state in various “Cultural Events” and has actively participated in social fund-raising programs. The Academy has conducted workshops all over Sikkim with academy artists, at state as well as national levels and has given opportunities for the youths to showcase their inner talents. The academy has never backed when it comes to supporting the youths or events of social importance and has represented the state highlighting the rich cultural and traditional aspects of our society.
<br><br>
The vision of the academy has been to offer platforms to aspiring and deserving local artists and to brush their talent to keep them growing to reach their full potential and help them live their dreams. In the initial phase itself, the academy has bagged numerous achievements under its belt and the founder believes that “the academy will aspire to grow and showcase our talents at the national & international level in future”.</p>
               </div>
            </div>
            <div class="row abt-inner-agile mt-lg-4 mt-3">
               <div class="col-lg-4 col-md-4 abut-inner-img">
                  <img src="files/Images/pasodoble_6901505.png" width="200px" alt="" class="img-fluid">
                  <div class="w3l-abt-sub-txt mt-lg-4 mt-3">
                  <p style="color: wheat;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Hip-Pop</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 abut-inner-img">
               <img src="files/Images/exercise_606702.png" width="200px" alt="" class="img-fluid">
                  <div class="w3l-abt-sub-txt mt-lg-4 mt-3">
                  <p style="color: wheat;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Folk-Dance</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 abut-inner-img">
               <img src="files/Images/rumba_6901480.png" width="200px" alt="" class="img-fluid">
                  <div class="w3l-abt-sub-txt mt-lg-4 mt-3">
                  <p style="color: wheat;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Balinese</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//about-->
      <!--about-two-->
      <section>
         <div class="container-fluid text-center">
            <div class="row abt-inner-agile">
               <div class="col-lg-6 col-md-6 two-abut-inner-right pr-0">
                  <div class="wls-sub-hedder-right text-left ">
                     <h4>Dance For The Satisfaction Of Your Soul</h4>
                     <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                     </p>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 abut-inner-in p-0">
                  <img src="images/ab4.jpg" class="img-fluid" alt="">
               </div>
            </div>
         </div>
      </section>
      <!--//about-two-->
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