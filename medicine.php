<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <script src="https://kit.fontawesome.com/5f2bf94b1d.js" crossorigin="anonymous"></script>
    <script src="review.js"></script>

    <style>
    /* Reset some default styles for consistency */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
}

/* Style the header */
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

/* Style the navigation menu */
nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav a {
    text-decoration: none;
    color: #fff;
}

/* Style the product catalog */
.product {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    display: inline-block;
    width: 250px;
    text-align: center;
}

.product img {
    max-width: 100%;
}

.product h3 {
    margin-top: 10px;
    font-size: 18px;
}

.product p {
    font-size: 14px;
}

/* Style the search and filter options */
label {
    font-weight: bold;
    margin-right: 10px;
}

input[type="text"],
select {
    padding: 5px;
    margin-bottom: 10px;
}

/* Style the "Add to Cart" button */
button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Style the average rating display */
.average-rating {
    margin-top: 10px;
    font-size: 14px;
}

/* Style the user review and rating section */
.user-review {
    margin-top: 10px;
}

.star-rating {
    font-size: 24px;
    margin-bottom: 10px;
}

.star {
    cursor: pointer;
}

/* Style the shopping cart and checkout section */
.cart {
    list-style: none;
    padding: 0;
}
.cart li {
    margin-bottom: 10px;
}
.cart-total {
    font-weight: bold;
}
.checkout {
    display: none;
    margin-top: 20px;
}


/* Style the guest checkout form */
.guestCheckoutForm {
    width: 300px;
    margin: 0 auto;
}

.guestCheckoutForm label {
    display: block;
    margin-top: 10px;
}

.guestCheckoutForm input[type="text"],
.guestCheckoutForm input[type="email"],
.guestCheckoutForm textarea {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

.guestCheckoutForm button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.guestCheckoutForm button:hover {
    background-color: #0056b3;
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
            <!-- Add other category options  -->
        </select>
    </div>
    <div class="product" data-category="category2">
    <img src="product1.jpg">
    <h3>calcimax forte</h3>
    <p>Calcimax Forte Plus Strip Of 30 Tablets</p>
    <p>MRP=$120</p>
    <button onclick="addToCart('Product 1', 120)">Add to Cart</button>
    <button onclick="buyNow('Product 1', 120)">Buy Now</button> 


    <!-- Average rating display -->
    <div class="average-rating">
        <p>Average Rating: <span class="averageRating">4.5★</span></p>
    </div>

    <div class="user-review">
       
        <div class="star-rating">
            <span class="star" data-rating="1">&#9733;</span>
            <span class="star" data-rating="2">&#9733;</span>
            <span class="star" data-rating="3">&#9733;</span>
            <span class="star" data-rating="4">&#9733;</span>
            <span class="star" data-rating="5">&#9733;</span>
        </div>
        <button onclick="addReview('Product 1')">Submit Review</button>
    </div>
</div>

            <div class="product 2" data-category="category2">
                <img src="product2.jpg">
                <h3>Product 2</h3>
                <p>Dolo (Paracetamol) 650mg Strip Of 15 Tablets</p>
                <P>MRP=$30</p>
                
                <button onclick="addToCart('Product 2', 30)">Add to Cart</button>
                <button onclick="buyNow('Product 2', 30)">Buy Now</button> 

                 <!-- Average rating display -->
    <div class="average-rating">
        <p>Average Rating: <span class="averageRating">4.2★</span></p>
    </div>

    <div class="user-review">
       
        <div class="star-rating">
            <span class="star" data-rating="1">&#9733;</span>
            <span class="star" data-rating="2">&#9733;</span>
            <span class="star" data-rating="3">&#9733;</span>
            <span class="star" data-rating="4">&#9733;</span>
        </div>
        <button onclick="addReview('Product 2')">Submit Review</button>
    </div>
            </div>
            <div class="product 3">
                <img src="product3.jpg">
                <h3>Product 3</h3>
                <p>Vitamin D3 - Supports Bone Health - Helps In Absorption Of Calcium - Bottle Of 60</p>
                <p>MRP=$340</p>
                <button onclick="addToCart('Product 3', 350)">Add to Cart</button>
                <button onclick="buyNow('Product 3', 340)">Buy Now</button> 

    <div class="average-rating">
        <p>Average Rating: <span class="averageRating">4.2★</span></p>
    </div>
    
    <div class="user-review">
       
        <div class="star-rating">
            <span class="star" data-rating="1">&#9733;</span>
            <span class="star" data-rating="2">&#9733;</span>
            <span class="star" data-rating="3">&#9733;</span>
        </div>
        <button onclick="addReview('Product 3')">Submit Review</button>
        
    </div>
        </div>

        <div class="product 8">
            <img src="IMMUGUARD.jpg" alt="product 8">
            <h3>ImmuneGuard</h3>
            <p>ImmuneGuard Syrup - 200ml</p>
            <h2>MRP = $35</h2>
            <button onclick="addToCart('Product 8', 35)">Add to Cart</button>
            <button onclick="buyNow('Product 1', 35)">Buy Now</button> 

          <!-- Average rating display -->
    <div class="average-rating">
        <p>Average Rating: <span class="averageRating">4.2★</span></p>
</div>
    <!-- User review and rating section -->
    <div class="user-review">
       
        <div class="star-rating">
            <!-- Create a star rating system -->
            <span class="star" data-rating="1">&#9733;</span>
            <span class="star" data-rating="2">&#9733;</span>
            <span class="star" data-rating="3">&#9733;</span>
            <span class="star" data-rating="4">&#9733;</span>
        </div>
        <button onclick="addReview('Product 8')">Submit Review</button>
    </div>
</div>
        <div class="product 9">
            <img src="STRESSLESS.jpg" alt="product 9">
            <h3>Stressless</h3>
            <p>StressLess Tablets - Pack of 40</p>
            <h2>MRP = $55</h2>
            <button onclick="addToCart('Product 9', 55)">Add to Cart</button>
            <button onclick="buyNow('Product 9', 55)">Buy Now</button> 

          <!-- Average rating display -->
    <div class="average-rating">
        <p>Average Rating: <span class="averageRating">4.2★</span></p>
</div>
    <!-- User review and rating section -->
    <div class="user-review">
       
        <div class="star-rating">
            <!-- Create a star rating system -->
            <span class="star" data-rating="1">&#9733;</span>
            <span class="star" data-rating="2">&#9733;</span>
            <span class="star" data-rating="3">&#9733;</span>
            <span class="star" data-rating="4">&#9733;</span>
            <span class="star" data-rating="5">&#9733;</span>

        </div>
        <button onclick="addReview('Product 9')">Submit Review</button>
    </div>
        
</div>

<section>
    <div>
        <h2>Shopping Cart</h2>
        <ul id="cart">
        </ul>
        <p id="cart-total">Total: $0.00</p>
        <button onclick="checkout()">Proceed to Checkout</button><div id="checkout">
</div>


<script src= "catlog.js"></script>
        
    </div>
    
    
<script>
     // Define a variable to store the cart items
     var cartItems = [];

function addToCart(productName, price) {
    // Create an object representing the product
    var product = {
        name: productName,
        price: price,
        quantity: 1
    };

    // Check if the product is already in the cart
    var existingProduct = cartItems.find(item => item.name === productName);

    if (existingProduct) {
        // Increment the quantity if the product is already in the cart
        existingProduct.quantity++;
    } else {
        // Otherwise, add the product to the cart
        cartItems.push(product);
    }

    // Update the cart display
    updateCartDisplay();
}

function removeFromCart(productName) {
    // Find the index of the product in the cart
    var index = cartItems.findIndex(item => item.name === productName);

    if (index !== -1) {
        // Remove the product from the cart
        cartItems.splice(index, 1);

        // Update the cart display
        updateCartDisplay();
    }
}

function updateCartDisplay() {
    var cartList = document.getElementById("cart");
    var cartTotal = document.getElementById("cart-total");
    var total = 0;

    // Clear the existing cart display
    cartList.innerHTML = "";

    // Loop through the cart items and display them
    cartItems.forEach(function (item) {
        var listItem = document.createElement("li");
        listItem.textContent = item.name + " - $" + (item.price * item.quantity).toFixed(2) + " x " + item.quantity;
        var removeButton = document.createElement("button");
        removeButton.textContent = "Remove";
        removeButton.onclick = function () {
            removeFromCart(item.name);
        };
        listItem.appendChild(removeButton);
        cartList.appendChild(listItem);

        // Calculate the total price
        total += item.price * item.quantity;
    });

    // Update the total price display
    cartTotal.textContent = "Total: $" + total.toFixed(2);
}

function checkout() {
    // Implement your checkout logic here, which could include
    // payment processing and order confirmation.
    alert("This is where you would process the payment.");
}


    function searchProducts() {
    // Get the user's input from the search input field
    var searchTerm = document.getElementById("searchInput").value.toLowerCase();

    // Get all product elements
    var products = document.querySelectorAll('.product');

    // Loop through each product element and check if it matches the search term
    products.forEach(function(product) {
        var productName = product.querySelector('h3').textContent.toLowerCase();
        var productDescription = product.querySelector('p').textContent.toLowerCase();

        // Check if the product name or description contains the search term
        if (productName.includes(searchTerm) || productDescription.includes(searchTerm)) {
            // Show the product if it matches the search term
            product.style.display = 'block';
        } else {
            // Hide the product if it doesn't match the search term
            product.style.display = 'none';
        }
    });
}
function filterProducts() {
    // Get the selected category from the dropdown
    var selectedCategory = document.getElementById("categoryFilter").value;

    // Get all product elements
    var products = document.querySelectorAll('.product');

    // Loop through each product element
    products.forEach(function(product) {
        var productCategory = product.getAttribute('data-category');

        // Check if the selected category is "All" or if it matches the product's category
        if (selectedCategory === "" || selectedCategory === productCategory) {
            product.style.display = 'block'; // Show the product
        } else {
            product.style.display = 'none'; // Hide the product
        }
    });
}

    function addReview(productName) {
        // Get the user's review and rating from the user interface (e.g., a form)
        var userReview = prompt("Please enter your review for " + productName + ":");
        var userRating = prompt("Please enter your rating (1-5 stars) for " + productName + ":");

        // Validate user input (you can add more validation as needed)
        if (!userReview || !userRating || isNaN(userRating) || userRating < 1 || userRating > 5) {
            alert("Invalid review or rating. Please try again.");
            return;
        }


        // For demonstration purposes, we'll just display an alert with the review and rating
        alert("Review submitted for " + productName + ":\nReview: " + userReview + "\nRating: " + userRating + " stars");
    }

    
    var currentRating = 0; // Initialize the current rating.

        // Highlight the selected stars up to the clicked star.
        for (var i = 1; i <= rating; i++) {
            var star = document.querySelector('.star[data-rating="' + i + '"]');
            star.classList.add('selected');
        }

        // Remove the highlight from stars beyond the clicked star.
        for (var j = rating + 1; j <= 5; j++) {
            var star = document.querySelector('.star[data-rating="' + j + '"]');
            star.classList.remove('selected');
        }
        

        // Store the current rating.
        currentRating = rating;
    




</script>
</script>
</body>
</html>