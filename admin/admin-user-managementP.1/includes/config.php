<?php
// config.php
$servername = "localhost";  // Update with your server name
$username = "root";         // Update with your MySQL username
$password = "";             // Update with your MySQL password
$dbname = "peasy"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
