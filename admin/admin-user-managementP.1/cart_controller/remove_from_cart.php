<?php
include('../includes/config.php');

$user_id = $_POST['user_id'];
$cart_item_id = $_POST['cart_item_id'];

// Call the stored procedure
$query = "CALL remove_from_cart(?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $user_id, $cart_item_id);
$stmt->execute();

if ($stmt->error) {
    echo "Error: " . $stmt->error;
} else {
    echo "Product removed from cart successfully!";
}

$stmt->close();
?>
