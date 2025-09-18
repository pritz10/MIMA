<?php
$title = "Store";
require_once 'include/header.php'; ?>
<style>/* General Store Page Enhancements */
.container h3.title {
    font-family: 'Montserrat', sans-serif; /* Example: use a nicer font */
    font-size: 2.8em;
    color: #333; /* Darker text for main title */
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 50px !important;
    position: relative;
    padding-bottom: 15px;
}

.container h3.title::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background-color: #ff4500; /* A vibrant accent color */
    border-radius: 2px;
}

/* Card Styling and Animation */
.animated-card {
    border: none; /* Remove default card border */
    border-radius: 15px; /* Softer rounded corners */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* More pronounced shadow */
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Smooth transition for hover effects */
    overflow: hidden; /* Ensures rounded corners are respected */
    background-color: #fff; /* Ensure white background for cards */
}

.animated-card:hover {
    transform: translateY(-10px); /* Lifts the card slightly */
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}

.card-img-top.product-image {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    height: 300px; /* Fixed height for product images */
    object-fit: cover; /* Ensures images cover the area without distortion */
    transition: transform 0.3s ease-in-out; /* Zoom effect for image */
}

.animated-card:hover .product-image {
    transform: scale(1.05); /* Slightly zoom in the image on hover */
}

.card-body {
    padding: 25px;
    text-align: left; /* Align text to left within card body */
}

.card-title {
    font-family: 'Roboto Slab', serif; /* A more distinct font for titles */
    font-size: 1.6em;
    color: #444;
    margin-bottom: 15px;
    min-height: 55px; /* Ensure consistent height for titles */
}

.card-text {
    font-family: 'Open Sans', sans-serif;
    font-size: 0.95em;
    color: #666;
    line-height: 1.6;
    min-height: 120px; /* Ensure consistent height for descriptions */
}

/* Size Buttons */
.size-label {
    font-weight: bold;
    color: #555;
    display: block; /* Make it a block element for spacing */
    margin-bottom: 10px;
    font-size: 0.9em;
}

.btn-group .size-btn {
    border: 1px solid #ccc;
    color: #777;
    background-color: #f8f8f8;
    margin: 0 3px;
    border-radius: 5px;
    transition: all 0.2s ease-in-out;
}

.btn-group .size-btn:hover {
    background-color: #ff4500; /* Accent color on hover */
    color: #fff;
    border-color: #ff4500;
    transform: translateY(-2px);
}

/* Whatsapp Button */
.outs-agile-buttn {
    margin-top: 25px !important;
}

.whatsapp-btn {
    display: inline-block;
    background-color: #25D366; /* WhatsApp green */
    color: #fff !important;
    padding: 12px 25px;
    border-radius: 30px; /* Pill-shaped button */
    font-size: 1.1em;
    font-weight: bold !important;
    text-decoration: none;
    transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.whatsapp-btn:hover {
    background-color: #1DA851; /* Darker green on hover */
    transform: translateY(-3px); /* Lifts button on hover */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

/* Ensure the header and footer styles are compatible or adjust as needed */
/* For blanchedalmond text in breadcrumb */
.inner_breadcrumb ul.short_ls li {
    color: #eee !important; /* Lighter color for readability on dark banner */
}
.inner_breadcrumb ul.short_ls li a {
    color: #f8f8f8 !important; /* Lighter color for links */
}
.inner_breadcrumb ul.short_ls li span {
    color: #ddd !important;
}</style>
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
               <li style="color:blanchedalmond">Store</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--about--> 
      <br><br>
      <div class="container">
      <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Awesome Store!</h3>

      <div class="row text-center">

            <div class="col-md-4">
              <div class="card mb-4 box-shadow animated-card">
              <img class="card-img-top img-fluid product-image" src="files/Images/q.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Cozy Dance Hoodie</h5>
                  <p class="card-text">
                  Experience ultimate comfort with our premium dance hoodie! Crafted from high-quality, soft fabric, it's designed to keep you warm and cozy. Durable stitching and a fleece-lined hood ensure long-lasting comfort. Perfect for warm-ups or chilling out!</p>
              
              <br> <span class="size-label">Available in all sizes:</span>    <div class="btn-group">
 
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XS</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">S</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">M</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">L</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XL</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XXL</span></a>
</div>
                  <div class="outs-agile-buttn mt-lg-3 mt-2">
                  <a href="https://api.whatsapp.com/send?phone=+918918212479"  style="font-weight: bolder;" class="whatsapp-btn">Whatsapp Us Now!</a>
                     </div>
                </div>
              </div>
            </div>
            
            

            <div class="col-md-4">
              <div class="card mb-4 box-shadow animated-card">
              <img class="card-img-top img-fluid product-image" src="files/Images/r.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Stylish Comfort Hoodie</h5>
                  <p class="card-text">
                  Stay warm and look great with our stylish comfort hoodie! Made with premium, soft-touch materials, it's perfect for all seasons. Enjoy the luxurious feel and durable design, complete with a cozy fleece-lined hood for extra warmth on cooler days.</p>
              
              <br> <span class="size-label">Available in all sizes:</span>    <div class="btn-group">
 
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XS</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">S</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">M</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">L</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XL</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XXL</span></a>
</div>
                  <div class="outs-agile-buttn mt-lg-3 mt-2">
                  <a href="https://api.whatsapp.com/send?phone=+918918212479"  style="font-weight: bolder;" class="whatsapp-btn">Whatsapp Us Now!</a>
                     </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow animated-card">
              <img class="card-img-top img-fluid product-image" src="files/Images/t.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Performance Dance Tee</h5>
                  <p class="card-text">
                  Move freely and stay cool with our performance dance t-shirt! Made from high-quality, breathable fabric, it wicks away sweat to keep you comfortable and dry during even the most intense dance sessions. Your perfect partner for every move!</p>
              
              <br> <span class="size-label">Available in all sizes:</span>    <div class="btn-group">
 
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XS</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">S</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">M</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">L</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XL</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XXL</span></a>
</div>
                  <div class="outs-agile-buttn mt-lg-3 mt-2">
                  <a href="https://api.whatsapp.com/send?phone=+918918212479"  style="font-weight: bolder;" class="whatsapp-btn">Whatsapp Us Now!</a>
                     </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow animated-card">
              <img class="card-img-top img-fluid product-image" src="files/Images/s.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Lightweight Dance Top</h5>
                  <p class="card-text">
                  Embrace comfort and freedom with our lightweight dance top! Designed to keep you sweat-free and comfortable, this high-quality t-shirt is perfect for intense dance routines or casual wear. Stay fresh and focused throughout your dance season!</p>
              
              <br> <span class="size-label">Available in all sizes:</span>    <div class="btn-group">
 
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XS</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">S</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">M</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">L</span></a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XL</a>
 <a href="" class="btn btn-sm btn-outline-secondary size-btn">XXL</span></a>
</div>
                  <div class="outs-agile-buttn mt-lg-3 mt-2">
                  <a href="https://api.whatsapp.com/send?phone=+918918212479"  style="font-weight: bolder;" class="whatsapp-btn">Whatsapp Us Now!</a>
                     </div>
                </div>
              </div>
            </div>
            
          </div>
          </div>
      <?php require_once 'include/footer.php';?>