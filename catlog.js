// Initialize the shopping cart as an empty array
let cart = [];

function addToCart(productName, price) {
    const product = {
        name: productName,
        price: price
    };
    cart.push(product);
    displayCart();
}
function displayCart() {
    const cartList = document.getElementById("cart");
    const totalElement = document.getElementById("cart-total");
    
    cartList.innerHTML = ""; // Clear previous items
    
    let total = 0;

    cart.forEach((product) => {
        const cartItem = document.createElement("li");
        cartItem.textContent = `${product.name} - $${product.price.toFixed(2)}`;
        cartList.appendChild(cartItem);
        total += product.price;
    });

    // Display the cart total
    totalElement.textContent = `Total: $${total.toFixed(2)}`;
}
// Sample product
const products = [
    {
        name: "Product 1",
        category: "Category 1",
        price: 120,
    },
];

// Function to sort products
function sortProducts() {
    const sortBy = document.getElementById("sortSelect").value;

    if (sortBy === "price-low") {
        products.sort((a, b) => a.price - b.price);
    } else if (sortBy === "price-high") {
        products.sort((a, b) => b.price - a.price);
    } else if (sortBy === "name") {
        products.sort((a, b) => a.name.localeCompare(b.name));
    }

    displayProducts();
}

// Function to filter products by category
function filterProducts() {
    const categoryFilter = document.getElementById("categoryFilter").value;


    const filteredProducts = categoryFilter
        ? products.filter((product) => product.category === categoryFilter)
        : products;

    displayProducts(filteredProducts);
}
// Call displayProducts when the page loads
window.onload = function () {
    displayProducts();
    displayCart();
};


// Function to add a product to the cart
function addToCart(productName, price,image) {
    let product = cart.find((item) => item.name === productName);

    if (product) {
        // If the product is already in the cart, increase the quantity
        product.quantity++;
    } else {
        product = {
            name: productName,
            price: price,
            quantity: 1,
            
        };
        cart.push(product);
    }

    // Alert the user that the product has been added to the cart
    alert(`${productName} has been added to the cart!`);

    // You can update the cart display here if needed
    displayCart();
}

// Function to display the cart contents
function displayCart() {
    const cartElement = document.getElementById("cart");
    cartElement.innerHTML = ""; // Clear the cart content

    if (cart.length === 0) {
        cartElement.innerHTML = "<p>Your cart is empty.</p>";
    } else {
        cart.forEach((product) => {
            cartElement.innerHTML += `
                <li>
                    <img src="${product.image}" alt="${product.name}" width="50">
                    ${product.name} - $${product.price.toFixed(2)} x ${product.quantity}
                    <button onclick="removeFromCart('${product.name}')">Remove</button>
                </li>`;
        });
    }
    // Function to display the cart contents
function displayCart() {
    const cartElement = document.getElementById("cart");
    cartElement.innerHTML = ""; // Clear the cart content

    if (cart.length === 0) {
        cartElement.innerHTML = "<p>Your cart is empty.</p>";
    } else {
        cart.forEach((product) => {
            // Create a new list item for each product
            const listItem = document.createElement("li");

            // Create an image element for the product
            const productImage = document.createElement("img");
            productImage.src = product.image;
            productImage.alt = product.name;
            productImage.width = 50;

            // Create a text node for the product information
            const productInfo = document.createTextNode(
                `${product.name} - $${product.price.toFixed(2)} x ${product.quantity}`
            );

            // Create a button to remove the product
            const removeButton = document.createElement("button");
            removeButton.textContent = "Remove";
            removeButton.onclick = () => removeFromCart(product.name);
             
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

            // Append the elements to the list item
            listItem.appendChild(productImage);
            listItem.appendChild(productInfo);
            listItem.appendChild(removeButton);

            // Append the list item to the cart element
            cartElement.appendChild(listItem);
        });
    }
}


    // Calculate and display the total price
    const totalElement = document.getElementById("cart-total");
    const total = cart.reduce((sum, product) => sum + product.price * product.quantity, 0);
    totalElement.textContent = `Total: $${total.toFixed(2)}`;
}

