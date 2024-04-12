<?php
// Create uploads directory if it doesn't exist
$upload_dir = __DIR__ . '/uploads/';

if (!is_dir($upload_dir) && !mkdir($upload_dir, 0777, true)) {
    die("Failed to create directory $upload_dir");
}

// Check if directory is writable
if (!is_writable($upload_dir)) {
    die("Directory $upload_dir is not writable");
}

// Database connection
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
    if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_FILES['image'])) {
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        // File upload
        $target_file = $upload_dir . basename($_FILES["image"]["name"]);

        // Check if file is uploaded successfully
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";

            // Insert the product into the database
            $sql = "INSERT INTO products (product_name, price, description, image_path) VALUES (?, ?, ?, ?)";
            
            // Prepare the statement
            $stmt = $conn->prepare($sql);
            
            // Bind parameters
            $stmt->bind_param("sdss", $product_name, $price, $description, $target_file);
            
            // Execute the statement
            if ($stmt->execute()) {
                echo "Product added successfully";
            } else {
                echo "Error adding product: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Form data missing";
    }
} else {
    echo "Invalid request method";
}

// Close the connection
$conn->close();
?>
