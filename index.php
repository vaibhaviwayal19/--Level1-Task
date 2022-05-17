<?php
    include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLoud Hotel</title>
    <link rel="stylesheet" href="css/basic.css">
    <style>
        header {
            position: relative;
        }
    </style>
</head>
<body>
<br>
    <br>
    <div id="main">

        <div id="test">
            <img src="images/pizza.jpg" alt="pizza"><br>
            <label for=""><b>Veg Pizza</b></label><br>
            <label for=""><b>Price:</b>Rs. 299</label><br>
            <a href="" onclick="ordered();" class="btn">Order Pizza</a>
        </div>

        <div id="test">
            <img src="images/pizza.jpg" alt="Burgur"><br>
            <label for=""><b>Veg Burgur</b></label><br>
            <label for=""><b>Price:</b>Rs. 99</label><br>
            <a href="" onclick="ordered();" class="btn">Order Burgur</a>
        </div>

        <div id="test">
            <img src="images/pizza.jpg" alt="hot-Dogs"><br>
            <label for=""><b>HotDogs</b></label><br>
            <label for=""><b>Price:</b>Rs. 299</label><br>
            <a href="" onclick="ordered();" class="btn">Order HotDogs</a>
        </div>

        <div id="test">
            <img src="images/pizza.jpg" alt="Chinise Nodles"><br>
            <label for=""><b>Veg Chinise Nodles</b></label><br>
            <label for=""><b>Price:</b>Rs. 399</label><br>
            <a href="" onclick="ordered();" class="btn">Order Chinise Nodles</a>
        </div>

        <div id="test">
            <img src="images/pizza.jpg" alt="SandWhich"><br>
            <label for=""><b>Veg SandWhich</b></label><br>
            <label for=""><b>Price:</b>Rs. 199</label><br>
            <a href="" onclick="ordered();" class="btn">Order SandWhich</a>
        </div>

        <div id="test">
            <img src="images/pizza.jpg" alt="Italian Soup"><br>
            <label for=""><b>Italian Soup</b></label><br>
            <label for=""><b>Price:</b>Rs. 499</label><br>
            <a href="" onclick="ordered();" class="btn">Order Italian Soup</a>
        </div>

    </div>
</body>
</html>