<?php
require "database.php";
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Registreren</title>
</head>

<body>
    <div class="bg"></div>
    <div class="grid-container">
        <div class="logo">
            <img src="images/logo.webp" id="logo-foto" width="40px" height="50px" alt="">
            <h1 class="topname">De</h1>
            <h1 class="topname2">Roset</h1>
        </div>
        <div class="navbar">
            <a href="index.php">Over ons</a>
            <a href="bestellen.php">Bestellen</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
            <a href="winkelmandje.php">Winkelmandje</a>
            <a href="account.php">Account</a>
        </div>
        <div class="popu-smaak">Populaire smaken
            <div class="container-fotos">
                <div class="positie">
                    <img src="images/aardbei.png" alt="" class="images" style="width:68px">
                </div>
                <div class="positie">
                    <img src="images/hazelnoot.png" alt="" class="images" style="width:68px">
                </div>
                <div class="positie">
                    <img src="images/cookie.png" alt="" class="images" style="width:68px">
                </div>
            </div>
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
            <div class="smaak-dag">smaak van de dag
                <div class="container-foto">
                    <img src="images/svdd.png" alt="" class="image" style="width:100px">
                    <div class="overlay">
                        <a href="#" class="icon" title="">
                            Pistache ijsje extra lekker!
                        </a>
                    </div>
                </div>
                <button id="">Bestel</button>
            </div>
            <div class="bezorg">bezorgen</div>
        </div>
</body>
<footer>
    <li><a href="registreren.php">Registreren</a></li>
    <li><a href="inloggen.php">Inloggen</a></li>
</footer>
</body>

</html>