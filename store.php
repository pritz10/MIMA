<?php
$title = "Store";
require_once 'include/header.php';
 ?>
<style>/* General Body & Typography */
body {
    font-family: 'Poppins', sans-serif;
    color: #333;
    line-height: 1.6;
    background-color: #f8f9fa;
}

h1, h2, h3, h4, h5, h6 {
    font-weight: 600;
    color: #222;
}

a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
    text-decoration: none;
}

/* Hero Banner Section */
.hero-banner-store {
    position: relative;
    height: 450px; /* Adjust height as needed */
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://via.placeholder.com/1920x450/007bff/ffffff?text=Dancewear+Collection') no-repeat center center/cover; /* Replace with your actual image */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    margin-bottom: 50px;
    overflow: hidden; /* To contain potential image animations */
}

.hero-banner-store::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4); /* Dark overlay */
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    padding: 20px;
    animation: fadeInScale 1.2s ease-out forwards; /* Initial animation */
}

.hero-content h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #fff;
    letter-spacing: 1px;
}

.hero-content p {
    font-size: 1.25rem;
    margin-bottom: 30px;
    color: #e0e0e0;
}

.hero-button {
    background-color: #ff6f61; /* Vibrant call to action */
    color: #fff;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    border: none;
}

.hero-button:hover {
    background-color: #e65a4f;
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    color: #fff; /* Ensure text color remains white on hover */
}

/* Breadcrumb */
.breadcrumb-item a {
    color: #6c757d;
}
.breadcrumb-item.active {
    color: #333;
}

/* Section Headers */
.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #222;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
}

.section-title::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background-color: #007bff;
    border-radius: 2px;
}

.section-subtitle {
    color: #6c757d;
    margin-bottom: 40px;
    font-size: 1.1rem;
}

/* Product Card */
.product-card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
    background-color: #fff;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.product-image-wrapper {
    position: relative;
    overflow: hidden;
    height: 250px; /* Fixed height for consistent card size */
}

.product-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure images cover the area without distortion */
    transition: transform 0.5s ease;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.product-card:hover .product-image-wrapper img {
    transform: scale(1.08); /* Subtle zoom effect */
}

.product-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.4);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.4s ease, transform 0.4s ease;
    transform: translateY(100%); /* Start hidden below */
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.product-card:hover .product-overlay {
    opacity: 1;
    transform: translateY(0); /* Slide up on hover */
}

.btn-quick-view, .btn-add-to-cart {
    background: #fff;
    color: #333;
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    font-weight: 500;
    margin: 5px;
    opacity: 0; /* Hidden initially */
    transform: translateY(20px); /* Start slightly below */
    transition: all 0.3s ease 0.1s; /* Delay for staggered animation */
}

.product-card:hover .btn-quick-view {
    opacity: 1;
    transform: translateY(0);
}

.product-card:hover .btn-add-to-cart {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.2s; /* Staggered animation */
}

.btn-quick-view:hover, .btn-add-to-cart:hover {
    background: #f0f0f0;
    color: #007bff;
}


.card-body {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.product-title {
    font-weight: 700;
    font-size: 1.3rem;
    color: #222;
    margin-bottom: 10px;
}

.card-text {
    font-size: 0.95rem;
    color: #555;
    flex-grow: 1;
    margin-bottom: 15px;
}

.size-section {
    margin-top: auto; /* Pushes size and button to the bottom */
    margin-bottom: 15px;
}

.size-label {
    font-size: 0.85rem;
    font-weight: 500;
    margin-bottom: 8px;
    color: #6c757d;
}

.size-buttons .btn {
    border-radius: 5px;
    margin: 0 2px;
    padding: 5px 10px;
    font-size: 0.8rem;
    min-width: 40px; /* Ensure consistent button size */
    transition: all 0.2s ease;
    border: 1px solid #dee2e6;
    color: #555;
}

.size-buttons .btn:hover {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}
/* You might want to add a class '.active' for selected size */
.size-buttons .btn.active {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

.whatsapp-btn {
    background: #25D366; /* WhatsApp Green */
    border: none;
    border-radius: 50px;
    padding: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    transition: all 0.3s ease;
}

.whatsapp-btn i {
    margin-right: 8px;
    font-size: 1.2rem;
}

.whatsapp-btn:hover {
    background: #128C7E; /* Darker Green */
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    color: #fff; /* Ensure text color remains white on hover */
}

/* Quick View Modal */
.modal-content {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.modal-header {
    background-color: #007bff;
    color: #fff;
    border-bottom: none;
    padding: 15px 20px;
}

.modal-title {
    font-weight: 700;
}

.modal-header .close {
    color: #fff;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.modal-header .close:hover {
    opacity: 1;
}

.modal-body img {
    border-radius: 8px;
    margin-bottom: 15px;
}

/* Features Section */
.feature-item {
    padding: 30px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%; /* Ensure consistent height */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.feature-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.feature-icon {
    color: #007bff;
    font-size: 3rem;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.feature-item:hover .feature-icon {
    transform: scale(1.1); /* Icon pop effect */
}

.feature-item h5 {
    font-weight: 700;
    margin-bottom: 10px;
    color: #222;
}

.feature-item p {
    color: #555;
    text-align: center;
}

/* Keyframe Animations */
@keyframes fadeInScale {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive Adjustments */
@media (max-width: 991.98px) {
    .hero-content h1 {
        font-size: 2.8rem;
    }
    .hero-content p {
        font-size: 1.1rem;
    }
    .section-title {
        font-size: 2rem;
    }
    .product-card {
        margin-bottom: 30px;
    }
    .modal-dialog.modal-lg {
        max-width: 90%;
    }
}

@media (max-width: 767.98px) {
    .hero-banner-store {
        height: 350px;
    }
    .hero-content h1 {
        font-size: 2rem;
    }
    .hero-content p {
        font-size: 1rem;
    }
    .section-title {
        font-size: 1.8rem;
    }
    .feature-item {
        margin-bottom: 20px;
    }
    .whatsapp-btn {
        font-size: 0.9rem;
        padding: 10px;
    }
    .size-buttons .btn {
        padding: 4px 8px;
        min-width: 35px;
    }
}

/* Utilities (Optional, but good for common styles) */
.py-5 { padding-top: 3rem !important; padding-bottom: 3rem !important; }
.my-5 { margin-top: 3rem !important; margin-bottom: 3rem !important; }
.mb-5 { margin-bottom: 3rem !important; }
.text-center { text-align: center !important; }
.shadow-sm { box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; }
.h-100 { height: 100% !important; }
.flex-column { flex-direction: column !important; }
.d-flex { display: flex !important; }
.flex-grow-1 { flex-grow: 1 !important; }
.mt-auto { margin-top: auto !important; }</style>
<!-- Hero Banner for Store -->
<section class="hero-banner-store">
    <div class="hero-content">
        <h1>Discover Your Perfect Dancewear</h1>
        <p>Elevate your performance with our exquisite collection of dance apparel, designed for comfort, style, and durability.</p>
        <a href="#products-section" class="btn hero-button">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
    </div>
</section>


<!-- Breadcrumb -->
<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent px-0 mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Store</li>
        </ol>
    </nav>
</div>

<!-- Store Header -->
<section class="container my-5" id="products-section">
    <div class="text-center">
        <h2 class="section-title">Our Collection</h2>
        <p class="section-subtitle">Explore a world of premium dancewear tailored for every movement and style.</p>
    </div>
</section>

<!-- Products Section -->
<section class="container mb-5">
    <div class="row">
        <?php
        // Fetch products from the database
        // Assuming $connect is your database connection
        // Example: $sql = "SELECT * FROM store ORDER BY Id DESC";
        // $result = mysqli_query($connect, $sql);

        // Placeholder for demonstration
        $products = [
            ['Id' => 1, 'ImageUrl' => 'https://via.placeholder.com/400x400/FF6F61/ffffff?text=Dance+Dress', 'Title' => 'Elegant Ballet Dress', 'Description' => 'Perfect for ballet performances and practice. Soft, breathable fabric.'],
            ['Id' => 2, 'ImageUrl' => 'https://via.placeholder.com/400x400/007bff/ffffff?text=Jazz+Outfit', 'Title' => 'Dynamic Jazz Outfit', 'Description' => 'Flexible and stylish two-piece set for jazz and contemporary dance.'],
            ['Id' => 3, 'ImageUrl' => 'https://via.placeholder.com/400x400/28a745/ffffff?text=Yoga+Pants', 'Title' => 'Comfortable Yoga Pants', 'Description' => 'High-waisted, stretchable pants ideal for yoga, pilates, and light dance.'],
            ['Id' => 4, 'ImageUrl' => 'https://via.placeholder.com/400x400/6f42c1/ffffff?text=Lyrical+Top', 'Title' => 'Flowy Lyrical Top', 'Description' => 'Lightweight and airy top designed for graceful lyrical and contemporary movements.'],
            ['Id' => 5, 'ImageUrl' => 'https://via.placeholder.com/400x400/fd7e14/ffffff?text=Tap+Shoes', 'Title' => 'Professional Tap Shoes', 'Description' => 'High-quality tap shoes with excellent sound and durability. (Image is placeholder for apparel focus)'],
            ['Id' => 6, 'ImageUrl' => 'https://via.placeholder.com/400x400/dc3545/ffffff?text=HipHop+Gear', 'Title' => 'Urban Hip-Hop Gear', 'Description' => 'Loose-fit, comfortable attire for hip-hop and street dance styles.'],
        ];

        // Replace the above $products array with your actual database fetch loop:
        $result = false; // Set to false initially, then try to fetch from DB
        if (isset($connect)) { // Check if $connect is available
             $sql = "SELECT * FROM store ORDER BY Id DESC";
             $result = mysqli_query($connect, $sql);
        }

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- Product Card (Dynamic) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card card h-100">
                        <div class="product-image-wrapper">
                            <img class="card-img-top" src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                            <div class="product-overlay">
                                <button class="btn btn-quick-view" data-toggle="modal" data-target="#productModal<?php echo $row['Id']; ?>">Quick View</button>
                                <!-- You can link this to WhatsApp directly or use a modal -->
                                <a href="https://api.whatsapp.com/send?phone=+918918212479&text=I%27m%20interested%20in%20the%20<?php echo urlencode($row['Title']); ?>" target="_blank" class="btn btn-add-to-cart"><i class="fab fa-whatsapp mr-2"></i>Order Now</a>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="product-title"><?php echo htmlspecialchars($row['Title']); ?></h5>
                            <p class="card-text flex-grow-1"><?php echo htmlspecialchars($row['Description']); ?></p>

                            <div class="size-section mb-3">
                                <p class="size-label">Available Sizes:</p>
                                <div class="btn-group btn-group-sm size-buttons" role="group">
                                    <button type="button" class="btn btn-outline-dark">XS</button>
                                    <button type="button" class="btn btn-outline-dark">S</button>
                                    <button type="button" class="btn btn-outline-dark">M</button>
                                    <button type="button" class="btn btn-outline-dark">L</button>
                                    <button type="button" class="btn btn-outline-dark">XL</button>
                                    <button type="button" class="btn btn-outline-dark">XXL</button>
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a href="https://api.whatsapp.com/send?phone=+918918212479&text=I%27m%20interested%20in%20the%20<?php echo urlencode($row['Title']); ?>" target="_blank" class="btn whatsapp-btn btn-block">
                                    <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick View Modal for each product (optional, but good practice) -->
                <div class="modal fade" id="productModal<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $row['Id']; ?>" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel<?php echo $row['Id']; ?>"><?php echo htmlspecialchars($row['Title']); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6 mb-3 mb-md-0">
                            <img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                          </div>
                          <div class="col-md-6">
                            <p class="lead"><?php echo htmlspecialchars($row['Description']); ?></p>
                            <hr>
                            <div class="size-section mb-3">
                                <p class="size-label">Available Sizes:</p>
                                <div class="btn-group btn-group-sm size-buttons" role="group">
                                    <button type="button" class="btn btn-outline-dark">XS</button>
                                    <button type="button" class="btn btn-outline-dark">S</button>
                                    <button type="button" class="btn btn-outline-dark">M</button>
                                    <button type="button" class="btn btn-outline-dark">L</button>
                                    <button type="button" class="btn btn-outline-dark">XL</button>
                                    <button type="button" class="btn btn-outline-dark">XXL</button>
                                </div>
                            </div>
                            <a href="https://api.whatsapp.com/send?phone=+918918212479&text=I%27m%20interested%20in%20the%20<?php echo urlencode($row['Title']); ?>" target="_blank" class="btn whatsapp-btn btn-block mt-3">
                                <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
            }
        } elseif (!$result) { // Display placeholder products if DB connection or query failed
             foreach ($products as $row) {
                 ?>
                 <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card card h-100">
                        <div class="product-image-wrapper">
                            <img class="card-img-top" src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                            <div class="product-overlay">
                                <button class="btn btn-quick-view" data-toggle="modal" data-target="#productModal<?php echo $row['Id']; ?>">Quick View</button>
                                <a href="https://api.whatsapp.com/send?phone=+918918212479&text=I%27m%20interested%20in%20the%20<?php echo urlencode($row['Title']); ?>" target="_blank" class="btn btn-add-to-cart"><i class="fab fa-whatsapp mr-2"></i>Order Now</a>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="product-title"><?php echo htmlspecialchars($row['Title']); ?></h5>
                            <p class="card-text flex-grow-1"><?php echo htmlspecialchars($row['Description']); ?></p>

                            <div class="size-section mb-3">
                                <p class="size-label">Available Sizes:</p>
                                <div class="btn-group btn-group-sm size-buttons" role="group">
                                    <button type="button" class="btn btn-outline-dark">XS</button>
                                    <button type="button" class="btn btn-outline-dark">S</button>
                                    <button type="button" class="btn btn-outline-dark">M</button>
                                    <button type="button" class="btn btn-outline-dark">L</button>
                                    <button type="button" class="btn btn-outline-dark">XL</button>
                                    <button type="button" class="btn btn-outline-dark">XXL</button>
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a href="https://api.whatsapp.com/send?phone=+918918212479&text=I%27m%20interested%20in%20the%20<?php echo urlencode($row['Title']); ?>" target="_blank" class="btn whatsapp-btn btn-block">
                                    <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $row['Id']; ?>" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel<?php echo $row['Id']; ?>"><?php echo htmlspecialchars($row['Title']); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6 mb-3 mb-md-0">
                            <img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                          </div>
                          <div class="col-md-6">
                            <p class="lead"><?php echo htmlspecialchars($row['Description']); ?></p>
                            <hr>
                            <div class="size-section mb-3">
                                <p class="size-label">Available Sizes:</p>
                                <div class="btn-group btn-group-sm size-buttons" role="group">
                                    <button type="button" class="btn btn-outline-dark">XS</button>
                                    <button type="button" class="btn btn-outline-dark">S</button>
                                    <button type="button" class="btn btn-outline-dark">M</button>
                                    <button type="button" class="btn btn-outline-dark">L</button>
                                    <button type="button" class="btn btn-outline-dark">XL</button>
                                    <button type="button" class="btn btn-outline-dark">XXL</button>
                                </div>
                            </div>
                            <a href="https://api.whatsapp.com/send?phone=+918918212479&text=I%27m%20interested%20in%20the%20<?php echo urlencode($row['Title']); ?>" target="_blank" class="btn whatsapp-btn btn-block mt-3">
                                <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>