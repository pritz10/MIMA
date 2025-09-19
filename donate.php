<?php
$title = "Donate Us";
require_once 'include/header.php'; // Ensure this file establishes $connect
?>

<style>
    /* Custom CSS for the hero banner */
    .hero-banner {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('path/to/your/dance-bg.jpg') center center no-repeat; /* Replace with a suitable image */
        background-size: cover;
        min-height: 250px; /* Adjust as needed */
        color: white;
        display: flex; /* Use flexbox for vertical centering */
        align-items: center; /* Center content vertically */
        justify-content: center; /* Center content horizontally */
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Optional: for better text readability */
        padding: 20px; /* Add some padding */
    }

    /* Optional: Adjust card image alignment on smaller screens if needed */
    @media (max-width: 767.98px) {
        .card-img-right {
            margin-top: 1rem;
            width: 150px; /* Smaller image on mobile */
            height: 150px;
            align-self: center; /* Center the image */
            display: block; /* Ensure it takes full width of its container on small screens */
            margin-left: auto;
            margin-right: auto;
        }
        .card.flex-md-row {
            flex-direction: column !important; /* Stack items vertically on small screens */
            text-align: center;
        }
        .card-body.d-flex {
            align-items: center !important; /* Center text content */
        }
        .card-img-right.d-none.d-lg-block { /* Hide for desktop, show for mobile */
             display: block !important;
        }
    }
    .breadcrumb-item a {
        color: #007bff; /* Bootstrap primary blue for links */
        text-decoration: none;
    }
    .breadcrumb-item.active {
        color: #6c757d; /* Muted color for active item */
    }
    .title {
        font-weight: 700;
        color: #343a40; /* Darker color for main titles */
    }
</style>

 <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li style="color:blanchedalmond">
                  <a href="index">Home</a>
                  <span>/</span>
               </li>
               <li style="color:blanchedalmond">Donate Us</li>
            </ul>
         </div>
      </div>      
<section class="py-lg-5 py-md-4 py-3">
    <div class="container">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-3">Support Our Initiatives</h3>
        
        <!-- Main Initiative Section -->
        <div class="bg-dark text-white p-5 rounded mb-5 shadow-sm">
            <div class="col-md-8 mx-auto text-center"> <!-- Centered content -->
                <h1 class="display-5 font-italic mb-3">MIM Dance Academy Initiative</h1>
                <p class="lead my-3">Your generous contributions help us foster talent and support crucial community efforts. Learn more about our initiatives below.</p>
            </div>
        </div>

        <!-- Donation Cards Row -->
        <div class="row mb-4">
            <?php
            // Assuming $connect is established in header.php or included earlier
            if (isset($connect)) {
                $sql = "SELECT title, description, imageurl, bankdetails FROM donate ORDER BY Id DESC";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-md-6 mb-4">
                            <div class="card flex-md-row h-100 shadow-sm">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-success"><?php echo htmlspecialchars($row['title']); ?></strong>
                                    <p class="card-text mb-3"><?php echo htmlspecialchars($row['description']); ?></p>
                                    <p class="text-muted small">
                                        <strong>Bank Account/Details:</strong> <?php echo htmlspecialchars($row['bankdetails']); ?> <br>
                                        <!-- You might want to break down bankdetails into separate fields like IFSC, Name, Account Number in your DB for better presentation -->
                                        <!-- Example:
                                        <strong>IFSC:</strong> <?php // echo htmlspecialchars($row['ifsc']); ?> <br>
                                        <strong>Name:</strong> <?php // echo htmlspecialchars($row['account_name']); ?>
                                        -->
                                    </p>
                                </div>
                                <img class="card-img-right flex-auto d-none d-lg-block p-3" src="<?php echo htmlspecialchars($row['imageurl']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?> QR Code" style="width: 200px; height: 200px; object-fit: contain;">
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="col-12"><p class="text-center">No donation initiatives available at the moment. Please check back later!</p></div>';
                }
            } else {
                echo '<div class="col-12"><p class="text-danger text-center">Database connection not established.</p></div>';
            }
            ?>
        </div>

        <!-- Disclaimer Section -->
        <div class="alert alert-info p-4 rounded" role="alert">
            <h5 class="alert-heading">Disclaimer:</h5>
            <p>Your donations are greatly appreciated and contribute directly to our stated causes. We ensure transparency and accountability in the utilization of all funds.</p>
            <hr>
            <p class="mb-0 small">For any queries regarding donations or our initiatives, please do not hesitate to contact us.</p>
        </div>
    </div>
</section>

<?php require_once 'include/footer.php';?>