<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Haven - Computer Shop</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1517336714731-489689fd1ca8');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .product-card {
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .category-btn {
            transition: all 0.3s;
        }
        .category-btn:hover {
            background-color: #0d6efd;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Tech Haven</a>
            <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-outline-light me-2">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light me-2">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Premium Tech for Your Digital Life</h1>
            <p class="lead mb-5">Discover the latest computers, components, and accessories at unbeatable prices</p>
            <a href="#products" class="btn btn-primary btn-lg px-4 me-2">Shop Now</a>
            <a href="#" class="btn btn-outline-light btn-lg px-4">Learn More</a>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Shop by Category</h2>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <button class="category-btn btn btn-outline-secondary w-100 py-3" data-category="laptops">
                        <i class="fas fa-laptop fa-2x mb-2"></i>
                        <h5>Laptops</h5>
                    </button>
                </div>
                <div class="col-6 col-md-3">
                    <button class="category-btn btn btn-outline-secondary w-100 py-3" data-category="desktops">
                        <i class="fas fa-desktop fa-2x mb-2"></i>
                        <h5>Desktops</h5>
                    </button>
                </div>
                <div class="col-6 col-md-3">
                    <button class="category-btn btn btn-outline-secondary w-100 py-3" data-category="components">
                        <i class="fas fa-microchip fa-2x mb-2"></i>
                        <h5>Components</h5>
                    </button>
                </div>
                <div class="col-6 col-md-3">
                    <button class="category-btn btn btn-outline-secondary w-100 py-3" data-category="accessories">
                        <i class="fas fa-keyboard fa-2x mb-2"></i>
                        <h5>Accessories</h5>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5" id="products">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2>Featured Products</h2>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                        Sort by: Price (Low to High)
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-sort="price-asc">Price (Low to High)</a></li>
                        <li><a class="dropdown-item" href="#" data-sort="price-desc">Price (High to Low)</a></li>
                        <li><a class="dropdown-item" href="#" data-sort="name-asc">Name (A-Z)</a></li>
                        <li><a class="dropdown-item" href="#" data-sort="name-desc">Name (Z-A)</a></li>
                    </ul>
                </div>
            </div>
            <div class="row g-4" id="products-container">
                <!-- Products will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4">Subscribe to Our Newsletter</h2>
                    <p class="mb-4">Get the latest tech news, exclusive offers, and discounts straight to your inbox.</p>
                    <form class="row g-2 justify-content-center">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Your email address">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5>Tech Haven</h5>
                    <p>Your one-stop shop for all your computer needs. Quality products at competitive prices.</p>
                    <div class="social-icons">
                        <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5>Shop</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Laptops</a></li>
                        <li><a href="#" class="text-decoration-none">Desktops</a></li>
                        <li><a href="#" class="text-decoration-none">Components</a></li>
                        <li><a href="#" class="text-decoration-none">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none">FAQs</a></li>
                        <li><a href="#" class="text-decoration-none">Shipping</a></li>
                        <li><a href="#" class="text-decoration-none">Returns</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <address>
                        <p><i class="fas fa-map-marker-alt me-2"></i> 123 Tech Street, Silicon Valley, CA 94000</p>
                        <p><i class="fas fa-phone me-2"></i> (123) 456-7890</p>
                        <p><i class="fas fa-envelope me-2"></i> info@techhaven.com</p>
                    </address>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Tech Haven. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Product Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalTitle">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="productModalBody">
                    <!-- Product details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addToCartModalBtn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Sample product data
        const products = [
            {
                id: 1,
                name: "UltraBook Pro 15",
                price: 1299.99,
                category: "laptops",
                image: "https://images.unsplash.com/photo-1611186871348-b1ce696e52c9",
                description: "Powerful laptop with 15.6\" 4K display, Intel i7 processor, 16GB RAM, and 512GB SSD.",
                specs: {
                    processor: "Intel Core i7-1165G7",
                    ram: "16GB DDR4",
                    storage: "512GB NVMe SSD",
                    display: "15.6\" 4K UHD",
                    battery: "12 hours"
                }
            },
            {
                id: 2,
                name: "Gaming Beast X",
                price: 1999.99,
                category: "laptops",
                image: "https://images.unsplash.com/photo-1593642632823-8f785ba67e45",
                description: "High-performance gaming laptop with RTX 3080, 32GB RAM, and 1TB SSD.",
                specs: {
                    processor: "Intel Core i9-11900H",
                    ram: "32GB DDR4",
                    storage: "1TB NVMe SSD",
                    graphics: "NVIDIA RTX 3080",
                    display: "17.3\" QHD 165Hz"
                }
            },
            {
                id: 3,
                name: "Power Desktop Pro",
                price: 1599.99,
                category: "desktops",
                image: "https://images.unsplash.com/photo-1551033406-5b1f3e0b0f1c",
                description: "Powerful desktop computer for professionals and creatives.",
                specs: {
                    processor: "AMD Ryzen 9 5900X",
                    ram: "32GB DDR4",
                    storage: "1TB NVMe SSD + 2TB HDD",
                    graphics: "NVIDIA RTX 3070",
                    ports: "USB-C, Thunderbolt 3"
                }
            },
            {
                id: 4,
                name: "Compact Workstation",
                price: 899.99,
                category: "desktops",
                image: "https://images.unsplash.com/photo-1591488320449-011701bb4b0b",
                description: "Compact yet powerful workstation for office and home use.",
                specs: {
                    processor: "Intel Core i5-11400",
                    ram: "16GB DDR4",
                    storage: "512GB NVMe SSD",
                    graphics: "Intel UHD Graphics",
                    formFactor: "Mini Tower"
                }
            },
            {
                id: 5,
                name: "RTX 4090 Graphics Card",
                price: 1599.99,
                category: "components",
                image: "https://images.unsplash.com/photo-1593508512255-86ab42a0e0b1",
                description: "The most powerful graphics card for gaming and creative work.",
                specs: {
                    gpu: "NVIDIA RTX 4090",
                    memory: "24GB GDDR6X",
                    clockSpeed: "2235 MHz",
                    ports: "3x DisplayPort, 1x HDMI",
                    power: "450W"
                }
            },
            {
                id: 6,
                name: "32GB DDR5 RAM Kit",
                price: 199.99,
                category: "components",
                image: "https://images.unsplash.com/photo-1592155931580-3b0e1a0a0a1a",
                description: "High-speed DDR5 memory for next-gen performance.",
                specs: {
                    capacity: "32GB (2x16GB)",
                    speed: "5600MHz",
                    latency: "CL36",
                    voltage: "1.25V",
                    type: "DDR5"
                }
            },
            {
                id: 7,
                name: "Mechanical Keyboard Pro",
                price: 129.99,
                category: "accessories",
                image: "https://images.unsplash.com/photo-1587825140705-c4e559a0a1a1",
                description: "Premium mechanical keyboard with RGB lighting.",
                specs: {
                    switches: "Cherry MX Red",
                    backlight: "RGB",
                    connectivity: "USB-C",
                    features: "N-key rollover",
                    layout: "Full-size"
                }
            },
            {
                id: 8,
                name: "4K Gaming Monitor",
                price: 499.99,
                category: "accessories",
                image: "https://images.unsplash.com/photo-1547949003-3a0f5d1a0a1a",
                description: "27-inch 4K monitor with 144Hz refresh rate.",
                specs: {
                    size: "27\"",
                    resolution: "3840x2160",
                    refreshRate: "144Hz",
                    responseTime: "1ms",
                    panel: "IPS"
                }
            }
        ];

        // Current cart items
        let cartItems = [];

        // DOM elements
        const productsContainer = document.getElementById('products-container');
        const categoryBtns = document.querySelectorAll('.category-btn');
        const sortDropdownItems = document.querySelectorAll('.dropdown-item');
        const productModal = new bootstrap.Modal(document.getElementById('productModal'));
        const productModalTitle = document.getElementById('productModalTitle');
        const productModalBody = document.getElementById('productModalBody');
        const addToCartModalBtn = document.getElementById('addToCartModalBtn');

        // Current filter and sort state
        let currentCategory = 'all';
        let currentSort = 'price-asc';

        // Display products
        function displayProducts() {
            productsContainer.innerHTML = '';
            
            // Filter products by category
            let filteredProducts = products;
            if (currentCategory !== 'all') {
                filteredProducts = products.filter(product => product.category === currentCategory);
            }
            
            // Sort products
            filteredProducts.sort((a, b) => {
                switch (currentSort) {
                    case 'price-asc':
                        return a.price - b.price;
                    case 'price-desc':
                        return b.price - a.price;
                    case 'name-asc':
                        return a.name.localeCompare(b.name);
                    case 'name-desc':
                        return b.name.localeCompare(a.name);
                    default:
                        return 0;
                }
            });
            
            // Create product cards
            filteredProducts.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'col-md-6 col-lg-4 col-xl-3';
                productCard.innerHTML = `
                    <div class="card product-card h-100">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text text-muted">${product.description.substring(0, 60)}...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold fs-5">$${product.price.toFixed(2)}</span>
                                <button class="btn btn-sm btn-outline-primary view-details" data-id="${product.id}">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                productsContainer.appendChild(productCard);
            });
            
            // Add event listeners to view details buttons
            document.querySelectorAll('.view-details').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const productId = parseInt(e.target.getAttribute('data-id'));
                    showProductDetails(productId);
                });
            });
        }

        // Show product details in modal
        function showProductDetails(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;
            
            productModalTitle.textContent = product.name;
            
            // Create specs list
            let specsList = '';
            for (const [key, value] of Object.entries(product.specs)) {
                specsList += `
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="fw-bold">${key.charAt(0).toUpperCase() + key.slice(1)}</span>
                        <span>${value}</span>
                    </li>
                `;
            }
            
            productModalBody.innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <img src="${product.image}" class="img-fluid rounded mb-3" alt="${product.name}">
                    </div>
                    <div class="col-md-6">
                        <h4>$${product.price.toFixed(2)}</h4>
                        <p>${product.description}</p>
                        <div class="d-flex mb-3">
                            <div class="me-2">
                                <label for="quantity" class="form-label">Quantity</label>
                                <select class="form-select" id="quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <h5>Specifications</h5>
                        <ul class="list-group list-group-flush mb-3">
                            ${specsList}
                        </ul>
                    </div>
                </div>
            `;
            
            // Update add to cart button
            addToCartModalBtn.onclick = () => {
                const quantity = parseInt(document.getElementById('quantity').value);
                addToCart(productId, quantity);
                productModal.hide();
            };
            
            productModal.show();
        }

        // Add product to cart
        function addToCart(productId, quantity = 1) {
            const product = products.find(p => p.id === productId);
            if (!product) return;
            
            const existingItem = cartItems.find(item => item.id === productId);
            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                cartItems.push({
                    id: productId,
                    name: product.name,
                    price: product.price,
                    quantity: quantity,
                    image: product.image
                });
            }
            
            updateCartCount();
            showAlert('success', `${product.name} has been added to your cart!`);
        }

        // Update cart count in navbar
        function updateCartCount() {
            const totalItems = cartItems.reduce((total, item) => total + item.quantity, 0);
            document.querySelector('.badge').textContent = totalItems;
        }

        // Show alert
        function showAlert(type, message) {
            const alert = document.createElement('div');
            alert.className = `alert alert-${type} position-fixed top-0 end-0 m-3`;
            alert.style.zIndex = '1000';
            alert.textContent = message;
            document.body.appendChild(alert);
            
            setTimeout(() => {
                alert.remove();
            }, 3000);
        }

        // Event listeners
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentCategory = btn.getAttribute('data-category');
                displayProducts();
                
                // Update active state
                categoryBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });

        sortDropdownItems.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                currentSort = item.getAttribute('data-sort');
                document.getElementById('sortDropdown').textContent = `Sort by: ${item.textContent}`;
                displayProducts();
            });
        });

        // Initialize
        displayProducts();
    </script>
</body>
</html>
