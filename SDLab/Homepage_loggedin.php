<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #1E1E1E;
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
            font-weight: bold;
        }

        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }

        .navbar-nav {
            flex-grow: 1;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: white !important;
            text-transform: uppercase;
            font-weight: bold;
            margin: 0 10px;
        }

        .navbar-nav.ms-auto {
            margin-right: 0 !important;
            align-items: center;
        }

        /* Search Bar Styles */
        .search-container {
            position: relative;
            margin-left: 15px;
        }

        .nav-icons {
            display: flex;
            align-items: center;
            color: white;
        }

        .nav-icons i {
            cursor: pointer;
            margin-left: 15px;
        }

        .search-icon, .cart-icon {
            transition: color 0.3s ease;
        }

        .search-icon:hover, .cart-icon:hover {
            color: #aaa;
        }

        .search-popup {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            width: 300px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            margin-top: 10px;
        }

        .search-popup.show {
            display: block;
        }

        .search-popup input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .hero-banner {
            background: gray;
            text-align: center;
            font-style: italic;
            padding: 15px 0;
        }

        .hero-banner h1 {
            color: black;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .hero-banner p {
            color: black;
            font-style: italic;
            font-size: 1.2rem;
        }

        .colorful-divider {
            height: 5px;
            background: gray;
        }

        .design-card {
            background-color: #f8f9fa;
            border: none;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .design-card:hover {
            transform: scale(1.05);
        }
        .pre-made-designs {
            background-color: #E5E4E2;
        }

        .design-placeholder {
            background-color: #B0A8B9;
            height: 450px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        
        .design-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .pre-made-designs h2 {
            font-weight: bold;
        }
        .carousel-item img {
            width: 80%;
            height: 700px;
            object-fit: flex;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 10px;
            height: 600px;
            margin-top: 30px;
        }

        .grid-item {
            background-color: #D3D3D3;
            border: 2px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .grid-item:hover img {
            transform: scale(1.05);
        }

        .grid-item-1 {
            grid-row: span 2;
            grid-column: 1;
        }

        .grid-item-2 {  
            grid-column: 2 / span 2;
        }

        .grid-item-3 {
            grid-column: 2;
        }

        .grid-item-4 {
            grid-column: 3;
            grid-row: 2;
        }

        /* Footer Styles */
        .footer {
            background-color: #1E1E1E;
            color: white;
            padding: 40px 0 20px;
        }

        .footer .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer-text p {
            margin-bottom: 10px;
        }

        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #333;
            color: white;
            margin-right: 10px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .social-icon:hover {
            background-color: #555;
            color: white;
        }

        .social-icon.facebook:hover {
            background-color: #3b5998;
        }

        .social-icon.instagram:hover {
            background-color: #e1306c;
        }

        .social-icon i {
            font-size: 1.2rem;
        }

        @media (max-width: 767px) {
            .footer .text-md-start,
            .footer .text-md-end,
            .footer .justify-content-md-start {
                text-align: center !important;
                justify-content: center !important;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/40/40" class="rounded-circle">
                Metro District Designs
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Homepage.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Products.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Inquiry.php">INQUIRY</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Signup.php">Welcome NAME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item nav-icons">
                        <i class="bi bi-cart cart-icon" id="cartIcon"></i>
                        <div class="search-container">
                            <i class="bi bi-search search-icon" id="searchToggle"></i>
                            <div class="search-popup" id="searchPopup">
                                <input type="text" placeholder="Search designs..." id="searchInput">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Colorful Divider -->
    <div class="colorful-divider"></div>

    <!-- Hero Banner -->
    <div class="hero-banner">
        <div class="container">
            <h1>Welcome to Metro District Designs</h1>
            <p>"Explore unique designs, commission custom work, and showcase your creativity."</p>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container mt-5">
        <div id="tshirtCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#tshirtCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#tshirtCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#tshirtCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <?php
            // Define the directory where featured banner images are stored
            $bannerDir = "images/BANNERS/";
            
            // Get all files with these extensions
            $fileTypes = array('jpg', 'jpeg', 'png', 'gif');
            
            // Try to get banner files from directory
            $bannerFiles = array();
            foreach($fileTypes as $type) {
                $typeFiles = glob($bannerDir . "*." . $type);
                if($typeFiles) {
                    $bannerFiles = array_merge($bannerFiles, $typeFiles);
                }
            }
            ?>
            <div class="carousel-inner">
                <?php
                // If banner files are found, use them in the carousel
                if(count($bannerFiles) > 0) {
                    foreach($bannerFiles as $index => $file) {
                        $activeClass = ($index === 0) ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<img src="' . $file . '" class="d-block w-100" alt="Banner Image ' . ($index + 1) . '">';
                        echo '</div>';
                    }
                } else {
                    // Default fallback images if no files are found
                ?>
                <div class="carousel-item active">
                    <img src="images/TSHIRTS/bestbud_1.png" class="d-block w-100" alt="Anime T-Shirt 1">
                </div>
                <div class="carousel-item">
                    <img src="images/TSHIRTS/Baskn_cook_1.jpg" class="d-block w-100" alt="Anime T-Shirt 2">
                </div>
                <div class="carousel-item">
                    <img src="images/TSHIRTS/Baskn_cook_2.jpg" class="d-block w-100" alt="Anime T-Shirt 3">
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Pre-Made Designs -->
    <div class="container my-5 pre-made-designs">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>PRE-MADE DESIGNS</h2>
            <a href="Products.php" class="btn btn-link text-dark">SEE ALL →</a>
        </div>
    
        <div class="row g-3">
            <?php
            // Define the directory where T-shirt images are stored
            $dir = "images/TSHIRTS/";
            
            // Try to get files from directory
            $files = array();
            foreach($fileTypes as $type) {
                $typeFiles = glob($dir . "*." . $type);
                if($typeFiles) {
                    $files = array_merge($files, $typeFiles);
                }
            }
            
            // Display up to 3 designs on the homepage
            $maxHomepageDisplays = 3;
            $displayCount = 0;
            
            // Check if we found any real files
            if(count($files) > 0) {
                // Shuffle the array to show random designs on homepage
                shuffle($files);
                
                // Display up to 3 designs
                foreach($files as $file) {
                    if($displayCount >= $maxHomepageDisplays) break;
                    
                    $displayCount++;
                    $filename = basename($file);
                    // Extract product name from filename (remove extension)
                    $productName = pathinfo($filename, PATHINFO_FILENAME);
                    $productName = str_replace('_', ' ', $productName);
                    $productName = ucwords($productName);
            ?>
            <div class="col-md-4">
                <div class="design-placeholder">
                    <img src="<?php echo $file; ?>" alt="<?php echo $productName; ?>">
                </div>
                <div class="text-center mt-2">
                    <h4><?php echo $productName; ?></h4>
                </div>
            </div>
            <?php
                }
            }
            
            // If no images found or less than 3 images, fill the rest with placeholders
            for($i = $displayCount; $i < $maxHomepageDisplays; $i++) {
            ?>
            <div class="col-md-4">
                <div class="design-placeholder">
                    <img src="/api/placeholder/450/450?text=No+Image" alt="Design Placeholder">
                </div>
                <div class="text-center mt-2">
                    <h4>Sample Design <?php echo $i+1; ?></h4>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Updated Grid Layout Section with Images -->
    <div class="container">
        <div class="grid-layout">
            <div class="grid-item grid-item-1">
                <img src="images/TSHIRTS/altitude_2.jpg" alt="Fashion Model">
            </div>
            <div class="grid-item grid-item-2">
                <img src="images/TSHIRTS/altitude_1.jpg" alt="Design Process">
            </div>
            <div class="grid-item grid-item-3">
                <img src="images/TSHIRTS/ayv_1.jpg" alt="Design Studio">
            </div>
            <div class="grid-item grid-item-4">
                <img src="images/TSHIRTS/ayv_2.jpg" alt="Custom Designs">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                        <img id="footerLogo" src="/api/placeholder/75/75" class="me-2 rounded-circle">
                        <span class="logo-text">Metro District Design</span>
                    </div>
                    <div class="footer-text text-center text-md-start">
                        <p><i class="bi bi-geo-alt me-2"></i><a href="" target="_blank" style="color: white; text-decoration: none;">Parañaque, Philippines</a></p>
                        <p><i class="bi bi-envelope me-2"></i><a href="" style="color: white; text-decoration: none;">metrodistrictd@gmail.com</a></p>
                        <p><i class="bi bi-telephone me-2"></i><a href="" style="color: white; text-decoration: none;"></a> 0968 597 9776<a href="4" style="color: white; text-decoration: none;"></a></p>
                    </div>
                </div>
                
                <div class="col-md-6">
                <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h5>Follow Us</h5>
                                <a href="https://www.facebook.com/MetroDistrictDesigns" class="social-icon facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/metrodistrict_ig/" class="social-icon instagram">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center text-md-end mt-4">
                        <p>© 2025 Metro District Design. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Search popup functionality
            const searchToggle = document.getElementById('searchToggle');
            const searchPopup = document.getElementById('searchPopup');
            const searchInput = document.getElementById('searchInput');

            // Toggle search popup
            searchToggle.addEventListener('click', function(e) {
                searchPopup.classList.toggle('show');
                if (searchPopup.classList.contains('show')) {
                    searchInput.focus();
                }
                e.stopPropagation();
            });

            // Close search popup when clicking outside
            document.addEventListener('click', function() {
                searchPopup.classList.remove('show');
            });

            // Prevent search popup from closing when clicking inside
            searchPopup.addEventListener('click', function(e) {
                e.stopPropagation();
            });

            // Cart icon navigation
            const cartIcon = document.getElementById('cartIcon');
            cartIcon.addEventListener('click', function() {
                // Navigate to Cart.php when cart icon is clicked
                window.location.href = 'Cart.php';
            });
        });
    </script>
</body>
</html>