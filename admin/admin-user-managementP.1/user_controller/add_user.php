<?php
include('../includes/config.php');

// Check if data is posted
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare and bind
    $stmt = $conn->prepare("CALL add_user(?, ?)");
    $stmt->bind_param("ss", $name, $email);  // "ss" means 2 strings
    $stmt->execute();

    echo "User added successfully!";
    $stmt->close();
} else {
    echo "Please provide both name and email!";
}

$conn->close();
?>
