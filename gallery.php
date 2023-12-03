<?php
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security "max-age=63072000; includeSubDomains');
header('set Referrer-Policy same-origin');
header("Pragma-directive: no-cache");  
header("Cache-directive: no-cache");  
header("Cache-control: no-cache");  
header("Pragma: no-cache");  
header("Expires: 0");
require_once 'include/db.php';?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery | Music In Motion Dance Academy| mim dance academy | mimdanceacademy </title>


<!--meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
      <meta name="keywords" content="MIMA, mima, Music in motion dance academy, dance academy in sikkim, sikkim, gangtok , mim dance academy" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {slide
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Slider -->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--gallery-->
      <link rel="stylesheet" href="css/lightbox.css">
      <!--//gallery-->
      <link rel="stylesheet" type="text/css" href="css/set1.css" />
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Felipa" rel="stylesheet">
   </head>
   <body>
   <div class="header-outs" id="home">
             <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background: black; padding-top:0;padding-bottom:0;">
               <a class="navbar-brand" href="index"><img src="files/Images/log.PNG" width="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" style="font-weight: 900;" href="index">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                     <a href="class" class="nav-link">Class</a>
                     </li>
                     <li class="nav-item">
                        <a href="about" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="faculty" class="nav-link">Faculty</a>
                     </li>
                     <li class="nav-item">
                     <a href="store" class="nav-link">Store</a>
                     </li>
                     <li class="nav-item">
                     <a href="gallery" class="nav-link">Gallery</a>
                     </li>
                     <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dance Camps
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <a href="summer" class="dropdown-item" type="button">Summer Camp</a>

     <a href="winter" class="dropdown-item" type="button">Winter Camp</a>
     <a href="bigdance" class="dropdown-item" type="button">Sikkim Big Dance Camp</a>

  </div>
</div>
                     <li class="nav-item">
                     <a href="contact"class="nav-link">Contact</a>
                     </li>
                   
                              
                            
                     
                   
                      
                  </ul>
                  
               </div>
            </nav>
       </div>
       <div class="inner_page-banner">
      </div>
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li style="color:blanchedalmond">
                  <a href="index">Home</a>
                  <span>/</span>
               </li>
               <li style="color:blanchedalmond">Gallery</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--Gallery-->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3 ">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Dance Gallery</h3>
             
            <div class="row grid gallery-info my-lg-4 my-md-3">

            <?php

$sql = "select * from mediagallery ORDER BY Id";  

$result = mysqli_query($connect,$sql); // fetch data from database

  if(mysqli_num_rows($result) > 0)  

  {  

      while($data = mysqli_fetch_array($result))  

      {                

  ?>
               <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids" style="margin:5px">
                  <figure class="effect-milo">
                     <img src="<?php echo $data['ImageUrl']; ?>" alt="" class="img-fluid">
                     <figcaption>
                        <h2>MIM Dance Academy</h2>
                        <p><?php echo $row['Title']; ?></p>
                        <a href="<?php echo $data['ImageUrl']; ?>" class="gallery-box" data-lightbox="example-set" data-title="">
                        </a>
                     </figcaption>
                  </figure>
               </div>
               
               <?php

}}

  else

  {

    echo" No data";

  }?>

              
               

                
               
            </div>
             
         </div>
      </section>
      <!--//Gallery-->
      <!--footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row ">
               <div class="dance-agile-info col-lg-6 col-md-6 col-sm-6 ">
                  <h4 class="pb-lg-3 pb-3"><a href="index.html">MiM Dance Academy</a></h4>
                  <div class="bottom-para pb-sm-3 pb-2">
                     <p> 
                     The vision of the Music in Motion Dance Academy has been to offer platforms to aspiring and deserving local artists and to brush their talent to keep them growing to reach their full potential and help them live their dreams. In the initial phase itself, the academy has bagged numerous achievements under its belt and the founder believes that “the academy will aspire to grow and showcase our talents at the national & international level in future”
                     </p>
                  </div>
                  <div class="bottom-social pt-2">
                     <ul>  <li>
                        <a href="https://api.whatsapp.com/send?phone=+918918212479">
                        <span class="fab fa-whatsapp"></span>
                        </a>
                        </li>
                        <li>
                           <a href="https://www.facebook.com/musicinmotiondanceacademy?mibextid=LQQJ4d">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.google.com/localservices/prolist?spp=Cg0vZy8xMWpsbnNwbjJx&scp=CgAaHU1VU0lDIElOIE1PVElPTiBEQU5DRSBBQ0FERU1ZKh1NVVNJQyBJTiBNT1RJT04gREFOQ0UgQUNBREVNWQ%3D%3D&q=MUSIC+IN+MOTION+DANCE+ACADEMY&src=2&slp=UhUIARIREg8iDS9nLzExamxuc3BuMnE">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/musicinmotion77/?igshid=YmMyMTA2M2Y%3D">
                           <span class="fab fa-instagram"></span>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.youtube.com/@musicinmotion6391">
                           <span class="fab fa-youtube"></span>
                           </a>
                        </li>

                      
                     </ul>
                  </div>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <h4 class="pb-lg-3 pb-3">Website Links</h4>
                  <nav class="border-line">
                     <ul class="nav flex-column">
                                              <li class="nav-item">
                           <a href="about" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                           <a href="class" class="nav-link">Class</a>
                        </li>
                        <li class="nav-item">
                           <a href="contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a href="gallery" class="nav-link ">Gallery</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <h4 class="pb-lg-3 pb-3">Usefull Links</h4>
                  <nav class="border-line">
                     <ul class="nav flex-column">
                     <li class="nav-item">
                           <a href="faculty" class="nav-link">Faculty</a>
                        </li>
                        <li class="nav-item">
                           <a href="summer" class="nav-link">Summer Dance Camp</a>
                        </li>
                        <li class="nav-item">
                           <a href="winter" class="nav-link">Winter Dance Camp</a>
                        </li>
                        <li class="nav-item">
                           <a href="store" class="nav-link">Store</a>
                        </li>
                     </ul>
                  </nav>
               </div>
              
            </div>
         </div>
         <div class="copy-agile-right text-center text-white py-2">
            <p> 
               © 2023 Music in Motion Dance Academy
            </p>
         </div>
      </footer>
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- gallery -->
      <script src="js/lightbox-plus-jquery.min.js"></script>
      <!-- //gallery -->
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