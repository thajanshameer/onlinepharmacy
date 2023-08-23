<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
    <style>
        /* Add your CSS styles here */
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        background-color: #4CAF50;
        color: #fff;
        padding: 20px;
        margin: 0;
    }

    h2 {
        margin-top: 20px;
    }

    div {
        text-align: center;
        margin: 10px auto;
        max-width: 400px;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    select, button {
        padding: 10px;
        width: 100%;
        margin-top: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    ul {
        list-style-type: none;
        padding: 10px;
    }

    li {
        font-size: 16px;
        margin: 5px 0;
    }

    #cart-total {
        font-weight: bold;
        margin-top: 10px;
    }

    button {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

    </style>
</head>
<body>
    <h1>Order Management System</h1>

    <!-- Example: Order Placement -->
    <div>
        <h2>Place an Order</h2>
        <select id="productSelect">
            <option value="product1">Product 1 ($120)</option>
            <option value="product2">Product 2 ($30)</option>
          <option value="product3">Product 3 ($30)</option>
           <option value="product8">Product 8 ($35)</option>
          <option value="product9">Product 9 ($55)</option>

            <!-- Add more product options -->
        </select>
        <button onclick="addToCart()">Add to Cart</button>
    </div>

    <!-- Example: Cart -->
    <div>
        <h2>Shopping Cart</h2>
        <ul id="cart">
            <!-- Cart items will be displayed here -->
        </ul>
        <p id="cart-total">Total: $0.00</p>
        <button onclick="checkout()">Proceed to Checkout</button>
    </div>

    <script>
    // Example product data
    const products = {
        product1: { name: "Calcimax Forte Plus Strip Of 30 Tablets", price: 120 },
        product2: { name: "Dolo (Paracetamol) 650mg Strip Of 15 Tablets", price: 30 },
        product3: { name: "Vitamin D3 - Supports Bone Health - Helps In Absorption Of Calcium - Bottle Of 60", price: 340 },
        product8: { name: "ImmuneGuard Syrup - 200ml", price: 35 },
        product9: { name: "StressLess Tablets - Pack of 40", price: 55 }
        // Add more product data here
    };

    let cart = [];

    // Function to add a product to the cart
    function addToCart() {
        const productId = document.getElementById("productSelect").value;
        const product = products[productId];
        cart.push(product);

        // Update the cart display here
        displayCart();
    }

    // Function to display the cart contents
    function displayCart() {
        const cartElement = document.getElementById("cart");
        cartElement.innerHTML = "";
        let total = 0;

        cart.forEach((product) => {
            const listItem = document.createElement("li");
            listItem.textContent = `${product.name} - $${product.price.toFixed(2)}`;
            cartElement.appendChild(listItem);
            total += product.price;
        });

        document.getElementById("cart-total").textContent = `Total: $${total.toFixed(2)}`;
    }

    // Function to simulate checkout (clears the cart)
    function checkout() {
        cart = [];
        displayCart();
        alert("Thank you for your order!");
    }
</script>
