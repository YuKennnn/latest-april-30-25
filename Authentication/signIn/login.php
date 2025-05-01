<?php
session_start(); // Start session

// Message for login result
$message = '';
if (isset($_SESSION['login_message'])) {
    $message = $_SESSION['login_message'];
    unset($_SESSION['login_message']);
}


// Database connection
$db_host = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "peasy";
$db_port = 3307;

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

// Login check
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            // Success — matched
            $_SESSION['user_logged_in'] = true;
            header("Location: index.php");
            exit();
        } else {
            // Fail — no match
            $_SESSION['login_message'] = "<div class='popup-message error'>Invalid email or password.</div>";
            header("Location: login.php");
            exit();
        }
    } catch (Exception $e) {
        $_SESSION['login_message'] = "<div class='popup-message error'>Login error: " . $e->getMessage() . "</div>";
        header("Location: login.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Peasy Builder | Log In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/Authentication/signIn/login.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>


</head>


<body>

  <?php if (!empty($message)): ?>
  <div class="popup-container">
    <?= $message ?>
  </div>
  <?php endif; ?>
<div class="navbar"></div>

  <div class="container">



    <!-- <a class="mb-5" href="/Authentication/database.php"></a> -->

    <!-- <i class="bi bi-arrow-left-circle"></i> -->

    <form action="" method="POST">


      <h2>Login to PEasy</h2>

      <div class="textbox">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>

      <div class="textbox">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>

      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p class="remember">Remember me</p>
        </label>
      </div>

      <div class="forgot">
        <a href="/Authentication/forgot.php">Forgot password</a>
      </div>

      <input type="submit" id="butt" class="btn btn-success" value="Login">

      <div class="register">
        <p>Already have an account? <a href="/Authentication/create.php">Create a new one</a></p>
      </div>
    </form>
  </div>


</body>

</html>