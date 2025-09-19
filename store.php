<?php
$title = "Store";
require_once 'include/header.php';
?>

<!-- Hero Banner with Call-to-Action -->
<section class="hero-banner mb-5" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1542293787938-c9e299b880cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h1 class="display-4 text-white fw-bold mb-3">Premium Dance Apparel</h1>
                <p class="lead text-white mb-4">Designed for performance, comfort, and style. Elevate your dance experience with our exclusive collection.</p>
                <a href="#products" class="btn btn-primary btn-lg px-5 py-3">Shop Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb -->
<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb custom-breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Store</li>
        </ol>
    </nav>
</div>

<!-- Store Content -->
<div class="container mb-5">
    <div class="row">
        <!-- Sidebar Filters -->
        <div class="col-lg-3 mb-4 mb-lg-0">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0">Filters</h5>
                </div>
                <div class="card-body">
                    <!-- Category Filter -->
                    <div class="filter-section mb-4">
                        <h6 class="mb-3">Category</h6>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="category1" checked>
                            <label class="form-check-label" for="category1">Dance Tops</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="category2" checked>
                            <label class="form-check-label" for="category2">Dance Bottoms</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="category3" checked>
                            <label class="form-check-label" for="category3">Dance Dresses</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="category4" checked>
                            <label class="form-check-label" for="category4">Accessories</label>
                        </div>
                    </div>
                    
                    <!-- Price Filter -->
                    <div class="filter-section mb-4">
                        <h6 class="mb-3">Price Range</h6>
                        <div id="price-slider" class="mb-3"></div>
                        <div class="d-flex justify-content-between">
                            <span id="price-min">₹500</span>
                            <span id="price-max">₹5000</span>
                        </div>
                    </div>
                    
                    <!-- Size Filter -->
                    <div class="filter-section">
                        <h6 class="mb-3">Size</h6>
                        <div class="size-filter d-flex flex-wrap">
                            <div class="form-check me-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="size-xs">
                                <label class="form-check-label size-label" for="size-xs">XS</label>
                            </div>
                            <div class="form-check me-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="size-s">
                                <label class="form-check-label size-label" for="size-s">S</label>
                            </div>
                            <div class="form-check me-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="size-m" checked>
                                <label class="form-check-label size-label" for="size-m">M</label>
                            </div>
                            <div class="form-check me-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="size-l" checked>
                                <label class="form-check-label size-label" for="size-l">L</label>
                            </div>
                            <div class="form-check me-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="size-xl">
                                <label class="form-check-label size-label" for="size-xl">XL</label>
                            </div>
                            <div class="form-check me-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="size-xxl">
                                <label class="form-check-label size-label" for="size-xxl">XXL</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <button class="btn btn-outline-secondary w-100" id="reset-filters">Reset Filters</button>
                </div>
            </div>
            
            <!-- Special Offer Banner -->
            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body text-center py-4">
                    <h5 class="card-title">Special Offer!</h5>
                    <p class="card-text">Get 15% off on your first order</p>
                    <p class="card-text">Use code: <strong>DANCE15</strong></p>
                </div>
            </div>
        </div>
        
        <!-- Products Section -->
        <div class="col-lg-9">
            <!-- Sort and View Options -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="h4 mb-0">Our Collection</h2>
                    <p class="text-muted mb-0"><?php echo mysqli_num_rows($result); ?> products</p>
                </div>
                <div class="d-flex align-items-center">
                    <select class="form-select form-select-sm me-2" style="width: auto;">
                        <option selected>Sort by: Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Most Popular</option>
                    </select>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-secondary active" id="grid-view">
                            <i class="fas fa-th"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary" id="list-view">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Products Grid -->
            <div class="row" id="products">
                <?php
                // Fetch products from the database
                // Make sure to select the 'Price' column
                $sql = "SELECT Id, ImageUrl, Title, Description, Price FROM store ORDER BY Id DESC";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- Product Card (Dynamic) -->
                        <div class="col-xl-4 col-md-6 mb-4 product-card">
                            <div class="card h-100 product-card-inner">
                                <div class="position-relative">
                                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">Sale</span>
                                    <button class="btn btn-link position-absolute top-0 end-0 m-2 text-white wishlist-btn">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <img class="card-img-top" src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                                    <div class="product-overlay">
                                        <button class="btn btn-quick-view" data-toggle="modal" data-target="#productModal<?php echo $row['Id']; ?>">Quick View</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="product-title"><?php echo htmlspecialchars($row['Title']); ?></h5>
                                        <p class="product-price mb-0">₹<?php echo htmlspecialchars(number_format($row['Price'], 2)); ?></p>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="text-warning me-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <small class="text-muted">(24)</small>
                                    </div>
                                    <p class="card-text product-description-short"><?php echo substr(htmlspecialchars($row['Description']), 0, 80); ?>...</p>
                                </div>
                                <div class="card-footer bg-white border-0 pt-0">
                                    <div class="size-section mb-3">
                                        <p class="size-label mb-1">Sizes:</p>
                                        <div class="btn-group btn-group-sm size-buttons" role="group">
                                            <button type="button" class="btn btn-outline-secondary">XS</button>
                                            <button type="button" class="btn btn-outline-secondary">S</button>
                                            <button type="button" class="btn btn-outline-secondary active">M</button>
                                            <button type="button" class="btn btn-outline-secondary">L</button>
                                            <button type="button" class="btn btn-outline-secondary">XL</button>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn btn-primary whatsapp-btn">
                                            <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick View Modal for each product -->
                        <div class="modal fade" id="productModal<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $row['Id']; ?>" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel<?php echo $row['Id']; ?>"><?php echo htmlspecialchars($row['Title']); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-6 mb-3 mb-md-0">
                                    <img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h4 class="product-price-modal">₹<?php echo htmlspecialchars(number_format($row['Price'], 2)); ?></h4>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span class="text-muted ms-1">(24 reviews)</span>
                                        </div>
                                    </div>
                                    <p class="lead product-modal-description"><?php echo htmlspecialchars($row['Description']); ?></p>
                                    
                                    <div class="size-section mb-4">
                                        <p class="size-label">Select Size:</p>
                                        <div class="btn-group btn-group-sm size-buttons" role="group">
                                            <button type="button" class="btn btn-outline-secondary">XS</button>
                                            <button type="button" class="btn btn-outline-secondary">S</button>
                                            <button type="button" class="btn btn-outline-secondary active">M</button>
                                            <button type="button" class="btn btn-outline-secondary">L</button>
                                            <button type="button" class="btn btn-outline-secondary">XL</button>
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid">
                                        <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn btn-primary btn-lg whatsapp-btn">
                                            <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                                        </a>
                                    </div>
                                    
                                    <div class="product-details mt-4">
                                        <ul class="nav nav-tabs" id="productTabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab">Details</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Reviews</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content p-3" id="productTabsContent">
                                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                                <p><?php echo htmlspecialchars($row['Description']); ?></p>
                                            </div>
                                            <div class="tab-pane fade" id="details" role="tabpanel">
                                                <table class="table table-sm">
                                                    <tr>
                                                        <th>Material</th>
                                                        <td>85% Cotton, 15% Spandex</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fit</th>
                                                        <td>Regular</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Care</th>
                                                        <td>Machine Wash</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="me-3">
                                                        <h2 class="h1 mb-0">4.2</h2>
                                                        <div class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <small class="text-muted">Based on 24 reviews</small>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <!-- Review bars would go here -->
                                                    </div>
                                                </div>
                                                <p class="text-muted">Customer reviews will be displayed here.</p>
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
                    echo '<div class="col-12 text-center py-5"><p class="text-muted">No products available yet. Please add some from the dashboard!</p></div>';
                }
                ?>
            </div>
            
            <!-- Pagination -->
            <nav aria-label="Product pagination" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-truck fa-3x"></i>
                </div>
                <h5 class="feature-title">Free Shipping</h5>
                <p class="feature-description">Free delivery on orders above ₹1999</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-undo-alt fa-3x"></i>
                </div>
                <h5 class="feature-title">Easy Returns</h5>
                <p class="feature-description">15-day hassle-free returns</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-shield-alt fa-3x"></i>
                </div>
                <h5 class="feature-title">Secure Payment</h5>
                <p class="feature-description">100% secure payment options</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="container-fluid bg-primary text-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3 class="mb-3">Subscribe to Our Newsletter</h3>
                <p class="mb-4">Get updates on new collections, exclusive offers, and dance tips.</p>
                <form class="row g-2 justify-content-center">
                    <div class="col-sm-8">
                        <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-light btn-lg w-100">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Include Google Fonts - Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Include noUiSlider CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css">

<style>
    /* General Body Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
    }

    /* Custom Color Palette */
    :root {
        --primary-color: #7b68ee;
        --secondary-color: #f0e6fa;
        --text-dark: #343a40;
        --text-muted: #6c757d;
        --whatsapp-green: #25D366;
        --whatsapp-green-hover: #1DA851;
        --card-bg: #ffffff;
        --border-color: #e9ecef;
        --sale-color: #dc3545;
    }

    /* Helper Background Colors */
    .bg-light-soft {
        background-color: var(--secondary-color) !important;
    }

    /* Hero Banner */
    .hero-banner {
        padding: 100px 0;
        margin-top: -25px;
    }

    /* Breadcrumb Styles */
    .custom-breadcrumb {
        background: transparent;
        padding: 0;
        font-size: 0.9rem;
    }

    .custom-breadcrumb .breadcrumb-item a {
        color: var(--text-muted);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .custom-breadcrumb .breadcrumb-item a:hover {
        color: var(--primary-color);
    }

    .custom-breadcrumb .breadcrumb-item.active {
        color: var(--text-dark);
        font-weight: 500;
    }

    /* Filter Section */
    .filter-section {
        padding: 15px 0;
        border-bottom: 1px solid var(--border-color);
    }

    .filter-section:last-child {
        border-bottom: none;
    }

    .size-label {
        font-size: 0.8rem;
        padding: 0.25rem 0.5rem;
    }

    /* Product Card Styles */
    .product-card-inner {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .product-card-inner:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .product-image-wrapper {
        position: relative;
        overflow: hidden;
    }

    .product-card-inner img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card-inner:hover img {
        transform: scale(1.05);
    }

    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .product-card-inner:hover .product-overlay {
        opacity: 1;
    }

    .btn-quick-view {
        background: #ffffff;
        color: var(--text-dark);
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-quick-view:hover {
        background: var(--primary-color);
        color: #fff;
    }

    .wishlist-btn {
        font-size: 1.2rem;
        z-index: 10;
    }

    .wishlist-btn:hover {
        color: var(--sale-color) !important;
    }

    .product-title {
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--text-dark);
    }

    .product-price {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--primary-color);
    }

    .product-description-short {
        font-size: 0.9rem;
        color: var(--text-muted);
    }

    .size-buttons .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
        border-radius: 4px;
    }

    .size-buttons .btn.active {
        background-color: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }

    .whatsapp-btn {
        background: var(--whatsapp-green);
        border: none;
        border-radius: 6px;
        padding: 10px;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .whatsapp-btn:hover {
        background: var(--whatsapp-green-hover);
        color: white;
    }

    /* Quick View Modal Styles */
    .modal-content {
        border-radius: 15px;
        border: none;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .modal-header {
        border-bottom: 1px solid var(--border-color);
        padding: 1.5rem;
    }

    .modal-title {
        font-weight: 700;
        color: var(--text-dark);
    }

    .modal-body {
        padding: 2rem;
    }

    .product-modal-description {
        font-size: 1rem;
        color: var(--text-dark);
        line-height: 1.6;
    }

    .product-price-modal {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--primary-color);
    }

    /* Features Section Styles */
    .feature-item {
        padding: 30px 20px;
        transition: transform 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-5px);
    }

    .feature-icon {
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    .feature-title {
        font-weight: 600;
        font-size: 1.2rem;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .feature-description {
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    /* Pagination */
    .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .page-link {
        color: var(--primary-color);
    }

    .page-link:hover {
        color: var(--primary-color);
    }

    /* List View */
    .list-view .product-card {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .list-view .product-card-inner {
        display: flex;
        flex-direction: row;
    }

    .list-view .product-card-inner img {
        width: 280px;
        height: auto;
    }

    .list-view .card-body {
        flex: 1;
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        .hero-banner {
            padding: 80px 0;
        }
        
        .hero-banner h1 {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 767.98px) {
        .hero-banner {
            padding: 60px 0;
        }
        
        .hero-banner h1 {
            font-size: 2rem;
        }
        
        .list-view .product-card-inner {
            flex-direction: column;
        }
        
        .list-view .product-card-inner img {
            width: 100%;
            height: 250px;
        }
    }
</style>

<script>
    // Initialize noUiSlider for price range
    document.addEventListener('DOMContentLoaded', function() {
        var priceSlider = document.getElementById('price-slider');
        if (priceSlider) {
            noUiSlider.create(priceSlider, {
                start: [500, 5000],
                connect: true,
                range: {
                    'min': 500,
                    'max': 5000
                },
                step: 100,
                format: {
                    to: function(value) {
                        return '₹' + Math.round(value);
                    },
                    from: function(value) {
                        return value.replace('₹', '');
                    }
                }
            });
            
            var priceMin = document.getElementById('price-min');
            var priceMax = document.getElementById('price-max');
            
            priceSlider.noUiSlider.on('update', function(values, handle) {
                if (handle) {
                    priceMax.innerHTML = values[handle];
                } else {
                    priceMin.innerHTML = values[handle];
                }
            });
        }
        
        // Toggle between grid and list view
        document.getElementById('grid-view').addEventListener('click', function() {
            document.getElementById('products').classList.remove('list-view');
            this.classList.add('active');
            document.getElementById('list-view').classList.remove('active');
        });
        
        document.getElementById('list-view').addEventListener('click', function() {
            document.getElementById('products').classList.add('list-view');
            this.classList.add('active');
            document.getElementById('grid-view').classList.remove('active');
        });
        
        // Reset filters
        document.getElementById('reset-filters').addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('.form-check-input');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
            
            // Reset size checkboxes to default (M and L)
            document.getElementById('size-m').checked = true;
            document.getElementById('size-l').checked = true;
            
            // Reset price slider
            if (priceSlider) {
                priceSlider.noUiSlider.set([500, 5000]);
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js"></script>

<?php require_once 'include/footer.php'; ?>