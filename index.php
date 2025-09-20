<?php
$title = "Mim Dance Academy";
require_once 'include/header.php'; ?>
<br><br><br>
<section>
<div data-aos="fade-down"  data-aos-duration="1000">
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">

                  <?php
                    $sql = "select * from mainslider ORDER BY id DESC LIMIT 8";
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

                          $sql = "select * from mainslider ORDER BY id DESC LIMIT 15";

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

                              <div class="text-center">
         <div class="outs-agile-buttn mt-lg-3 mt-2">
         <a href="https://forms.gle/j4pdq6c4mpSUvvoF6" target="_blank" >Register Now !</a>
                     </div></div>
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
  <div class="col-sm-6">
    <div class="card">
     <a  href="tel:+918918212479" style="font-weight: bolder;"><img src="files/Images/h.gif" class="img-fluid" alt="Cal Us"></a>


  </div>

</div>
<div class="col-sm-6">
    <div class="card">
    <a href="https://api.whatsapp.com/send?phone=+918918212479"  style="font-weight: bolder;"><img src="files/Images/w.png" class="img-fluid" alt="Cal Us"></a>


  </div>

</div>
</div></section>
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="agile-abt-info text-center">
               <h2>What Makes MIM Different?
               </h2>
            </div >

            <p class="text-justify" color="black">How many times a dance teacher has told you that you need to work on your basics like it's the magic button that will suddenly make you a better dancer?
<br>The truth is that basic moves are overrated and most of the time they don't contribute to your growth as a dancer.
Don't get us wrong having a strong foundation as a dancer is extremely important but unfortunately, most dance teachers only focus on the technical aspect of dancing, and very few are teaching the psychological element of dancing...
We believe dancing is 70% mental and 30% physical you can know all the moves and techniques in the world if your mindset is not right you don't stand a chance in the dance industry.
<br><br><strong>That's why MIM Dance Academy is different not only do we dive deep into the technical aspect of freestyle dancing, but we also equip you with the mental toughness needed to make a name for yourself in the dance industry.
</strong>  </p>

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
                        Gymnastics is a type of sport that includes physical exercises requiring balance, strength, flexibility, agility, coordination, artistry and endurance. The movements involved in gymnastics contribute to the development of the arms, legs, shoulders, back, chest, and abdominal&nbsp;muscle&nbsp;groups.</p>
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
         </div><div class="text-center">
         <div class="outs-agile-buttn mt-lg-3 mt-2">
         <a href="https://forms.gle/j4pdq6c4mpSUvvoF6" target="_blank" >Click here to Register in our Events</a>
                     </div></div>
      </section>

      <section>
         <div class="container-fluid text-center">
            <div class="row abt-inner-agile">
               <div class="col-lg-6 col-md-6 two-abut-inner-right">
               <div class="agile-abt-info text-center">
               <h2>Latest achievements
               </h2>
            </div >
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
               <div class="col-lg-6 col-md-6 two-abut-inner-right">
               <div class="agile-abt-info text-center">
               <h2>Youtube Event
               </h2>
            </div >
               <div class="embed-responsive embed-responsive-16by9">
       <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0SvwQVk5XF4?si=fC9m_s5ocu9wJ7EL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>               </div>
            </div>
         </div>
      </section>
      <!--//about -->
      <!--slider-img-->




      <section class="side-img py-lg-4 py-md-3 py-sm-3 py-3" data-aos="fade-right">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">

            <div class="jst-must-info pt-lg-4 pt-md-3 pt-3">
               <div class="stats-info row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-1">
                     <div class="counter">450</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Students Certified</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-2">
                     <div class="counter">700</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Students Offline
</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-3">
                     <div class="counter">8</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Faculties&nbsp;
</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-4">
                     <div class="counter">18</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Events</h4>
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
                     <img src="files/Images/4.PNG"  class="rounded-circle" width="100">

                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">

                        <p style="color: wheat;"> Each will get a chance to participate in any kind of reality show local and National.</p>
                     </div>
                  </div>
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                     <img src="files/Images/3.PNG" class="rounded-circle" width="100">
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                     <p style="color: wheat;">
                     Best students of music in motion will get a chance featured in music videos.</p>

                     </div>
                  </div>
                  <div class="row service-agile-shadow mb-lg-5 mb-md-4 mb-3">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                     <img src="files/Images/2.PNG" class="rounded-circle" width="100">
                     </div>
                     <div class="col-md-10 col-sm-9 col-9 service-info-list-agile">
                     <p style="color: wheat;"> Chance to teach at schools as a part of the MIM company</p>
</div>
                  </div>
                  <div class="row service-agile-shadow ">
                     <div class=" col-md-2 col-sm-3 col-3 ser-icon-left">
                     <img src="files/Images/1.PNG" class="rounded-circle" width="100">
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

<!-- NEW SECTION FOR STORE ITEMS -->
<section class="py-lg-4 py-md-3 py-sm-3 py-3" style="background: #f8f9fa;">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-3">Explore Our Initiatives</h3>

        <div class="row">
            <?php
            // Fetch up to 3 items from the 'serv' table
            if (isset($connect)) {
                $sql_serv_items = "SELECT title, description, imageurl FROM serv ORDER BY Id DESC LIMIT 3";
                $result_serv_items = mysqli_query($connect, $sql_serv_items);

                if (mysqli_num_rows($result_serv_items) > 0) {
                    while ($row_serv = mysqli_fetch_assoc($result_serv_items)) {
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <img class="card-img-top p-3" src="<?php echo htmlspecialchars($row_serv['imageurl']); ?>" alt="<?php echo htmlspecialchars($row_serv['title']); ?> QR Code" style="height: 200px; object-fit: contain;">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-success"><?php echo htmlspecialchars($row_serv['title']); ?></h5>
                                    <p class="card-text text-muted"><?php echo htmlspecialchars(substr($row_serv['description'], 0, 100)); // Truncate description for homepage ?>...</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="col-12"><p class="text-center text-muted">No initiatives to display yet. Check back soon!</p></div>';
                }
            } else {
                echo '<div class="col-12"><p class="text-danger text-center">Database connection error for initiatives.</p></div>';
            }
            ?>
        </div>

        <div class="text-center mt-4">
            <a href="serv" class="btn btn-primary btn-lg">View All Initiatives</a>
        </div>
    </div>
</section>
<!-- END NEW SECTION FOR STORE ITEMS -->
<!-- NEW SECTION FOR STORE PRODUCTS -->
<section class="py-lg-4 py-md-3 py-sm-3 py-3" style="background: #ffffff;">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-3">Our Latest Products</h3>

        <div class="row">
            <?php
            // Fetch up to 3 products from the 'store' table
            // Ensure $connect is established from include/db.php or similar
            if (isset($connect)) {
                $sql_store_items = "SELECT Id, ImageUrl, Title, Description, Price FROM store ORDER BY Id DESC LIMIT 4";
                $result_store_items = mysqli_query($connect, $sql_store_items);

                if (mysqli_num_rows($result_store_items) > 0) {
                    while ($row_store = mysqli_fetch_assoc($result_store_items)) {
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 shadow-sm product-card-home">
                                <img class="card-img-top p-3" src="<?php echo htmlspecialchars($row_store['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row_store['Title']); ?>" style="height: 250px; object-fit: contain;">
                                <div class="card-body text-center">
                                    <h5 class="card-title product-title-home"><?php echo htmlspecialchars($row_store['Title']); ?></h5>
                                    <p class="product-price-home">₹<?php echo htmlspecialchars(number_format($row_store['Price'], 2)); ?></p>
                                    <a href="store#productModal<?php echo $row_store['Id']; ?>" class="btn btn-primary btn-sm mt-3 view-product-btn">View Product</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="col-12"><p class="text-center text-muted">No products available yet. Check back soon!</p></div>';
                }
            } else {
                echo '<div class="col-12"><p class="text-danger text-center">Database connection error for products.</p></div>';
            }
            ?>
        </div>

        <div class="text-center mt-4">
            <a href="store" class="btn btn-primary btn-lg">View All Products</a>
        </div>
    </div>
</section>
<!-- END NEW SECTION FOR STORE PRODUCTS -->

<style>
    /* Custom styles for the homepage store section */
    .product-card-home {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
    }

    .product-card-home:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .product-card-home .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        background-color: #f5f5f5; /* Light background for product images */
    }

    .product-title-home {
        font-weight: 600;
        font-size: 1.2rem;
        color: #343a40;
        margin-bottom: 0.5rem;
    }

    .product-price-home {
        font-size: 1.4rem;
        font-weight: 700;
        color: #7b68ee; /* Primary color from your store styles */
        margin-top: 0.5rem;
        margin-bottom: 1rem;
    }

    .view-product-btn {
        background-color: #7b68ee; /* Primary color */
        border-color: #7b68ee;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .view-product-btn:hover {
        background-color: #5d48d0; /* Slightly darker purple on hover */
        border-color: #5d48d0;
    }
</style>

      <section style="background-color: black;">


    <div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h3 class="title text-left clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Fee Structure</h3>
     </div>
      <div class="card-deck text-center">
      <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Monthly <br>All Style Dance Class</strong></h4>
          </div>
          <div class="card-body" style="background: #fb6509;">
          <p class="card-title">₹ 2k Monthly <br>
₹ 3k One Time Registration </p>

          <ul class="list-unstyled mt-3 mb-4" style="color: white; font-weight: 500;">
              <li>Saturday-Sunday</li>
              <li>2 Days in a Week</li>
              <li>8 Days in a Month</li>




            </ul>
            <a  button type="button" class="btn btn-lg btn-block btn-outline-light" href="files/Images/all.PNG"> Download </a>

         </div>
        </div><div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Monthly <br>Classical Class</strong></h4>
          </div>
          <div class="card-body" style="background: #fb6509;">
          <p class="card-title">₹ 1.5k Monthly <br>
₹ 2.5k One Time Registration </p>

          <ul class="list-unstyled mt-3 mb-4" style="color: white; font-weight: 500;">
              <li>Saturday-Sunday</li>
              <li>2 Days in a Week</li>
              <li>8 Days in a Month</li>




            </ul>
            <a  button type="button" class="btn btn-lg btn-block btn-outline-light" href="files/Images/all.PNG"> Download </a>
        </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Monthly <br>Gymnastics Class</strong></h4>
          </div>
          <div class="card-body" style="background: #fb6509;">
          <p class="card-title">₹2k Monthly <br>
₹3k One Time Registration </p>

          <ul class="list-unstyled mt-3 mb-4" style="color: white; font-weight: 500;">
              <li>Saturday-Sunday</li>
              <li>2 Days in a Week</li>
              <li>8 Days in a Month</li>
              <li>Thu-Sun 4 DAYS in a week (Monthly ₹ 3k) 16 days in a month</li>




            </ul>
            <a  button type="button" class="btn btn-lg btn-block btn-outline-light" href="files/Images/gym.JPG"> Download </a>
        </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Customized</strong></h4>
          </div>
          <div class="card-body" style="background: #fb6509;">


          <ul class="list-unstyled mt-3 mb-4" style="color: white; font-weight: 500;">
              <li>Monthly</li>
              <li>Quarterly</li>
              <li>Half Yearly</li>
                <li>Annually </li>
                <li>All Package Availabe </li>




            </ul>
            <a  button type="button" class="btn btn-lg btn-block btn-outline-light" href="files/Images/all.PNG"> Download </a>
        </div>
        </div>
        </div>  </div>
</section>

      <!--schedual-->
      <section class="schedule py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3 text-center" >
            <h3 class="title text-right clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Schedule Program</h3>
            <img src="files/Images/routine.png" class="img-thumbnail img-fluid" alt="Mim Dance Academy Sikkim">

         </div>
      </section>
      <!--//schedual-->



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