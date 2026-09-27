<?php
$title = "Mim Dance Academy";
require_once 'include/header.php'; ?>

<style>
/* ============================================================
   MIM DANCE ACADEMY — Material-inspired design system
   Extends the brass / wine / stage-black palette set in header.php
   ============================================================ */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

:root {
    --surface-dark: #121212;
    --surface-dark-2: #1A1A1A;
    --surface-light: #FAF7F1;
    --surface-card: #1E1E1E;
    --on-dark: #F2ECE1;
    --on-dark-dim: rgba(242,236,225,0.72);
    --on-light: #1A1613;
    --on-light-dim: rgba(26,22,19,0.65);

    --radius-sm: 6px;
    --radius-md: 12px;
    --radius-lg: 20px;

    --elev-1: 0 1px 3px rgba(0,0,0,0.3), 0 1px 2px rgba(0,0,0,0.22);
    --elev-2: 0 4px 10px rgba(0,0,0,0.35), 0 2px 4px rgba(0,0,0,0.22);
    --elev-3: 0 10px 26px rgba(0,0,0,0.4), 0 4px 8px rgba(0,0,0,0.24);
    --elev-hover: 0 18px 34px rgba(0,0,0,0.45), 0 6px 12px rgba(0,0,0,0.28);
}

.mim-page, .mim-page p, .mim-page li, .mim-page h1, .mim-page h2,
.mim-page h3, .mim-page h4, .mim-page h5, .mim-page h6 {
    font-family: 'Roboto', 'Montserrat', sans-serif;
}

.mim-hero-spacer { height: 92px; }

/* ---------- Section headings ---------- */
.mim-heading { text-align: center; margin-bottom: 2.5rem; }
.mim-heading h2 {
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700;
    letter-spacing: -0.02em;
    margin-bottom: 0.6rem;
}
.mim-heading .mim-rule {
    width: 56px;
    height: 3px;
    margin: 0 auto;
    background: linear-gradient(90deg, var(--brass), var(--wine));
    border-radius: 2px;
}
.mim-heading.mim-left { text-align: left; }
.mim-heading.mim-left .mim-rule { margin: 0; }
.mim-heading.mim-light h2 { color: var(--on-light); }
.mim-heading.mim-dark h2 { color: var(--on-dark); }

/* ---------- Carousel / hero ---------- */
#myCarousel .carousel-item img { filter: brightness(0.72); }
#myCarousel .carousel-caption {
    left: 6%; right: 6%; bottom: 12%;
    text-align: left;
    background: none;
}
#myCarousel .carousel-caption h5 {
    font-size: clamp(1.6rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--on-dark);
    text-shadow: 0 2px 12px rgba(0,0,0,0.6);
    max-width: 620px;
}
#myCarousel .carousel-caption p {
    font-size: 1.05rem;
    color: var(--on-dark-dim);
    max-width: 520px;
    text-shadow: 0 1px 6px rgba(0,0,0,0.5);
}
.carousel-indicators li {
    background-color: rgba(242,236,225,0.4);
    border-radius: 50%;
    width: 8px; height: 8px;
}
.carousel-indicators .active {
    background-color: var(--brass);
    width: 22px; border-radius: 4px;
}

/* ---------- Buttons ---------- */
.mim-btn {
    display: inline-block;
    background: var(--brass);
    color: var(--stage-black) !important;
    font-weight: 700;
    font-size: 0.9rem;
    letter-spacing: 0.3px;
    padding: 12px 30px;
    border-radius: var(--radius-sm);
    box-shadow: var(--elev-2);
    text-decoration: none !important;
    transition: box-shadow 0.25s ease, transform 0.25s ease, background 0.25s ease;
}
.mim-btn:hover {
    box-shadow: var(--elev-hover);
    transform: translateY(-2px);
    background: var(--brass-bright);
    color: var(--stage-black) !important;
}
.mim-btn-outline {
    background: transparent;
    color: var(--on-dark) !important;
    border: 1.5px solid rgba(242,236,225,0.4);
    box-shadow: none;
}
.mim-btn-outline:hover {
    border-color: var(--brass);
    color: var(--brass-bright) !important;
    background: rgba(201,147,46,0.08);
    box-shadow: none;
    transform: translateY(-2px);
}
.outs-agile-buttn { text-align: left; }
.outs-agile-buttn a { }

/* ---------- Quick contact ---------- */
.mim-contact-row { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
.mim-contact-card {
    background: var(--surface-card);
    border-radius: var(--radius-lg);
    box-shadow: var(--elev-2);
    padding: 22px;
    max-width: 320px;
    width: 100%;
    transition: box-shadow 0.25s ease, transform 0.25s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.mim-contact-card:hover { box-shadow: var(--elev-hover); transform: translateY(-4px); }
.mim-contact-card img { max-width: 100%; border-radius: var(--radius-md); }

/* ---------- Philosophy / about text ---------- */
.mim-philosophy {
    background: var(--surface-light);
    border-radius: var(--radius-lg);
    box-shadow: var(--elev-1);
    padding: clamp(24px, 5vw, 56px);
    max-width: 900px;
    margin: 0 auto;
}
.mim-philosophy p {
    color: var(--on-light-dim);
    font-size: 1.05rem;
    line-height: 1.8;
}
.mim-philosophy strong { color: var(--wine); }

/* ---------- Feature cards ---------- */
.mim-feature-card {
    background: var(--surface-light);
    border-radius: var(--radius-lg);
    box-shadow: var(--elev-1);
    padding: 34px 26px;
    height: 100%;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.mim-feature-card:hover { box-shadow: var(--elev-hover); transform: translateY(-6px); }
.mim-feature-card img {
    border: 3px solid var(--brass);
    padding: 4px;
}
.mim-feature-card h4 {
    font-weight: 700;
    margin: 18px 0 10px;
    color: var(--on-light);
}
.mim-feature-card p { color: var(--on-light-dim); font-size: 0.95rem; }

/* ---------- Upcoming events gallery ---------- */
#flexiselDemo1 { list-style: none; padding: 0; }
#flexiselDemo1 .agileinfo_port_grid {
    border-radius: var(--radius-md);
    overflow: hidden;
    box-shadow: var(--elev-1);
    transition: box-shadow 0.25s ease, transform 0.25s ease;
}
#flexiselDemo1 .agileinfo_port_grid:hover { box-shadow: var(--elev-hover); transform: translateY(-4px); }
#flexiselDemo1 img { transition: transform 0.4s ease; }
#flexiselDemo1 .agileinfo_port_grid:hover img { transform: scale(1.06); }

/* ---------- Achievements + video ---------- */
.mim-media-card {
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--elev-2);
}
#myCarouselw .carousel-caption h5 {
    background: rgba(10,10,10,0.6);
    display: inline-block;
    padding: 6px 16px;
    border-radius: var(--radius-sm);
    font-size: 1rem;
}

/* ---------- Stats ---------- */
.stats-info { gap: 16px 0; }
.stats-grid {
    background: var(--surface-light);
    border-radius: var(--radius-md);
    box-shadow: var(--elev-1);
    margin: 8px;
    padding: 26px 10px;
    transition: box-shadow 0.25s ease, transform 0.25s ease;
}
.stats-grid:hover { box-shadow: var(--elev-hover); transform: translateY(-4px); }
.stats-grid .counter {
    font-size: 2.6rem;
    font-weight: 900;
    color: var(--wine);
    line-height: 1;
}
.stats-grid h4 {
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--on-light-dim);
    margin-top: 8px;
    text-transform: none;
}

/* ---------- Opportunities / service list ---------- */
.service-agile-shadow {
    background: var(--surface-dark-2);
    border-radius: var(--radius-md);
    box-shadow: var(--elev-1);
    padding: 16px;
    align-items: center;
    transition: box-shadow 0.25s ease, transform 0.25s ease;
}
.service-agile-shadow:hover { box-shadow: var(--elev-hover); transform: translateX(6px); }
.ser-icon-left img {
    border-radius: 50%;
    border: 2px solid var(--brass);
    padding: 3px;
}
.service-info-list-agile p { color: var(--on-dark-dim) !important; margin-bottom: 0; }
.wthree-left-img-ser img { border-radius: var(--radius-lg); box-shadow: var(--elev-2); }

/* ---------- Store / initiatives cards ---------- */
.mim-store-card, .product-card-home {
    border: none;
    border-radius: var(--radius-lg);
    box-shadow: var(--elev-1);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    background-color: #fff;
    height: 100%;
}
.mim-store-card:hover, .product-card-home:hover {
    transform: translateY(-6px);
    box-shadow: var(--elev-hover);
}
.mim-store-card .card-img-top, .product-card-home .card-img-top {
    border-top-left-radius: var(--radius-lg);
    border-top-right-radius: var(--radius-lg);
    background-color: #F4F0E8;
}
.product-title-home { font-weight: 700; font-size: 1.1rem; color: var(--on-light); margin-bottom: 0.4rem; }
.product-price-home { font-size: 1.3rem; font-weight: 900; color: var(--wine); margin: 6px 0 14px; }
.view-product-btn, .mim-view-btn {
    background: var(--brass) !important;
    border-color: var(--brass) !important;
    color: var(--stage-black) !important;
    font-weight: 700;
    border-radius: var(--radius-sm);
    transition: background 0.25s ease, border-color 0.25s ease;
}
.view-product-btn:hover, .mim-view-btn:hover {
    background: var(--brass-bright) !important;
    border-color: var(--brass-bright) !important;
}

/* ---------- Fee structure ---------- */
.mim-price-card {
    background: var(--surface-card);
    border: none;
    border-radius: var(--radius-lg);
    box-shadow: var(--elev-2);
    overflow: hidden;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.mim-price-card:hover { box-shadow: var(--elev-hover); transform: translateY(-6px); }
.mim-price-card .card-header {
    background: transparent;
    border-bottom: 1px solid rgba(242,236,225,0.12);
    padding: 20px 18px;
}
.mim-price-card .card-header h4 {
    color: var(--on-dark);
    font-size: 1.05rem;
}
.mim-price-card .card-body { background: var(--surface-card) !important; padding: 24px 20px; }
.mim-price-card .card-title {
    color: var(--brass-bright);
    font-weight: 700;
    font-size: 1.1rem;
}
.mim-price-card ul li { color: var(--on-dark-dim) !important; padding: 3px 0; }
.mim-price-btn {
    display: block;
    text-align: center;
    background: transparent;
    border: 1.5px solid var(--brass);
    color: var(--brass-bright) !important;
    font-weight: 600;
    padding: 10px;
    border-radius: var(--radius-sm);
    text-decoration: none !important;
    transition: background 0.25s ease, color 0.25s ease;
}
.mim-price-btn:hover { background: var(--brass); color: var(--stage-black) !important; }

/* ---------- Schedule ---------- */
.mim-schedule-frame {
    display: inline-block;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--elev-2);
    max-width: 100%;
}

/* ---------- Testimonials ---------- */
.client-img {
    background: var(--surface-card);
    border-radius: var(--radius-lg);
    box-shadow: var(--elev-2);
    padding: 40px 24px;
    max-width: 640px;
    margin: 0 auto;
}
.client-img img {
    border-radius: 50%;
    border: 3px solid var(--brass);
    padding: 3px;
}
.client-matter p {
    font-size: 1.05rem;
    font-style: italic;
    max-width: 480px;
    margin: 0 auto;
}
.client-matter h6 { color: var(--brass-bright) !important; font-weight: 700; }
</style>

<div class="mim-page">
<div class="mim-hero-spacer"></div>

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
                              <h5><?php echo $row['Title']; ?></h5>
                              <p class="pt-3"><?php echo $row['Description']; ?></p>

                              <div class="text-left">
         <div class="outs-agile-buttn mt-lg-3 mt-2">
         <a class="mim-btn" href="https://forms.gle/j4pdq6c4mpSUvvoF6" target="_blank" >Register Now !</a>
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

<section class="about py-lg-4 py-md-3 py-sm-3 py-3" data-aos="zoom-in-up" data-aos-once="true" id="about" style="background: black;">
         <div class="container ">
              <div class="mim-contact-row">
                <div class="mim-contact-card">
                    <a href="tel:+918918212479" style="font-weight: bolder;"><img src="files/Images/h.gif" class="img-fluid" alt="Call Us"></a>
                </div>
                <div class="mim-contact-card">
                    <a href="https://api.whatsapp.com/send?phone=+918918212479" style="font-weight: bolder;"><img src="files/Images/w.png" class="img-fluid" alt="WhatsApp Us"></a>
                </div>
              </div>
         </div>
</section>

      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="mim-heading mim-light">
               <h2>What Makes MIM Different?</h2>
               <div class="mim-rule"></div>
            </div>

            <div class="mim-philosophy">
            <p>How many times a dance teacher has told you that you need to work on your basics like it's the magic button that will suddenly make you a better dancer?
<br>The truth is that basic moves are overrated and most of the time they don't contribute to your growth as a dancer.
Don't get us wrong having a strong foundation as a dancer is extremely important but unfortunately, most dance teachers only focus on the technical aspect of dancing, and very few are teaching the psychological element of dancing...
We believe dancing is 70% mental and 30% physical you can know all the moves and techniques in the world if your mindset is not right you don't stand a chance in the dance industry.
<br><br><strong>That's why MIM Dance Academy is different not only do we dive deep into the technical aspect of freestyle dancing, but we also equip you with the mental toughness needed to make a name for yourself in the dance industry.
</strong></p>
            </div>

            <div class="row agile-info-grid pt-lg-4 pt-md-4 pt-3">
            <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
               <div class="mim-feature-card" data-aos="zoom-in" data-aos-delay="700" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                     <img src="files/Images/hip.PNG"  class="rounded-circle" width="150" alt="">
                     </div>
                     <div class="abt-sub-info">
                        <h4>All style dance training</h4>
                        <p class="text-justify">
                        Hip-hop dance is one of the most popular styles of dance today—using high energy, dynamic moves set to today's current music. Hip-hop dancing is a great way to get started in dance for those who just want to have fun.</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a class="mim-btn mim-btn-outline" href="class">Learn more</a>
                     </div>
                  </div>
               </div>
            <div class="col-lg-4 col-md-4 w3layouts-abut-list text-center">
                  <div class="mim-feature-card" data-aos="zoom-in" data-aos-delay="500" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                        <img src="files/Images/gym.PNG"  class="rounded-circle" width="150" alt="">
                      </div>
                     <div class="abt-sub-info">
                        <h4>Gymnastics</h4>
                        <p class="text-justify">
                        Gymnastics is a type of sport that includes physical exercises requiring balance, strength, flexibility, agility, coordination, artistry and endurance. The movements involved in gymnastics contribute to the development of the arms, legs, shoulders, back, chest, and abdominal&nbsp;muscle&nbsp;groups.</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a class="mim-btn mim-btn-outline" href="class">Learn more</a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-4  w3layouts-abut-list text-center">
               <div class="mim-feature-card" data-aos="zoom-in" data-aos-delay="900" data-aos-once="true" >
                     <div class="abut-wls-gride-dance">
                     <img src="files/Images/sa.png" class="rounded-circle" width="150" alt="">
                     </div>
                     <div class="abt-sub-info">
                        <h4>Semi-Classical Dance</h4>
                        <p class="text-justify">
The art of semi classical dance is a very interesting topic. It's a type of dance that has some similarities to classical but also incorporates elements from modern and folk dances. Semi-classical dance is a term that refers to an amalgamation of classical and contemporary styles.</p>
                     </div>
                     <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a class="mim-btn mim-btn-outline" href="class">Learn more</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="slid-img">
         <div class="mim-heading mim-light">
               <h2>Upcoming Events</h2>
               <div class="mim-rule"></div>
            </div>
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
         <a class="mim-btn" href="https://forms.gle/j4pdq6c4mpSUvvoF6" target="_blank" >Click here to Register in our Events</a>
                     </div></div>
      </section>

      <section>
         <div class="container-fluid text-center">
            <div class="row abt-inner-agile">
               <div class="col-lg-6 col-md-6 two-abut-inner-right">
               <div class="mim-heading mim-light">
               <h2>Latest achievements</h2>
               <div class="mim-rule"></div>
            </div>
               <div class="">

<div class="position-relative">

<div id="myCarouselw" class="carousel slide carousel-fade mim-media-card" data-ride="carousel">

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

<h5><?php echo $row['Title']; ?></h5>

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
               <div class="mim-heading mim-light">
               <h2>Youtube Event</h2>
               <div class="mim-rule"></div>
            </div>
               <div class="embed-responsive embed-responsive-16by9 mim-media-card">
       <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0SvwQVk5XF4?si=fC9m_s5ocu9wJ7EL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>               </div>
            </div>
         </div>
      </section>

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
                        <h4>Students Offline</h4>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid stats-grid-3">
                     <div class="counter">8</div>
                     <div class="stat-info py-lg-4 py-md-3 py-sm-3 py-3">
                        <h4>Faculties&nbsp;</h4>
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

      <section class="service py-lg-4 py-md-3 py-sm-3 py-3" style="background:black" >
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="mim-heading mim-dark mim-left">
               <h2>Opportunities</h2>
               <div class="mim-rule"></div>
            </div>
            <p class="text-justify" style="color: wheat;">THE MIM Dance Academy is dedicated to all dancers of any style the formation is designed in such a way that you can find value in it regardless of your dance level.

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

<section class="py-lg-4 py-md-3 py-sm-3 py-3" style="background: var(--surface-light);">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <div class="mim-heading mim-light">
           <h2>Explore Our Initiatives</h2>
           <div class="mim-rule"></div>
        </div>

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
                            <div class="mim-store-card card">
                                <img class="card-img-top p-3" src="<?php echo htmlspecialchars($row_serv['imageurl']); ?>" alt="<?php echo htmlspecialchars($row_serv['title']); ?> QR Code" style="height: 200px; object-fit: contain;">
                                <div class="card-body text-center">
                                    <h5 class="product-title-home"><?php echo htmlspecialchars($row_serv['title']); ?></h5>
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
    </div>
</section>

<section class="py-lg-4 py-md-3 py-sm-3 py-3" style="background: #ffffff;">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <div class="mim-heading mim-light">
           <h2>Our Latest Products</h2>
           <div class="mim-rule"></div>
        </div>

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
                        <div class="col-lg-3 col-md-3 mb-4">
                            <div class="mim-store-card card">
                                <img class="card-img-top p-3" src="<?php echo htmlspecialchars($row_store['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row_store['Title']); ?>" style="height: 250px; object-fit: contain;">
                                <div class="card-body text-center">
                                    <h5 class="product-title-home"><?php echo htmlspecialchars($row_store['Title']); ?></h5>
                                    <p class="product-price-home">₹<?php echo htmlspecialchars(number_format($row_store['Price'], 2)); ?></p>
                                    <a href="store#productModal<?php echo $row_store['Id']; ?>" class="btn btn-sm mt-3 mim-view-btn">View Product</a>
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
    </div>
</section>

      <section style="background-color: black;">


    <div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <div class="mim-heading mim-dark">
         <h2>Fee Structure</h2>
         <div class="mim-rule"></div>
      </div>
     </div>
      <div class="card-deck text-center">
      <div class="mim-price-card card mb-4">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Monthly <br>All Style Dance Class</strong></h4>
          </div>
          <div class="card-body">
          <p class="card-title">₹ 2k Monthly <br>
₹ 3k One Time Registration </p>

          <ul class="list-unstyled mt-3 mb-4">
              <li>Saturday-Sunday</li>
              <li>2 Days in a Week</li>
              <li>8 Days in a Month</li>
            </ul>
            <a class="mim-price-btn" href="files/Images/all.PNG"> Download </a>

         </div>
        </div><div class="mim-price-card card mb-4">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Monthly <br>Classical Class</strong></h4>
          </div>
          <div class="card-body">
          <p class="card-title">₹ 1.5k Monthly <br>
₹ 2.5k One Time Registration </p>

          <ul class="list-unstyled mt-3 mb-4">
              <li>Saturday-Sunday</li>
              <li>2 Days in a Week</li>
              <li>8 Days in a Month</li>
            </ul>
            <a class="mim-price-btn" href="files/Images/all.PNG"> Download </a>
        </div>
        </div>
        <div class="mim-price-card card mb-4">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Monthly <br>Gymnastics Class</strong></h4>
          </div>
          <div class="card-body">
          <p class="card-title">₹2k Monthly <br>
₹3k One Time Registration </p>

          <ul class="list-unstyled mt-3 mb-4">
              <li>Saturday-Sunday</li>
              <li>2 Days in a Week</li>
              <li>8 Days in a Month</li>
              <li>Thu-Sun 4 DAYS in a week (Monthly ₹ 3k) 16 days in a month</li>
            </ul>
            <a class="mim-price-btn" href="files/Images/gym.JPG"> Download </a>
        </div>
        </div>
        <div class="mim-price-card card mb-4">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <strong>Customized</strong></h4>
          </div>
          <div class="card-body">

          <ul class="list-unstyled mt-3 mb-4">
              <li>Monthly</li>
              <li>Quarterly</li>
              <li>Half Yearly</li>
                <li>Annually </li>
                <li>All Package Availabe </li>
            </ul>
            <a class="mim-price-btn" href="files/Images/all.PNG"> Download </a>
        </div>
        </div>
        </div>  </div>
</section>

      <section class="schedule py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3 text-center" >
            <div class="mim-heading mim-light">
               <h2>Schedule Program</h2>
               <div class="mim-rule"></div>
            </div>
            <div class="mim-schedule-frame">
            <img src="files/Images/routine.png" class="img-fluid" alt="Mim Dance Academy Sikkim">
            </div>
         </div>
      </section>

<section class="testimonial py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="mim-heading mim-dark mim-left">
               <h2>Our Dancers Say</h2>
               <div class="mim-rule"></div>
            </div>
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

    <li data-target="#carouselExampleControls" data-slide-to="<?=$i;?>" class="<?=$active;?>"></li>

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
                     <img class="img-fluid" src="<?php echo $row['ImageUrl']; ?>" width="90" alt="MIm Dance">
                     <div class="client-matter py-lg-4 py-md-3 py-3">
                        <p>"<?php echo $row['Message']; ?>"</p>
                        <h6 class="pt-lg-3 pt-2"><?php echo $row['Name']; ?></h6>
                        <p style="color: var(--on-dark-dim); font-style: normal; font-size: 0.9rem;"><?php echo $row['Designation']; ?></p>
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
</div>
      <?php require_once 'include/footer.php';?>