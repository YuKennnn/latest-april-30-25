<?php
include('../includes/config.php');

$result = $conn->query("SELECT p.id, p.name, p.price, c.name AS category FROM products p JOIN categories c ON p.category_id = c.id ORDER BY p.id DESC");

$products = [];

while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);
?>
