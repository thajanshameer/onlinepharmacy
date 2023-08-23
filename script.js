         










// Sample product data (you can fetch from the server/database in a real-world scenario)
const products = [
    {
        id: 1,
        name: "Product 2",
        category: "category1",
        price: 120,
        description: "Calcimax Forte Plus Strip Of 30 Tablets",
        dosage: "Take as directed",
        availability: true,
    },
    // Add more products if needed
    {
        id: 2,
        name: "Product 2",
        category: "category1",
        price: 80,
        description: " Beminal Total Tab - Pack of 60",
        dosage: "Take as directed",
        availability: true,
    },
    {
        
        id: 3,
        name: "Product 3",
        category: "category2",
        price: 50,
        description: "PainAway Capsules - Pack of 20",
        dosage: "Take as directed",
        availability: true,

    },
    {
        id: 4,
        name: "Product 4",
        category: "category2",
        price: 125,
        description: "cough Syrup - 100ml",
        dosage: "Take as directed",
        availability: true,
    },
    {
        
        id: 5,
        name: "Product 5",
        category: "category2",
        price: 60,
        description: "cough Syrup - 100ml",
        dosage: "Take as directed",
        availability: true,
    },
    {
        
        id: 6,
        name: "Product 6",
        category: "category2",
        price: 15,
        description: "axe Headache Relief Oil - 50ml",
        dosage: "Take as directed",
        availability: true,
    },
    {
        
        id: 7,
        name: "Product 7",
        category: "category1",
        price: 90,
        description: "VitaBoost Capsules - Pack of 30",
        dosage: "Take as directed",
        availability: true,
    },
    {
        
        id: 8,
        name: "Product 8",
        category: "category2",
        Image:"IMMUGUARD.jpg",
        price: 35,
        description: "ImmuneGuard Syrup - 200ml",
        dosage: "Take as directed",
        availability: true,
    },
    {
        
        id: 9,
        name: "Product 9",
        Image:"STRESSLESS.jpg",
        category: "category2",
        price: 55,
        description: "StressLess Tablets - Pack of 40",
        dosage: "Take as directed",
        availability: true,
    },

];

// Function to display the product list
function displayProducts(productsData) {
    const productListDiv = document.getElementById("productList");
    productListDiv.innerHTML = "";

    productsData.forEach((product) => {
        const productDiv = document.createElement("div");
        productDiv.className = "product";
        productDiv.innerHTML = `
            <img src="product${product.id}.jpg" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <h2>MRP = $${product.price}</h2>
            <button role="button" type="button" class="btn btn-block btn-brand-gradient rounded-pill custom-btn-lg" onclick="addToCart('${product.name}', ${product.price})">Add to Cart</button>
        `;
        productListDiv.appendChild(productDiv);
    });
    // catlog.js
// Function to fetch products data from the server (using XMLHttpRequest)
function fetchProducts() {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const productsData = JSON.parse(xhr.responseText);
            displayProducts(productsData);
        }
    };
    xhr.open("GET", "products.php", true);
    xhr.send();
}

// Call the fetchProducts function to initially display all products
fetchProducts();

}

// Function to add items to the cart (similar to previous code)
function addToCart(productName, price) {
    // ... (existing addToCart function code)
}

// Function to filter products by category
function filterProducts() {
    const selectedCategory = document.getElementById("categoryFilter").value;
    if (selectedCategory === "") {
        displayProducts(products); // Show all products if no category is selected
    } else {
        const filteredProducts = products.filter((product) => product.category === selectedCategory);
        displayProducts(filteredProducts);
    }
}

// Function to sort products by name
function sortProducts() {
    const sortOption = document.getElementById("sortSelect").value;
    let sortedProducts;

    if (sortOption === "name") {
        sortedProducts = [...products].sort((a, b) => a.name.localeCompare(b.name));
    } else {
        // Add other sorting options if needed
        sortedProducts = products; // Keep the original order
    }

    displayProducts(sortedProducts);
}

// Function to search products by name
function searchProducts() {
    const searchQuery = document.getElementById("searchInput").value.toLowerCase();
    const filteredProducts = products.filter((product) => product.name.toLowerCase().includes(searchQuery));
    displayProducts(filteredProducts);
}

// Call the displayProducts function to initially display all products
displayProducts(products);
// ... (Existing code for displaying products)

// Update the addToCart function to handle quantity and total amount
function addToCart(productName, price) {
    // Check if the product is already in the cart
    const existingProduct = cartItems.find(item => item.name === productName);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cartItems.push({ name: productName, price: price, quantity: 1 });
    }
    displayCartItems();
    updateTotalAmount();
}

// Function to update the cart display
function displayCartItems() {
    const cartList = document.getElementById("cart");
    cartList.innerHTML = "";

    cartItems.forEach((item) => {
        const cartItem = document.createElement("li");
        cartItem.innerText = `${item.name} x${item.quantity} - $${item.price * item.quantity}`;
        cartList.appendChild(cartItem);
    });
}

// Function to update the total amount
function updateTotalAmount() {
    const totalAmountElement = document.getElementById("totalAmount");
    const totalAmount = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    totalAmountElement.innerText = totalAmount;
}
  // Array to store cart items
  let cartItems = [];

  // Function to add items to the cart
  function addToCart(productName, price) {
      cartItems.push({ name: productName, price: price });
      displayCartItems();
  }
  // ... (existing JavaScript code)

// Array to store cart items


// Function to add items to the cart
function addToCart(productName, price) {
    // Check if the product is already in the cart
    const existingProduct = cartItems.find(item => item.name === productName);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cartItems.push({ name: productName, price: price, quantity: 1 });
    }
    displayCartItems();
    updateTotalAmount();
}

// Function to display cart items
function displayCartItems() {
    const cartList = document.getElementById("cart");

    // Clear previous items in the cart
    cartList.innerHTML = "";

    // Loop through cart items and display them in the cart
    let totalAmount = 0;
    cartItems.forEach((item) => {
        totalAmount += item.price * item.quantity;
        const listItem = document.createElement("li");
        listItem.innerText = `${item.name} x ${item.quantity} - $${item.price * item.quantity}`;
        cartList.appendChild(listItem);
    });

    // Display total amount
    const totalAmountElement = document.createElement("li");
    totalAmountElement.innerText = `Total: $${totalAmount}`;
    cartList.appendChild(totalAmountElement);
}

// Function to update the total amount
function updateTotalAmount() {
    const totalAmountElement = document.getElementById("totalAmount");
    const totalAmount = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    totalAmountElement.innerText = `Total: $${totalAmount}`;
}

// Function to proceed to checkout
function checkout() {
    // Save the cart items to local storage
    localStorage.setItem("cartItems", JSON.stringify(cartItems));

    // Redirect to the checkout page (change "checkout.php" to your actual checkout page)
    window.location.href = "checkout.php";
}

// Call the displayProducts function to initially display all products
displayProducts(products);
// Function to display cart items
function displayCartItems() {
    const cartList = document.getElementById("cart");

    // Clear previous items in the cart
    cartList.innerHTML = "";

    // Loop through cart items and display them in the cart
    cartItems.forEach((item) => {
        const listItem = document.createElement("li");

        // Create a div to hold the item details
        const itemDetails = document.createElement("div");
        itemDetails.className = "cart-item-details";

        // Display item name and price
        const itemName = document.createElement("span");
        itemName.innerText = item.name;
        const itemPrice = document.createElement("span");
        itemPrice.innerText = `$${item.price}`;

        // Quantity control (input field)
        const quantityInput = document.createElement("input");
        quantityInput.type = "number";
        quantityInput.value = item.quantity;
        quantityInput.min = "1";
        quantityInput.addEventListener("input", () => updateCartItemQuantity(item, quantityInput));
        function updateCartItemQuantity(item, quantityInput) {
            const newQuantity = parseInt(quantityInput.value);
        
            if (newQuantity > 0) {
                item.quantity = newQuantity;
                displayCartItems();
                updateTotalAmount();
            } else {
                // Remove the item if the quantity is set to 0 or negative
                removeCartItem(item);
            }
        }
        

        // Remove button
        const removeButton = document.createElement("button");
        removeButton.innerText = "Remove";
        removeButton.addEventListener("click", () => removeCartItem(item));
        function removeCartItem(item) {

            const itemIndex = cartItems.indexOf(item);
            if (itemIndex !== -1) {
                cartItems.splice(itemIndex, 1);
                displayCartItems();
                updateTotalAmount();
            }
        }
        
        // Append elements to the item details div
        itemDetails.appendChild(itemName);
        itemDetails.appendChild(itemPrice);
        itemDetails.appendChild(quantityInput);
        itemDetails.appendChild(removeButton);

        // Append item details div to the list item
        listItem.appendChild(itemDetails);

        cartList.appendChild(listItem);
    });

    // Display total amount
    const totalAmountElement = document.createElement("li");
    totalAmountElement.innerText = `Total: $${calculateTotalAmount()}`;
    cartList.appendChild(totalAmountElement);
}



  // Function to display cart items
  function displayCartItems() {
      const cartList = document.getElementById("cart");

      // Clear previous items in the cart
      cartList.innerHTML = "";

      // Loop through cart items and display them in the cart
      let totalAmount = 0;
      cartItems.forEach((item) => {
          totalAmount += item.price;
          const listItem = document.createElement("li");
          listItem.innerText = `${item.name} - $${item.price}`;
          cartList.appendChild(listItem);
      });

      // Display total amount
      const totalAmountElement = document.createElement("li");
      totalAmountElement.innerText = `Total: $${totalAmount}`;
      cartList.appendChild(totalAmountElement);
  }
  
  function calculateTotalAmount() {
    return cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
}


  // Function to proceed to checkout
  function checkout() {
      // Save the cart items to local storage
      localStorage.setItem("cartItems", JSON.stringify(cartItems));

      // Redirect to the checkout page (change "checkout.php" to your actual checkout page)
      window.location.href = "checkout.php";
  }

// ... (Existing code for search, sorting, and filtering)

// Function to proceed to checkout (example: simply clear the cart)
function checkout() {
    cartItems = [];
    displayCartItems();
    updateTotalAmount();
    alert("Thank you for your purchase!");
}
