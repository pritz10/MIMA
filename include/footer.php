 <!--footer -->
 <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row ">
               <div class="dance-agile-info col-lg-6 col-md-6 col-sm-6 ">
                  <h4 class="pb-lg-3 pb-3"><a href="index.html">MiM Dance Academy</a></h4>
                  <div class="bottom-para pb-sm-3 pb-2">
                     <p>Music in Motion Dance Academy</p>
                  </div>
                  <div class="bottom-social pt-2">
                     <ul>
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
                  <h4 class="pb-lg-3 pb-3">Usefull Links</h4>
                  <nav class="border-line">
                     <ul class="nav flex-column">
                        <li class="nav-item active">
                           <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a href="about" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                           <a href="class" class="nav-link">Class</a>
                        </li>
                       
                     </ul>
                  </nav>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <h4 class="pb-lg-3 pb-3">Usefull Links</h4>
                  <nav class="border-line">
                     <ul class="nav flex-column">
                         >
                        <li class="nav-item">
                           <a href="gallery" class="nav-link ">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a href="summer" class="nav-link">Summer</a>
                        </li>
                        <li class="nav-item">
                           <a href="winter" class="nav-link">Winter</a>
                        </li>
                        <li class="nav-item">
                           <a href="contact" class="nav-link">Contact</a>
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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <script>
         $(document).ready(function () {
            AOS.init();


$(window).on('load', function() {
  AOS.refresh();
});
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