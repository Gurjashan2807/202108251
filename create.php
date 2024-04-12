<!DOCTYPE html>
<html>
<head>
    <title>Baby Selling Products</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        img {
            max-width: 100px;
            max-height: 100px;
            vertical-align: middle;
        }
        .action-links {
            display: flex;
            justify-content: space-around;
        }
        .action-links a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #333;
        }
        .action-links a:hover {
            background-color: #ff0000;
        }
    </style>
</head>
<body>

<h2>Baby Selling Products</h2>


<a href="addproduct.php">Add product</a>

<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Description</th>
        
        <th>Action</th>
    </tr>
    <?php
    // Connect to database (change these settings according to your setup)
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

    // SQL query to fetch data
    $sql = "SELECT id, product_name, price, description FROM products";
    $result = $conn->query($sql);

    // Output data of each row
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["product_name"] . "</td>
                    <td>" . $row["price"] . "</td>
                    <td>" . $row["description"] . "</td>
                    
                    <td class='action-links'>
                    <a href='update.php?id=" . $row["id"] . "'>Update</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Delete</a>
                </td>
                  </tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
