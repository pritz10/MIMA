<?php
$title = "Store";
require_once 'include/header.php';
?>
  <div class="inner_page-banner">
      </div>

<!-- Breadcrumb -->
<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb custom-breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Store</li>
        </ol>
    </nav>
</div>

<!-- Store Header -->
<section class="container mb-5 mt-4">
    <div class="text-center">
        <h2 class="section-title">Our Collection</h2>
        <p class="section-subtitle">Discover our premium dance apparel designed for comfort and performance</p>
    </div>
</section>

<!-- Products Section with Filters -->
<section class="container mb-5">
    <div class="row">
        <!-- Filter Sidebar -->
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="filter-sidebar card shadow-sm">
                <div class="card-body">
                    <h5 class="filter-title mb-4">Filters</h5>

                    <!-- Category Filter -->
                    <div class="filter-group mb-4">
                        <h6>Categories</h6>
                        <ul class="list-unstyled filter-list">
                            <li><a href="#" class="filter-link active">All Products</a></li>
                            <li><a href="#" class="filter-link">Leotards</a></li>
                            <li><a href="#" class="filter-link">Tutus</a></li>
                            <li><a href="#" class="filter-link">Leggings</a></li>
                            <li><a href="#" class="filter-link">Accessories</a></li>
                            <li><a href="#" class="filter-link">Footwear</a></li>
                        </ul>
                    </div>

                    <!-- Price Range Filter -->
                    <div class="filter-group mb-4">
                        <h6>Price Range</h6>
                        <ul class="list-unstyled filter-list">
                            <li><a href="#" class="filter-link">Under ₹500</a></li>
                            <li><a href="#" class="filter-link">₹500 - ₹1000</a></li>
                            <li><a href="#" class="filter-link">₹1000 - ₹2000</a></li>
                            <li><a href="#" class="filter-link">₹2000 - ₹5000</a></li>
                            <li><a href="#" class="filter-link">Over ₹5000</a></li>
                        </ul>
                         <div class="price-range-slider mt-3">
                            <label for="min-price" class="form-label visually-hidden">Min Price</label>
                            <input type="range" class="form-range" id="min-price" min="0" max="5000" value="0">
                            <label for="max-price" class="form-label visually-hidden">Max Price</label>
                            <input type="range" class="form-range" id="max-price" min="0" max="5000" value="5000">
                            <div class="d-flex justify-content-between">
                                <span id="min-price-display">₹0</span>
                                <span id="max-price-display">₹5000+</span>
                            </div>
                        </div>
                    </div>

                    <!-- Size Filter (checkboxes) -->
                    <div class="filter-group mb-4">
                        <h6>Sizes</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="XS" id="sizeXS">
                            <label class="form-check-label" for="sizeXS">XS</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="S" id="sizeS">
                            <label class="form-check-label" for="sizeS">S</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="M" id="sizeM">
                            <label class="form-check-label" for="sizeM">M</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="L" id="sizeL">
                            <label class="form-check-label" for="sizeL">L</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="XL" id="sizeXL">
                            <label class="form-check-label" for="sizeXL">XL</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="XXL" id="sizeXXL">
                            <label class="form-check-label" for="sizeXXL">XXL</label>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block apply-filters-btn">Apply Filters</button>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-lg-9 col-md-8">
            <div class="row">
                <?php
                // Fetch products from the database
                // Make sure to select the 'Price' column
                // In a real application, you would modify this SQL query
                // based on the selected filters (e.g., using WHERE clauses).
                $sql = "SELECT Id, ImageUrl, Title, Description, Price FROM store ORDER BY Id DESC";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- Product Card (Dynamic) -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="product-card card h-100 shadow-sm">
                                <div class="product-image-wrapper">
                                    <img class="card-img-top" src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                                    <div class="product-overlay">
                                        <button class="btn btn-quick-view" data-toggle="modal" data-target="#productModal<?php echo $row['Id']; ?>">Quick View</button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="product-title"><?php echo htmlspecialchars($row['Title']); ?></h5>
                                    <p class="card-text flex-grow-1 product-description-short"><?php echo htmlspecialchars($row['Description']); ?></p>

                                    <!-- Price Display for Product Card -->
                                    <p class="product-price">₹<?php echo htmlspecialchars(number_format($row['Price'], 2)); ?></p>

                                    <div class="size-section mb-3">
                                        <p class="size-label">Available Sizes:</p>
                                        <div class="btn-group btn-group-sm size-buttons" role="group">
                                            <button type="button" class="btn btn-size">XS</button>
                                            <button type="button" class="btn btn-size">S</button>
                                            <button type="button" class="btn btn-size">M</button>
                                            <button type="button" class="btn btn-size">L</button>
                                            <button type="button" class="btn btn-size">XL</button>
                                            <button type="button" class="btn btn-size">XXL</button>
                                        </div>
                                    </div>

                                    <div class="mt-auto">
                                        <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn btn-primary btn-block whatsapp-btn">
                                            <i class="fab fa-whatsapp mr-2"></i> Order via WhatsApp
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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-6 mb-3 mb-md-0">
                                    <img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                                  </div>
                                  <div class="col-md-6">
                                    <p class="lead product-modal-description"><?php echo htmlspecialchars($row['Description']); ?></p>

                                    <!-- Price Display for Quick View Modal -->
                                    <p class="product-price-modal">₹<?php echo htmlspecialchars(number_format($row['Price'], 2)); ?></p>

                                    <div class="size-section mb-3">
                                        <p class="size-label">Available Sizes:</p>
                                        <div class="btn-group btn-group-sm size-buttons" role="group">
                                            <button type="button" class="btn btn-size">XS</button>
                                            <button type="button" class="btn btn-size">S</button>
                                            <button type="button" class="btn btn-size">M</button>
                                            <button type="button" class="btn btn-size">L</button>
                                            <button type="button" class="btn btn-size">XL</button>
                                            <button type="button" class="btn btn-size">XXL</button>
                                        </div>
                                    </div>
                                    <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn btn-primary btn-block whatsapp-btn mt-3">
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
                } else {
                    echo '<div class="col-12 text-center py-5"><p class="text-muted">No products available yet. Please add some from the dashboard!</p></div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="container-fluid bg-light-soft py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-truck fa-3x"></i>
                </div>
                <h5 class="feature-title">Fast Delivery</h5>
                <p class="feature-description">Quick shipping across India</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-undo-alt fa-3x"></i>
                </div>
                <h5 class="feature-title">Easy Returns</h5>
                <p class="feature-description">7-day return policy</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-award fa-3x"></i>
                </div>
                <h5 class="feature-title">Quality Assurance</h5>
                <p class="feature-description">Premium materials guaranteed</p>
            </div>
        </div>
    </div>
</section>

<!-- Include Google Fonts - Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Add Bootstrap Icons or Font Awesome if you need more icons for filters -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<style>
    /* General Body Styling */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa; /* Light background for the whole page */
        color: #343a40;
    }

    /* Custom Color Palette */
    :root {
        --primary-color: #7b68ee; /* Medium Purple for accents */
        --secondary-color: #f0e6fa; /* Lighter purple for backgrounds */
        --text-dark: #343a40;
        --text-muted: #6c757d;
        --whatsapp-green: #25D366;
        --whatsapp-green-hover: #1DA851;
        --card-bg: #ffffff;
        --border-color: #e9ecef;
    }

    /* Helper Background Colors */
    .bg-light-soft {
        background-color: var(--secondary-color) !important;
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

    /* Store Header Styles */
    .section-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2.8rem; /* Larger and more prominent */
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: var(--text-muted);
        margin-bottom: 3rem; /* More space below subtitle */
    }

    /* Product Card Styles */
    .product-card {
        border: none;
        border-radius: 15px; /* Softer rounded corners */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); /* More pronounced, softer shadow */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: var(--card-bg);
        overflow: hidden; /* Ensure rounded corners are respected */
    }

    .product-card:hover {
        transform: translateY(-8px); /* Lift more on hover */
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12); /* Stronger shadow on hover */
    }

    .product-image-wrapper {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 15px; /* Match card radius */
        border-top-right-radius: 15px; /* Match card radius */
        background-color: #f5f5f5; /* Light background for images */
    }

    .product-image-wrapper img {
        width: 100%;
        height: 300px; /* Fixed height for consistency */
        object-fit: cover; /* Ensure images cover the area without distortion */
        transition: transform 0.4s ease; /* Smooth zoom */
    }

    .product-card:hover .product-image-wrapper img {
        transform: scale(1.05); /* Slight zoom on image hover */
    }

    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3); /* Slightly darker overlay */
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .product-card:hover .product-overlay {
        opacity: 1;
    }

    .btn-quick-view {
        background: #ffffff;
        color: var(--text-dark);
        border: none;
        padding: 10px 25px;
        border-radius: 50px; /* Pill shape */
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }

    .btn-quick-view:hover {
        background: var(--primary-color);
        color: #fff;
        transform: translateY(-2px);
    }

    .product-card .card-body {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Pushes button to bottom */
    }

    .product-title {
        font-weight: 600;
        font-size: 1.3rem;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .product-description-short {
        font-size: 0.95rem;
        color: var(--text-muted);
        line-height: 1.5;
        margin-bottom: 1rem;
    }

    /* New Price Styles for Product Card */
    .product-price {
        font-size: 1.5rem; /* Prominent size */
        font-weight: 700;
        color: var(--primary-color); /* Highlight color */
        margin-top: 0.5rem;
        margin-bottom: 1rem; /* Space below price */
        text-align: right; /* Align price to the right */
        letter-spacing: 0.5px;
    }

    .size-label {
        font-size: 0.85rem;
        margin-bottom: 0.6rem;
        color: var(--text-muted);
        font-weight: 500;
    }

    .size-buttons .btn-size {
        border-radius: 20px; /* Pill shape for size buttons */
        margin: 0 3px;
        padding: 5px 12px;
        border: 1px solid var(--border-color);
        color: var(--text-dark);
        font-size: 0.85rem;
        font-weight: 500;
        background-color: #fdfdfd;
        transition: all 0.2s ease;
    }

    .size-buttons .btn-size:hover {
        background-color: var(--primary-color);
        color: #fff;
        border-color: var(--primary-color);
    }

    .whatsapp-btn {
        background: var(--whatsapp-green);
        border: none;
        border-radius: 10px; /* Slightly rounded corners */
        padding: 12px;
        font-weight: 600;
        font-size: 1.05rem;
        transition: background-color 0.3s ease, transform 0.2s ease;
        color: #fff; /* Ensure text is white */
    }

    .whatsapp-btn:hover {
        background: var(--whatsapp-green-hover);
        transform: translateY(-2px);
        color: #fff; /* Ensure text is white on hover */
    }

    .whatsapp-btn i {
        font-size: 1.2rem;
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
        margin-bottom: 1.5rem;
    }

    /* New Price Styles for Quick View Modal */
    .product-price-modal {
        font-size: 1.8rem; /* Even more prominent in modal */
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        text-align: left;
        letter-spacing: 0.7px;
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

    .feature-icon i {
        font-size: 3.5rem; /* Larger icons */
    }

    .feature-title {
        font-weight: 600;
        font-size: 1.3rem;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .feature-description {
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    /* Filter Sidebar Styles */
    .filter-sidebar {
        background-color: var(--card-bg);
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .filter-title {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.8rem;
        border-bottom: 2px solid var(--secondary-color);
        padding-bottom: 1rem;
    }

    .filter-group h6 {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .filter-list {
        padding-left: 0;
    }

    .filter-list li {
        margin-bottom: 8px;
    }

    .filter-link {
        color: var(--text-muted);
        text-decoration: none;
        transition: color 0.3s ease, font-weight 0.3s ease;
        font-size: 0.95rem;
    }

    .filter-link:hover,
    .filter-link.active {
        color: var(--primary-color);
        font-weight: 600;
    }

    .form-check-label {
        color: var(--text-dark);
        font-size: 0.95rem;
    }

    .form-check-input:checked {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .apply-filters-btn {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        font-weight: 600;
        border-radius: 10px;
        padding: 10px 15px;
        margin-top: 1rem;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .apply-filters-btn:hover {
        background-color: #6a5acd; /* Slightly darker primary color */
        border-color: #6a5acd;
        transform: translateY(-2px);
    }

    /* Price Range Slider */
    .price-range-slider {
        margin-top: 1rem;
        padding: 0 5px;
    }

    .form-range {
        width: 100%;
        height: 5px;
        background-color: var(--secondary-color);
        border-radius: 5px;
        outline: none;
        margin-bottom: 5px;
        -webkit-appearance: none; /* For Chrome, Safari, Opera */
        appearance: none;
    }

    .form-range::-webkit-slider-thumb {
        -webkit-appearance: none; /* For Chrome, Safari, Opera */
        appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--primary-color);
        cursor: pointer;
        margin-top: -7px; /* Adjust to center thumb on track */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .form-range::-moz-range-thumb {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--primary-color);
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        /* On medium and small screens, filters might stack on top */
        .filter-sidebar {
            margin-bottom: 2rem;
        }
        .col-lg-3 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .col-lg-9 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .section-title {
            font-size: 2rem;
        }
        .section-subtitle {
            font-size: 1rem;
            margin-bottom: 2rem;
        }
        .product-card .card-body {
            padding: 1rem;
        }
        .product-title {
            font-size: 1.1rem;
        }
        .product-description-short {
            font-size: 0.9rem;
        }
        .product-price {
            font-size: 1.3rem; /* Adjust for smaller screens */
            text-align: center; /* Center price on smaller cards */
        }
        .product-price-modal {
            font-size: 1.5rem; /* Adjust for smaller modal */
            text-align: center;
        }
        .whatsapp-btn {
            font-size: 0.95rem;
            padding: 10px;
        }
        .feature-icon i {
            font-size: 2.5rem;
        }
        .feature-title {
            font-size: 1.1rem;
        }
        .feature-description {
            font-size: 0.9rem;
        }
    }
</style>

<script>
    // JavaScript for Price Range Slider (optional, but good for UX)
    document.addEventListener('DOMContentLoaded', function() {
        const minPriceSlider = document.getElementById('min-price');
        const maxPriceSlider = document.getElementById('max-price');
        const minPriceDisplay = document.getElementById('min-price-display');
        const maxPriceDisplay = document.getElementById('max-price-display');

        function updatePriceDisplay() {
            const minVal = parseInt(minPriceSlider.value);
            const maxVal = parseInt(maxPriceSlider.value);

            if (minVal > maxVal) {
                // Ensure min doesn't go above max
                minPriceSlider.value = maxVal;
            }

            minPriceDisplay.textContent = `₹${minPriceSlider.value}`;
            maxPriceDisplay.textContent = `₹${maxPriceSlider.value}${maxPriceSlider.value == maxPriceSlider.max ? '+' : ''}`;
        }

        if (minPriceSlider && maxPriceSlider) {
            minPriceSlider.addEventListener('input', updatePriceDisplay);
            maxPriceSlider.addEventListener('input', updatePriceDisplay);
            updatePriceDisplay(); // Set initial display
        }
    });
</script>

<?php require_once 'include/footer.php'; ?>