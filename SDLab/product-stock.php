<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metro District Designs - Product Inventory</title>
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

    /* Sidebar styles from dashboard.php */
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
      border-radius: 0;
      margin: 0;
      border: none;
      cursor: pointer;
      transition: all 0.2s;
    }
    
    .edit-btn {
      background-color: #0d6efd;
      color: white;
      border-radius: 4px 0 0 4px;
    }
    
    .delete-btn {
      background-color: #dc3545;
      color: white;
      border-radius: 0 4px 4px 0;
    }
    
    .edit-btn:hover {
      background-color: #0b5ed7;
    }
    
    .delete-btn:hover {
      background-color: #bb2d3b;
    }
    
    .add-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 8px 16px;
      font-weight: 500;
      background-color: #dc3545;
      border: none;
      color: white;
      transition: all 0.3s;
      border-radius: 4px;
    }
    
    .add-btn:hover {
      background-color: #c82333;
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
      color: #dc3545;
    }
    
    .stock-low {
      color: #dc3545;
      font-weight: 500;
    }
    
    .stock-medium {
      color: #fd7e14;
      font-weight: 500;
    }
    
    .stock-good {
      color: #198754;
      font-weight: 500;
    }
    
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
      color: #dc3545;
    }
    
    /* Action buttons group */
    .action-buttons {
      display: flex;
    }
    
    /* Card headers */
    .card .card-header {
      background-color: #212529;
      color: white;
      padding: 10px 15px;
      font-weight: 500;
    }
    
    /* Color display */
    .color-circle {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 5px;
      border: 1px solid #ddd;
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
    
    .color-preview {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      display: inline-block;
      border: 1px solid #ddd;
      vertical-align: middle;
      margin-left: 10px;
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
        position: static;
        width: 100%;
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
      <!-- Sidebar from dashboard.php -->
      <div class="col-auto">
        <div class="sidebar">
          <div class="logo-container">
            <img src="/api/placeholder/40/40" class="logo" alt="Logo">
            <h5 class="brand-name">Metro District Designs</h5>
          </div>
          <a href="dashboard.php" class="sidebar-link">
            <i class="fas fa-tachometer-alt"></i> Dashboard
          </a>
          <a href="product-stock.php" class="sidebar-link active">
            <i class="fas fa-box"></i> Product Stock
          </a>
          <!-- Changed to match dashboard.php's sidebar links -->
          <a href="AdminInquiries.php" class="sidebar-link">
            <i class="fas fa-envelope"></i> Inquiries
          </a>
          <a href="admin-homepage-editor.php" class="sidebar-link">
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
                <li class="breadcrumb-item active" aria-current="page">Product Stock</li>
              </ol>
            </nav>
          </div>
          
          <!-- Page Title -->
          <div class="page-title">
            <span>Product Stock</span>
            <button class="btn add-btn" id="addNewProductBtn">
              <i class="fas fa-plus-circle"></i> Add New Product
            </button>
          </div>
          
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="search-container">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control search-input" id="searchProducts" placeholder="Search products...">
              </div>
            </div>
          </div>
          
          <div class="content-area">
            <div class="card">
              <div class="card-header">
                Product Inventory
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-bordered mb-0" id="productsTable">
                    <thead>
                      <tr>
                        <th>#ID</th>
                        <th>Product Name</th>
                        <th>Category/Type</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Stock</th>
                        <th>Selling Price</th>
                        <th>Product Added</th>
                        <th>Product Modified</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="productTableBody">
                      <!-- Sample row, will be populated by JavaScript -->
                    </tbody>
                  </table>
                </div>
                
                <!-- Empty state message - only shows when no products -->
                <div class="empty-state" id="emptyState" style="display: none;">
                  <i class="fas fa-box-open"></i>
                  <h4>No Products Found</h4>
                  <p>Click "Add New Product" to add items to your inventory.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add/Edit Product Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Add New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="productForm">
            <input type="hidden" id="editProductId">
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" required>
              </div>
              <div class="col-md-6">
                <label for="productCategory" class="form-label">Category/Type</label>
                <select class="form-select" id="productCategory" required>
                  <option value="">Select category</option>
                  <option value="Pre-Made Design">Pre-Made Design</option>
                  <option value="Commissioned Design">Commissioned Design</option>
                  <option value="Limited Edition">Limited Edition</option>
                  <option value="Seasonal Collection">Seasonal Collection</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="productColor" class="form-label">Color</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="productColor" placeholder="e.g. Black, Red, Blue" required>
                  <input type="color" class="form-control form-control-color" id="productColorCode" title="Choose color">
                </div>
              </div>
              <div class="col-md-6">
                <label for="productSize" class="form-label">Size</label>
                <select class="form-select" id="productSize" required>
                  <option value="">Select size</option>
                  <option value="Small">Small</option>
                  <option value="Medium">Medium</option>
                  <option value="Large">Large</option>
                  <option value="X-Large">X-Large</option>
                  <option value="Standard">Standard</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="productStock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="productStock" min="0" required>
              </div>
              <div class="col-md-6">
                <label for="productPrice" class="form-label">Selling Price (₱)</label>
                <input type="number" class="form-control" id="productPrice" min="0" step="0.01" required>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="saveProductBtn">Save Product</button>
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
          <p>Are you sure you want to delete this product? This action cannot be undone.</p>
          <p><strong>Product: </strong><span id="deleteProductName"></span></p>
          <input type="hidden" id="deleteProductId">
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
      // Initialize products array (sample data)
      let products = [
        {
          id: 1,
          name: 'Metro District Hoodie',
          category: 'Pre-Made Design',
          color: 'Black',
          colorCode: '#000000',
          size: 'Standard',
          stock: 15,
          price: 800.00,
          dateAdded: 'Apr 01, 2025',
          dateModified: 'Apr 05, 2025'
        },
        {
          id: 2,
          name: 'Urban Style Shirt',
          category: 'Pre-Made Design',
          color: 'Blue',
          colorCode: '#1e90ff',
          size: 'Medium',
          stock: 28,
          price: 850.00,
          dateAdded: 'Apr 01, 2025',
          dateModified: 'Apr 04, 2025'
        },
        {
          id: 3,
          name: 'Custom Graphic Tee',
          category: 'Commissioned Design',
          color: 'Orange',
          colorCode: '#ff4500',
          size: 'Large',
          stock: 5,
          price: 1600.00,
          dateAdded: 'Apr 02, 2025',
          dateModified: 'Apr 06, 2025'
        }
      ];

      // DOM References
      const productTableBody = document.getElementById('productTableBody');
      const emptyState = document.getElementById('emptyState');
      const productsTable = document.getElementById('productsTable');
      const searchInput = document.getElementById('searchProducts');
      
      // Modal references
      const productModal = new bootstrap.Modal(document.getElementById('productModal'));
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
      const toastNotification = new bootstrap.Toast(document.getElementById('toastNotification'));
      
      // Form elements
      const editProductId = document.getElementById('editProductId');
      const productName = document.getElementById('productName');
      const productCategory = document.getElementById('productCategory');
      const productColor = document.getElementById('productColor');
      const productColorCode = document.getElementById('productColorCode');
      const productSize = document.getElementById('productSize');
      const productStock = document.getElementById('productStock');
      const productPrice = document.getElementById('productPrice');
      const productModalLabel = document.getElementById('productModalLabel');
      
      // Delete confirmation elements
      const deleteProductId = document.getElementById('deleteProductId');
      const deleteProductName = document.getElementById('deleteProductName');
      
      // Button references
      const addNewProductBtn = document.getElementById('addNewProductBtn');
      const saveProductBtn = document.getElementById('saveProductBtn');
      const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
      
      // Toast message
      const toastMessage = document.getElementById('toastMessage');

      // Function to show toast notification
      function showToast(message) {
        toastMessage.textContent = message;
        toastNotification.show();
      }

      // Function to generate current date
      function getCurrentDate() {
        const date = new Date();
        const options = { month: 'short', day: '2-digit', year: 'numeric' };
        return date.toLocaleDateString('en-US', options);
      }

      // Function to get next product ID
      function getNextProductId() {
        return products.length > 0 ? Math.max(...products.map(p => p.id)) + 1 : 1;
      }

      // Function to determine stock status class
      function getStockStatusClass(stock) {
        if (stock <= 5) return 'stock-low';
        if (stock <= 20) return 'stock-medium';
        return 'stock-good';
      }

      // Function to render products table
      function renderProducts(productsList = products) {
        productTableBody.innerHTML = '';
        
        if (productsList.length === 0) {
          emptyState.style.display = 'flex';
          productsTable.style.display = 'none';
        } else {
          emptyState.style.display = 'none';
          productsTable.style.display = 'table';
          
          productsList.forEach(product => {
            const row = document.createElement('tr');
            row.setAttribute('data-id', product.id);
            
            row.innerHTML = `
              <td>${product.id}</td>
              <td>${product.name}</td>
              <td>${product.category}</td>
              <td>
                <span class="color-circle" style="background-color: ${product.colorCode};"></span>
                ${product.color}
              </td>
              <td>${product.size}</td>
              <td class="${getStockStatusClass(product.stock)}">${product.stock}</td>
              <td>₱${parseFloat(product.price).toFixed(2)}</td>
              <td>${product.dateAdded}</td>
              <td>${product.dateModified}</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn edit-btn" data-id="${product.id}">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="action-btn delete-btn" data-id="${product.id}">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </td>
            `;
            
            productTableBody.appendChild(row);
          });
        }
      }

      // Initial render
      renderProducts();

      // Search functionality
      searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        
        if (searchTerm === '') {
          renderProducts();
        } else {
          const filteredProducts = products.filter(product => {
            return (
              product.name.toLowerCase().includes(searchTerm) ||
              product.category.toLowerCase().includes(searchTerm) ||
              product.color.toLowerCase().includes(searchTerm) ||
              product.size.toLowerCase().includes(searchTerm)
            );
          });
          
          renderProducts(filteredProducts);
        }
      });

      // Open add product modal
      addNewProductBtn.addEventListener('click', function() {
        // Reset form
        document.getElementById('productForm').reset();
        editProductId.value = '';
        productColorCode.value = '#000000';
        productModalLabel.textContent = 'Add New Product';
        productModal.show();
      });

      // Handle color picker change
      productColorCode.addEventListener('input', function() {
        // You could add logic here to suggest a color name based on the selected color code
      });

      // Save product (add or edit)
      saveProductBtn.addEventListener('click', function() {
        // Validate form
        const form = document.getElementById('productForm');
        if (!form.checkValidity()) {
          form.reportValidity();
          return;
        }
        
        const id = editProductId.value ? parseInt(editProductId.value) : getNextProductId();
        const name = productName.value.trim();
        const category = productCategory.value;
        const color = productColor.value.trim();
        const colorCode = productColorCode.value;
        const size = productSize.value;
        const stock = parseInt(productStock.value);
        const price = parseFloat(productPrice.value);
        const currentDate = getCurrentDate();
        
        if (editProductId.value) {
          // Update existing product
          const index = products.findIndex(p => p.id === id);
          if (index !== -1) {
            // Preserve original date added
            const dateAdded = products[index].dateAdded;
            
            // Update product
            products[index] = {
              id,
              name,
              category,
              color,
              colorCode,
              size,
              stock,
              price,
              dateAdded,
              dateModified: currentDate
            };
            
            showToast(`Product "${name}" updated successfully!`);
          }
        } else {
          // Add new product
          const newProduct = {
            id,
            name,
            category,
            color,
            colorCode,
            size,
            stock,
            price,
            dateAdded: currentDate,
            dateModified: currentDate
          };
          
          products.push(newProduct);
          showToast(`Product "${name}" added successfully!`);
        }
        
        // Close modal and refresh table
        productModal.hide();
        renderProducts();
      });

      // Handle edit button clicks (using event delegation)
      document.addEventListener('click', function(event) {
        if (event.target.closest('.edit-btn')) {
          const btn = event.target.closest('.edit-btn');
          const productId = parseInt(btn.getAttribute('data-id'));
          const product = products.find(p => p.id === productId);
          
          if (product) {
            // Fill the form with product data
            editProductId.value = product.id;
            productName.value = product.name;
            productCategory.value = product.category;
            productColor.value = product.color;
            productColorCode.value = product.colorCode;
            productSize.value = product.size;
            productStock.value = product.stock;
            productPrice.value = product.price;
            
            // Update modal title
            productModalLabel.textContent = 'Edit Product';
            
            // Show modal
            productModal.show();
          }
        }
        
        if (event.target.closest('.delete-btn')) {
          const btn = event.target.closest('.delete-btn');
          const productId = parseInt(btn.getAttribute('data-id'));
          const product = products.find(p => p.id === productId);
          
          if (product) {
            // Set deletion confirmation details
            deleteProductId.value = product.id;
            deleteProductName.textContent = product.name;
            
            // Show delete confirmation modal
            deleteModal.show();
          }
        }
      });

      // Confirm delete
      confirmDeleteBtn.addEventListener('click', function() {
        const productId = parseInt(deleteProductId.value);
        const index = products.findIndex(p => p.id === productId);
        
        if (index !== -1) {
          const deletedProductName = products[index].name;
          
          // Remove product from array
          products.splice(index, 1);
          
          // Show notification
          showToast(`Product "${deletedProductName}" deleted successfully!`);
          
          // Close modal and refresh table
          deleteModal.hide();
          renderProducts();
        }
      });
    });
  </script>
</body>
</html>