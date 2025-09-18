<?php
$title = "Store";
require_once 'include/header.php';
?>

<!-- Hero Banner with Gradient Overlay -->
<section class="hero-banner position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-lg-6 text-white">
                <h1 class="display-4 fw-bold mb-4">Elevate Your Dance Style</h1>
                <p class="lead mb-4">Premium dance apparel designed for performance, comfort, and expression</p>
                <a href="#products" class="btn btn-light btn-lg rounded-pill px-4 py-2 shadow">Shop Collection</a>
            </div>
        </div>
    </div>
    <div class="hero-background" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);"></div>
</section>

<!-- Breadcrumb -->
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-primary">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Store</li>
        </ol>
    </nav>
</div>

<!-- Store Header -->
<section class="container mb-5" id="products">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3">Our Collection</h2>
        <p class="lead text-muted">Discover our premium dance apparel designed for comfort and performance</p>
    </div>
</section>

<!-- Products Section -->
<section class="container mb-5">
    <div class="row">
        <?php
        // Fetch products from the database
        $sql = "SELECT * FROM store ORDER BY Id DESC";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- Product Card (Dynamic) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="product-image-wrapper position-relative overflow-hidden">
                            <img class="card-img-top product-image" src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                            <div class="product-overlay d-flex align-items-center justify-content-center">
                                <div class="action-buttons">
                                    <button class="btn btn-light btn-rounded-circle me-2" data-toggle="modal" data-target="#productModal<?php echo $row['Id']; ?>">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-light btn-rounded-circle">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-primary">New</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="product-title fw-bold mb-0"><?php echo htmlspecialchars($row['Title']); ?></h5>
                                <span class="text-primary fw-bold">₹<?php echo rand(999, 2999); ?></span>
                            </div>
                            <p class="card-text text-muted flex-grow-1"><?php echo htmlspecialchars($row['Description']); ?></p>

                            <div class="size-section mb-3">
                                <p class="size-label text-dark fw-medium mb-2">Available Sizes:</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-sm btn-outline-dark size-btn">XS</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark size-btn">S</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark size-btn">M</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark size-btn">L</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark size-btn">XL</button>
                                </div>
                            </div>

                            <div class="mt-auto">
                                <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn btn-success btn-lg w-100 rounded-pill whatsapp-btn">
                                    <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick View Modal for each product -->
                <div class="modal fade" id="productModal<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $row['Id']; ?>" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content rounded-4 overflow-hidden">
                      <div class="modal-header border-0 pb-0">
                        <h5 class="modal-title fw-bold" id="productModalLabel<?php echo $row['Id']; ?>"><?php echo htmlspecialchars($row['Title']); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body py-4">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="rounded-4 overflow-hidden">
                                <img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="fw-bold">₹<?php echo rand(999, 2999); ?></h3>
                                <div class="d-flex align-items-center">
                                    <div class="rating">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                    </div>
                                    <span class="ms-2 text-muted">(24 reviews)</span>
                                </div>
                            </div>
                            <p class="mb-4"><?php echo htmlspecialchars($row['Description']); ?></p>
                            
                            <div class="size-section mb-4">
                                <p class="fw-medium mb-2">Select Size:</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-dark size-btn active">XS</button>
                                    <button type="button" class="btn btn-outline-dark size-btn">S</button>
                                    <button type="button" class="btn btn-outline-dark size-btn">M</button>
                                    <button type="button" class="btn btn-outline-dark size-btn">L</button>
                                    <button type="button" class="btn btn-outline-dark size-btn">XL</button>
                                </div>
                            </div>
                            
                            <div class="d-flex gap-2 mb-4">
                                <div class="quantity-selector d-flex align-items-center rounded-pill bg-light">
                                    <button class="btn btn-sm px-3">-</button>
                                    <span class="mx-3 fw-medium">1</span>
                                    <button class="btn btn-sm px-3">+</button>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn btn-success flex-grow-1 rounded-pill whatsapp-btn">
                                    <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                                </a>
                            </div>
                            
                            <div class="accordion" id="productAccordion">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Product Details
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#productAccordion">
                                        <div class="accordion-body text-muted">
                                            <ul class="list-unstyled">
                                                <li>• Premium stretch fabric for maximum flexibility</li>
                                                <li>• Moisture-wicking technology</li>
                                                <li>• Reinforced seams for durability</li>
                                                <li>• Designed by professional dancers</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
            }
        } else {
            echo '<div class="col-12 text-center py-5"><div class="py-5"><h4 class="fw-bold mb-3">No products available yet</h4><p class="text-muted mb-4">We\'re preparing something amazing for you!</p><a href="index.php" class="btn btn-primary rounded-pill px-4">Return Home</a></div></div>';
        }
        ?>
    </div>
</section>

<!-- Features Section -->
<section class="container-fluid bg-light py-5 mb-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3 p-3 bg-primary rounded-circle d-inline-flex">
                    <i class="fas fa-truck text-white fa-lg"></i>
                </div>
                <h5 class="fw-bold">Fast Delivery</h5>
                <p class="text-muted">Quick shipping across India</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3 p-3 bg-primary rounded-circle d-inline-flex">
                    <i class="fas fa-exchange-alt text-white fa-lg"></i>
                </div>
                <h5 class="fw-bold">Easy Returns</h5>
                <p class="text-muted">7-day return policy</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3 p-3 bg-primary rounded-circle d-inline-flex">
                    <i class="fas fa-check-circle text-white fa-lg"></i>
                </div>
                <h5 class="fw-bold">Quality Assurance</h5>
                <p class="text-muted">Premium materials guaranteed</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="container mb-5">
    <div class="rounded-4 overflow-hidden shadow-sm">
        <div class="row g-0">
            <div class="col-lg-6 bg-primary text-white p-5">
                <h3 class="fw-bold mb-3">Stay Updated</h3>
                <p class="mb-4">Subscribe to get notified about new collections and exclusive offers</p>
                <div class="d-flex">
                    <input type="email" class="form-control rounded-pill me-2" placeholder="Your email address">
                    <button class="btn btn-light rounded-pill px-4">Subscribe</button>
                </div>
            </div>
            <div class="col-lg-6 bg-light p-5">
                <h3 class="fw-bold mb-3">Follow Us</h3>
                <p class="mb-4">Join our dance community on social media</p>
                <div class="d-flex gap-3">
                    <a href="#" class="social-icon btn btn-primary btn-rounded-circle"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon btn btn-primary btn-rounded-circle"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon btn btn-primary btn-rounded-circle"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon btn btn-primary btn-rounded-circle"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom Styles */
    .min-vh-60 {
        min-height: 60vh;
    }
    
    .hero-banner {
        position: relative;
        overflow: hidden;
    }
    
    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    }
    
    .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }
    
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
    }
    
    .product-image-wrapper {
        overflow: hidden;
    }
    
    .product-image {
        transition: transform 0.5s ease;
        height: 280px;
        object-fit: cover;
    }
    
    .product-card:hover .product-image {
        transform: scale(1.05);
    }
    
    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.3);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .product-card:hover .product-overlay {
        opacity: 1;
    }
    
    .btn-rounded-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .size-btn {
        border-radius: 20px;
        min-width: 40px;
    }
    
    .size-btn.active, .size-btn:hover {
        background-color: #6a11cb;
        color: white;
        border-color: #6a11cb;
    }
    
    .whatsapp-btn {
        background: #25D366;
        border: none;
        transition: all 0.3s ease;
    }
    
    .whatsapp-btn:hover {
        background: #128C7E;
        transform: translateY(-2px);
    }
    
    .quantity-selector {
        background: #f8f9fa;
        padding: 0.25rem;
    }
    
    .social-icon {
        width: 45px;
        height: 45px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }
    
    .rating {
        display: inline-flex;
    }
    
    .breadcrumb {
        background: transparent;
        padding: 0;
    }
    
    .accordion-button:not(.collapsed) {
        background-color: transparent;
        color: #6a11cb;
        box-shadow: none;
    }
    
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }
</style>

<?php require_once 'include/footer.php'; ?>