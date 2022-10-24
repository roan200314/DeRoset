<?php
require "database.php";
session_start();
$sql = "SELECT * FROM users ";
$sql = "SELECT * FROM products ";

if ($result = mysqli_query($mysqli, $sql)) {
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>De Roset</title>
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
            <h3>Smaken</h1>
                <div class="info">
                    <?php foreach ($users as $user) : ?>
                        <img class="bestel-image" src="images/<?php echo $user["image"] ?>" alt="">
                    <?php endforeach; ?>
                </div>
        </div>
        <div class="smaak-dag">smaak van de dag
            <div class="container-foto">
                <img src="images/<?php echo $user["image"] ?>" alt="" class="image" style="width:100px">
                <div class="overlay">
                    <a href="#" class="icon" title="">
                        <?php echo $user["descrip"] ?>
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

</html>