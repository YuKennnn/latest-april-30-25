<?php
$db_host = "127.0.0.1";  // Or "localhost"
$db_username = "root";
$db_password = "";
$db_name = "peasy";
$db_port = 3307; // ✅ Specify the correct port

try {
    // Enable exception mode
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // ✅ Pass the port as the 5th argument
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

    echo "You are connected!";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .navbar-custom {
      padding: 15px 40px; /* Custom top/bottom and left/right padding */
    }
    .navbar-nav .nav-link {
      margin-right: 20px; /* Spacing between nav items */
    }
    .form-control {
      width: 300px; /* Limit search bar width */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success navbar-custom">
  <div class="container-fluid">

    <!-- Brand -->
    <a class="navbar-brand" href="#"><b>PEasy</b></a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarItems">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar items -->
    <div class="collapse navbar-collapse" id="navbarItems">
      <ul class="navbar-nav ms-auto align-items-center">
        <!-- Home icon -->
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><i class="bi bi-house-fill"></i> Home</a>
        </li>

        <!-- Search form -->

        <!-- Profile button -->
        <li class="nav-item">
          <a class="btn btn-primary ms-3" href="#">Profile</a>
        </li>

        <li class="nav-item px-4 py-1">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </li>
        
      </ul>
    </div>

  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
