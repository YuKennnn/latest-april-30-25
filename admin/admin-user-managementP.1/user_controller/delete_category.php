<?php
include('../includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['category_name'] ?? '');

    $stmt = $conn->prepare("DELETE FROM categories WHERE name = ?");
    $stmt->bind_param("s", $name);
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "deleted";
        } else {
            echo "not_found";
        }
    } else {
        echo "error";
    }
}
?>
