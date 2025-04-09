<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs - Sales Record</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
        }
        
        .card {
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        .card-header {
            background-color: #212529;
            color: white;
            border-radius: 0 !important;
            font-weight: bold;
        }
        
        .card-header h5 {
            margin-bottom: 0;
        }
        
        .table-dark {
            background-color: #212529;
        }
        
        .chart-container {
            height: 150px;
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
        
        .action-btn {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            margin: 0 2px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
        
        .delete-btn:hover {
            background-color: #bb2d3b;
        }
        
        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                position: static;
                width: 100%;
                min-height: auto;
            }
            
            .main-content {
                margin-left: 0;
            }
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
                <a href="dashboard.php" class="sidebar-link active">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="product-stock.php" class="sidebar-link">
                    <i class="fas fa-box"></i> Product Stock
                </a>
                <!-- Changed "Sales Record" to "Homepage Editor" and icon to edit icon -->
                <a href="admin-homepage-editor.php" class="sidebar-link">
                    <svg width="20" height="20" viewBox="0 0 1024 1024" fill="currentColor" style="margin-right: 15px;">
                        <<path d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9c3.9-3.9 3.9-10.2 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 33.2 39.7z"/>
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
                            <li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sales Record</li>
                        </ol>
                    </nav>
                </div>
                
                <!-- Page Title -->
                <div class="page-title">
                    <span>Sales Record</span>
                </div>
                
                <div class="row">
                    <!-- Top Selling Product -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Top Selling Product</h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Rank#</th>
                                            <th>Product Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Gunner</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bench</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Dbtk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Most Sold Products -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Most Sold Products</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3">Most Sold Product</h6>
                                    <div class="chart-container">
                                        <div class="row justify-content-center h-100">
                                            <div class="col-3">
                                                <div class="bg-primary h-100 w-100" style="height: 80% !important;"></div>
                                            </div>
                                            <div class="col-3">
                                                <div class="bg-success h-100 w-100" style="height: 60% !important;"></div>
                                            </div>
                                            <div class="col-3">
                                                <div class="bg-danger h-100 w-100" style="height: 40% !important;"></div>
                                            </div>
                                            <div class="col-3">
                                                <div class="bg-info h-100 w-100" style="height: 30% !important;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-muted small mt-2">Chart data visualization</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Weekly Revenue -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Weekly Revenue</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3">Weekly Revenue</h6>
                                    <div class="chart-container" id="weekly-revenue-chart">
                                        <!-- Line chart would be rendered here -->
                                        <svg viewBox="0 0 300 100" class="w-100 h-100">
                                            <polyline
                                                fill="none"
                                                stroke="#0d6efd"
                                                stroke-width="2"
                                                points="0,50 50,20 100,60 150,30 200,20 250,35 300,50"
                                            />
                                            <circle cx="0" cy="50" r="3" fill="#0d6efd" />
                                            <circle cx="50" cy="20" r="3" fill="#0d6efd" />
                                            <circle cx="100" cy="60" r="3" fill="#0d6efd" />
                                            <circle cx="150" cy="30" r="3" fill="#0d6efd" />
                                            <circle cx="200" cy="20" r="3" fill="#0d6efd" />
                                            <circle cx="250" cy="35" r="3" fill="#0d6efd" />
                                            <circle cx="300" cy="50" r="3" fill="#0d6efd" />
                                        </svg>
                                    </div>
                                    <div class="text-muted small mt-2">Chart data visualization</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Daily Revenue -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Daily Revenue</h5>
                            </div>
                            <div class="card-body">
                                <h3>₱2450.00</h3>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Items Sold -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Items Sold</h5>
                            </div>
                            <div class="card-body">
                                <h3>24 Items</h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Low Stock Products -->
                <div class="card">
                    <div class="card-header">
                        <h5>Low Stock Products</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kai Sotto</td>
                                    <td>BLACK Elite 8000</td>
                                    <td>1</td>
                                    <td>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Recently Sold Products -->
                <div class="card">
                    <div class="card-header">
                        <h5>Recently Sold Products</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Apr 06, 2025</td>
                                    <td>John Smith</td>
                                    <td>BLACK LITE 8000</td>
                                    <td>2</td>
                                    <td>₱1600.00</td>
                                    <td>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Apr 05, 2025</td>
                                    <td>Maria Garcia</td>
                                    <td>FLAVA XTRE 10000</td>
                                    <td>1</td>
                                    <td>₱850.00</td>
                                    <td>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Functionality -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Update current date and time script -->
<script>
    function updateDateTime() {
        const now = new Date();
        const options = { 
            year: 'numeric', 
            month: 'short', 
            day: '2-digit',
            hour: '2-digit', 
            minute: '2-digit',
            hour12: true
        };
        
        if (document.getElementById('current-datetime')) {
            document.getElementById('current-datetime').textContent = now.toLocaleDateString('en-US', options);
        }
    }
    
    // Update initially and then every minute
    updateDateTime();
    setInterval(updateDateTime, 60000);
</script>
</body>
</html>