<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metro District Designs - Account Manager</title>
  <link rel="icon" type="image/png" href="images/logo/threadcraft-logo.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    /* Sidebar styles */
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
    
    /* Main content area */
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
    
    /* Button styles */
    .btn-primary {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }
    
    .btn-primary:hover {
      background-color: #0b5ed7;
      border-color: #0a58ca;
    }

    /* Card and table styles */
    .card {
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      margin-bottom: 1.5rem;
      border: 1px solid #dee2e6;
      overflow: hidden;
    }
    
    .table th {
      background-color: #212529;
      color: white;
      font-weight: 500;
      vertical-align: middle;
    }
    
    .table td {
      vertical-align: middle;
    }
    
    .table tr:hover {
      background-color: rgba(220, 53, 69, 0.05);
    }
    
    /* Action buttons */
    .action-btn {
      width: 36px;
      height: 36px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 4px;
      margin: 0;
      border: none;
      cursor: pointer;
      transition: all 0.2s;
      background-color: #dc3545;
      color: white;
    }
    
    .action-btn:hover {
      background-color: #bb2d3b;
    }
    
    .add-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 8px 16px;
      font-weight: 500;
      background-color: #0d6efd;
      border: none;
      color: white;
      transition: all 0.3s;
      border-radius: 4px;
    }
    
    .add-btn:hover {
      background-color: #0b5ed7;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .add-btn i {
      margin-right: 8px;
    }
    
    /* Other styles */
    .content-area {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .table-responsive {
      overflow-x: auto;
    }
    
    .breadcrumb-item a {
      color: #212529;
      text-decoration: none;
    }
    
    .breadcrumb-item a:hover {
      color: #0d6efd;
    }
    
    /* Search container */
    .search-container {
      position: relative;
      margin-bottom: 20px;
    }
    
    .search-container i {
      position: absolute;
      left: 10px;
      top: 10px;
      color: #6c757d;
    }
    
    .search-input {
      padding-left: 35px;
      border-radius: 20px;
    }
    
    /* Empty state */
    .empty-state {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 40px 0;
      color: #6c757d;
    }
    
    .empty-state i {
      font-size: 48px;
      margin-bottom: 20px;
      color: #0d6efd;
    }
    
    /* Modal styles */
    .modal-header {
      background-color: #212529;
      color: white;
    }
    
    .modal-header .btn-close {
      filter: invert(1) grayscale(100%) brightness(200%);
    }
    
    .form-label {
      font-weight: 500;
    }
    
    /* Toast notification */
    .toast-container {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1060;
    }
    
    .toast {
      background-color: white;
      max-width: 350px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        position: static;
        min-height: auto;
      }
      
      .main-content {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>
</head>
<body>
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
          <a href="admin-homepage-editor.php" class="sidebar-link">
            <svg width="20" height="20" viewBox="0 0 1024 1024" fill="currentColor" style="margin-right: 15px;">
                        <<path d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9c3.9-3.9 3.9-10.2 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 33.2 39.7z"/>
                    </svg> Homepage Editor
          </a>
          <a href="user-admin.php" class="sidebar-link active">
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
                <li class="breadcrumb-item active" aria-current="page">Account Manager</li>
              </ol>
            </nav>
          </div>
          
          <!-- Page Title -->
          <div class="page-title">
            <span>User Accounts</span>
            <button class="btn add-btn" id="addNewUserBtn">
              <i class="fas fa-plus-circle"></i> Add User
            </button>
          </div>
          
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="search-container">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control search-input" id="searchUsers" placeholder="Search users...">
              </div>
            </div>
          </div>
          
          <div class="content-area">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-bordered mb-0" id="usersTable">
                    <thead>
                      <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Username</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody id="userTableBody">
                      <!-- User data will be populated by JavaScript -->
                    </tbody>
                  </table>
                </div>
                
                <!-- Empty state message - only shows when no users -->
                <div class="empty-state" id="emptyState" style="display: none;">
                  <i class="fas fa-users"></i>
                  <h4>No Users Found</h4>
                  <p>Click "Add User" to add users to the system.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add/Edit User Modal -->
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userModalLabel">Add New User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="userForm">
            <input type="hidden" id="editUserId">
            <div class="mb-3">
              <label for="userName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="userName" required>
            </div>
            <div class="mb-3">
              <label for="userEmail" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="userEmail" required>
            </div>
            <div class="mb-3">
              <label for="userPhone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="userPhone">
            </div>
            <div class="mb-3">
              <label for="userUsername" class="form-label">Username</label>
              <input type="text" class="form-control" id="userUsername" required>
            </div>
            <div class="mb-3" id="passwordFieldContainer">
              <label for="userPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="userPassword" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="saveUserBtn">Save User</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this user? This action cannot be undone.</p>
          <p><strong>User: </strong><span id="deleteUserName"></span></p>
          <input type="hidden" id="deleteUserId">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast Notification -->
  <div class="toast-container">
    <div class="toast align-items-center border-0" role="alert" aria-live="assertive" aria-atomic="true" id="toastNotification">
      <div class="d-flex">
        <div class="toast-body" id="toastMessage">
          Operation successful!
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize users array with sample data from the screenshot
      let users = [
        {
          id: 7,
          name: 'Anthony Edwards',
          email: 'ant_man@gmail.com',
          phone: '00',
          username: 'ant_man5'
        },
        {
          id: 8,
          name: 'Nikola Jokić',
          email: 'Nikola_joker15@yahoo.com',
          phone: '00',
          username: 'Joker15'
        },
        {
          id: 9,
          name: 'jin eck',
          email: 'jovs@gmail.com',
          phone: '00',
          username: 'Jin'
        },
        {
          id: 10,
          name: 'Thanasis Antetokounmbucks',
          email: 'thanasis123@gmail.com',
          phone: '09159539824',
          username: 'thanasis_goat'
        },
        {
          id: 11,
          name: 'Lebron James',
          email: 'lbj_goat@yahoo.com',
          phone: '09279439410',
          username: 'lbj_goat'
        },
        {
          id: 12,
          name: 'Richard Padilla',
          email: 'rpadilla@microsoft.com',
          phone: '09698271418',
          username: 'richards'
        }
      ];

      // DOM References
      const userTableBody = document.getElementById('userTableBody');
      const emptyState = document.getElementById('emptyState');
      const usersTable = document.getElementById('usersTable');
      const searchInput = document.getElementById('searchUsers');
      
      // Modal references
      const userModal = new bootstrap.Modal(document.getElementById('userModal'));
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
      const toastNotification = new bootstrap.Toast(document.getElementById('toastNotification'));
      
      // Form elements
      const editUserId = document.getElementById('editUserId');
      const userName = document.getElementById('userName');
      const userEmail = document.getElementById('userEmail');
      const userPhone = document.getElementById('userPhone');
      const userUsername = document.getElementById('userUsername');
      const userPassword = document.getElementById('userPassword');
      const passwordFieldContainer = document.getElementById('passwordFieldContainer');
      const userModalLabel = document.getElementById('userModalLabel');
      
      // Delete confirmation elements
      const deleteUserId = document.getElementById('deleteUserId');
      const deleteUserName = document.getElementById('deleteUserName');
      
      // Button references
      const addNewUserBtn = document.getElementById('addNewUserBtn');
      const saveUserBtn = document.getElementById('saveUserBtn');
      const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
      
      // Toast message
      const toastMessage = document.getElementById('toastMessage');

      // Function to show toast notification
      function showToast(message) {
        toastMessage.textContent = message;
        toastNotification.show();
      }

      // Function to get next user ID
      function getNextUserId() {
        return users.length > 0 ? Math.max(...users.map(u => u.id)) + 1 : 1;
      }

      // Function to render users table
      function renderUsers(usersList = users) {
        userTableBody.innerHTML = '';
        
        if (usersList.length === 0) {
          emptyState.style.display = 'flex';
          usersTable.style.display = 'none';
        } else {
          emptyState.style.display = 'none';
          usersTable.style.display = 'table';
          
          usersList.forEach(user => {
            const row = document.createElement('tr');
            row.setAttribute('data-id', user.id);
            
            row.innerHTML = `
              <td>${user.id}</td>
              <td>${user.name}</td>
              <td>${user.email}</td>
              <td>${user.phone || '00'}</td>
              <td>${user.username}</td>
              <td>
                <button class="action-btn delete-btn" data-id="${user.id}">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            `;
            
            // Add click event to the entire row for editing
            row.addEventListener('click', function(e) {
              // Don't trigger edit if click was on delete button
              if (!e.target.closest('.delete-btn')) {
                editUser(user.id);
              }
            });
            
            userTableBody.appendChild(row);
          });
        }
      }

      // Function to edit user
      function editUser(userId) {
        const user = users.find(u => u.id === userId);
        
        if (user) {
          // Fill the form with user data
          editUserId.value = user.id;
          userName.value = user.name;
          userEmail.value = user.email;
          userPhone.value = user.phone || '';
          userUsername.value = user.username;
          
          // Password is optional when editing
          userPassword.removeAttribute('required');
          passwordFieldContainer.querySelector('label').textContent = 'Password (leave blank to keep current)';
          userPassword.value = '';
          
          // Update modal title
          userModalLabel.textContent = 'Edit User';
          
          // Show modal
          userModal.show();
        }
      }

      // Initial render
      renderUsers();

      // Search functionality
      searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        
        if (searchTerm === '') {
          renderUsers();
        } else {
          const filteredUsers = users.filter(user => {
            return (
              user.name.toLowerCase().includes(searchTerm) ||
              user.email.toLowerCase().includes(searchTerm) ||
              user.username.toLowerCase().includes(searchTerm) ||
              (user.phone && user.phone.includes(searchTerm))
            );
          });
          
          renderUsers(filteredUsers);
        }
      });

      // Open add user modal
      addNewUserBtn.addEventListener('click', function() {
        // Reset form
        document.getElementById('userForm').reset();
        editUserId.value = '';
        
        // Password is required when adding new user
        userPassword.setAttribute('required', 'required');
        passwordFieldContainer.querySelector('label').textContent = 'Password';
        
        userModalLabel.textContent = 'Add New User';
        userModal.show();
      });

      // Save user (add or edit)
      saveUserBtn.addEventListener('click', function() {
        // Validate form
        const form = document.getElementById('userForm');
        if (!form.checkValidity()) {
          form.reportValidity();
          return;
        }
        
        const id = editUserId.value ? parseInt(editUserId.value) : getNextUserId();
        const name = userName.value.trim();
        const email = userEmail.value.trim();
        const phone = userPhone.value.trim();
        const username = userUsername.value.trim();
        const password = userPassword.value;
        
        if (editUserId.value) {
          // Update existing user
          const index = users.findIndex(u => u.id === id);
          if (index !== -1) {
            // Update user (preserve password if not changed)
            users[index] = {
              id,
              name,
              email,
              phone,
              username,
              // If we were storing passwords, we'd handle this appropriately
              // For demo purposes, we're not storing/updating passwords
            };
            
            showToast(`User "${name}" updated successfully!`);
          }
        } else {
          // Add new user
          const newUser = {
            id,
            name,
            email,
            phone,
            username,
            // In a real app, we'd hash the password before storing
            // For demo purposes, we're not storing passwords
          };
          
          users.push(newUser);
          showToast(`User "${name}" added successfully!`);
        }
        
        // Close modal and refresh table
        userModal.hide();
        renderUsers();
      });

      // Handle delete button clicks
      document.addEventListener('click', function(event) {
        if (event.target.closest('.delete-btn')) {
          const btn = event.target.closest('.delete-btn');
          const userId = parseInt(btn.getAttribute('data-id'));
          const user = users.find(u => u.id === userId);
          
          if (user) {
            // Set deletion confirmation details
            deleteUserId.value = user.id;
            deleteUserName.textContent = user.name;
            
            // Show delete confirmation modal
            deleteModal.show();
          }
          
          // Prevent event bubbling to avoid opening edit modal
          event.stopPropagation();
        }
      });

      // Confirm delete
      confirmDeleteBtn.addEventListener('click', function() {
        const userId = parseInt(deleteUserId.value);
        const index = users.findIndex(u => u.id === userId);
        
        if (index !== -1) {
          const deletedUserName = users[index].name;
          
          // Remove user from array
          users.splice(index, 1);
          
          // Show notification
          showToast(`User "${deletedUserName}" deleted successfully!`);
          
          // Close modal and refresh table
          deleteModal.hide();
          renderUsers();
        }
      });
    });
  </script>
</body>
</html>