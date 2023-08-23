<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal care</title>
    <script src="https://kit.fontawesome.com/5f2bf94b1d.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <h1>Online Pharmacy</h1>
        <nav>
            <ul>
                <li><a href="home1.php"><i class="fa-solid fa-house-chimney"></i></a></li>

                <li><a href="medicine.php">medicine</a></li>
            
                <li><a href="addtocart.php">cart</a></li>
                <li><a href="ayurvedic.php">ayurvedic</a></li>
                <li><a href="babycare.php">baby care</a></li>
                <li><a href="personalcare.php">health care</a></li>
                <li><a href="#">health and nutrition</a></li>
                <li><a href="homeessentials.php">home essentials</a></li>
            </ul>
            </nav>

</header>
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
</div>
<div class="product-grid">
            
    <div class="product">
        <img src="Beardoil.jpg.jpg">
        <h3>Beardoil</h3>
        <p>The Beard Story Beard Oil 50ml </p>
        <P>MRP=$30
            FLAT30%off
        </p>
        <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>

</div>

    <div class="product">
        <img src="wow.jpg">
        <h3>wowfacewash</h3>
        <p>wow vitamin c-facewash</p>
        <p>MRP=$350 flat20%</p>
        <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>

</div>

<div class="product">
    <img src="niveamoistuzer.jpg">
    <h3>nivea</h3>
    <p>Nivea Soft Light Moisturizer Of 200 Ml</p>
    <P>MRP=$250 flat 60%</p>
    <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>
        </div>
        
<div class="product">
    <img src="niveamoistuzer.jpg">
    <h3>matrix Shampoo</h3>
    <p>matrix Shampoo Of 200 Ml</p>
    <P>MRP=$350 flat 60%</p>
    <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>
        </div>

        
<div class="product">
    <img src="niveamoistuzer.jpg">
    <h3>matix serum</h3>
    <p>matrix serum 50 Ml</p>
    <P>MRP=$499 flat 20%</p>
    <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>
        </div>
        
<div class="product">
    <img src="niveamoistuzer.jpg">
    <h3>Gillette Guard</h3>
    <p>Gillette Guard Razor</p>
    <P>MRP=$49 </p>
    <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="niveamoistuzer.jpg">
            <h3>shaving foam</h3>
            <p>Gillette Shaving Foam Regular, 50 gm
            </p>
            <P>MRP=$499 flat 20%</p>
            <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>
                </div>
                <div class="product">
                    <img src="niveamoistuzer.jpg">
                    <h3>hair wax</h3>
                    <p>gatsbay hair wax ultra strong 100gm </p>
                    <P>MRP=$200 flat 10%</p>
                    <button onclick="addToCart('Beardoil', 30)">Add to Cart</button>
                        </div>
                        
    <div>
        <h2>Shopping Cart</h2>
        <ul id="cart">
        </ul>
        <p id="cart-total">Total: $0.00</p>
        <button onclick="checkout()">Proceed to Checkout</button><div id="checkout">
</div>    
    
    <style>
        /* Reset some default styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Styles for the header */
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

        /* Styles for the product grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin: 20px;
        }

        .product {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
        }

        .product img {
            width: 50%;
            max-width: 200px;
        }

        .product h3 {
            margin-top: 10px;
            color: #4CAF50;
        }

        .product p {
            color: #777;
        }

        .product .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            margin-top: 10px;
        }

        /* Additional styles specific to the personal care page */
        h2 {
            color: #4CAF50;
            text-align: center;
            margin: 20px;
        }

        /* Style for the footer */
        footer {
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        footer p {
            margin: 5px;
        }
    </style>

<script>
    // Initialize the product data
    const products = [
        {
            name: "Beardoil",
            price: 30,
            discount: 30,
        },
        {
            name: "wowfacewash",
            price: 350,
            discount: 20,
        },
        {
            name: "nivea",
            price: 250,
            discount: 60,
        },
        {
            name: "matrix Shampoo",
            price: 350,
            discount: 60,
        },
        {
            name: "matrix serum",
            price: 499,
            discount: 20,
        },
        {
            name: "Gillette Guard",
            price: 49,
            discount: 0,
        },
        {
            name: "shaving foam",
            price: 499,
            discount: 20,
        },
        {
            name: "hair wax",
            price: 200,
            discount: 10,
        },
    ];

    // Initialize the cart as an empty array
    let cart = [];

    // Function to add a product to the cart
    function addToCart(productName, price) {
        const product = {
            name: productName,
            price: price,
        };
        cart.push(product);

        // You can update the cart display here if needed
        displayCart();
    }

    // Function to remove a product from the cart
    function removeFromCart(productName) {
        cart = cart.filter((product) => product.name !== productName);

        // You can update the cart display here if needed
        displayCart();
    }

    // Function to display the cart contents
    function displayCart() {
        const cartContentsElement = document.getElementById("cartContents");
        cartContentsElement.innerHTML = "<h2>Shopping Cart</h2>";

        if (cart.length === 0) {
            cartContentsElement.innerHTML += "<p>Your cart is empty.</p>";
        } else {
            cartContentsElement.innerHTML += "<ul>";
            cart.forEach((product) => {
                cartContentsElement.innerHTML += `<li>${product.name} - $${product.price.toFixed(
                    2
                )} <button onclick="removeFromCart('${product.name}')">Remove</button></li>`;
            });
            cartContentsElement.innerHTML += "</ul>";
        }
    }

    // Function to search for products based on user input
    function searchProducts() {
        const searchInput = document.getElementById("searchInput").value.toLowerCase();
        const filteredProducts = products.filter((product) =>
            product.name.toLowerCase().includes(searchInput)
        );

        displayProducts(filteredProducts);
    }

    // Function to display products
    function displayProducts(productList) {
        const productListElement = document.getElementById("productList");
        productListElement.innerHTML = "";

        productList.forEach((product) => {
            const discountedPrice = product.price * ((100 - product.discount) / 100);

            productListElement.innerHTML += `
                <div class="product">
                    <img src="${product.name.toLowerCase()}.jpg">
                    <h3>${product.name}</h3>
                    <p>MRP = $${product.price.toFixed(2)}</p>
                    <p>Discount = ${product.discount}%</p>
                    <p>Discounted Price = $${discountedPrice.toFixed(2)}</p>
                    <button onclick="addToCart('${product.name}', ${discountedPrice})">Add to Cart</button>
                </div>`;
        });
    }

    // Initial display of products
    displayProducts(products);

    // Function to sort products by a given key (e.g., 'name', 'price')
    function sortProducts(key) {
        const sortedProducts = [...products].sort((a, b) => {
            if (key === "name") {
                return a.name.localeCompare(b.name);
            } else if (key === "price") {
                return a.price - b.price;
            } else if (key === "discount") {
                return a.discount - b.discount;
            }
        });

        displayProducts(sortedProducts);
    }

    // Function to handle sorting based on user selection
    function handleSort() {
        const sortSelect = document.getElementById("sortSelect");
        const selectedSortOption = sortSelect.value;
        sortProducts(selectedSortOption);
    }

    // Initialize the cart as an empty array
    let cart = [];

    // Function to add a product to the cart
    function addToCart(productName, price) {
        const product = {
            name: productName,
            price: price
        };
        cart.push(product);

        // Alert the user that the product has been added to the cart (you can replace this with your own notification method)
        alert(`${productName} has been added to the cart!`);

        // You can update the cart display here if needed
    }
    // Function to display the cart contents
function displayCart() {
    const cartContentsElement = document.getElementById("cartContents");
    cartContentsElement.innerHTML = "<h2>Shopping Cart</h2>";
    
    if (cart.length === 0) {
        cartContentsElement.innerHTML += "<p>Your cart is empty.</p>";
    } else {
        cartContentsElement.innerHTML += "<ul>";
        cart.forEach((product) => {
            cartContentsElement.innerHTML += `<li>${product.name} - $${product.price.toFixed(2)}</li>`;
        });
        cartContentsElement.innerHTML += "</ul>";
    }
}

// Call displayCart() initially to display the cart
displayCart();

</script>
