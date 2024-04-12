<?php


// Include necessary files and configurations
require_once('config.php');
require_once('functions.php');

// Connect to the database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted for adding a new product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Insert new product into the database
    $sql = "INSERT INTO products (product_name, price, description) VALUES ('$product_name', '$price', '$description')";
    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Check if form is submitted for deleting a product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
    $product_id = $_POST['product_id'];

    // Delete product from the database
    $sql = "DELETE FROM products WHERE id='$product_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
</head>
<body>
<nav class="navbar">
        <div class="navdiv">
            <ul>
            <li><a href="#">Products</a></li>
            <button><a href="Create.php">Add Product</a></button>

</ul>
</div>

</nav>

<div class="image-container">
    <main>
    


      </div>
      <div class="image-container">
        <img src="Baby2.webp" alt="Second Image">
        <p class="image-caption">Girls froks</p>
        <p>$25</p>
        <p><li><a href="delete.php">Delete</a></li>
        <li><a href="update.php">Update</a></li></p>
      </div>
      <div class="image-container">
        <img src="cloth2.jpg" alt="Third Image">
        <p class="image-caption">coat</p>
        <p>$23.99</p>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="update.php">Update</a></li>
      </div>
    </main>
       
</body>
</html>
<style>

*{
    text-decoration: solid;

}
body {
    font: 90% Arial, Helvetica, sans-serif;
    margin: 20px;
}

    .navbar{
        background: rgb(224, 110, 10); font-family: calibri; padding-right: 15px;
        padding-left: 15px;
    }
    .navdiv{
        display: flex; align-items: center; justify-content: space-between; 
    }
    .logo a{
        font-size: 40px;
font-weight: 700;  color: rgb(9, 34, 51); 
 }
 li{
    list-style: none; display: inline-block;
    font-size: larger;
    font-weight: bolder;
    text-decoration: solid;
    
 }
 
 
 li a{
    color: white; 
    font-size: 20px; 
    font-weight: bolder;
    margin-right: 25px; 
}
button{
    background-color: black;
    margin-left: 10px;
    border-radius: 12px;  padding: 10px;  width: 95px;
}
button a{
    color: aliceblue;  font-weight: bold;
    font-size: 20px;
}
main{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Responsive grid with minimum column width of 200px */
    gap: 2px; /* Add some gap between grid items */
    
    justify-content: center; /* Center the grid */
    padding: 10px;
}
.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 9px;
    
    
   
  }

  .image-container img {
    width: 40%;
    height: auto;
    display: grid;
    transition: transform 0.3s ease-in-out; /* Add a smooth transition effect */
  }

  .image-container1:hover img {
    transform: scale(1.1); /* Zoom in slightly on hover */
  }
</style>

<?php
// Close database connection
mysqli_close($conn);
?>
