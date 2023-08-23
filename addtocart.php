<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
</head>
<body>
    <!-- Your header and product catalog here -->
    <div class="product 2" data-category="category2">
                <img src="product2.jpg">
                <h3>Product 2</h3>
                <p>Dolo (Paracetamol) 650mg Strip Of 15 Tablets</p>
                <P>MRP=$30</p>
                
                <button onclick="addToCart('Product 2', 65)">Add to Cart</button>
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
        <button onclick="addReview('Product 2')">Submit Review</button>
    </div>

    <section>
        <h2>Shopping Cart</h2>
        <ul id="cart">
        </ul>
        <p id="cart-total">Total: $0.00</p>
        <button onclick="checkout()">Proceed to Checkout</button>
    </section>

    <script>
        // Define a variable to store the cart items
        var cartItems = [];

        function addToCart(productName, price, image) {
            // Create an object representing the product
            var product = {
                name: productName,
                price: price,
                image: image,
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

                // Create an image element for the product image
                var productImage = document.createElement("img");
                productImage.src = item.image;
                productImage.alt = item.name;
                productImage.style.width = "50px"; // Set image width (adjust as needed)
                listItem.appendChild(productImage);

                // Create a span for the product name and price
                var productInfo = document.createElement("span");
                productInfo.textContent = item.name + " - $" + (item.price * item.quantity).toFixed(2) + " x " + item.quantity;
                listItem.appendChild(productInfo);

                // Create a remove button
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
    </script>
</body>
</html>
