
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
        <nav>
            <ul>
                <li><a href="home1.php"><i class="fa-solid fa-house-chimney"></i></a></li>

                <li><a href="medicine.php">medicine</a></li>
            
                <li><a href="addtocart.php">cart</a></li>
                <li><a href="ayurvedic.php">ayurvedic</a></li>
                <li><a href="babycare.php">baby care</a></li>
                <li><a href="personalcare.php">health care</a></li>
                <li><a href="health.php">health and nutrition</a></li>
                <li><a href="homeessentials.php">home essentials</a></li>
            </ul>
            </nav>
</header>
            
                <div class="product">
                    <img src="Beardoil.jpg.jpg">
                    <h3>whey protin</h3>
                    <p>The avatar whey protin 2kg</p>
                    <P>MRP=$5000
                        FLAT30%off
                    </p>
                    <a href="addtocart.php" class="btn">Add to Cart</a>
            
            </div>
            
                <div class="product">
                    <img src="Beardoil.jpg.jpg">
                    <h3>fat bunner</h3>
                    <p>on fat bunner 60 capsuls </p>
                    <P>MRP=$1000
                        FLAT=5%off
                    </p>
                    <a href="addtocart.php" class="btn">Add to Cart</a>
            
            </div>
            
                <div class="product">
                    <img src="Beardoil.jpg.jpg">
                    <h3>mass gainer xxl</h3>
                    <p>muscle blaze mass gainer 2kg </p>
                    <P>MRP=$4000
                        FLAT20%off
                    </p>
                    <a href="addtocart.php" class="btn">Add to Cart</a>
            
            </div>
</body>
</html>

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

