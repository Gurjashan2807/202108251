<?php
// Include config file
require_once "config.php"

// Initialize an empty array to store retrieved data
$clothes = array();

// Query to select all baby clothes from the database
$stmt = $pdo->query("SELECT * FROM baby_clothes");

// Fetch and store each row of the result set into the $clothes array
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $clothes[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Clothes</title>

    </head>
<body>
    <div class="container">
        <h1>Baby Clothes</h1>
        <ul class="clothes-list">
            <?php foreach ($clothes as $cloth): ?>
                <li>
                    <strong><?php echo htmlspecialchars($cloth['name']); ?></strong>
                    <br>
                    Size: <?php echo htmlspecialchars($cloth['size']); ?>
                    <br>
                    Price: $<?php echo htmlspecialchars($cloth['price']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
        }
        .clothes-list {
            list-style: none;
            padding: 0;
        }
        .clothes-list li {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Baby Clothes</h1>
        <ul class="clothes-list">
            <?php foreach ($clothes as $cloth): ?>
                <li>
                    <strong><?php echo htmlspecialchars($cloth['name']); ?></strong>
                    <br>
                    Size: <?php echo htmlspecialchars($cloth['size']); ?>
                    <br>
                    Price: $<?php echo htmlspecialchars($cloth['price']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
