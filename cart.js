function placeOrder() {
    var guestName = document.getElementById("guestName").value;
    var guestEmail = document.getElementById("guestEmail").value;
    var guestAddress = document.getElementById("guestAddress").value;
    var guestCardNumber = document.getElementById("guestCardNumber").value;
    var guestExpiry = document.getElementById("guestExpiry").value;
    var guestCVV = document.getElementById("guestCVV").value;

    if (guestName && guestEmail && guestAddress && guestCardNumber && guestExpiry && guestCVV) {
        // Assuming you have a function to send the order details to a server or perform further processing
        // Here, we're just logging the order details for demonstration
        console.log("Order placed:");
        console.log("Name:", guestName);
        console.log("Email:", guestEmail);
        console.log("Shipping Address:", guestAddress);
        console.log("Card Number:", guestCardNumber);
        console.log("Expiry Date:", guestExpiry);
        console.log("CVV:", guestCVV);

        // Clear the cart and update the display
        cart = [];
        updateCart();

        // Reset the form fields
        document.getElementById("guestName").value = "";
        document.getElementById("guestEmail").value = "";
        document.getElementById("guestAddress").value = "";
        document.getElementById("guestCardNumber").value = "";
        document.getElementById("guestExpiry").value = "";
        document.getElementById("guestCVV").value = "";

        // Hide the checkout form
        document.getElementById("checkout").style.display = "none";

        // Show a confirmation message (You can customize this)
        alert("Order placed successfully!");
    } else {
        alert("Please fill in all the required fields.");
    }
}
