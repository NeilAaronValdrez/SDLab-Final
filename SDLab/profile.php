<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metro District Designs - ADMIN Profile</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    /* Sidebar Styles - Consistent with dashboard.php */
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

    /* Main Content Area Styles */
    .main-content {
      margin-left: 250px;
      padding: 20px;
    }
    
    .breadcrumb-container {
      padding: 10px 0;
      margin-bottom: 20px;
    }
    
    /* Profile Page Specific Styles */
    .content-area {
      background-color: white;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      margin-top: 15px;
    }
    
    .profile-label {
      font-weight: 500;
      margin-bottom: 5px;
      color: #333;
    }
    
    .profile-value {
      padding-bottom: 10px;
      margin-bottom: 15px;
      font-weight: normal;
      border-bottom: 1px solid #eee;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .profile-picture {
      width: 100px;
      height: 100px;
      background-color: #f0f0f0;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
      border-radius: 4px;
    }
    
    .profile-icon {
      font-size: 60px;
      color: #aaa;
    }
    
    .btn-primary {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }
    
    .btn-primary:hover {
      background-color: #0b5ed7;
      border-color: #0a58ca;
    }
    
    .user-info {
      margin-left: 20px;
    }
    
    .user-info-item {
      margin-bottom: 20px;
    }
    
    .edit-icon {
      color: #6c757d;
      cursor: pointer;
    }
    
    .edit-icon:hover {
      color: #0d6efd;
    }
    
    .form-control:disabled {
      background-color: #fff;
      opacity: 1;
      border: none;
      padding: 0;
      height: auto;
      box-shadow: none;
    }
    
    .edit-buttons {
      display: none;
      margin-top: 20px;
    }
    
    .edit-buttons.show {
      display: flex;
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
    <!-- Sidebar - Consistent with dashboard.php -->
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
        <a href="AdminInquiries.php" class="sidebar-link">
          <i class="fas fa-envelope"></i> Inquiries
        </a>
        <a href="user-admin.php" class="sidebar-link">
          <i class="fas fa-users"></i> Account Manager
        </a>
        <a href="profile.php" class="sidebar-link active">
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
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
        </div>
        
        <!-- Profile Content -->
        <div class="content-area">
          <!-- Admin Profile Content -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Admin Profile</h3>
            <div>
              <button class="btn btn-primary me-2" id="editProfileBtn">
                <i class="fas fa-edit me-1"></i> Edit Profile
              </button>
              <button class="btn btn-primary">
                <i class="fas fa-camera me-1"></i> Change Profile Picture
              </button>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-3">
              <div class="profile-picture">
                <i class="fas fa-user profile-icon"></i>
              </div>
            </div>
            <div class="col-md-9">
              <form id="profileForm">
                <div class="user-info">
                  <div class="user-info-item">
                    <div class="profile-label">Name</div>
                    <div class="profile-value">
                      <input type="text" class="form-control" id="name" value="John Rey" disabled>
                      <i class="fas fa-pen edit-icon field-edit" data-field="name"></i>
                    </div>
                  </div>
                  
                  <div class="user-info-item">
                    <div class="profile-label">Username</div>
                    <div class="profile-value">
                      <input type="text" class="form-control" id="username" value="admin" disabled>
                      <i class="fas fa-pen edit-icon field-edit" data-field="username"></i>
                    </div>
                  </div>
                  
                  <div class="user-info-item">
                    <div class="profile-label">Email</div>
                    <div class="profile-value">
                      <input type="email" class="form-control" id="email" value="jr@gmail.com" disabled>
                      <i class="fas fa-pen edit-icon field-edit" data-field="email"></i>
                    </div>
                  </div>
                  
                  <div class="user-info-item">
                    <div class="profile-label">Phone Number</div>
                    <div class="profile-value">
                      <input type="text" class="form-control" id="phone" value="092312534" disabled>
                      <i class="fas fa-pen edit-icon field-edit" data-field="phone"></i>
                    </div>
                  </div>
                  
                  <div class="user-info-item">
                    <div class="profile-label">Address</div>
                    <div class="profile-value">
                      <textarea class="form-control" id="address" disabled>123 Main Street, Apt 45</textarea>
                      <i class="fas fa-pen edit-icon field-edit" data-field="address"></i>
                    </div>
                  </div>
                  
                  <div class="user-info-item">
                    <div class="profile-label">Postal Code</div>
                    <div class="profile-value">
                      <input type="text" class="form-control" id="postalCode" value="10001" disabled>
                      <i class="fas fa-pen edit-icon field-edit" data-field="postalCode"></i>
                    </div>
                  </div>
                  
                  <div class="edit-buttons" id="editButtons">
                    <button type="button" class="btn btn-success me-2" id="saveBtn">Save Changes</button>
                    <button type="button" class="btn btn-secondary" id="cancelBtn">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Individual field edit icons
    const fieldEditIcons = document.querySelectorAll('.field-edit');
    const editProfileBtn = document.getElementById('editProfileBtn');
    const saveBtn = document.getElementById('saveBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const editButtons = document.getElementById('editButtons');
    const form = document.getElementById('profileForm');
    const inputs = form.querySelectorAll('input, textarea');
    
    // Enable editing for specific field when pencil icon is clicked
    fieldEditIcons.forEach(icon => {
      icon.addEventListener('click', function() {
        const fieldId = this.getAttribute('data-field');
        const input = document.getElementById(fieldId);
        input.disabled = false;
        input.focus();
        editButtons.classList.add('show');
      });
    });
    
    // Enable all fields for editing when Edit Profile button is clicked
    editProfileBtn.addEventListener('click', function() {
      inputs.forEach(input => {
        input.disabled = false;
      });
      editButtons.classList.add('show');
    });
    
    // Save changes
    saveBtn.addEventListener('click', function() {
      // Here you would typically make an API call to save the changes
      // For demo purposes, we'll just disable the fields
      inputs.forEach(input => {
        input.disabled = true;
      });
      editButtons.classList.remove('show');
      
      // Show success message
      const alert = document.createElement('div');
      alert.className = 'alert alert-success mt-3';
      alert.innerHTML = 'Profile updated successfully!';
      form.appendChild(alert);
      
      setTimeout(() => {
        alert.remove();
      }, 3000);
    });
    
    // Cancel editing
    cancelBtn.addEventListener('click', function() {
      // Reset the form to original values (would need to store original values in a real app)
      inputs.forEach(input => {
        input.disabled = true;
      });
      editButtons.classList.remove('show');
    });
  });

  // Update current date and time script
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