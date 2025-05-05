<?php
include('../includes/config.php');

// Check if ID is posted
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and bind
    $stmt = $conn->prepare("CALL delete_user(?)");
    $stmt->bind_param("i", $id);  // "i" means integer
    $stmt->execute();

    echo "User deleted successfully!";
    $stmt->close();
} else {
    echo "Please provide user ID!";
}

$conn->close();
?>
