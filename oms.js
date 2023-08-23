const orderHistoryData = [
    { orderNumber: "ORD001", orderDate: "2023-08-10", orderStatus: "Processing", totalAmount: 120 },
    { orderNumber: "ORD002", orderDate: "2023-08-12", orderStatus: "Shipped", totalAmount: 85 },
    { orderNumber: "ORD003", orderDate: "2023-08-15", orderStatus: "Delivered", totalAmount: 50 },
];

// Function to display order history
function displayOrderHistory() {
    const orderHistoryTableBody = document.querySelector("#orderHistory tbody");
    orderHistoryData.forEach((order) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${order.orderNumber}</td>
            <td>${order.orderDate}</td>
            <td>${order.orderStatus}</td>
            <td>$${order.totalAmount}</td>
        `;
        orderHistoryTableBody.appendChild(row);
    });
}

// Function to check order status
function checkOrderStatus() {
    const orderNumberInput = document.querySelector("#orderNumber");
    const orderStatusResult = document.querySelector("#orderStatusResult");
    const orderNumber = orderNumberInput.value;
    // Perform server request to check order status based on orderNumber
    // Replace the following with the actual server request
    const orderStatus = "Processing"; // Sample order status for demonstration
    orderStatusResult.innerText = `Order Status: ${orderStatus}`;
}

// Function to cancel order
function cancelOrder() {
    const cancelOrderNumberInput = document.querySelector("#cancelOrderNumber");
    const cancelOrderResult = document.querySelector("#cancelOrderResult");
    const cancelOrderNumber = cancelOrderNumberInput.value;
    // Perform server request to cancel order based on cancelOrderNumber
    // Replace the following with the actual server request
    const isOrderCancelled = true; // Sample response for demonstration
    if (isOrderCancelled) {
        cancelOrderResult.innerText = "Order successfully cancelled.";
        // After successful cancellation, update order history and display the updated list
        orderHistoryData = orderHistoryData.filter((order) => order.orderNumber !== cancelOrderNumber);
        const orderHistoryTableBody = document.querySelector("#orderHistory tbody");
        orderHistoryTableBody.innerHTML = "";
        displayOrderHistory();
    } else {
        cancelOrderResult.innerText = "Failed to cancel order. Please try again.";
    }
}

// Event listeners
document.addEventListener("DOMContentLoaded", () => {
    displayOrderHistory();
});

document.querySelector("#orderStatus form").addEventListener("submit", (event) => {
    event.preventDefault();
    checkOrderStatus();
});

document.querySelector("#cancelOrder form").addEventListener("submit", (event) => {
    event.preventDefault();
    cancelOrder();
});




