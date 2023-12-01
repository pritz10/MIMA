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
               <li style="color:blanchedalmond">Big Dance Camp</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Big Dance Camp</h3>
            <div class="row abt-inner-agile pb-lg-3 pb-3">
               <div class="col-lg-6 col-md-6 abut-inner-right">
                  <h4>Beat summer boredom</h4>
                  <div class="">

<div class="position-relative">

<div id="myCarouselw" class="carousel slide carousel-fade" data-ride="carousel">

<!-- Indicators -->

<ol class="carousel-indicators">

<?php

$sql = "select * from summer ORDER BY Id DESC LIMIT 10";  

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

$sql = "select * from summer ORDER BY Id DESC LIMIT 10";  

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
                  <p class="text-justify" style="font-family: 'Times New Roman', Times, serif; ">
                  "SIKKIM BIG DANCE CAMP” Season 1 is successful.SDC Is a local platform where they will get a chance to showcase the utmost talents. In this camp, they will get a chance to learn from very Renowned Artists Nationally and internationally.


<br><br>
Our motto – Say No to Drugs, Yes to Art.
<br><br>
Say no to drugs, yes to art! Join our 3-day workshop and dance competition/battle.
<br><br>

<ul class="list-group">
<li class="list-group-item active"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Best Part of the Camp
 <br></li>
 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Next Generation Dance Battle Vol - 3<br></li>
 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Guest National Faculty
 <br></li>
 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Crew Showcase
 <br></li>
 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Workshop for Child Care Homes & Rehab Centres in Gangtok
 <br></li>
 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Cash prize & memento for winners and runners-up
 <br></li>
 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Top 10 tokens of love
 <br></li>

 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">Free video shoot & photography
 <br></li>
 <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; "> Certification program and many more
 <br></li>
 </ul>
                  </p>
               </div>
            </div>
           
         </div>
      </section>
  
      <?php require_once 'include/footer.php';?>