
    // Function to search
    function searchProducts() {
        // Get the input value
        var searchInput = document.getElementById("searchInput").value.toLowerCase();
        var products = document.getElementsByClassName("product");

        for (var i = 0; i < products.length; i++) {
            var productName = products[i].getElementsByTagName("h3")[0].innerText.toLowerCase();
            var productDescription = products[i].getElementsByTagName("p")[0].innerText.toLowerCase();
            
            if (productName.includes(searchInput) || productDescription.includes(searchInput)) {
                products[i].style.display = "block";
            } else {
                products[i].style.display = "none";
            }
        }
    }

    // Function to sort products
    function sortProducts() {
        var sortSelect = document.getElementById("sortSelect");
        var selectedOption = sortSelect.options[sortSelect.selectedIndex].value;

   }

    function filterProducts() {
        // Get the select element for filtering
        var categoryFilter = document.getElementById("categoryFilter");
        var selectedCategory = categoryFilter.options[categoryFilter.selectedIndex].value;

    }


    document.addEventListener("DOMContentLoaded", function () {
        const logoutBtn = document.getElementById("logoutBtn");
    
        // Add an event listener to the Logout button
        logoutBtn.addEventListener("click", function () {
            alert("Logged out successfully.");
        });
    });
    