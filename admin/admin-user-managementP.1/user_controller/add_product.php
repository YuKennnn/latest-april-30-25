<?php
include('../includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['product_name'] ?? '');
    $description = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? 0;
    $stock = $_POST['stock'] ?? 0;
    $category_id = $_POST['category_id'] ?? 0;

    $check = $conn->prepare("SELECT id FROM products WHERE name = ? AND category_id = ?");
    $check->bind_param("si", $name, $category_id);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "duplicate";
    } else {
        $stmt = $conn->prepare("INSERT INTO products (name, description, price, stock, category_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdii", $name, $description, $price, $stock, $category_id);
        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }
    }
}
?>
