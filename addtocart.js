// addtocart.js

// Get the cart item element
const cartItemElement = document.getElementById('cartitem');

// Store the cart items in an array (You can replace this with a more robust cart management system)
const cartItems = [];

// Function to add an item to the cart
function addToCart(item) {
  cartItems.push(item);
  updateCartDisplay();
}

// Function to update the cart display
function updateCartDisplay() {
  if (cartItems.length === 0) {
    cartItemElement.textContent = 'Your cart is empty';
  } else {
    // Generate a list of items in the cart and display it
    cartItemElement.innerHTML = cartItems.map(item => `<p>${item}</p>`).join('');
  }

  // Calculate and display the total number of items in the cart
  const totalElement = document.getElementById('total');
  totalElement.textContent = `Total items: ${cartItems.length}`;
}

// Example usage:
addToCart('Item 1');
addToCart('Item 2');
addToCart('Item 3')
