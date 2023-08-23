// Array to store cart items
let cartItems = [];

// Function to add items to the cart
function addToCart(productName, price) {
  cartItems.push({ name: productName, price: price });
  displayCartItems();
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

// Function to proceed to checkout
function checkout() {
  // Encode the cart items as JSON and append it as a URL parameter
  const cartItemsJSON = JSON.stringify(cartItems);
  const checkoutURL = 'checkout.php?cartItems=' + encodeURIComponent(cartItemsJSON);

  // Redirect the user to the checkout page
  window.location.href = checkoutURL;
}
