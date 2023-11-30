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
               <li style="color:blanchedalmond">Summer Dance Camp</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Summer Dance Camp</h3>
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
                  Summer is quickly approaching and you’re probably wondering how to keep your kids & teens occupied and entertained. Why not beat the heat with a summer dance camp at the Music In Motion Academy? Summer dance camps allow kids  & teens to try different styles of dance, learn new skills, and have fun! 
<br><br>
<ul class="list-group">
<li class="list-group-item active"  style="font-family: 'Times New Roman', Times, serif;background-color: #fb6509;
    border-color: #fb6509; ">5 Benefits to Summer Dance Camps <br>Let’s take a look at some of the benefits that a summer dance camp can offer...
 <br></li>
  <li class="list-group-item"  style="font-family: 'Times New Roman', Times, serif;"> <strong>1. Learn new skills quickly</strong> <br>
You’ll be amazed at the skills and techniques your child learns in only four days. Dance camps are highly focused with a particular goal in mind, such as learning a new dance to combo or mastering a specific skill. Best of all, what your child learns sticks with them, so they can further develop in regular dance classes.</li>
  <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>2. Stay physically active</strong> <br>
Dancing improves a child’s flexibility, strength, stamina, and coordination. Enrolling in summer dance camp encourages healthy habits, whether your child is a regular student or not. Getting up and moving is a much better way to pass the time this summer than on a screen!</li>
  <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>3. Beat summer boredom</strong><br>
Most children  & teens look forward to summer vacation all year, but boredom hits within days. Keep your kids & teens stimulated with summer dance camps! Lasting two hours per day for four days, dance camp truly reinvigorates a boring week.</li>
  <li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>4. Improve social skills & make new friends</strong> <br>
In addition to the physical benefits of a dance camp, there’s a huge emphasis on social skills when dancing and learning. Dance camps are a great way for children & teens to meet other dancers and branch out to make new friends at the studio. Dancers get to make new friends and create special memories.</li>
<li class="list-group-item"style="font-family: 'Times New Roman', Times, serif;"><strong>5. Maximize creativity</strong> <br>
If your child & teens is drawn to creativity, summer dance camps are a perfect fit. You will get many chances to share your creativity through movement, games, and arts and crafts. </li>
</ul>
                  </p>
               </div>
            </div>
           
         </div>
      </section>
  
      <?php require_once 'include/footer.php';?>