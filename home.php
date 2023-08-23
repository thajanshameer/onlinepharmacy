
    <?php
    // Process form data
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $search = $_POST['search'];

       
    }
    ?>
    <header>
        <h1>Online Pharmacy</h1>
        <a class="new_offers_icon">Offers</a>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Prescriptions</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="pharma">
        <div class="pharma-content">
            <h2>Welcome to Our Online Pharmacy</h2>
            <p>Get all your healthcare needs delivered to your doorstep</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
    </section>
    <form action="" method="POST">
        <p>What are you looking for?</p>   
        <input type="text" class="Search" name="search">
        <button type="submit">Search <i class="searchbtn"></i></button>
    </form>
    
    <?php
    // Check if search results are available
    if ($search_results_available) {
        // Display search results
        echo '<section class="medicine">';
        echo '<h2>MEDICINE</h2>';
        echo '<div class="product-grid">';
        // Display each product in the search results
        foreach ($search_results as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image'] . '">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<p>MRP=$' . $product['price'] . '</p>';
            echo '<a href="addtocart.html" class="btn">Add to Cart</a>';
            echo '</div>';
        }
        echo '</div>';
        echo '</section>';
    }
    ?>

    