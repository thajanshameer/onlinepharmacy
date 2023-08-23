<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <script src="https://kit.fontawesome.com/5f2bf94b1d.js" crossorigin="anonymous"></script>
    
    <style>
        
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    background-color: #4CAF50;
    color: #fff;
    padding: 20px;
}

header h1 {
    margin: 10px;
}

header nav ul {
    list-style-type: none;
    margin: 10px;
    padding: 5px;
}

header nav ul li {
    display: inline;
    margin-right: 10px;
}

header nav ul li a {
    text-decoration: none;
    color: #fff;
}

div {
    margin: 10px;
}

label {
    font-weight: bold;
}

input[type="text"],
select {
    padding: 8px;
    margin-left: 10px;
    width: 200px;
}

#productList {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product {
    text-align: center;
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 250px;
}

.product img {
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.product h3 {
    margin-top: 10px;
    color: #4CAF50;
}

.product p {
    color: #777;
    margin-bottom: 5px;
}

.product h2 {
    color: #000;
}

.product button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    margin-top: 10px;
    border-radius: 4px;
    cursor: pointer;
    border: none;
}

.product button:hover {
    background-color: #45a049;
}

h2 {
    text-align: center;
    margin: 20px 0;
}

#cart {
    list-style: none;
    padding: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
}

#cart li {
    margin: 5px 0;
}

#cart button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#cart button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <header>
        <h1>Online Pharmacy</h1>
        <nav>
            <ul>
            <li><a href="home1.php"><i class="fa-solid fa-house-chimney-user"></i></a></li>
                <li><a href="medicine.html">Medicine</a></li>
                <li><a href="ayurvedic.html">Ayurvedic</a></li>
                <li><a href="babycare.html">Baby Care</a></li>
                <li><a href="personalcare.html">Health Care</a></li>
                <li><a href="#">Health and Nutrition</a></li>
                <li><a href="#">Home Essentials</a></li>
            </ul>
        </nav>
    </header>
    <h2>Product Catalog</h2>

    <div>
        <label for="searchInput">Search:</label>
        <input type="text" id="searchInput" onkeyup="searchProducts()">
    </div>

    <div>
        <label for="sortSelect">Sort By:</label>
        <select id="sortSelect" onchange="sortProducts()">
            <option value="name">Name</option>
            <option value="price-low">Price (Low to High)</option>
    <option value="price-high">Price (High to Low)</option>
    <option value="rating">Rating</option>
            
            <!-- Add other sorting options if needed -->
        </select>
    </div>

    <div>
        <label for="categoryFilter">Filter By Category:</label>
        <select id="categoryFilter" onchange="filterProducts()">
            <option value="">All</option>
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
            <!-- Add other category options if needed -->
        </select>
    </div>

    <div id="productList">
        <div class="product">
            <img src="IMMUGUARD.jpg" alt="product 8">
            <h3>ImmuneGuard</h3>
            <p>ImmuneGuard Syrup - 200ml</p>
            <h2>MRP = $35</h2>
            <button onclick="addToCart('Product 8', 35)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="STRESSLESS.jpg" alt="product 9">
            <h3>Stressless</h3>
            <p>StressLess Tablets - Pack of 40</p>
            <h2>MRP = $55</h2>
            <button onclick="addToCart('Product 9', 55)">Add to Cart</button>
        </div>
        
    </div>
    
 
<div class="product">
    <img src="<?php echo $productImage; ?>" alt="<?php echo $productName; ?>">
    <h3><?php echo $productName; ?></h3>
    <p><?php echo $productDescription; ?></p>
    <h2>MRP = $<?php echo $productPrice; ?></h2>
    <button onclick="addToCart('<?php echo $productName; ?>', <?php echo $productPrice; ?>)">Add to Cart</button>
</div>


    <div>
        <h2>Shopping Cart</h2>
        <ul id="cart">
        </ul>

        <button onclick="checkout()">Proceed to Checkout</button><div id="checkout">
    <h2>Checkout as Guest</h2>
    <form id="guestCheckoutForm">
        <label for="guestName">Full Name:</label>
        <input type="text" id="guestName" required>
        
        <label for="guestEmail">Email:</label>
        <input type="email" id="guestEmail" required>
        
        <label for="guestAddress">Shipping Address:</label>
        <textarea id="guestAddress" required></textarea>
        
        <label for="guestCardNumber">Card Number:</label>
        <input type="text" id="guestCardNumber" required>
        
        <label for="guestExpiry">Expiry Date:</label>
        <input type="text" id="guestExpiry" placeholder="MM/YY" required>
        
        <label for="guestCVV">CVV:</label>
        <input type="text" id="guestCVV" required>
        
        <button type="button" onclick="processGuestCheckout()">Place Order</button>
    </form>
</div>


        
    </div>
    
    

    <script src="cart.js"></script>
    <script src="catlog.js"></script>
    <script>
    // JavaScript code for searching products
        function searchProducts() {
            var input = document.getElementById("searchInput").value.toLowerCase();
            var products = document.getElementsByClassName("product");

            for (var i = 0; i < products.length; i++) {
                var productName = products[i].getElementsByTagName("h3")[0].innerText.toLowerCase();
                var productDescription = products[i].getElementsByTagName("p")[0].innerText.toLowerCase();
                
                if (productName.includes(input) || productDescription.includes(input)) {
                    products[i].style.display = "block";
                } else {
                    products[i].style.display = "none";
                }
            }
        }

        // JavaScript code for sorting products
        function sortProducts() {
            var sortBy = document.getElementById("sortSelect").value;
            var productGrid = document.querySelector(".product-grid");
            var products = Array.from(productGrid.getElementsByClassName("product"));

            products.sort(function(a, b) {
                var aText = a.getElementsByTagName("h3")[0].innerText.toLowerCase();
                var bText = b.getElementsByTagName("h3")[0].innerText.toLowerCase();

                if (sortBy === "name") {
                    return aText.localeCompare(bText);
                } else if (sortBy === "price") {
                    var aPrice = parseFloat(a.querySelector("p").innerText.replace("MRP=$", ""));
                    var bPrice = parseFloat(b.querySelector("p").innerText.replace("MRP=$", ""));
                    return aPrice - bPrice;
                }
            });

            productGrid.innerHTML = "";
            products.forEach(function(product) {
                productGrid.appendChild(product);
            });
            // ... Existing JavaScript code ...

function sortProducts() {
    const sortBy = document.getElementById("sortSelect").value;

    if (sortBy === "name") {
        products.sort((a, b) => a.name.localeCompare(b.name));
    } else if (sortBy === "price-low") {
        products.sort((a, b) => a.price - b.price);
    } else if (sortBy === "price-high") {
        products.sort((a, b) => b.price - a.price);
    } else if (sortBy === "rating") {
        products.sort((a, b) => b.rating - a.rating);
    }
    
    displayProducts();
}


        }
        </script>
   

</body>
</html>


