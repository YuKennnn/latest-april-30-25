<?php
include('includes/config.php');

// Fetch categories
$categories = mysqli_query($conn, "SELECT * FROM categories");

// Fetch products
$products = mysqli_query($conn, "SELECT * FROM products");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <!-- Latest Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>User Management</h2>

        <!-- Form to Add User -->
        <div>
            <h3>Add User</h3>
            <form id="addUserForm">
                <input type="text" id="name" class="form-control" placeholder="Enter Name" required>
                <input type="email" id="email" class="form-control mt-2" placeholder="Enter Email" required>
                <button type="submit" class="btn btn-primary mt-2">Add User</button>
            </form>
        </div>

        <!-- Display Users List -->
        <div class="mt-4">
            <button id="getUsersBtn" class="btn btn-info">Get Users</button>
            <div id="usersList" class="mt-2"></div>
        </div>
    </div>
    <div class="container border">
    <table id="usersTable" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <!-- Users will be populated here -->
        </tbody>
    </table>
    </div>

    <!-- adding -->
    <div class="container mt-5">
    <h2 class="mb-4">Computer Shop Admin</h2>

    <!-- Add Category Form -->
    <form id="categoryForm" class="mb-3">
    <div class="input-group">
        <input type="text" name="category_name" class="form-control" placeholder="Enter category name" required>
        <button type="submit" class="btn btn-primary">Add Category</button>
        <button type="button" id="removeCategoryBtn" class="btn btn-danger">Remove Category</button>
    </div>
    <small id="categoryMsg" class="text-muted"></small>
    </form>


    <!-- Add Product Form -->
    <div class="card">
        <div class="card-header">Add Product</div>
        <div class="card-body">
        <form id="productForm">
            <input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" required>
            <textarea name="description" class="form-control mb-2" placeholder="Description" required></textarea>
            <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Price" required>
            <input type="number" name="stock" class="form-control mb-2" placeholder="Stock" required>
            <select name="category_id" class="form-control mb-2" required>
            <option value="">Select Category</option>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM categories");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['id']}'>{$row['name']}</option>";
            }
            ?>
            </select>
            <button type="submit" class="btn btn-success">Add Product</button>
            <div id="productMsg" class="mt-2 text-success"></div>
        </form>
        </div>
    </div>
    </div>

    <!-- categories -->
    <div class="container mt-5 mb-5">
        <h1>Computer Parts</h1>
        
        <!-- Category Filter -->
        <select id="categoryFilter">
            <option value="">Select Category</option>
            <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endwhile; ?>
        </select>

        <!-- Products List -->
        <div id="productList" class="row mt-4">
            <?php while ($product = mysqli_fetch_assoc($products)): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['name'] ?></h5>
                            <p class="card-text"><?= $product['description'] ?></p>
                            <p class="card-text">$<?= $product['price'] ?></p>
                            <div class="d-flex">
                                <button class="btn btn-primary me-2">
                                    Add to Cart
                                </button>
                                <button class="btn btn-success buy-now">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>





    <!-- Latest Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add User via AJAX
        $('#addUserForm').submit(function(e) {
            e.preventDefault();  // Prevent the form from submitting normally
            var name = $('#name').val();
            var email = $('#email').val();

            // Check if name and email are filled
            if (name && email) {
                $.ajax({
                    type: 'POST',
                    url: 'user_controller/add_user.php',  // Updated path
                    data: {
                        name: name,
                        email: email
                    },
                    success: function(response) {
                        alert(response);  // Show the response from the PHP script
                        // Reset the form
                        $('#addUserForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + ": " + error);
                    }
                });
            } else {
                alert("Please fill out both name and email fields.");
            }
        });

        // Get Users List via AJAX
        $('#getUsersBtn').click(function() {
            $.ajax({
                type: 'GET',
                url: 'user_controller/get_users.php',  // Path to your PHP file
                success: function(response) {
                    // Parse the JSON response
                    var users = JSON.parse(response);

                    // Clear any existing rows in the table
                    $('#usersTable tbody').empty();

                    // Check if there are any users
                    if (users.length > 0) {
                        // Loop through each user and create a new table row
                        users.forEach(function(user) {
                            var row = `<tr>
                                <td>${user.id}</td>
                                <td>${user.name}</td>
                                <td>${user.email}</td>
                                <td>${user.created_at}</td>
                            </tr>`;
                            $('#usersTable tbody').append(row);
                        });
                    } else {
                        // If no users are found, display a message
                        $('#usersTable tbody').append('<tr><td colspan="4">No users found</td></tr>');
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error: " + status + ": " + error);
                }
            });
        });
    </script>

    <!-- adding category -->
    <script>
    $('#categoryForm').submit(function(e) {
    e.preventDefault();
    $.post('user_controller/add_category.php', $(this).serialize(), function(response) {
        if (response === "success") {
        $('#categoryMsg').text("Category added!");
        } else if (response === "duplicate") {
        $('#categoryMsg').text("Category already exists!");
        } else {
        $('#categoryMsg').text("Error adding category.");
        }
    });
    });
    </script>
    <!-- removing category -->
    <script>
        $('#removeCategoryBtn').click(function() {
        const categoryName = $('input[name="category_name"]').val().trim();
        if (!categoryName) {
            $('#categoryMsg').text("Enter a category name to remove.");
            return;
        }

        $.post('user_controller/delete_category.php', { category_name: categoryName }, function(response) {
            if (response === "deleted") {
            $('#categoryMsg').text("Category removed!");
            } else if (response === "not_found") {
            $('#categoryMsg').text("Category not found.");
            } else {
            $('#categoryMsg').text("Error removing category.");
            }
        });
        });
    </script>

    <!-- adding products -->
    <script>
        $('#productForm').submit(function(e) {
        e.preventDefault();
        $.post('user_controller/add_product.php', $(this).serialize(), function(response) {
            if (response === "success") {
            $('#productMsg').text("Product added!");
            } else if (response === "duplicate") {
            $('#productMsg').text("Product already exists in this category!");
            } else {
            $('#productMsg').text("Error adding product.");
            }
        });
        });
    </script>
    



    
        <!-- script for categories -->
        <script>
        document.getElementById('categoryFilter').addEventListener('change', function() {
            const categoryId = this.value;

            // Simple AJAX to get filtered products
            fetch('ajax/filter_products.php?category_id=' + categoryId)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('productList').innerHTML = html;
                })
                .catch(error => console.error('Error:', error));
        });
        </script>

</body>
</html>
