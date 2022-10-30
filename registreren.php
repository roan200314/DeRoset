<?php
require "database.php";
session_start();
$sql = "SELECT * FROM users ";
$sql2 = "SELECT * FROM products WHERE IS_FLAVOR_OF_WEEK = '1' LIMIT 1";

if ($result = mysqli_query($mysqli, $sql)) {
    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
if ($result2 = mysqli_query($mysqli, $sql2)) {
    $pics = mysqli_fetch_assoc($result2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a333f4247d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Registreren</title>
</head>
<header class="text">
    <div class="topnav">
        <a href="winkelmandje.php">Winkelmandje</a>
        <a href="account.php">Account</a>
        <a href="registreren.php">Registreren</a>
        <a href="inloggen.php">Inloggen</a>
    </div>
</header>

<body>
    <div class="bg"></div>
    <div class="grid-container">
        <div class="logo">
            <img src="images/logo.webp" id="logo-foto" width="20px" height="50px" alt="">
            <h1 class="topname">De </h1>
            <h1 class="topname2"> Roset</h1>
        </div>
        <div class="navbar">
            <a href="index.php">Over ons</a>
            <a href="bestellen.php">Bestellen</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <?php
            if (!empty($_SESSION['userData'])) {
                if ($_SESSION["userData"]["role"] == "medewerker") {
            ?>
                    <a href="producten.php">Producten overzicht </a> <?php
                                                                    }
                                                                } ?>
            <a href="winkelmandje.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="main">
            <form action="registrerenCheck.php" method="post">



                <div class="container">
                    <label for="First name"><b>First name</b></label>
                    <input type="text" placeholder="First name" name="firstname" required><br>

                    <label for="Last name"><b>Last name</b></label>
                    <input type="text" placeholder="Last name" name="lastname" required><br>

                    <label for="email"><b>email</b></label>
                    <input type="text" placeholder="Enter E-mail" name="email" required><br>

                    <label for="Password"><b>password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required><br>

                    <label for="Birthdate"><b>Birthdate</b></label>
                    <input type="date" placeholder="Birthdate" name="birthdate" required><br>

                    <label for="Phonenumber"><b>phonenumber</b></label>
                    <input type="phonenumber" placeholder="Enter phonenumber" name="phonenumber" required><br>

                    <label for="Address"><b>Address</b></label>
                    <input type="text" placeholder="Enter Address" name="address" required><br>

                    <label for="Zipcode"><b>Zipcode</b></label>
                    <input type="text" placeholder="Enter Zipcode" name="zipcode" required><br>

                    <label for="City"><b>city</b></label>
                    <input type="text" placeholder="Enter city" name="city" required>

                    <button type="submit" id="reg-button">Registreren</button>
                </div>
        </div>
        <div class="popu-smaak">
            <h3>Populaire smaken<h3>
                    <div class="container-fotos">
                        <img src="images/aardbei.png">
                        <div></div>
                        <img src="images/hazelnoot.png">
                        <div></div>
                        <img src="images/cookie.png">
                    </div>

        </div>
        <div class="smaak-dag">smaak van de dag
            <div class="container-foto">
                <img src="images/svdd.png" alt="" class="image" style="width:100px">
                <div class="overlay">
                    <a href="#" class="icon" title="">
                        <?php echo $pics["descrip"] ?>
                    </a>
                </div>
            </div>
            <button id="svdd-bestel">Bestel</button>
        </div>

        <div class="bezorg">
            <h3>bezorgen</h3>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis!
        </div>
    </div>
</body>
<footer>

</footer>

</html>