<?php
require "database.php";
session_start();
$sql = "SELECT * FROM users ";
$sql2 = "SELECT * FROM products ";

if ($result = mysqli_query($mysqli, $sql)) {
    $user = mysqli_fetch_assoc($result);
}
if ($result2 = mysqli_query($mysqli, $sql2)) {
    $users = mysqli_fetch_assoc($result2);
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
    <script src="javascript/main.js" async></script>
    <link rel="stylesheet" href="css/style.css">
    <title>De Roset</title>
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
            <a href="winkelmandje.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <?php
            if (!empty($_SESSION['userData'])) {
                if ($_SESSION["userData"]["role"] == "medewerker") {
            ?>
                    <a href="producten.php">Producten overzicht </a> <?php
                                                                    }
                                                                } ?>
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
        <div class="main">
            <h1 id="kop-tekst">Winkelwagen</h1>
                <p id="items"></p>
                <form id="bestelForm">
                <p>
                    <label>Waar wilt u zitten</label>
                    <input type="radio" name="check" value="Castricum"> Castricum
                     <input type="radio" name="check" value="Uigeest"> Uigeest
                     <input type="radio" name="check" value="Akersloot"> Akersloot
                </p>

                </form>
                <button id="buttonBestel">Bestel!</button>
            <button id="buttondelete">Leeg winkelwagen</button>
        </div>

        <div class="smaak-dag">smaak van de dag
            <div class="container-foto">
                <img src="images/<?php echo $users["image"] ?>" alt="" class="image" style="width:100px">
                <div class="overlay">
                    <a href="#" class="icon" title="">
                        <?php echo $users["descrip"] ?>
                    </a>
                </div>
            </div>
            <button id="">Bestel</button>
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