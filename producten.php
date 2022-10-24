<?php
require "database.php";
session_start();
$sql = "SELECT * FROM products ";

if ($result = mysqli_query($mysqli, $sql)) {
    $categorieen = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <?php
            if (!empty($_SESSION['userData'])) {
                if ($_SESSION["userData"]["role"] == "medewerker") {
            ?>
                    <a href="producten.php">Producten overzicht </a> <?php
                                                                    }
                                                                } ?>
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
            <h1 id="kop-tekst">Producten</h1>


            <table class="table">
                <thead>
                    <a href="create-product.php" class="btn btn-success">Nieuw product aanmaken</a>
                    <tr>
                        <th>id</th>
                        <th>Naam</th>
                        <th>Inkoop kosten</th>
                        <th>Flavor of week</th>
                        <th>description</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categorieen as $categorie) : ?>
                        <tr>
                            <td style="font-size: 14px;"><?php echo $categorie["id"] ?></td>
                            <td style="font-size: 14px;"><?php echo $categorie["name"] ?></td>
                            <td style="font-size: 14px;"><?php echo $categorie["price_per_kg"] ?></td>
                            <td style="font-size: 14px;"><?php echo $categorie["is_flavor_of_week"] ?></td>
                            <td style="font-size: 14px;"><?php echo $categorie["descrip"] ?></td>
                            <td style="font-size: 14px;"><?php echo $categorie["category"] ?></td>
                            <td style="font-size: 14px;"><a href="product-delete.php?id=<?php echo $categorie["id"] ?>" class="btn btn-danger">Delete</a></td>
                            <td style="font-size: 14px;"><a href="product-update.php?id=<?php echo $categorie["id"] ?>" class="btn btn-info">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <div class="smaak-dag">smaak van de dag
            <div class="container-foto">
                <img src="images/smaak-dag.jpg" alt="" class="image" style="width:100px">
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

</html>