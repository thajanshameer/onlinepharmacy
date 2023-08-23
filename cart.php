<?php
        // cart.php
        // Retrieve the cart items from session storage (or database in a real-world scenario)
        $cartItems = json_decode($_SESSION['cartItems'], true);

        // Display the cart items using PHP
        foreach ($cartItems as $item) {
            echo "<li>{$item['name']} x{$item['quantity']} - ${$item['price'] * $item['quantity']}</li>";
        }
        ?>