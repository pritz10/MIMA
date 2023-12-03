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
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Us</h3>
            <div class="row abt-inner-agile pb-lg-3 pb-3">
               <div class="col-lg-6 col-md-6 abut-inner-right">
                  <h4>Choose A Best For You <br>Which Is You Like</h4>
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

$sql = "select * from flowers ORDER BY Id DESC LIMIT 30";  

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
                  <p class="text-justify" style="font-family: 'Times New Roman', Times, serif;">Music-In-Motion (MIM) Dance Academy was founded in the year 2014 and was registered in Tadong, Gangtok, East Sikkim (Regd as Book No-IV, Volume No-12 and Serial No-336-IV/12/336), later relocated  Mg Marg - New Market Below karma Salon Gangtok, East Sikkim.
<strong><a href="">Mr Pravesh Tamang</a></strong>, a well-trained and versatile artist is the Founder of the Academy and <strong> <a href="">Miss. Durga Subba</a></strong> , a talented dancer and choreographer is the Co-founder. Other faculties of the Academy are; Sagar Sarkar (Dance Teacher) Maya Sonar (Dance Teacher) & Bishal Chettri ( Gymnastics Trainer)
<br>MIM Academy has been actively supporting the artists till today and has also represented the state in various “Cultural Events” and has actively participated in social fund-raising programs. The Academy has conducted workshops all over Sikkim with academy artists, at state as well as national levels and has given opportunities for the youths to showcase their inner talents. The academy has never backed when it comes to supporting the youths or events of social importance and has represented the state highlighting the rich cultural and traditional aspects of our society.
<br><br>
The vision of the academy has been to offer platforms to aspiring and deserving local artists and to brush their talent to keep them growing to reach their full potential and help them live their dreams. In the initial phase itself, the academy has bagged numerous achievements under its belt and the founder believes that “the academy will aspire to grow and showcase our talents at the national & international level in future”.</p>
               </div>
            </div>
                 
            <div class="row agile-info-grid pt-lg-4 pt-md-4 pt-3">
            <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
               <div class="white-shadow" data-aos="zoom-in" data-aos-delay="700" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                     <img src="files/Images/hip.PNG"  class="rounded-circle" width="150" alt="">
                     </div>
                     <div class="abt-sub-info">
                        <h4>All style dance training</h4>
                        <p class="text-justify">
                        Hip-hop dance is one of the most popular styles of dance today—using high energy, dynamic moves set to today’s current music. Hip-hop dancing is a great way to get started in dance for those who just want to have fun.</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="class">Learn more</a>
                     </div>
                  </div>
               </div>   
            <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
                  <div class="white-shadow" data-aos="zoom-in" data-aos-delay="500" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                        <img src="files/Images/gym.PNG"  class="rounded-circle" width="150" alt="">
                      </div>
                     <div class="abt-sub-info">
                        <h4>Gymnastics</h4>
                        <p class="text-justify">
                        Gymnastics is a type of sport that includes physical exercises requiring balance, strength, flexibility, agility, coordination, artistry and endurance. The movements involved in gymnastics contribute to the development of the arms, legs, shoulders, back, chest, and abdominal muscle groups.</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="class">Learn more</a>
                     </div>
                  </div>
               </div>
              
               <div class="col-lg-4 col-md-4  w3layouts-abut-list text-center">
               <div class="white-shadow" data-aos="zoom-in" data-aos-delay="900" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                     <img src="files/Images/sa.png" class="rounded-circle" width="150" alt="">
                     </div>
                     <div class="abt-sub-info">
                        <h4>Semi-Classical Dance</h4>
                        <p class="text-justify">
                        

The art of semi classical dance is a very interesting topic. It’s a type of dance that has some similarities to classical but also incorporates elements from modern and folk dances. Semi-classical dance is a term that refers to an amalgamation of classical and contemporary styles.</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="class">Learn more</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//about<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-ec3bb8c4-4422-454b-bf1a-777aff28e488" data-elfsight-app-lazy></div>
      about-two-->
      <section>
         <div class="container-fluid text-center">
            <div class="row abt-inner-agile">
               <div class="col-lg-6 col-md-6 two-abut-inner-right pr-0">
                  <div class="wls-sub-hedder-right text-left ">
                     <h4>Dance For The Satisfaction Of Your Soul</h4>            </div>
               </div>
               <div class="col-lg-6 col-md-6 abut-inner-in p-0">
               <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PpNRfTO5-y8?si=yKMNGa5KOgP-gFGa" title="YouTube video player" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</div>               </div>
            </div>
         </div>
      </section>
      <!--//about-two-->
      <!--testimonial-->

       <!--testimonial-->
<section class="testimonial py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="color: white;">Our Dancers Says</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner text-center" >
              
               <ol class="carousel-indicators">

<?php
                  $sql="SELECT * FROM testimonial ORDER BY id DESC LIMIT 5";
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
    <?php

$sql="SELECT * FROM testimonial ORDER BY id DESC LIMIT 5";

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
               <div class="carousel-item client-img <?=$active;?>">
                     <img class="img-fluid" src="<?php echo $row['ImageUrl']; ?>" width="150px" alt="MIm Dance">
                     <div class="client-matter py-lg-4 py-md-3 py-3">
                        <p style="color: white;"><?php echo $row['Message']; ?></p>
                        <h6 class="pt-lg-3 pt-2" style="color: white;"><?php echo $row['Name']; ?></h6>
                        <p style="color: white;"><?php echo $row['Designation']; ?></p>
                     </div>
                  </div>  <?php $i++; } ?>           
                   
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