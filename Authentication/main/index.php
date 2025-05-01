<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Peasy </title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-success px-4 py-2">
  <div class="container-fluid">
    <!-- Logo and Brand -->
    <a class="navbar-brand d-flex align-items-center text-white" href="#">
      <img src="/Authentication/assets/nobg.png" alt="Logo" width="60" height="60" class="me-2">
      <strong>PEasy</strong>
    </a>

    <!-- Toggler for mobile -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Right Nav Icons -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="#"><i class="bi bi-bag fs-4"></i></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="#"><i class="bi bi-chat-left fs-4"></i></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-white d-flex align-items-center" href="/Authentication/signIn/login.php">
            <i class="bi bi-person-circle fs-5 me-1"></i> <span>Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white d-flex align-items-center" href="/Authentication/signUp/signup.php">
            <i class="bi bi-person-plus fs-5 me-1"></i> <span>Register</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container my-4">
  <!-- carousel here -->


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/Authentication/assets/mainCarousel.png" class="d-block w-100" alt="..." width="780" height="450" style="max-height: 450px; object-fit: cover;"> 
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div> -->
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/Authentication/assets/carouselCase.png" class="d-block w-100" alt="..." width="780" height="450" style="max-height: 450px; object-fit: cover;">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div> -->
    </div>
    <div class="carousel-item">
      <img src="/Authentication/assets/acerCAROUSEL.png" class="d-block w-100" alt="..." width="780" height="450" style="max-height: 450px; object-fit: cover;">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="product-container">
    <div class="product-card">
      <img src="/Authentication/assets/GIGABYTEP650G.png" alt="Product Image">
      <div class="product-info">
        <h3 class="product-title">Power Supply</h3>
        <p class="product-description">A Mid-ranged power supply with 80+ gold rated.</p>
        <p class="product-price">₱3,000</p>
        <a href="#" class="product-button btn btn-success">Add to Cart</a>
      </div>
  </div>
    <div class="product-card">
      <img src="/Authentication/assets/segotepW1.png" alt="Product Image">
      <div class="product-info">
        <h3 class="product-title">Segotep W1 PC Case</h3>
        <p class="product-description">RGB Mid-tower with tempered glass side panel.</p>
        <p class="product-price">₱1,400</p>
        <a href="#" class="product-button btn btn-success">Add to Cart</a>
      </div>
    </div>
    <div class="product-card" style="padding-top: 20px;">
      <img src="/Authentication/assets/samsungEVOSSD.png" alt="Product Image">
      <div class="product-info">
        <h3 class="product-title">Samsung EVO 870 SSD</h3>
        <p class="product-description">M.2 SSD PCIE 4.0 512GB | 1TB Storage</p>
        <p class="product-price">₱2,800</p>
        <a href="#" class="product-button btn btn-success">Add to Cart</a>
      </div>
    </div>
    <div class="product-card">
      <img src="/Authentication/assets/lexarRAM.png" alt="Product Image">
      <div class="product-info">
        <h3 class="product-title">Lexar RAM </h3>
        <p class="product-description">8 GB | 16 GB | Gaming RAM 1600 | 2400 | 3200 | 3600 mhz</p>
        <p class="product-price">₱899</p>
        <a href="#" class="product-button btn btn-success">Add to Cart</a>
      </div>
    </div>
    
  </div>
<!-- New Arrivals Section -->
<h2 style="margin: 20px; font-size: 24px;">NEW ARRIVALS</h2>
<div class="product-container">
  <div class="product-card">
    <img src="/Authentication/assets/acerLaptop.png" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Acer Aspire 7 A715-42G</h3>
      <p class="product-description">AMD Ryzen 7 5700U | NVIDIA GeForce RTX 3050 Ti</p>
      <p class="product-price">₱40,995.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <div class="product-card">
    <img src="/Authentication/assets/lenovoLAPTOP.png" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Lenovo IdeaPad Slim 1 14ALC7</h3>
      <p class="product-description">AMD Ryzen 5 5500U | 16GB DDR4 RAM | Integrated AMD Radeon Graphics</p>
      <p class="product-price">₱33,499.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <div class="product-card">
    <img src="https://via.placeholder.com/250x180" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Lenovo V14 G4 ABP</h3>
      <p class="product-description">14" FHD | Ryzen 5 | 8GB DDR4 | 256GB SSD</p>
      <p class="product-price">₱29,995.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <div class="product-card">
    <img src="https://via.placeholder.com/250x180" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">LenG4 ABP</h3>
      <p class="product-description">14" FHD | Ryzen 5 | 8GB DDR4 | 256GB SSD</p>
      <p class="product-price">₱29,995.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <!-- You can add more New Arrival cards here -->
</div>

<!-- Top Sellers Section -->
<h2 style="margin: 20px; font-size: 24px;">TOP SELLERS</h2>
<div class="product-container">
  <div class="product-card">
    <img src="https://via.placeholder.com/250x180" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Coolermaster MWE850 V2</h3>
      <p class="product-description">Fully Modular 80+ Gold Power Supply</p>
      <p class="product-price">₱7,500.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <div class="product-card">
    <img src="https://via.placeholder.com/250x180" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Coolermaster MWE850 V2</h3>
      <p class="product-description">Fully Modular 80+ Gold Power Supply</p>
      <p class="product-price">₱7,500.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <div class="product-card">
    <img src="https://via.placeholder.com/250x180" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Coolermaster MWE850 V2</h3>
      <p class="product-description">Fully Modular 80+ Gold Power Supply</p>
      <p class="product-price">₱7,500.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <div class="product-card">
    <img src="https://via.placeholder.com/250x180" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Coolermaster MWE850 V2</h3>
      <p class="product-description">Fully Modular 80+ Gold Power Supply</p>
      <p class="product-price">₱7,500.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <div class="product-card">
    <img src="https://via.placeholder.com/250x180" alt="Product Image">
    <div class="product-info">
      <h3 class="product-title">Coolermaster MWE850 V2</h3>
      <p class="product-description">Fully Modular 80+ Gold Power Supply</p>
      <p class="product-price">₱7,500.00</p>
      <a href="#" class="product-button">Buy Now</a>
    </div>
  </div>
  <!-- Add more Top Seller cards here -->
</div>

  <div class="footer">
    <h2>Copyright</h2>
    <h4>All Rights Reserved</h4>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>