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

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data (you can add more validation as needed)
    if (isset($_POST['id']) && isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['description'])) {
        $product_id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        // Update the product in the database
        $sql = "UPDATE products SET product_name = ?, price = ?, description = ? WHERE id = ?";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bind_param("sdsi", $product_name, $price, $description, $product_id);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Product updated successfully";
        } else {
            echo "Error updating product: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Form data missing";
    }
} else {
    echo "Invalid request method";
}

// Close the connection
$conn->close();
?>
