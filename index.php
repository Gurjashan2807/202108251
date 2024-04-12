<?php
// Include config file
require_once "config.php";

// Initialize an empty array to store retrieved data
$clothes = array();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Clothing Store</title>
    <link rel="stylesheet" href="Gurjashan.css">


    </head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            
            <ul>
                <li><a href="#" class="selected">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="create.php">products</a></li>
                <li><a href="#">Order</a></li>
                <li><a href="contact_us.php">Contact us </a></li>
                <button><a href="#">SignIn</a></button>
                <button><a href="#">SignUp</a></button>
               
            </ul>
        </div>

    </nav>

    <div>
        <ul>
            <h1>Bringing style to your baby's wardrobe</h1>
            <h2>Discover our unique baby pieces selected for you</h2>
            <button><a href="#">Shop now</a></button>
        </ul>

    </div>
    <div class="image-container">
        <img src="Baby1.jpeg" alt="First Image">
        <p class="image-caption">Unique baby clothing pieces</p>


      </div>
      <div class="image-container">
        <img src="Baby2.webp" alt="Second Image">
        <p class="image-caption">Customized Guidance</p>
      </div>

      <div class="image-container">
        <img src="Baby3.webp" alt="Third Image">
        <p class="image-caption">For babies and toddlers of all ages</p>
      </div>
      <div>
        <h3>Everthing for your Baby's wardrobe. Designed with love and care.</h3>
      </div>
      <main> <div class="image-container1">
        <img src="Baby4.jpeg" alt="fourth Image">

      </div>
      <div class="image-container1">
        <img src="Baby5.jpeg" alt="fifth Image">

      </div>
      <div class="image-container1">
        <img src="Baby6.jpeg" alt="Sixth Image">

      </div>
      <div class="image-container1">
        <img src="Baby7.jpeg" alt="Seventh Image">

      </div>
      <div class="image-container1">
        <img src="Baby8.jpeg" alt="Eighth Image">
        </div>
        <div class="image-container1">
            <img src="Baby9.jpg" alt="ninth Image">
             </div>
    </main>
    <footer>
        <div class="container">
            <h4>Need more information about a product?Contact Us!</h4>
            <ul>
                <button><a href="#">Our products</a></button>
                <button><a href="#">Contact Us</a></button>
            </ul>

          </div>
          <div class="about-us">
            <h5>About Us</h5>
            <p>We are a team of passionate people whose goal is to improve everyone's life 
                through disruptive products. We build great products to solve your buisness
                problems. Our products are designed for small to medium size companies willing to optimize 
                their performance.</p>
          </div>
          <div class="contact-info">
            <h6>Contact Information</h6>
            <p>Email: kepto123@gmail.com</p>
            <p>Phone: +1 (555) 123-4567</p>
            <p>Address: 123 Main Street, Brampton, Canada   </p>
          </div>
    </footer>

</body>
</html>
    <style>
       .navbar{
        background: rgb(6, 79, 125);; font-family: calibri; padding-right: 15px;
        padding-left: 15px;
    }
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
            color: #WHITE;
        }
        .clothes-list {
            list-style: none;
            padding: 0;
        }
        .clothes-list li {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .clothes-list li a {
            text-decoration: none;
            color: #333;
        }
        h4{
          color:black
        }
        footer{
    margin: 0;
      padding: 50px;
      font-family: Arial, sans-serif;
      background-color: #0a557a; /* Set the background color */
      color: #fff; /* Set the text color */
      text-align: center;
      box-shadow: #3d4142;
      background-blend-mode: luminosity;
  }
  .contact-info {
    padding: 20px;
    background-color:   white /* Set the background color for the "Contact Information" section */
    color: #423f3f; /* Set the text color for the "Contact Information" section */
    border-radius: 20px;
    box-decoration-break: clone;
  }
  .about-us {
    background-color:  WHITE; /* Set the background color for the "About Us" section */
    color: #1b1919; /* Set the text color for the "About Us" section */
    padding: 20px;
    border-bottom: 2px solid #2980b9;
    border-radius: 20px;
    box-decoration-break: clone;
    </style>
</head>
