<?php
require '../includes/config.php';

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';

$query = "SELECT * FROM products";
if (!empty($category_id)) {
    $query .= " WHERE category_id = ?";
}

$stmt = $conn->prepare($query);

if (!empty($category_id)) {
    $stmt->bind_param("i", $category_id);
}

$stmt->execute();
$result = $stmt->get_result();

while ($product = $result->fetch_assoc()):
?>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $product['name'] ?></h5>
                <p class="card-text"><?= $product['description'] ?></p>
                <p class="card-text">$<?= $product['price'] ?></p>
                <div class="d-flex">
                    <button class="btn btn-primary me-2">Add to Cart</button>
                    <button class="btn btn-success buy-now">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
