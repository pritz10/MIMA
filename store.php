<?php
$title = "Store";
require_once 'include/header.php';
 ?>
  <div class="inner_page-banner">
      </div>


<!-- Breadcrumb -->
<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Store</li>
        </ol>
    </nav>
</div>

<!-- Store Header -->
<section class="container mb-5">
    <div class="text-center">
        <h2 class="section-title">Our Collection</h2>
        <p class="section-subtitle">Discover our premium dance apparel designed for comfort and performance</p>
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
                    <div class="product-card card h-100 shadow-sm">
                        <div class="product-image-wrapper">
                            <img class="card-img-top" src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                            <div class="product-overlay">
                                <!-- You can create a modal for each product if needed -->
                                <button class="btn btn-quick-view" data-toggle="modal" data-target="#productModal<?php echo $row['Id']; ?>">Quick View</button>
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
                                <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn btn-primary btn-block whatsapp-btn">
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
                          <div class="col-md-6">
                            <img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($row['Title']); ?>">
                          </div>
                          <div class="col-md-6">
                            <p><?php echo htmlspecialchars($row['Description']); ?></p>
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
            echo '<div class="col-12 text-center"><p>No products available yet. Please add some from the dashboard!</p></div>';
        }
        ?>
    </div>
</section>

<!-- Features Section -->
<section class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-truck fa-2x"></i>
                </div>
                <h5>Fast Delivery</h5>
                <p>Quick shipping across India</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-exchange-alt fa-2x"></i>
                </div>
                <h5>Easy Returns</h5>
                <p>7-day return policy</p>
            </div>
            <div class="col-md-4 feature-item">
                <div class="feature-icon mb-3">
                    <i class="fas fa-quality fa-2x"></i>
                </div>
                <h5>Quality Assurance</h5>
                <p>Premium materials guaranteed</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <h4>Stay Updated</h4>
            <p>Subscribe to get notified about new products and offers</p>
            <form class="form-inline justify-content-center">
                <div class="form-group mx-sm-2 mb-2">
                    <input type="email" class="form-control" placeholder="Your email">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<style>
    /* Custom Styles */
    .hero-banner {
        padding: 100px 0;
        margin-bottom: 30px;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
    }

    .section-subtitle {
        color: #6c757d;
        margin-bottom: 30px;
    }

    .product-card {
        border: none;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-image-wrapper {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .product-card:hover .product-overlay {
        opacity: 1;
    }

    .btn-quick-view {
        background: #fff;
        color: #333;
        border: none;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: 500;
    }

    .product-title {
        font-weight: 600;
        color: #333;
    }

    .size-label {
        font-size: 0.9rem;
        margin-bottom: 8px;
        color: #6c757d;
    }

    .size-buttons .btn {
        border-radius: 5px;
        margin: 0 2px;
        padding: 3px 8px;
    }

    .whatsapp-btn {
        background: #25D366;
        border: none;
        border-radius: 5px;
        padding: 10px;
        font-weight: 500;
    }

    .whatsapp-btn:hover {
        background: #128C7E;
    }

    .feature-item {
        padding: 20px;
    }

    .feature-icon {
        color: #007bff;
    }

    .breadcrumb {
        background: transparent;
        padding: 0;
    }
</style>

<?php require_once 'include/footer.php'; ?>