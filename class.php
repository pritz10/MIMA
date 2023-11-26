<?php
$title = "Class";
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
               <li style="color:blanchedalmond">Class</li>
            </ul>
         </div>
      </div>
  
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Dance Class</h3>
            <div class="row abt-inner-agile">
               <div class="col-lg-4 col-md-4 col-sm-4 ser-inner-img">
                  <img src="images/g6.jpg" alt="" class="img-fluid">
                  <div class="w3l-ser-sub-txt mt-lg-4 mt-3">
                     <p>Lorem ipsum dolor adipiscing elit, sed do sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Hip-Pop</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 ser-inner-img">
                  <img src="images/g2.jpg" alt="" class="img-fluid">
                  <div class="w3l-ser-sub-txt mt-lg-4 mt-3">
                     <p>Lorem ipsum dolor adipiscing elit, sed do sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Break Dance</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 ser-inner-img">
                  <img src="images/g1.jpg" alt="" class="img-fluid">
                  <div class="w3l-ser-sub-txt mt-lg-4 mt-3">
                     <p>Lorem ipsum dolor adipiscing elit, sed do sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Classic Dance</h4>
                  </div>
               </div>
            </div>
            <div class="row abt-inner-agile mt-lg-5 mt-md-4 mt-4">
               <div class="col-lg-4 col-md-4 col-sm-4 ser-inner-img">
                  <img src="images/g1.jpg" alt="" class="img-fluid">
                  <div class="w3l-ser-sub-txt mt-lg-4 mt-3">
                     <p>Lorem ipsum dolor adipiscing elit, sed do sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Balinese</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 ser-inner-img">
                  <img src="images/g7.jpg" alt="" class="img-fluid">
                  <div class="w3l-ser-sub-txt mt-lg-4 mt-3">
                     <p>Lorem ipsum dolor adipiscing elit, sed do sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Folk-Dance</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 ser-inner-img">
                  <img src="images/g6.jpg" alt="" class="img-fluid">
                  <div class="w3l-ser-sub-txt mt-lg-4 mt-3">
                     <p>Lorem ipsum dolor adipiscing elit, sed do sit amet, consectetur adipiscing elit, sed do</p>
                     <h4 class="mt-3">Group Dance</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container-fluid text-center">
            <div class="row abt-inner-agile">
               <div class="col-lg-6 col-md-6 two-abut-inner-right pr-0">
                  <div class="wls-sub-hedder-right text-left ">
                     <h4>Dance For The Satisfaction Of Your Soul</h4>
                    
                  </div>
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