<?php
$title = "Dashboard";
require_once 'include/header.php';



// Handle Add Product
if (isset($_POST['add_product'])) {
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    $price = mysqli_real_escape_string($connect, $_POST['price']); // New price field

    // Handle image upload
    $target_dir = "uploads/";
    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $message = "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 5000000) { // 5MB limit
        $message = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $message = "Sorry, your file was not uploaded. " . $message;
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO store (Title, Description, ImageUrl, Price) VALUES ('$title', '$description', '$target_file', '$price')"; // Added Price
            if (mysqli_query($connect, $sql)) {
                $message = "New product added successfully!";
            } else {
                $message = "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
        } else {
            $message = "Sorry, there was an error uploading your file.";
        }
    }
}

// Handle Update Product
if (isset($_POST['edit_product'])) {
    $id = mysqli_real_escape_string($connect, $_POST['edit_id']);
    $title = mysqli_real_escape_string($connect, $_POST['edit_title']);
    $description = mysqli_real_escape_string($connect, $_POST['edit_description']);
    $price = mysqli_real_escape_string($connect, $_POST['edit_price']); // New price field
    $current_image = mysqli_real_escape_string($connect, $_POST['current_image']);

    $image_url = $current_image; // Default to current image

    // Handle new image upload if provided
    if (isset($_FILES["edit_image"]) && $_FILES["edit_image"]["error"] == 0) {
        $target_dir = "uploads/";
        $image_name = basename($_FILES["edit_image"]["name"]);
        $target_file = $target_dir . $image_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["edit_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $message .= "File is not an image for edit. ";
            $uploadOk = 0;
        }

        if ($_FILES["edit_image"]["size"] > 5000000) {
            $message .= "Sorry, your edit file is too large. ";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $message .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed for edit. ";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["edit_image"]["tmp_name"], $target_file)) {
                $image_url = $target_file;
            } else {
                $message .= "Sorry, there was an error uploading your new file. ";
            }
        }
    }

    $sql = "UPDATE store SET Title='$title', Description='$description', ImageUrl='$image_url', Price='$price' WHERE Id='$id'"; // Added Price
    if (mysqli_query($connect, $sql)) {
        $message .= "Product updated successfully!";
    } else {
        $message .= "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}


// Handle Delete Product
if (isset($_GET['delete'])) {
    $id = mysqli_real_escape_string($connect, $_GET['delete']);
    // Optional: Get image URL and delete the file from the server
    $sql_select_img = "SELECT ImageUrl FROM store WHERE Id = '$id'";
    $result_img = mysqli_query($connect, $sql_select_img);
    if ($result_img && mysqli_num_rows($result_img) > 0) {
        $row_img = mysqli_fetch_assoc($result_img);
        $image_path = $row_img['ImageUrl'];
        if (file_exists($image_path) && $image_path != "uploads/placeholder.jpg") { // Don't delete a default placeholder
            unlink($image_path);
        }
    }

    $sql = "DELETE FROM store WHERE Id='$id'";
    if (mysqli_query($connect, $sql)) {
        $message = "Product deleted successfully!";
        header("Location: store"); // Redirect to clear the GET parameter
        exit();
    } else {
        $message = "Error deleting record: " . mysqli_error($connect);
    }
}

// Fetch all products for display
$products_query = "SELECT * FROM store ORDER BY Id DESC";
$products_result = mysqli_query($connect, $products_query);
?>

<div class="inner_page-banner"></div>

<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb custom-breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
</div>

<section class="container mb-5 mt-4">
    <div class="text-center">
        <h2 class="section-title">Admin Dashboard</h2>
        <p class="section-subtitle">Manage your product collection</p>
    </div>

    <?php if ($message): ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <?php echo $message; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="d-flex justify-content-end mb-4">
        <button type="button" class="btn btn-primary btn-lg custom-add-btn" data-toggle="modal" data-target="#addProductModal">
            <i class="fas fa-plus-circle mr-2"></i> Add New Product
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-hover product-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th> <!-- New column header -->
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($products_result) > 0) {
                    while ($row = mysqli_fetch_assoc($products_result)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($row['Id']); ?></th>
                            <td><img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" alt="<?php echo htmlspecialchars($row['Title']); ?>" class="img-thumbnail dashboard-img"></td>
                            <td><?php echo htmlspecialchars($row['Title']); ?></td>
                            <td><?php echo htmlspecialchars(substr($row['Description'], 0, 70)); ?>...</td>
                            <td>₹<?php echo htmlspecialchars(number_format($row['Price'], 2)); ?></td> <!-- Display Price -->
                            <td>
                                <button class="btn btn-sm btn-info edit-btn"
                                    data-id="<?php echo htmlspecialchars($row['Id']); ?>"
                                    data-title="<?php echo htmlspecialchars($row['Title']); ?>"
                                    data-description="<?php echo htmlspecialchars($row['Description']); ?>"
                                    data-imageurl="<?php echo htmlspecialchars($row['ImageUrl']); ?>"
                                    data-price="<?php echo htmlspecialchars($row['Price']); ?>" <!-- Pass Price to modal -->
                                    data-toggle="modal" data-target="#editProductModal">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <a href="store?delete=<?php echo htmlspecialchars($row['Id']); ?>" class="btn btn-sm btn-danger delete-btn" onclick="return confirm('Are you sure you want to delete this product?');">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo '<tr><td colspan="6" class="text-center py-4 text-muted">No products found. Add a new product to get started!</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="store" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Product Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price (₹)</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" required min="0">
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="store" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="edit_id" name="edit_id">
                    <input type="hidden" id="current_image" name="current_image">
                    <div class="form-group">
                        <label for="edit_title">Product Title</label>
                        <input type="text" class="form-control" id="edit_title" name="edit_title" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_description">Description</label>
                        <textarea class="form-control" id="edit_description" name="edit_description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_price">Price (₹)</label>
                        <input type="number" step="0.01" class="form-control" id="edit_price" name="edit_price" required min="0">
                    </div>
                    <div class="form-group">
                        <label for="edit_image">Current Image</label>
                        <img id="edit_current_image_preview" src="" alt="Current Image" class="img-thumbnail mb-2" style="max-width: 150px;">
                        <input type="file" class="form-control-file" id="edit_image" name="edit_image" accept="image/*">
                        <small class="form-text text-muted">Leave blank to keep current image.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="edit_product" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
mysqli_close($connect); // Close the database connection
?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
    }

    :root {
        --primary-color: #7b68ee;
        --secondary-color: #f0e6fa;
        --text-dark: #343a40;
        --text-muted: #6c757d;
        --card-bg: #ffffff;
        --border-color: #e9ecef;
    }

    .inner_page-banner {
        height: 150px; /* Adjust as needed */
        background: url('path/to/your/banner-image.jpg') center center / cover no-repeat; /* Add a banner image or a solid color */
        background-color: var(--secondary-color); /* Fallback color */
    }

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

    .section-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2.8rem;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: var(--text-muted);
        margin-bottom: 3rem;
    }

    .custom-add-btn {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        font-weight: 600;
        padding: 10px 25px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .custom-add-btn:hover {
        background-color: #6a5acd; /* Slightly darker purple */
        border-color: #6a5acd;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-table {
        background-color: var(--card-bg);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden; /* Ensures rounded corners apply to table */
    }

    .product-table thead {
        background-color: var(--secondary-color);
        color: var(--text-dark);
        font-weight: 600;
    }

    .product-table th, .product-table td {
        padding: 1rem;
        vertical-align: middle;
        border-top: 1px solid var(--border-color);
    }

    .product-table tbody tr:hover {
        background-color: #f0f0f5; /* Light hover effect */
    }

    .dashboard-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid var(--border-color);
    }

    .edit-btn {
        background-color: #17a2b8;
        border-color: #17a2b8;
        margin-right: 5px;
    }
    .edit-btn:hover {
        background-color: #138496;
        border-color: #138496;
    }

    .delete-btn {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .delete-btn:hover {
        background-color: #c82333;
        border-color: #c82333;
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 15px;
        border: none;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .modal-header {
        border-bottom: 1px solid var(--border-color);
        padding: 1.5rem;
        background-color: var(--secondary-color);
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .modal-title {
        font-weight: 700;
        color: var(--text-dark);
    }

    .modal-body {
        padding: 2rem;
    }

    .modal-footer {
        border-top: 1px solid var(--border-color);
        padding: 1.5rem;
    }

    .modal .form-control-file {
        padding-top: 0.375rem; /* Align text better with file input */
    }

</style>

<script>
    $(document).ready(function() {
        // Populate Edit Product Modal when edit button is clicked
        $('#editProductModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var title = button.data('title');
            var description = button.data('description');
            var imageurl = button.data('imageurl');
            var price = button.data('price'); // Get price

            var modal = $(this);
            modal.find('.modal-body #edit_id').val(id);
            modal.find('.modal-body #edit_title').val(title);
            modal.find('.modal-body #edit_description').val(description);
            modal.find('.modal-body #edit_price').val(price); // Set price
            modal.find('.modal-body #current_image').val(imageurl);
            modal.find('.modal-body #edit_current_image_preview').attr('src', imageurl);
        });
    });
</script>

<?php require_once 'include/footer.php'; ?>