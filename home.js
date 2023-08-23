// Sample product data (replace with your own data)
const products = [
    {
        id: 1,
        category: "medicine",
        name: "Calcimax Forte Plus",
        description: "Strip Of 30 Tablets",
        price: 120,
    },
    {
        id: 2,
        category: "medicine",
        name: "Dolo (Paracetamol) 650mg",
        description: "Strip Of 15 Tablets",
        price: 30,
    },
    {
        id: 3,
        category: "medicine",
        name: "Vitamin D3",
        description: "Bottle Of 60",
        price: 340,
    },
    {
        id: 4,
        category: "healthcare",
        name: "Beardoil",
        description: "Bottle Of 50ml",
        price: 30,
    },
    {
        id: 5,
        category: "healthcare",
        name: "Vitamin c facewash",
        description: "wow face wash",
         price: 340,
},
{       id: 6,
        category: "healthcare",
        name: "nivea moisturizer",
        description: "moisturizer 200ml",
        price: 250,     

    },
    {
        id: 7,
        category: "ayurvedic",
        name: "galact",
        description: "Galact Granules - Elaichi Flavour 200gm",
         price: 238,

    },
    {
        id: 8,
        category: "ayurvedic",
        name: "Pankajakasthuri",
        description:" Pankajakasthuri Breathe Easy Granules 400 gm",
         price: 310,
 
    },
    {
        id:9,
        category: "ayurvedic",
        name: "kapiva",
        description:"Kapiva Wild Amla Juice 1 ltr",
         price: 430,

    },
    {
        id:10,
        category: "babyproduct",
        name: "himalaya baby shampoo",
        description:"himalaya baby shampoo 100ml",
         price: 220,
    },
    {
        id:11,
        category: "babyproduct",
        name: "himalaya baby wipes",
        description:"baby wipes (combo pack 3)",
         price: 430,
    },
    {
        
        id:12,
        category: "babyproduct",
        name: "woodwards gripe",
        description:"woodwars gripe water 150ml",
         price: 430,
        
    },

];

// Function to generate HTML for a product item
function generateProductHTML(product) {
    return `
        <div class="product">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p>MRP = $${product.price}</p>
            <a href="addtocart.php" class="btn">Add to Cart</a>
        </div>
    `;
}

// Function to display products based on category
function displayProducts(category, productsArray) {
    const productGrid = document.getElementById(`${category}Products`);
    productGrid.innerHTML = "";

    productsArray.forEach((product) => {
        productGrid.innerHTML += generateProductHTML(product);
    });
}

// Function to search products based on entered text
function searchProducts() {
    const searchInput = document.getElementById("searchInput");
    const searchQuery = searchInput.value.toLowerCase().trim();

    const filteredProducts = products.filter((product) =>
        product.name.toLowerCase().includes(searchQuery)
    );

    displayProducts("medicine", filteredProducts);
    displayProducts("healthcare", filteredProducts);
    displayProducts("ayurvedic", filteredProducts);
    displayProducts("baby", filteredProducts);
}

// Function to sort products based on selected option
function sortProducts() {
    const sortSelect = document.getElementById("sortSelect");
    const sortBy = sortSelect.value;

    let sortedProducts = [...products];

    if (sortBy === "name") {
        sortedProducts.sort((a, b) =>
            a.name.localeCompare(b.name)
        );
    } else if (sortBy === "price") {
        sortedProducts.sort((a, b) =>
            a.price - b.price
        );
    }

    displayProducts("medicine", sortedProducts);
    displayProducts("healthcare", sortedProducts);
    displayProducts("ayurvedic", sortedProducts);
    displayProducts("baby", sortedProducts);
}

// Event listeners
document.getElementById("searchInput").addEventListener("input", searchProducts);
document.getElementById("sortSelect").addEventListener("select", sortProducts);

// Initial display of products
displayProducts("medicine", products);
displayProducts("healthcare", products);
displayProducts("ayurvedic", products);
displayProducts("baby", products);
