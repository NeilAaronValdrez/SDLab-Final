<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Metro District Designs Homepage Editor</title>
    <link rel="icon" type="image/png" href="images/logo/threadcraft-logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            background-color: #1E1E1E;
            color: white;
            min-height: 100vh;
            padding-top: 20px;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
        }
        
        .sidebar-link {
            color: #f8f9fa;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            background-color: #333333;
            border-left: 4px solid #0d6efd;
        }
        
        .sidebar-link i {
            margin-right: 15px;
            width: 20px;
            text-align: center;
        }
        
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        
        .breadcrumb-container {
            padding: 10px 0;
            margin-bottom: 20px;
        }
        
        .page-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        
        .card-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            min-height: 150px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .card-container:hover {
            transform: scale(1.03);
        }
        
        .card-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 22px;
            color: #555;
        }
        
        .metric-card {
            color: white;
            padding: 12px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 6px;
        }
        
        .metric-card.red { background-color: #dc3545; }
        .metric-card.orange { background-color: #fd7e14; }
        .metric-card.green { background-color: #198754; }
        .metric-card.blue { background-color: #0d6efd; }
        .metric-card.navy { background-color: #212529; }
        .metric-card.yellow { background-color: #ffc107; }
        .metric-card.purple { background-color: #6f42c1; }
        .metric-card.teal { background-color: #20c997; }
        .metric-card.gray { background-color: #6c757d; }
        .metric-card.pink { background-color: #d63384; }
        .metric-card.brown { background-color: #8d6e63; }
        
        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin: 30px 0 20px;
            color: #333;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 10px;
        }
        
        /* Modal customization */
        .modal-header {
            background-color: #1E1E1E;
            color: white;
            border-bottom: 1px solid #333;
        }
        
        .modal-footer {
            border-top: 1px solid #dee2e6;
        }
        
        /* Custom table styling */
        .table thead th {
            background-color: #1E1E1E;
            color: white;
            border-color: #333;
        }
        
        /* Logo in sidebar */
        .logo-container {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid #333;
        }
        
        .logo {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }
        
        .brand-name {
            color: white;
            font-weight: bold;
            font-size: 18px;
            margin: 0;
        }
    </style>
</head>
<body>
<!-- Main Container with Sidebar -->
<div class="container-fluid p-0">
    <div class="row g-0">
        <!-- Sidebar -->
        <div class="col-auto">
            <div class="sidebar">
                <div class="logo-container">
                    <img src="/api/placeholder/40/40" class="logo" alt="Logo">
                    <h5 class="brand-name">Metro District Designs</h5>
                </div>
                <a href="dashboard.php" class="sidebar-link">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="product-stock.php" class="sidebar-link">
                    <i class="fas fa-box"></i> Product Stock
                </a>
                <!-- Changed to reflect edit icon and Homepage Editor label -->
                <a href="admin-homepage-editor.php" class="sidebar-link active">
                    <svg width="20" height="20" viewBox="0 0 1024 1024" fill="currentColor" style="margin-right: 15px;">
                        <path d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9c3.9-3.9 3.9-10.2 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 33.2 39.7z"/>
                    </svg> Homepage Editor
                </a>
                <a href="user-admin.php" class="sidebar-link">
                    <i class="fas fa-users"></i> Account Manager
                </a>
                <a href="profile.php" class="sidebar-link">
                    <i class="fas fa-user-cog"></i> Profile
                </a>
                <a href="homepage.php" class="sidebar-link">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="login.php" class="sidebar-link">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="col">
            <div class="main-content">
                <!-- Breadcrumb -->
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Homepage Editor</li>
                        </ol>
                    </nav>
                </div>
                
                <!-- Page Title -->
                <div class="page-title">
                    <span>Homepage Editor</span>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#previewModal">
                        <i class="fas fa-eye"></i> Preview Homepage
                    </button>
                </div>
                
                <!-- Main Page Section -->
                <div class="section-title">Main Page</div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-container">
                            <div class="card-title">Brand Logo</div>
                            <div class="metric-card red" data-bs-toggle="modal" data-bs-target="#editLogoModal">
                                <div class="metric-value">Edit</div>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-container">
                            <div class="card-title">Featured Collection</div>
                            <div class="metric-card orange" data-bs-toggle="modal" data-bs-target="#editCarouselModal">
                                <div class="metric-value">Edit</div>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-container">
                            <div class="card-title">Best Sellers</div>
                            <div class="metric-card green" data-bs-toggle="modal" data-bs-target="#editBestSellersModal">
                                <div class="metric-value">Edit</div>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Shirt Collections Section -->
                <div class="section-title">Shirt Collections</div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-container">
                            <div class="card-title">Graphic Tees</div>
                            <div class="metric-card pink" data-bs-toggle="modal" data-bs-target="#editGraphicModal">
                                <div class="metric-value">Edit</div>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Store Features Section -->
                <div class="section-title">Store Features</div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-container">
                            <div class="card-title">Size Guide</div>
                            <div class="metric-card navy" data-bs-toggle="modal" data-bs-target="#editSizeGuideModal">
                                <div class="metric-value">Edit</div>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-container">
                            <div class="card-title">Color</div>
                            <div class="metric-card brown" data-bs-toggle="modal" data-bs-target="#editColorModal">
                                <div class="metric-value">Edit</div>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-container">
                            <div class="card-title">Size</div>
                            <div class="metric-card yellow" data-bs-toggle="modal" data-bs-target="#editSizeModal">
                                <div class="metric-value">Edit</div>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Templates -->
<!-- Logo Modal -->
<div class="modal fade" id="editLogoModal" tabindex="-1" aria-labelledby="editLogoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLogoModalLabel">Edit Brand Logo</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="logoForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <h6>Current Logo:</h6>
                    <div class="text-center mb-3">
                        <img id="currentLogo" src="/api/placeholder/150/150" alt="Current Logo" class="img-fluid rounded-circle">
                    </div>
                    <div class="mb-3">
                        <label for="logoFile" class="form-label">Upload New Logo</label>
                        <input type="file" class="form-control" id="logoFile" name="logoFile" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Functionality -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fetch logo for sidebar logo
        fetch("databases/fetch_logo.php")
            .then(response => response.json())
            .then(data => {
                if (data.status === "success" && data.image) {
                    document.querySelector(".logo").src = data.image;
                    document.getElementById("currentLogo").src = data.image;
                } else {
                    console.error("Error:", data.message);
                }
            })
            .catch(error => console.error("Error fetching logo:", error));
    });
</script>
</body>
</html>