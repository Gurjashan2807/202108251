<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
    <style>
        form {
            max-width: 500px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Update Product</h2>

<?php
// Your PHP code to fetch product details for update goes here
// Example:
$product_id = $_GET['id'];
$product_name = "";
$price = 10.99;
$description = "";
?>

<form action="update_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $product_id; ?>">
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" value="<?php echo $product_name; ?>" required>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="<?php echo $price; ?>" step="0.01" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required><?php echo $description; ?></textarea>
    <input type="submit" value="Update Product">

</form>


</body>
</html>
