<!-- TODO LOGIN HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Peasy Builder | Log in</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/Authentication/login.css">
  
</head>
<body>


    <!-- <header class="loglokglok">
        <a href="/index.html">
            <img src="/Assets/logo/logo (64 x 64 px).png" alt="Logo">
        </a>457
    </header> -->

  <div class="container">
    <a class="mb-5" href="/Authentication/index.php">
      <!-- <i class="bi bi-arrow-left-circle"></i> -->
    </a>

    <form action="  " method="POST" class="form">
      <h2>Login to PEasy</h2>
        <div class="textbox">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="textbox">
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p class="remember">Remember me</p>
        </label>
      </div>
      <div class="forgot">
      <a href="#">Forgot password?</a>
      </div>
      <input type="submit" id="butt" class="btn btn-success" value="LogIn">
      <div class="register">
        <p>Don't have an account? <a href="/Authentication/create.php">Create a new one</a></p>
      </div>
    </form>
  </div>

  

</body>
</html>