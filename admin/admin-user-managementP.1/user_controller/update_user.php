<?php
include('../includes/config.php');

// Check if data is posted
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare and bind
    $stmt = $conn->prepare("CALL update_user(?, ?, ?)");
    $stmt->bind_param("iss", $id, $name, $email);  // "iss" means integer, string, string
    $stmt->execute();

    echo "User updated successfully!";
    $stmt->close();
} else {
    echo "Please provide user ID, name, and email!";
}

$conn->close();
?>
