<?php
include('../includes/config.php');

$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

// Call the stored procedure
$query = "CALL add_to_cart(?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("iii", $user_id, $product_id, $quantity);
$stmt->execute();

if ($stmt->error) {
    echo "Error: " . $stmt->error;
} else {
    echo "Product added to cart successfully!";
}

$stmt->close();
?>
