<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs - Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons (replacing Bootstrap Icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E5E4E2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        .admin-header {
            background-color: #555;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-title {
            margin: 0;
            font-size: 1.2rem;
        }

        .admin-user {
            display: flex;
            align-items: center;
        }

        .admin-user img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Replacing sidebar styling with the one from dashboard.php */
        .sidebar {
            background-color: #1E1E1E;
            color: white;
            min-height: 100vh;
            padding-top: 20px;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
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

        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        .toggle-sidebar {
            cursor: pointer;
            display: none;
        }

        .inquiry-list {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .inquiry-item {
            border-bottom: 1px solid #eee;
            padding: 15px;
            transition: background-color 0.2s;
            cursor: pointer;
        }

        .inquiry-item:hover {
            background-color: #f8f9fa;
        }

        .inquiry-item.unread {
            border-left: 3px solid #007bff;
        }

        .inquiry-item.urgent {
            background-color: rgba(255, 107, 107, 0.1);
        }

        .inquiry-meta {
            display: flex;
            justify-content: space-between;
            color: #777;
            font-size: 0.85rem;
            margin-bottom: 5px;
        }

        .inquiry-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .inquiry-preview {
            color: #555;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .badge-urgent {
            background-color: #ff6b6b;
            color: white;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 0.75rem;
            font-weight: normal;
        }

        .badge-standard {
            background-color: #4ecdc4;
            color: white;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 0.75rem;
            font-weight: normal;
        }

        .badge-relaxed {
            background-color: #6c757d;
            color: white;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 0.75rem;
            font-weight: normal;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .search-box {
            position: relative;
        }

        .search-box i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #777;
        }

        .search-box input {
            padding-left: 40px;
        }

        .detail-panel {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }

        .detail-header {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .detail-meta {
            display: flex;
            justify-content: space-between;
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .detail-title {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .detail-customer {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .detail-customer img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .detail-content {
            margin-bottom: 20px;
        }

        .detail-image-gallery {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .detail-image {
            width: 150px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
        }

        .detail-info {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-item {
            border: 1px solid #eee;
            padding: 10px;
            border-radius: 4px;
        }

        .info-label {
            font-weight: bold;
            font-size: 0.8rem;
            margin-bottom: 5px;
            color: #777;
        }

        .info-value {
            font-size: 0.9rem;
        }

        .reply-section {
            margin-top: 20px;
        }

        .reply-box {
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }

        .reply-toolbar {
            background-color: #f8f9fa;
            padding: 10px;
            display: flex;
            gap: 10px;
            border-bottom: 1px solid #ddd;
        }

        .reply-toolbar button {
            background: none;
            border: none;
            color: #555;
            cursor: pointer;
        }

        .reply-toolbar button:hover {
            color: #000;
        }

        .reply-textarea {
            width: 100%;
            border: none;
            padding: 15px;
            min-height: 150px;
            resize: vertical;
        }

        .reply-actions {
            padding: 10px;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-dropdown {
            width: 200px;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ff6b6b;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .toggle-sidebar {
                display: block;
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <!-- Main Container with Sidebar -->
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Replaced sidebar with dashboard.php sidebar -->
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
                    <!-- Changed "Homepage Editor" to "Inquiries" and updated the link and icon -->
                    <a href="AdminInquiries.php" class="sidebar-link active">
                        <i class="fas fa-envelope"></i> Inquiries
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

            <!-- Main Content -->
            <div class="main-content">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <button class="btn btn-dark toggle-sidebar me-2" id="toggleSidebar">
                            <i class="fas fa-bars"></i>
                        </button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bell position-relative">
                                            <span class="notification-badge" id="notificationCount">5</span>
                                        </i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">New inquiry from John Doe</a></li>
                                        <li><a class="dropdown-item" href="#">New inquiry from Jane Smith</a></li>
                                        <li><a class="dropdown-item" href="#">Design #12345 approved</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#" id="viewAllNotifications">View all notifications</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="/api/placeholder/30/30" class="rounded-circle me-1">
                                        Admin User
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#" id="logoutBtn"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col">
                            <h2>Design Inquiries</h2>
                            <p class="text-muted">Manage custom design requests from customers</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!-- Left Panel - Inquiry List -->
                        <div class="col-lg-4">
                            <div class="filter-section d-flex gap-2">
                                <div class="search-box flex-grow-1">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="form-control" id="searchInput" placeholder="Search inquiries...">
                                </div>
                                <button class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                    <i class="fas fa-filter"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item filter-option" href="#" data-filter="all">All Inquiries</a>
                                    <a class="dropdown-item filter-option" href="#" data-filter="unread">Unread Only</a>
                                    <a class="dropdown-item filter-option" href="#" data-filter="urgent">Urgent Requests</a>
                                    <a class="dropdown-item filter-option" href="#" data-filter="new">New Inquiries</a>
                                    <a class="dropdown-item filter-option" href="#" data-filter="in-progress">In Progress</a>
                                    <a class="dropdown-item filter-option" href="#" data-filter="completed">Completed</a>
                                </div>
                            </div>
                            
                            <div class="inquiry-list" id="inquiryList">
                                <!-- Inquiry items will be dynamically loaded from the inquiries data -->
                            </div>
                        </div>
                        
                        <!-- Right Panel - Detail View -->
                        <div class="col-lg-8">
                            <div class="detail-panel" id="inquiryDetail">
                                <!-- Inquiry details will be dynamically loaded -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to render inquiry list - defined outside of DOMContentLoaded to fix scope issues
        function renderInquiryList(inquiryData) {
            const inquiryListElement = document.getElementById('inquiryList');
            inquiryListElement.innerHTML = '';
            
            inquiryData.forEach(inquiry => {
                const inquiryItem = document.createElement('div');
                inquiryItem.className = `inquiry-item ${inquiry.unread ? 'unread' : ''} ${inquiry.priority === 'urgent' ? 'urgent' : ''}`;
                inquiryItem.dataset.id = inquiry.id;
                
                // Set priority badge class based on priority
                let priorityBadge = '';
                if (inquiry.priority === 'urgent') {
                    priorityBadge = '<span class="badge-urgent">Urgent</span>';
                } else if (inquiry.priority === 'standard') {
                    priorityBadge = '<span class="badge-standard">Standard</span>';
                } else {
                    priorityBadge = '<span class="badge-relaxed">Relaxed</span>';
                }
                
                inquiryItem.innerHTML = `
                    <div class="inquiry-meta">
                        <span>${inquiry.timestamp}</span>
                        ${priorityBadge}
                    </div>
                    <div class="inquiry-title">${inquiry.title}</div>
                    <div class="inquiry-preview">${inquiry.preview}</div>
                `;
                
                inquiryItem.addEventListener('click', () => {
                    document.querySelectorAll('.inquiry-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    inquiryItem.classList.add('active');
                    
                    // If this was unread, mark it as read
                    if (inquiry.unread) {
                        inquiry.unread = false;
                        inquiryItem.classList.remove('unread');
                    }
                    
                    renderInquiryDetail(inquiry);
                });
                
                inquiryListElement.appendChild(inquiryItem);
            });
            
            // Select the first inquiry by default if there are any
            if (inquiryData.length > 0) {
                const firstInquiry = inquiryData[0];
                document.querySelector(`.inquiry-item[data-id="${firstInquiry.id}"]`).classList.add('active');
                renderInquiryDetail(firstInquiry);
            } else {
                // No inquiries to display
                document.getElementById('inquiryDetail').innerHTML = `
                    <div class="text-center p-5">
                        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                        <h4>No inquiries found</h4>
                        <p class="text-muted">No inquiries match your current filter criteria.</p>
                    </div>
                `;
            }
        }

        // Function to render inquiry detail - defined outside of DOMContentLoaded to fix scope issues
        function renderInquiryDetail(inquiry) {
            const detailElement = document.getElementById('inquiryDetail');
            
            // Convert status to display format
            let statusDisplay = inquiry.status.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
            
            // Status badge color
            let statusClass = '';
            switch(inquiry.status) {
                case 'new':
                    statusClass = 'bg-primary';
                    break;
                case 'in-progress':
                    statusClass = 'bg-info';
                    break;
                case 'pending-approval':
                    statusClass = 'bg-warning';
                    break;
                case 'completed':
                    statusClass = 'bg-success';
                    break;
                case 'rejected':
                    statusClass = 'bg-danger';
                    break;
                default:
                    statusClass = 'bg-secondary';
            }
            
            // Create image gallery HTML
            let imagesHTML = '';
            if (inquiry.images && inquiry.images.length > 0) {
                imagesHTML = `
                    <h5 class="mt-4">Attached Images</h5>
                    <div class="detail-image-gallery">
                        ${inquiry.images.map(img => `<img src="${img}" class="detail-image" alt="Inquiry Image">`).join('')}
                    </div>
                `;
            }
            
            detailElement.innerHTML = `
                <div class="detail-header">
                    <div class="detail-meta">
                        <span><i class="far fa-calendar"></i> ${inquiry.date} at ${inquiry.time}</span>
                        <span class="badge ${statusClass}">${statusDisplay}</span>
                    </div>
                    <h3 class="detail-title">${inquiry.title}</h3>
                    <div class="detail-customer">
                        <img src="${inquiry.customer.avatar}" alt="${inquiry.customer.name}" class="rounded-circle">
                        <div>
                            <div class="fw-bold">${inquiry.customer.name}</div>
                            <div class="text-muted small">
                                <i class="far fa-envelope me-1"></i>${inquiry.customer.email} &bull; 
                                <i class="fas fa-phone me-1"></i>${inquiry.customer.phone}
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="detail-content">
                    <h5>Inquiry Details</h5>
                    <p style="white-space: pre-line;">${inquiry.content}</p>
                    
                    ${imagesHTML}
                    
                    <h5 class="mt-4">Project Information</h5>
                    <div class="detail-info">
                        <div class="info-item">
                            <div class="info-label">Inquiry ID</div>
                            <div class="info-value">${inquiry.inquiryId}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Design Type</div>
                            <div class="info-value">${inquiry.designType}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Budget Range</div>
                            <div class="info-value">${inquiry.budgetRange}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Timeline</div>
                            <div class="info-value">${inquiry.timeline}</div>
                        </div>
                    </div>
                </div>
                
                <div class="reply-section">
                    <h5>Reply to Customer</h5>
                    <div class="reply-box">
                        <div class="reply-toolbar">
                            <button title="Bold"><i class="fas fa-bold"></i></button>
                            <button title="Italic"><i class="fas fa-italic"></i></button>
                            <button title="Underline"><i class="fas fa-underline"></i></button>
                            <button title="List"><i class="fas fa-list-ul"></i></button>
                            <button title="Attach File"><i class="fas fa-paperclip"></i></button>
                            <button title="Insert Template"><i class="fas fa-file-alt"></i></button>
                        </div>
                        <textarea class="reply-textarea" placeholder="Type your response here..."></textarea>
                        <div class="reply-actions">
                            <select class="form-select status-dropdown">
                                <option value="new" ${inquiry.status === 'new' ? 'selected' : ''}>New</option>
                                <option value="in-progress" ${inquiry.status === 'in-progress' ? 'selected' : ''}>In Progress</option>
                                <option value="pending-approval" ${inquiry.status === 'pending-approval' ? 'selected' : ''}>Pending Approval</option>
                                <option value="completed" ${inquiry.status === 'completed' ? 'selected' : ''}>Completed</option>
                                <option value="rejected" ${inquiry.status === 'rejected' ? 'selected' : ''}>Rejected</option>
                            </select>
                            <div>
                                <button class="btn btn-light">Save Draft</button>
                                <button class="btn btn-primary">Send Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }

        // Function to handle search and filtering - defined outside of DOMContentLoaded to fix scope issues
        function filterInquiries(searchTerm = '', filterType = 'all') {
            let filteredInquiries = [...inquiries];
            
            // Apply search term filtering
            if (searchTerm) {
                searchTerm = searchTerm.toLowerCase();
                filteredInquiries = filteredInquiries.filter(inquiry => 
                    inquiry.title.toLowerCase().includes(searchTerm) || 
                    inquiry.preview.toLowerCase().includes(searchTerm) || 
                    inquiry.customer.name.toLowerCase().includes(searchTerm) ||
                    inquiry.customer.email.toLowerCase().includes(searchTerm)
                );
            }
            
            // Apply type filtering
            if (filterType !== 'all') {
                switch(filterType) {
                    case 'unread':
                        filteredInquiries = filteredInquiries.filter(inquiry => inquiry.unread);
                        break;
                    case 'urgent':
                        filteredInquiries = filteredInquiries.filter(inquiry => inquiry.priority === 'urgent');
                        break;
                    default:
                        // For status filters like 'new', 'in-progress', etc.
                        filteredInquiries = filteredInquiries.filter(inquiry => inquiry.status === filterType);
                }
            }
            
            renderInquiryList(filteredInquiries);
        }

        // Sample data for inquiries - moved outside of the DOMContentLoaded event
        const inquiries = [
            {
                id: 1,
                customer: {
                    name: "John Doe",
                    email: "john.doe@example.com",
                    phone: "0917 123 4567",
                    avatar: "/api/placeholder/50/50"
                },
                title: "T-Shirt Design Request",
                preview: "I need a custom design for our basketball team...",
                timestamp: "Today, 10:15 AM",
                date: "February 10, 2025",
                time: "10:15 AM",
                priority: "urgent",
                status: "new",
                unread: true,
                content: "I need a custom design for our basketball team. We're looking for something modern and aggressive with our team name \"Metro Knights\" prominently displayed. We'd prefer blue and silver as the main colors.\n\nThe design should include a knight's helmet or sword motif if possible. We need this for about 15 team members, and we're hoping to get the shirts before our tournament which starts on March 5th.",
                inquiryId: "INQ-2025-0212",
                designType: "T-Shirt Design",
                budgetRange: "₱200 - ₱500",
                timeline: "ASAP (1-3 days)",
                images: [
                    "/api/placeholder/150/100",
                    "/api/placeholder/150/100",
                    "/api/placeholder/150/100"
                ]
            },
            {
                id: 2,
                customer: {
                    name: "Jane Smith",
                    email: "jane.smith@example.com",
                    phone: "0918 234 5678",
                    avatar: "/api/placeholder/50/50"
                },
                title: "Logo Design for Business",
                preview: "Looking for a minimalist logo design for my new startup...",
                timestamp: "Yesterday, 3:45 PM",
                date: "February 9, 2025",
                time: "3:45 PM",
                priority: "standard",
                status: "new",
                unread: true,
                content: "Looking for a minimalist logo design for my new startup called 'EcoTech Solutions'. We focus on environmentally friendly technology products. The logo should convey innovation and sustainability. Our brand colors are green and blue.\n\nI'd like something clean, modern, and easily recognizable that works well in different sizes and formats. This will be used on our website, business cards, and product packaging.",
                inquiryId: "INQ-2025-0211",
                designType: "Logo Design",
                budgetRange: "₱1,000 - ₱3,000",
                timeline: "Standard (7-10 days)",
                images: [
                    "/api/placeholder/150/100",
                    "/api/placeholder/150/100"
                ]
            },
            {
                id: 3,
                customer: {
                    name: "Mike Johnson",
                    email: "mike.johnson@example.com",
                    phone: "0919 345 6789",
                    avatar: "/api/placeholder/50/50"
                },
                title: "Family Reunion T-Shirts",
                preview: "We need 25 custom t-shirts for our family reunion next month...",
                timestamp: "Feb 9, 2025",
                date: "February 9, 2025",
                time: "9:30 AM",
                priority: "relaxed",
                status: "in-progress",
                unread: false,content: "We need 25 custom t-shirts for our family reunion next month. The theme is 'Johnson Family - 20 Years Strong' with the year 2025 included. We'd like a design that incorporates a family tree or something that represents family unity.\n\nPreferred colors are white shirts with green and brown design elements. We have all sizes from small to XXL, and we'd need a breakdown of how many in each size once we finalize the design.",
                inquiryId: "INQ-2025-0210",
                designType: "T-Shirt Design (Multiple)",
                budgetRange: "₱5,000 - ₱8,000 (for 25 shirts)",
                timeline: "Extended (2-3 weeks)",
                images: [
                    "/api/placeholder/150/100"
                ]
            },
            {
                id: 4,
                customer: {
                    name: "Sarah Williams",
                    email: "sarah.williams@example.com",
                    phone: "0920 456 7890",
                    avatar: "/api/placeholder/50/50"
                },
                title: "Website Banner Design",
                preview: "I need a professional banner for my online store...",
                timestamp: "Feb 8, 2025",
                date: "February 8, 2025",
                time: "2:20 PM",
                priority: "standard",
                status: "pending-approval",
                unread: false,
                content: "I need a professional banner for my online store selling handmade jewelry. The banner should be eye-catching and elegant, reflecting the artisanal nature of my products. My store is called 'Crafted Elegance'.\n\nThe banner will be placed at the top of my website homepage. I'd prefer something with soft colors like rose gold, cream, and perhaps hints of teal. I've attached some photos of my jewelry for inspiration.",
                inquiryId: "INQ-2025-0209",
                designType: "Web Banner",
                budgetRange: "₱800 - ₱1,500",
                timeline: "Standard (5-7 days)",
                images: [
                    "/api/placeholder/150/100",
                    "/api/placeholder/150/100",
                    "/api/placeholder/150/100",
                    "/api/placeholder/150/100"
                ]
            },
            {
                id: 5,
                customer: {
                    name: "Robert Chen",
                    email: "robert.chen@example.com",
                    phone: "0921 567 8901",
                    avatar: "/api/placeholder/50/50"
                },
                title: "Brochure Design for Restaurant",
                preview: "Need a tri-fold brochure for my new restaurant opening...",
                timestamp: "Feb 7, 2025",
                date: "February 7, 2025",
                time: "11:05 AM",
                priority: "urgent",
                status: "completed",
                unread: false,
                content: "Need a tri-fold brochure for my new restaurant opening next month. The restaurant is called 'Spice Fusion' and specializes in Asian-Mexican fusion cuisine. The brochure should include our menu highlights, about us section, location details, and operating hours.\n\nI'd like a design that conveys the fusion concept - perhaps combining elements from both cuisines or cultures. Our brand colors are deep red, orange, and black. We need this printed by February 25th for our soft opening event.",
                inquiryId: "INQ-2025-0208",
                designType: "Brochure Design",
                budgetRange: "₱2,000 - ₱4,000",
                timeline: "Urgent (3-5 days)",
                images: [
                    "/api/placeholder/150/100",
                    "/api/placeholder/150/100"
                ]
            },
            {
                id: 6,
                customer: {
                    name: "Lisa Gomez",
                    email: "lisa.gomez@example.com",
                    phone: "0922 678 9012",
                    avatar: "/api/placeholder/50/50"
                },
                title: "Corporate ID Cards",
                preview: "Looking for a modern design for our company ID cards...",
                timestamp: "Feb 6, 2025",
                date: "February 6, 2025",
                time: "4:30 PM",
                priority: "standard",
                status: "rejected",
                unread: false,
                content: "Looking for a modern design for our company ID cards. We're a tech startup called 'NexGenSoft' with about 50 employees. We need a clean, professional design that includes our logo, employee photo, name, position, and a QR code for building access.\n\nOur company colors are navy blue and light gray. We'd prefer a vertical layout but are open to horizontal if the design works better that way. Would need digital files that we can print on our ID card printer.",
                inquiryId: "INQ-2025-0207",
                designType: "ID Card Design",
                budgetRange: "₱1,200 - ₱2,500",
                timeline: "Standard (7-10 days)",
                images: [
                    "/api/placeholder/150/100"
                ]
            }
        ];

        document.addEventListener('DOMContentLoaded', function() {
            // Initial rendering of inquiry list
            renderInquiryList(inquiries);
            
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
                const currentFilter = document.querySelector('.filter-option.active')?.dataset.filter || 'all';
                filterInquiries(this.value, currentFilter);
            });
            
            // Filter functionality
            document.querySelectorAll('.filter-option').forEach(option => {
                option.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelectorAll('.filter-option').forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    const filterType = this.dataset.filter;
                    const searchTerm = document.getElementById('searchInput').value;
                    filterInquiries(searchTerm, filterType);
                });
            });
            
            // Toggle sidebar functionality
            const toggleSidebarBtn = document.getElementById('toggleSidebar');
            const sidebar = document.querySelector('.sidebar');
            toggleSidebarBtn.addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });
            
            // Handle notification count click to reset
            document.getElementById('viewAllNotifications').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('notificationCount').textContent = '0';
            });
            
            // Handle logout button
            document.getElementById('logoutBtn').addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure you want to logout?')) {
                    window.location.href = 'login.php';
                }
            });
            
            // Image gallery click handler for enlarging images (simplified version)
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('detail-image')) {
                    // In a real implementation, this would open a modal with an enlarged view of the image
                    alert('Image viewer would open here in the real implementation.');
                }
            });
            
            // Status change handler
            document.addEventListener('change', function(e) {
                if (e.target.classList.contains('status-dropdown')) {
                    const newStatus = e.target.value;
                    const activeItem = document.querySelector('.inquiry-item.active');
                    if (activeItem) {
                        const inquiryId = parseInt(activeItem.dataset.id);
                        const inquiry = inquiries.find(item => item.id === inquiryId);
                        if (inquiry) {
                            inquiry.status = newStatus;
                            // In a real implementation, this would send an AJAX request to update the status
                            alert(`Status updated to ${newStatus} for inquiry #${inquiryId}`);
                        }
                    }
                }
            });
            
            // Reply send button handler
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('btn-primary') && e.target.textContent.trim() === 'Send Reply') {
                    const replyText = document.querySelector('.reply-textarea').value;
                    if (replyText.trim() === '') {
                        alert('Please enter a reply before sending.');
                        return;
                    }
                    // In a real implementation, this would send an AJAX request with the reply
                    alert('Reply sent successfully.');
                    document.querySelector('.reply-textarea').value = '';
                }
            });
        });
    </script>
</body>
</html>