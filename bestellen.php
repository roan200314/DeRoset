<?php
require "database.php";
session_start();
$sql = "SELECT * FROM users ";
$sql3 = "SELECT * FROM products ";
$sql2 = "SELECT * FROM products WHERE IS_FLAVOR_OF_WEEK = '1' LIMIT 1";

if ($result = mysqli_query($mysqli, $sql)) {
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
if ($result3 = mysqli_query($mysqli, $sql3)) {
    $pica = mysqli_fetch_all($result3, MYSQLI_ASSOC);
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
        <?php
        if (!empty($_SESSION['userData'])) {
            if ($_SESSION["userData"]["role"] == "medewerker") {
        ?>
                <a href="bestellingen.php">bestellingen</a>
        <?php
            }
        } ?>
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
            <?php
            if (!empty($_SESSION['userData'])) {
                if ($_SESSION["userData"]["role"] == "medewerker") {
            ?>
                    <a href="producten.php">Producten overzicht </a> <?php
                                                                    }
                                                                } ?>
            <a href="winkelmandje.php"><i class="fa-solid fa-cart-shopping"></i></a>
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
            <?php
            if (!empty($_SESSION['userData'])) {
                if ($_SESSION["userData"]["role"] == "medewerker" || $_SESSION["userData"]["role"] == "gebruiker") {
            ?>
                    <form method="POST">
                        <h3>Smaken</h1>
                        Alle smaken worden in 1kg bakken verkocht
                            <div class="info">
                                <?php foreach ($pica as $pica) : ?>
                                    <button id="foto-bestel">
                                        <img id="bestel-image" onclick="zetIn('<?php echo $pica['name'] ?>', '<?php echo $pica['price_per_kg'] ?>', '<?php echo $pica['id'] ?>')" src="images/<?php echo $pica["image"] ?>" alt="images/svdd.png">
                                        <?php echo $pica['price_per_kg'] ?>
                                    </button>

                                <?php endforeach; ?>
                            </div>
                    <?php }
            } else {
                echo "U moet inloggen of registreren om een bestelling te plaatsen.";
            } ?>
                    </form>
        </div>

        <div class="smaak-dag">Smaak van de dag
            <div class="container-foto">
                <img src="images/svdd.png" alt="" class="image" style="width:100px">
                <div class="overlay">
                    <a href="#" class="icon" title="">
                        <?php echo $pics["descrip"] ?>
                    </a>

                </div>
            </div>
            <button id="svdd-bestel" onclick="zetIn('<?php echo $pics['name'] ?>', '<?php echo $pics['price_per_kg'] ?>', '<?php echo $pics['id'] ?>')">Bestel</button>
        </div>

        <div class="bezorg">
            <h3>bezorgen</h3>
            Wij bezorgen in: Castricum, Akersloot en Uitgeest.
        </div>
    </div>
</body>
<footer>

</footer>

</html>