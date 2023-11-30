<?php
$title = "Winter Dance Camp";
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
               <li style="color:blanchedalmond">Winter Dance Camp</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Winter Dance Camp</h3>
            <div class="row abt-inner-agile pb-lg-3 pb-3">
               <div class="col-lg-6 col-md-6 abut-inner-right">
                  <h4>Beat Winter boredom</h4>
                  <div class="">

<div class="position-relative">

<div id="myCarouselw" class="carousel slide carousel-fade" data-ride="carousel">

<!-- Indicators -->

<ol class="carousel-indicators">

<?php

$sql = "select * from winter ORDER BY Id DESC LIMIT 10";  

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

$sql = "select * from winter ORDER BY Id DESC LIMIT 10";  

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
<div class="text-center">
         <div class="outs-agile-buttn mt-lg-3 mt-2">
         <a href="https://forms.gle/j4pdq6c4mpSUvvoF6" target="_blank" >Click here to Register in our Dance Camps</a>
                     </div>
                  </div>   
               </div>
               <div class="col-lg-6 col-md-6 abut-inner-left">
                  <p class="text-justify" style="font-family: 'Times New Roman', Times, serif;">
Winter Dance Camp Season 8 CERTIFIED COURSE ’ meaning footsteps marks the auspicious beginning of every dancer’s journey. This Certified course  is the first step for dancers trained in any dance style to explore the dance world.
Get Ready for an Unforgettable Winter Dance Camp Course Season 8! As we celebrate the new year, you're Invited to Join the Dance Madness and Make This Winter Break Spectacular!
Winter Dance Course is a unique opportunity for dancers to spend time secluded from the hustle-bustle of daily life and dive deep into the ocean of dance.  The course is designed for dancers to experience dance through theoretical, physical and spiritual learning. It is a one-of-a kind opportunity to acquire a thorough and multifaceted understanding of the subject.<br><br>
<ul class="list-group">
<li class="list-group-item active"  style="font-family: 'Times New Roman', Times, serif; background-color: #fb6509;
    border-color: #fb6509; ">
WHO CAN ATTEND THE COURSE?
This camp is designed for anyone with an interest in various Dance style  with little or no prior knowledge of the art form.
By the end of the course, students will have
 <br></li>
  <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;"> <strong>Showcase</strong> </li>
   <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>Theory Exam</strong> </li>
   <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>Dance Party</strong></li>
   <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>Certification Program </strong> </li>
 <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>Photo Session and many more </strong>  </li>
 <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>Winter Dance  Course 8  "2023 will be held at Mg Marg, New Market Below Karma Salon- Gangtok, Sikkim </strong>  </li>
 
</ul>
                  </p>
               </div>
            </div>
           
         </div>
      </section>
  
      <?php require_once 'include/footer.php';?>