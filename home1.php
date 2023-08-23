<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Pharmacy</title>
    <link rel="stylesheet" href="homestyle.css">
    <script src="home1.js" defer></script>
    <script src="verfied.js" defer></script>

    <script src="https://kit.fontawesome.com/5f2bf94b1d.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
    <h1>Online Pharmacy</h1>
        <nav>
            <ul>
            <li><a href="home1.php"><i class="fa-solid fa-house-chimney-user"></i></a></li>
                <li><a href="medicine.php">medicine</a></li>
                <li><a href="ayurvedic.html">ayurvedic</a></li>
                <li><a href="babycare.html">baby care</a></li>

                <li><a href="personalcare.html">health care</a></li>
                <li><a href="#">health and nutrition</a></li>
                <li><a href="homeessentials.php">home essentials</a></li>

                <li><a href="oms.php">order</a></li>


                <li><a href="cart.html">cart</a></li>


            <a href="logout.php">Logout</a>


            </ul>
        </nav>
    </header>
    
    <section class="pharma">
        <div class="pharma-content">
            <h2>Welcome to Our Online Pharmacy</h2>
            <p>Get all your healthcare needs delivered to your doorstep</p>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>
        </section>
    <form>
    
            
     <p>what are you looking for?</p>   
     <div>
        <label for="searchInput">Search:</label>
        <input type="text" id="searchInput" onkeyup="searchProducts()">
    </div>

   <div>
        <label for="sortSelect">Sort By:</label>
        <select id="sortSelect" onchange="sortProducts()">
            <option value="name">Name</option>
        </select>
    </div>
    <div>
        <label for="categoryFilter">Filter By Category:</label>
        <select id="categoryFilter" onchange="filterProducts()">
            <option value="">All</option>
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
        </select>
        </div>


    
<br>
<span class="order">order with presecrption</span>

<form id="prescriptionUploadForm">
<label for="prescriptionFile">Upload Prescription:</label>
<input type="file" id="prescriptionFile" accept=".pdf, .jpg, .png">

<div>
    
<button type="submit">Submit</button>
</form>

<div id="verificationStatus"></div>


    

<section class="medicine">
    <h2>MEDICINE</h2>
    <div class="product-grid">
        <div class="product">
        <img src="product1.jpg">
                <h3>Product 1</h3>
                <p>Calcimax Forte Plus Strip Of 30 Tablets</p>
                <p>MRP=$120</p>
                <a href="addtocart.php" class="btn">Add to Cart</a>

            </div>
            <div class="product">
                <img src="product2.jpg">
                <h3>Product 2</h3>
                <p>Dolo (Paracetamol) 650mg Strip Of 15 Tablets</p>
                <P>MRP=$30</p>
                
                <a href="addtocart.php" class="btn">Add to Cart</a>
            </div>
            <div class="product">
                <img src="product3.jpg">
                <h3>Product 3</h3>
                <p>Vitamin D3 - Supports Bone Health - Helps In Absorption Of Calcium - Bottle Of 60</p>
                <p>MRP=$340</p>
                <a href="addtocart.php" class="btn">Add to Cart</a>
            </div>
        </div>
    </section>
    <section class="healthcare">
    <h2>healthcare</h2>
    
    <div class="product-grid">
        
            <div class="product">
                <img src="Beardoil.jpg.jpg">
                <h3>Beardoil</h3>
                <p>The Beard Story Beard Oil 50ml </p>
                <P>MRP=$30
                    FLAT30%off
                </p>
                <a href="addtocart.php" class="btn">Add to Cart</a>

        </div>
        
            <div class="product">
                <img src="wow.jpg">
                <h3>wowfacewash</h3>
                <p>wow vitamin c-facewash</p>
                <p>MRP=$350 flat20%</p>
                <a href="addtocart.php" class="btn">Add to Cart</a>
        
        </div>

        <div class="product">
            <img src="niveamoistuzer.jpg">
            <h3>nivea</h3>
            <p>Nivea Soft Light Moisturizer Of 200 Ml</p>
                <P>MRP=$250 flat 60%</p>
                    <a href="addtocart.php" class="btn">Add to Cart</a>
            </div>
            
        </div>
    </section>
    <section class="ayurvedic">
        <h2>ayurvedic</h2>
    
        <div class="product-grid">
            
                <div class="product">
                    <img src="galact.jpg">
                    <h3>galact</h3>
                    <p>Galact Granules - Elaichi Flavour 200gm</p>
                    <P>MRP=$238
                        FLAT10%off
                    </p>
                    <a href="addtocart.php" class="btn">Add to Cart</a>
    
           </div>
           <div class="product">
            <img src="pankajakasthuri.jpeg">
            <h3>Pankajakasthuri</h3>
            <p>Pankajakasthuri Breathe Easy Granules 400 gm
            </p>
            <P>MRP=$310
                FLAT30%off
            </p>
            <a href="addtocart.php" class="btn">Add to Cart</a>
   </div>
   <div class="product">
    <img src="kapiva.jpg">
    <h3>kapiva</h3>
    <p>Kapiva Wild Amla Juice 1 ltr</p>
    <P>MRP=$430
        FLAT10%off
    </p>
    <a href="addtocart.php" class="btn">Add to Cart</a>

        </section>     
        <section class="babyproduct">
            <h2>babyproduct</h2> 
            <div class="product-grid">
                <div class="product">
                    <img src="babyshampoo.jpg">
                    <h3>babyshampoo</h3>
                    <P> himalaya baby shampoo 100ml</P>
                      <p>MRP=220
                        FLAT30%off
                    </p>
                    <a href="addtocart.php" class="btn">Add to Cart</a>
                    </div>
                <div class="product">
                    <img src="babywipes.jpg">
                    <h3>himalya baby wipes</h3>
                    <p>baby wipes (combo pack 3)</p>
                    <P>MRP=430
                        FLAT10%off
                    </p>
                    
                <a href="product" ><a href="addtocart.php" class="btn">Add to Cart</a>
                </div>
                <div class="product">
                    <img src="grape.jpg">
                    <h3>gripe water</h3>
                    <p>woodwars gripe water 150ml</p>
                    <P>MRP=30
                        FLAT20%off
                    </p>
                    <a href="addtocart.php" class="btn">Add to Cart</a>
                
   
            </section>
            <p>
            EFFORTLESS ONLINE MEDICINE ORDERS AT APOLLO PHARMACY

Because ordering medicines online need not be complicated but rather a cakewalk. And at Apollo Pharmacy we ensure that. All you need to do is:

Browse through our wide variety of products
Add products to your cart and complete the payment. Voila!
Your order will be on its way to you.
Apollo Pharmacy is your go-to online pharmacy store for all your medicine needs. We also have a range of products in the personal care, baby care, health and nutrition, wellness, and lifestyle categories. Come explore ‘everything under the sun’ related to healthcare at Apollo Pharmac
</p>
            <br>
    <footer>
        <div class="footer-content">
            <p>Online Pharmacy All rights reserved</p>
        </form>
        </div>
    </footer>

<style>
    /* Reset some default styles */
    * {
        box-sizing: border-box;
        margin: 1;
        padding: 2;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    h1 {
        text-align: center;
        margin: 20px 0;
    }

    header {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
    }
    header h1 {
        margin: 0;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    nav ul li {
        margin: 0 10px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    nav ul li a:hover {
        background-color: #45a049;
    }

section.pharma {
    background-color: #4CAF50;
    color: #fff;
    padding: 50px 0;
    text-align: center;
}

.pharma-content {
    max-width: 600px;
    margin: 0 auto;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #fff;
    color: #4CAF50;
    text-decoration: none;
    margin-top: 20px;
    border-radius: 4px;
    transition: background-color 0.3s;
}


.btn:hover {
    background-color: #f0f0f0;
}

form {
    text-align: center;
    margin: 20px 0;
}

input[type="text"] {
    padding: 8px;
    margin-right: 10px;
    width: 200px;
}

button[type="submit"] {
    padding: 8px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}
button[type="submit"]:hover {
        background-color: #45a049;
    }

    .order {
        color: #4CAF50;
        font-size: 18px;
        margin-top: 10px;
        display: block;
    }

    .upload {
        color: #4CAF50;
        text-decoration: none;
        border-bottom: 1px solid #4CAF50;
        display: inline-block;
        margin-top: 10px;
    }

    .upload:hover {
        color: #45a049;
        border-bottom-color: #45a049;
    }
    section.medicine,
    section.healthcare,
    section.ayurvedic,
    section.babyproduct {
        padding: 30px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .product {
        text-align: center;
        border: 1px solid #ccc;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

.product img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin-bottom: 10px;
}

.product h3 {
    color: #4CAF50;
    font-size: 18px;
    margin: 10px 0;
}

.product p {
    color: #777;
    margin-bottom: 5px;
}

.product a.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    margin-top: 10px;
        border-radius: 4px;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    .product a.btn:hover {
        background-color: #45a049;
    }

    p {
        margin: 20px;
        text-align: center;
    }

    footer {
        background-color: #4CAF50;
        color: #fff;
        text-align: center;
        padding: 10px;
    }
</style>







    
</body>
</html>
    



/* Style for the header */
* {
    box-sizing: border-box;
    margin: 1;
    padding: 2;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f5f5f5;
    color: #333;
}

/* Styles for the header */
header {
    background-color: #4CAF50;
    color: #fff;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 36px;
}

header nav ul {
    list-style-type: none;
    margin: 20px 0;
    padding: 0;
}

header nav ul li {
    display: inline;
    margin-right: 20px;
}

header nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
}

/* Styles for the search and filter elements */
div {
    margin: 5px 0;
    padding: 5px;
    text-align: center;
}

label {
    font-size: 12px;
    font-weight: bold;
}

input[type="text"],
select {
    padding: 8px;
    width: 10%;
    margin-top: 5px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Styles for the product grid */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20px, 1fr));
    gap: 20px;
    margin: 20px;
    justify-items: center;
}

.product {
    text-align: center;
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.product img {
    max-width: 25%;
    height: auto;
}

.product h3 {
    margin-top: 10px;
    color: #4CAF50;
    font-size: 20px;
}

.product p {
    color: #777;
    font-size: 16px;
}

.product button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    margin-top: 10px;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    font-size: 16px;
}

.product button:hover {
    background-color: #45a049;
}

/* Styles for the shopping cart */
h2 {
    text-align: center;
    margin: 20px 0;
    color: #4CAF50;
}

#cart {
    list-style: none;
    padding: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
}

#cart li {
    margin: 5px 0;
    font-size: 18px;
}

#cart button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

#cart button:hover {
    background-color: #45a049;
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
    font-size: 16px;
}
