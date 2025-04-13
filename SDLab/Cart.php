<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs - Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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

        .cart-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .order-item {
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .order-item-image {
            width: 100px;
            height: 100px;
            background-color: #d3d3d3;
            margin-right: 15px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .quantity-btn {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .quantity-input {
            width: 50px !important;
            text-align: center;
            margin: 0 5px;
        }

        .checkout-btn {
            width: 100%;
            background-color: #1E1E1E;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .remove-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .item-details {
            flex-grow: 1;
        }
        
        .item-selection {
            margin-right: 15px;
        }
        
        .form-check-input {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        
        /* Size and color styles */
        .option-group {
            margin-top: 5px;
        }
        
        .option-label {
            font-weight: bold;
            margin-right: 5px;
        }
        
        .size-selector, .color-selector {
            padding: 4px 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/30/30" class="rounded-circle" alt="Logo">
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
                        <a class="nav-link" href="Cart.php">
                            <i class="bi bi-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cart Container -->
    <div class="container">
        <div class="cart-container">
            <h2 class="mb-4">ORDERS</h2>
            <div id="cart-items">
                <!-- Item 1 -->
                <div class="order-item">
                    <div class="item-selection">
                        <input class="form-check-input item-checkbox" type="checkbox" value="1" checked>
                    </div>
                    <div class="order-item-image"></div>
                    <div class="item-details">
                        <h5>Test Design</h5>
                        <p>Price: ₱599</p>
                        
                        <div class="d-flex flex-wrap gap-3">
                            <div class="option-group">
                                <span class="option-label">Size:</span>
                                <select class="size-selector" name="size">
                                    <option value="S">Small</option>
                                    <option value="M" selected>Medium</option>
                                    <option value="L">Large</option>
                                    <option value="XL">X-Large</option>
                                </select>
                            </div>
                            <div class="option-group">
                                <span class="option-label">Color:</span>
                                <select class="color-selector" name="color">
                                    <option value="Black" selected>Black</option>
                                    <option value="White">White</option>
                                    <option value="Red">Red</option>
                                    <option value="Blue">Blue</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="quantity-control">
                                <button class="quantity-btn decrease-btn">-</button>
                                <input type="text" class="form-control quantity-input" value="1" readonly>
                                <button class="quantity-btn increase-btn">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="bi bi-trash"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="order-item">
                    <div class="item-selection">
                        <input class="form-check-input item-checkbox" type="checkbox" value="2">
                    </div>
                    <div class="order-item-image"></div>
                    <div class="item-details">
                        <h5>Custom Logo Design</h5>
                        <p>Price: ₱899</p>
                        
                        <div class="d-flex flex-wrap gap-3">
                            <div class="option-group">
                                <span class="option-label">Size:</span>
                                <select class="size-selector" name="size">
                                    <option value="S">Small</option>
                                    <option value="M">Medium</option>
                                    <option value="L" selected>Large</option>
                                    <option value="XL">X-Large</option>
                                </select>
                            </div>
                            <div class="option-group">
                                <span class="option-label">Color:</span>
                                <select class="color-selector" name="color">
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Red" selected>Red</option>
                                    <option value="Blue">Blue</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="quantity-control">
                                <button class="quantity-btn decrease-btn">-</button>
                                <input type="text" class="form-control quantity-input" value="1" readonly>
                                <button class="quantity-btn increase-btn">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="bi bi-trash"></i> Remove
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="selectAllItems">
                    <label class="form-check-label" for="selectAllItems">
                        Select All Items
                    </label>
                </div>
                <div>
                    <span class="fw-bold">Selected Items: <span id="selectedCount">1</span></span>
                </div>
            </div>
            
            <button class="checkout-btn">Check Out</button>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const cartItems = document.getElementById('cart-items');
            const checkoutBtn = document.querySelector('.checkout-btn');
            const selectAllCheckbox = document.getElementById('selectAllItems');
            const selectedCountElement = document.getElementById('selectedCount');
            
            // Function to update selected count
            function updateSelectedCount() {
                const checkedItems = document.querySelectorAll('.item-checkbox:checked');
                selectedCountElement.textContent = checkedItems.length;
                
                // Determine if "Select All" should be checked
                const totalItems = document.querySelectorAll('.item-checkbox').length;
                selectAllCheckbox.checked = checkedItems.length === totalItems;
            }
            
            // Initialize count
            updateSelectedCount();
            
            // Handle quantity changes
            cartItems.addEventListener('click', function(event) {
                // Increase quantity
                if (event.target.classList.contains('increase-btn')) {
                    const quantityInput = event.target.previousElementSibling;
                    let currentValue = parseInt(quantityInput.value);
                    quantityInput.value = currentValue + 1;
                }
                
                // Decrease quantity
                if (event.target.classList.contains('decrease-btn')) {
                    const quantityInput = event.target.nextElementSibling;
                    let currentValue = parseInt(quantityInput.value);
                    if (currentValue > 1) {
                        quantityInput.value = currentValue - 1;
                    }
                }
                
                // Remove item
                if (event.target.classList.contains('remove-btn') || event.target.closest('.remove-btn')) {
                    const orderItem = event.target.closest('.order-item');
                    orderItem.remove();
                    updateSelectedCount();
                    
                    // If cart is empty
                    if (document.querySelectorAll('.order-item').length === 0) {
                        const emptyMessage = document.createElement('div');
                        emptyMessage.className = 'text-center py-4';
                        emptyMessage.innerHTML = `
                            <p>Your cart is empty</p>
                            <a href="Products.php" class="btn btn-outline-dark">Continue Shopping</a>
                        `;
                        cartItems.appendChild(emptyMessage);
                        
                        // Hide select all option
                        selectAllCheckbox.closest('.d-flex').style.display = 'none';
                    }
                }
            });
            
            // Handle item checkboxes
            cartItems.addEventListener('change', function(event) {
                if (event.target.classList.contains('item-checkbox')) {
                    updateSelectedCount();
                }
            });
            
            // Handle select all checkbox
            selectAllCheckbox.addEventListener('change', function() {
                const checkboxes = document.querySelectorAll('.item-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = selectAllCheckbox.checked;
                });
                updateSelectedCount();
            });
            
            // Handle checkout button
            checkoutBtn.addEventListener('click', function() {
                const selectedItems = document.querySelectorAll('.item-checkbox:checked');
                
                if (selectedItems.length === 0) {
                    alert('Please select at least one item to check out.');
                    return;
                }
                
                // Collect data from selected items
                const checkoutItems = [];
                selectedItems.forEach(checkbox => {
                    const item = checkbox.closest('.order-item');
                    const title = item.querySelector('h5').textContent;
                    const quantity = item.querySelector('.quantity-input').value;
                    const size = item.querySelector('.size-selector').value;
                    const color = item.querySelector('.color-selector').value;
                    
                    checkoutItems.push({
                        title,
                        quantity,
                        size,
                        color
                    });
                });
                
                console.log('Checking out items:', checkoutItems);
                alert(`Proceeding to checkout with ${selectedItems.length} item(s).`);
                // Here you would redirect to checkout page with the selected items
                // window.location.href = 'Checkout.php';
            });
        });
    </script>
</body>
</html>