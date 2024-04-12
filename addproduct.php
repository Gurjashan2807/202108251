<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        h2{
            color: #8a2be2;
            padding: 10px 20px;
        }
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
            background-color: #ff0000;
        }
    </style>
</head>
<body>

<h2>Add Product</h2>

<form action="addproduct_process.php" method="post" enctype="multipart/form-data">
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" required>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
    <input type="submit" value="Add Product">
</form>

</body>
</html>
