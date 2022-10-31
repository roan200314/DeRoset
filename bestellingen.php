<?php
require "database.php";
session_start();
$sql  = "SELECT * FROM users ";
$sql2 = "SELECT * FROM products WHERE IS_FLAVOR_OF_WEEK = '1' LIMIT 1";
$sql3 = "SELECT * FROM orders ";

if ($result = mysqli_query($mysqli, $sql)) {
    $user = mysqli_fetch_assoc($result);
}
if ($result2 = mysqli_query($mysqli, $sql2)) {
    $pics = mysqli_fetch_assoc($result2);
}
if ($result3 = mysqli_query($mysqli, $sql3)) {
    $order = mysqli_fetch_all($result3, MYSQLI_ASSOC);
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
        <div class="smaak-dag">
            Smaak van de dag
            <div class="container-foto">
                <img src="images/svdd.png" alt="" class="image">
                <div class="overlay">
                    <a href="#" class="icon" title="">
                        <?php echo $pics["descrip"] ?>
                    </a>
                </div>
            </div>
            <button id="svdd-bestel">Bestel</button>
        </div>
        <div class="main">
            <h1 id="kop-tekst">Bestellingen</h1>
            <div class="loc6">
            <?php foreach ($order as $order) : ?>
                    <tr>
                    user_id: <?php echo $order["user_id"] ?><br>
                    product_id: <?php echo $order["product_id"] ?><br>
                    aankomst: <?php echo $order["aankomst"] ?><br>
                    adress: <?php echo $order["adress"] ?><br>
                    date: <?php echo $order["date"] ?><br>
                    is Received: <?php echo $order["isReceived"] ?><br>
                    <td style="font-size: 14px;"><a href="bestellingDelete.php?id=<?php echo $order["id"] ?>" class="btn btn-danger">Delete</a></td>
                    <td style="font-size: 14px;"><a href="bestellingBewerk.php?id=<?php echo $order["id"] ?>" class="btn btn-info">Update</a></td><br>
                </tr>
                <?php endforeach; ?>

            </div>
            </div>



        </div>

    </div>
</body>
<footer>

</footer>

</html>