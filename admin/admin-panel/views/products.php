<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style-sidebar.css">
    <title>Products</title>

</head>
<body>
<!-- Sidebar -->
<div class="sidebar bg-success text-white" id="sidebar">
  <div class="sidebar-header p-3 border-bottom border-light-subtle">
    <h5><i class="bi bi-gear-fill me-2"></i>Admin Panel</h5>
  </div>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link text-white bg-success-emphasis" href="../views/index.php" style="transition: all 0.3s ease;">
        <i class="bi bi-house-door-fill me-2"></i>Home
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="../views/products.php" style="font-weight: 700; background-color:rgb(26, 175, 106);">
        <i class="bi bi-box-seam-fill me-2"></i>Products
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="../views/orders.php" style="transition: all 0.3s ease;">
        <i class="bi bi-cart-fill me-2"></i>Orders
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="../views/pre-built-orders.php" style="transition: all 0.3s ease;">
        <i class="bi bi-pc-display me-2"></i>Pre-Built Orders
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white dropdown-toggle" href="#logsSubmenu" data-bs-toggle="collapse" style="transition: all 0.3s ease;">
        <i class="bi bi-journal-text me-2"></i>Logs
      </a>
      <ul class="collapse nav flex-column ms-3" id="logsSubmenu">
        <li class="nav-item">
          <a class="nav-link text-white" href="#" style="transition: all 0.3s ease;">
            <i class="bi bi-person-fill-lock me-2"></i>Login Logs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="transaction.php" style="transition: all 0.3s ease; ">
            <i class="bi bi-receipt me-2"></i>Transaction Logs
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item mt-auto">
    <button class="btn btn-outline-light m-3" data-bs-toggle="modal" data-bs-target="#signOutModal">
        <i class="bi bi-box-arrow-right me-2"></i>Sign out
    </button>
    </li>
  </ul>
</div>

<!-- Main Content -->
<div class="container-fluid" style="margin-left: 250px; padding: 20px; max-width: calc(100% - 250px);">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Product List</h2>
            
            <!-- Search and Filter Row -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <input type="search" class="form-control border-success" placeholder="Search products...">
                </div>
                <div class="col-md-3">
                    <select class="form-select border-success">
                        <option value="">Filter by Brand</option>
                        <option value="amd">AMD</option>
                        <option value="intel">Intel</option>
                        <option value="nvidia">NVIDIA</option>
                    </select>
                </div>
                <div class="col-md-3 ms-auto">
                    <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#productModal">
                        <i class="bi bi-plus-circle me-2"></i>Add Product
                    </button>
                </div>
            </div>

            <!-- Products Table -->
            <div class="card border-success shadow-sm mb-4">
                <div class="card-header bg-success text-white py-3">
                    <h5 class="mb-0">Products List</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr class="bg-light">
                                    <th class="py-3 px-4" style="width: 5%">ID</th>
                                    <th class="py-3 px-4" style="width: 30%">Product Name</th>
                                    <th class="py-3 px-4" style="width: 15%">Brand</th>
                                    <th class="py-3 px-4" style="width: 15%">Stocks</th>
                                    <th class="py-3 px-4" style="width: 15%">Price</th>
                                    <th class="py-3 px-4 text-end" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4">
                                        <span class="fw-bold text-success">#1</span>
                                    </td>
                                    <td class="px-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-success-subtle rounded-3 p-2 me-3">
                                                <i class="bi bi-cpu-fill text-success fs-4"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Ryzen 69</h6>
                                                <small class="text-muted">High-Performance Processor</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        <span class="badge bg-success-subtle text-success px-3 py-2">AMD</span>
                                    </td>
                                    <td class="px-4">
                                        <div class="ms-3">
                                            <div>12</div>
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        <span class="fw-semibold">₱4,000</span>
                                    </td>
                                    <td class="px-4 text-end">
                                        <button class="btn btn-outline-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editproductModal">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Add more rows with similar structure -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-light py-3">
                    <nav class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small">Showing 1 to 10 of I miss you</span>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link bg-success border-success">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Products Grid -->
            <h2 class="mb-4">Featured Products</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-success">
                        <img src="../images/logo.png" class="card-img-top p-3" alt="Product Image" style="height: 200px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title text-success">Ryzen 69</h5>
                            <p class="card-text text-muted">AMD High-Performance Processor</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">₱4,000</span>
                                <span class="badge bg-success">In Stock</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other product cards -->
            </div>
        </div>
    </div>
</div>

<!-- Modals starts here -->
<div class="modal fade" id="productModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="../database/add-product/add_product.php" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Add New Product</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="position-relative mb-3">
                                <div class="bg-light rounded p-3 mb-3" style="min-height: 200px;">
                                    <img id="productImagePreview" src="../images/logo.png" alt="Product Preview" 
                                         class="img-fluid rounded" style="max-height: 200px; object-fit: contain;">
                                </div>
                                <div class="d-grid">
                                    <label class="btn btn-outline-success">
                                        <i class="bi bi-upload me-2"></i>Upload Image
                                        <input type="file" name="product_image" class="d-none" 
                                               accept="image/*" onchange="previewImage(event)">
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-switch d-flex justify-content-center align-items-center mb-3">
                                <input class="form-check-input me-2" type="checkbox" id="productVisibility" checked>
                                <label class="form-check-label" for="productVisibility">
                                    Product Visibility
                                </label>
                            </div>
                            <div class="badge bg-success-subtle text-success p-2">
                                <i class="bi bi-box-seam me-1"></i>
                                New Product
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" name="product_name" class="form-control border-success" 
                                           placeholder="Enter product name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Brand</label>
                                    <select name="brand" class="form-select border-success" required>
                                        <option value="">Select brand</option>
                                        <option value="AMD">AMD</option>
                                        <option value="Intel">Intel</option>
                                        <option value="NVIDIA">NVIDIA</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <select name="category" class="form-select border-success" required>
                                        <option value="">Select category</option>
                                        <option value="Processor">Processor</option>
                                        <option value="Graphics Card">Graphics Card</option>
                                        <option value="Memory">Memory</option>
                                        <option value="Storage">Storage</option>
                                        <option value="Motherboard">Motherboard</option>
                                        <option value="Power Supply">Power Supply</option>
                                        <option value="Case">Case</option>
                                        <option value="Cooling">Cooling</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Price (₱)</label>
                                    <div class="input-group">
                                        <span class="input-group-text border-success bg-success text-white">₱</span>
                                        <input type="number" name="price" class="form-control border-success" 
                                               step="0.01" placeholder="0.00" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Initial Stock</label>
                                    <div class="input-group">
                                        <input type="number" name="stocks" class="form-control border-success" 
                                               placeholder="0" required>
                                        <span class="input-group-text border-success">units</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Product Description</label>
                                    <textarea name="description" class="form-control border-success" 
                                              rows="3" placeholder="Enter product description"></textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Specifications</label>
                                    <div id="specificationFields">
                                        <div class="input-group mb-2">
                                            <input type="text" name="spec_key[]" class="form-control border-success" 
                                                   placeholder="Specification name">
                                            <input type="text" name="spec_value[]" class="form-control border-success" 
                                                   placeholder="Value">
                                            <button type="button" class="btn btn-outline-danger" onclick="removeSpec(this)">
                                                <i class="bi bi-dash-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-success btn-sm" onclick="addSpecField()">
                                        <i class="bi bi-plus-lg me-1"></i>Add Specification
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit_product" class="btn btn-success">
                        <i class="bi bi-plus-circle me-1"></i>Add Product
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal fade" id="editproductModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="../database/add-product/add_product.php">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="position-relative">
                                <img src="../images/logo.png" alt="Product Image" class="img-fluid rounded mb-3" style="max-height: 200px; object-fit: contain;">
                                <div class="mt-2">
                                    <button type="button" class="btn btn-outline-success btn-sm">
                                        <i class="bi bi-upload me-1"></i>Change Image
                                    </button>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="badge bg-success mb-2">Current Status: Active</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="productStatus" checked>
                                    <label class="form-check-label" for="productStatus">Product Visibility</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="product_name" class="form-control border-success" value="Ryzen 69" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Brand</label>
                                    <select name="brand" class="form-select border-success" required>
                                        <option value="AMD" selected>AMD</option>
                                        <option value="Intel">Intel</option>
                                        <option value="NVIDIA">NVIDIA</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <select name="category" class="form-select border-success" required>
                                        <option value="Processor" selected>Processor</option>
                                        <option value="Graphics Card">Graphics Card</option>
                                        <option value="Memory">Memory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Price (₱)</label>
                                    <input type="number" step="0.01" name="price" class="form-control border-success" value="4000" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Stock Quantity</label>
                                    <input type="number" name="stocks" class="form-control border-success" value="12" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Product Description</label>
                                <textarea name="description" class="form-control border-success" rows="3">High-performance AMD processor for gaming and content creation.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="update_product" class="btn btn-success">
                        <i class="bi bi-check-lg me-1"></i>Save Changes
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Delete Product Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Delete Product</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <i class="bi bi-exclamation-triangle text-danger" style="font-size: 4rem;"></i>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="../images/logo.png" alt="Product Image" class="rounded me-3" style="height: 60px; width: 60px; object-fit: contain;">
                    <div>
                        <h5 class="mb-1">Ryzen 69</h5>
                        <p class="text-muted mb-0">AMD Processor</p>
                    </div>
                </div>
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    This action cannot be undone. The product will be permanently removed from the system.
                </div>
                <div class="mb-3">
                    <label class="form-label">Type "DELETE" to confirm</label>
                    <input type="text" class="form-control" id="deleteConfirmation" placeholder="DELETE">
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete" disabled>
                    <i class="bi bi-trash-fill me-1"></i>Delete Product
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// Add this JavaScript for delete confirmation
document.getElementById('deleteConfirmation').addEventListener('input', function() {
    document.getElementById('confirmDelete').disabled = this.value !== 'DELETE';
});

function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById('productImagePreview');
        preview.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

function addSpecField() {
    const container = document.getElementById('specificationFields');
    const newField = document.createElement('div');
    newField.className = 'input-group mb-2';
    newField.innerHTML = `
        <input type="text" name="spec_key[]" class="form-control border-success" placeholder="Specification name">
        <input type="text" name="spec_value[]" class="form-control border-success" placeholder="Value">
        <button type="button" class="btn btn-outline-danger" onclick="removeSpec(this)">
            <i class="bi bi-dash-lg"></i>
        </button>
    `;
    container.appendChild(newField);
}

function removeSpec(button) {
    button.closest('.input-group').remove();
}
</script>
<!-- Sign Out Confirmation Modal -->
<div class="modal fade" id="signOutModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Sign Out Confirmation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center py-4">
                <div class="mb-4">
                    <i class="bi bi-question-circle text-success" style="font-size: 3rem;"></i>
                </div>
                <h5 class="mb-3">Are you sure you want to sign out?</h5>
                <p class="text-muted mb-0">You will be redirected to the home page.</p>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg me-2"></i>Cancel
                </button>
                <a href="../../../guest/missyubb/Authentication/main/index.php" class="btn btn-danger">
                    <i class="bi bi-check-lg me-2"></i>Yes, Sign Out
                </a>
            </div>
        </div>
    </div>
</div>


</body>
</html>