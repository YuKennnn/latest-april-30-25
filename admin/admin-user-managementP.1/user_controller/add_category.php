<?php
include('../includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['category_name'] ?? '');

    // Check for duplicate
    $check = $conn->prepare("SELECT id FROM categories WHERE name = ?");
    $check->bind_param("s", $name);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "duplicate";
    } else {
        $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
        $stmt->bind_param("s", $name);
        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }
    }
}
?>
