<?php
include('../includes/config.php');  // Include database connection

// Fetch all users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Check if there are any users
if ($result && mysqli_num_rows($result) > 0) {
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;  // Add each user to the array
    }
    // Return users data as JSON
    echo json_encode($users);
} else {
    // No users found
    echo json_encode([]);
}
?>
