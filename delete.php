<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if product ID is provided via URL parameter
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $product_id = $_GET['id'];

    // Delete the product from the database
    $sql = "DELETE FROM products WHERE id = $product_id";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    echo "No product ID provided.";
}

// Close the connection
$conn->close();
?>
