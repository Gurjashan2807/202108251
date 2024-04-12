<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Error</h1>
        <p>An error occurred while processing your request.</p>
        <?php
        // Check if error message is provided via GET request
        if(isset($_GET['message']) && !empty($_GET['message'])) {
            $error_message = htmlspecialchars($_GET['message']);
            echo "<p>Error Message: $error_message</p>";
        }
        ?>
        <p>Please contact the administrator for assistance or try again later.</p>
    </div>
</body>
</html>
