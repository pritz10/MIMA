<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dance Wear Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6a11cb;
            --secondary: #2575fc;
            --accent: #ff4e50;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #28a745;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        
        .hero-banner {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 80px 0;
            color: white;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,224C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-position: bottom;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        .section-subtitle {
            color: #6c757d;
            margin-bottom: 50px;
            font-size: 1.1rem;
        }
        
        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .product-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 280px;
        }
        
        .product-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-image-wrapper img {
            transform: scale(1.05);
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
            background: white;
            color: var(--primary);
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, background 0.3s ease;
        }
        
        .btn-quick-view:hover {
            transform: translateY(-3px);
            background: var(--light);
        }
        
        .product-title {
            font-weight: 600;
            color: var(--dark);
            font-size: 1.3rem;
            margin-top: 15px;
        }
        
        .product-description {
            color: #6c757d;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .size-label {
            font-size: 0.9rem;
            margin-bottom: 10px;
            color: #6c757d;
            font-weight: 500;
        }
        
        .size-buttons .btn {
            border-radius: 5px;
            margin: 0 3px 5px 0;
            padding: 5px 12px;
            border: 1px solid #dee2e6;
            font-size: 0.85rem;
            transition: all 0.2s ease;
        }
        
        .size-buttons .btn:hover, .size-buttons .btn.active {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border-color: transparent;
        }
        
        .whatsapp-btn {
            background: linear-gradient(to right, #25D366, #128C7E);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 500;
            width: 100%;
            margin-top: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .whatsapp-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
            background: linear-gradient(to right, #20bd5f, #0e7a5f);
        }
        
        .feature-section {
            background: linear-gradient(to right, #f5f7fa, #c3cfe2);
            padding: 60px 0;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .feature-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .newsletter-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 80px 0;
            color: white;
        }
        
        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
        }
        
        .newsletter-input {
            padding: 15px 20px;
            border-radius: 50px 0 0 50px;
            border: none;
            width: 70%;
        }
        
        .newsletter-btn {
            padding: 15px 30px;
            border-radius: 0 50px 50px 0;
            background: var(--accent);
            border: none;
            color: white;
            font-weight: 600;
        }
        
        .footer {
            background: var(--dark);
            color: white;
            padding: 40px 0;
        }
        
        /* Modal Styles */
        .modal-content {
            border-radius: 15px;
            overflow: hidden;
            border: none;
        }
        
        .modal-header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
        }
        
        .modal-product-image {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .modal-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .product-image-wrapper {
                height: 220px;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container text-center position-relative">
            <h1 class="hero-title">Premium Dance Wear</h1>
            <p class="hero-subtitle">Experience the perfect blend of comfort, style, and performance with our premium dance apparel collection</p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Collection</h2>
            <p class="section-subtitle">Discover our premium dance apparel designed for comfort and performance</p>
        </div>

        <div class="row">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="product-card card h-100">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=634&q=80" alt="Premium Hoodie">
                        <div class="product-overlay">
                            <button class="btn btn-quick-view" data-bs-toggle="modal" data-bs-target="#productModal1">
                                <i class="fas fa-eye me-2"></i>Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="product-title">Premium Dance Hoodie</h5>
                        <p class="product-description">Crafted with high-quality materials to keep you warm and comfortable all season long. Features thick soft fabric and fleece-lined hood.</p>
                        
                        <div class="size-section mb-3">
                            <p class="size-label">Available Sizes:</p>
                            <div class="btn-group btn-group-sm size-buttons" role="group">
                                <button type="button" class="btn">XS</button>
                                <button type="button" class="btn">S</button>
                                <button type="button" class="btn">M</button>
                                <button type="button" class="btn">L</button>
                                <button type="button" class="btn">XL</button>
                                <button type="button" class="btn">XXL</button>
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn whatsapp-btn">
                                <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="product-card card h-100">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=700&q=80" alt="Performance Hoodie">
                        <div class="product-overlay">
                            <button class="btn btn-quick-view" data-bs-toggle="modal" data-bs-target="#productModal2">
                                <i class="fas fa-eye me-2"></i>Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="product-title">Performance Hoodie</h5>
                        <p class="product-description">Designed for dancers who demand both style and functionality. Excellent warmth with maximum mobility for practice sessions.</p>
                        
                        <div class="size-section mb-3">
                            <p class="size-label">Available Sizes:</p>
                            <div class="btn-group btn-group-sm size-buttons" role="group">
                                <button type="button" class="btn">XS</button>
                                <button type="button" class="btn">S</button>
                                <button type="button" class="btn">M</button>
                                <button type="button" class="btn">L</button>
                                <button type="button" class="btn">XL</button>
                                <button type="button" class="btn">XXL</button>
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn whatsapp-btn">
                                <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="product-card card h-100">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Performance T-Shirt">
                        <div class="product-overlay">
                            <button class="btn btn-quick-view" data-bs-toggle="modal" data-bs-target="#productModal3">
                                <i class="fas fa-eye me-2"></i>Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="product-title">Breathable Dance Tee</h5>
                        <p class="product-description">Moisture-wicking fabric keeps you dry and comfortable during intense dance sessions. Perfect for practice and performances.</p>
                        
                        <div class="size-section mb-3">
                            <p class="size-label">Available Sizes:</p>
                            <div class="btn-group btn-group-sm size-buttons" role="group">
                                <button type="button" class="btn">XS</button>
                                <button type="button" class="btn">S</button>
                                <button type="button" class="btn">M</button>
                                <button type="button" class="btn">L</button>
                                <button type="button" class="btn">XL</button>
                                <button type="button" class="btn">XXL</button>
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn whatsapp-btn">
                                <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="feature-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 feature-item mb-5 mb-md-0">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h5 class="feature-title">Fast Delivery</h5>
                    <p>Quick shipping across India</p>
                </div>
                <div class="col-md-4 feature-item mb-5 mb-md-0">
                    <div class="feature-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h5 class="feature-title">Easy Returns</h5>
                    <p>7-day return policy</p>
                </div>
                <div class="col-md-4 feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h5 class="feature-title">Quality Assurance</h5>
                    <p>Premium materials guaranteed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container text-center">
            <h3 class="mb-4">Stay Updated</h3>
            <p class="mb-4">Subscribe to get notified about new products and exclusive offers</p>
            <form class="newsletter-form">
                <div class="input-group">
                    <input type="email" class="form-control newsletter-input" placeholder="Your email address">
                    <button class="btn newsletter-btn" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>© 2023 Dance Wear Store. All rights reserved.</p>
            <div class="mt-3">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- Product Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="productModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Premium Dance Hoodie</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=634&q=80" alt="Premium Hoodie" class="modal-product-image">
                        </div>
                        <div class="col-md-6">
                            <h4>Premium Dance Hoodie</h4>
                            <p class="modal-price">₹2,499</p>
                            <p>Crafted with high-quality materials to keep you warm and comfortable all season long. The fabric is thick and soft, and the stitching is durable. Plus, the hood is lined with fleece for extra warmth.</p>
                            
                            <div class="size-section mb-3">
                                <p class="size-label">Select Size:</p>
                                <div class="btn-group btn-group-sm size-buttons" role="group">
                                    <button type="button" class="btn">XS</button>
                                    <button type="button" class="btn">S</button>
                                    <button type="button" class="btn active">M</button>
                                    <button type="button" class="btn">L</button>
                                    <button type="button" class="btn">XL</button>
                                    <button type="button" class="btn">XXL</button>
                                </div>
                            </div>
                            
                            <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn whatsapp-btn mt-3">
                                <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="productModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Performance Hoodie</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=700&q=80" alt="Performance Hoodie" class="modal-product-image">
                        </div>
                        <div class="col-md-6">
                            <h4>Performance Hoodie</h4>
                            <p class="modal-price">₹2,299</p>
                            <p>Designed for dancers who demand both style and functionality. Excellent warmth with maximum mobility for practice sessions. Features moisture-wicking technology and reinforced stitching.</p>
                            
                            <div class="size-section mb-3">
                                <p class="size-label">Select Size:</p>
                                <div class="btn-group btn-group-sm size-buttons" role="group">
                                    <button type="button" class="btn">XS</button>
                                    <button type="button" class="btn">S</button>
                                    <button type="button" class="btn active">M</button>
                                    <button type="button" class="btn">L</button>
                                    <button type="button" class="btn">XL</button>
                                    <button type="button" class="btn">XXL</button>
                                </div>
                            </div>
                            
                            <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn whatsapp-btn mt-3">
                                <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="productModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Breathable Dance Tee</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Breathable Dance Tee" class="modal-product-image">
                        </div>
                        <div class="col-md-6">
                            <h4>Breathable Dance Tee</h4>
                            <p class="modal-price">₹1,499</p>
                            <p>This T-shirt is made of high-quality materials that will keep you sweat-free and comfortable during all dance seasons. Features advanced moisture-wicking technology and four-way stretch for maximum mobility.</p>
                            
                            <div class="size-section mb-3">
                                <p class="size-label">Select Size:</p>
                                <div class="btn-group btn-group-sm size-buttons" role="group">
                                    <button type="button" class="btn">XS</button>
                                    <button type="button" class="btn">S</button>
                                    <button type="button" class="btn active">M</button>
                                    <button type="button" class="btn">L</button>
                                    <button type="button" class="btn">XL</button>
                                    <button type="button" class="btn">XXL</button>
                                </div>
                            </div>
                            
                            <a href="https://api.whatsapp.com/send?phone=+918918212479" class="btn whatsapp-btn mt-3">
                                <i class="fab fa-whatsapp me-2"></i> Order via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Add active class to size buttons when clicked
        $(document).ready(function() {
            $('.size-buttons .btn').click(function() {
                $(this).parent().find('.btn').removeClass('active');
                $(this).addClass('active');
            });
            
            // Animate elements on scroll
            function animateElements() {
                $('.product-card').each(function() {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    
                    if (scroll + windowHeight - 100 > position) {
                        $(this).addClass('animate__fadeInUp');
                    }
                });
            }
            
            // Initial call
            animateElements();
            
            // Call on scroll
            $(window).scroll(function() {
                animateElements();
            });
        });
    </script>
</body>
</html>