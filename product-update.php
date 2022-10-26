<?php
require "database.php";
session_start();
$id = $_GET["id"];

$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

if ($result = mysqli_query($mysqli, $sql)) {
    $products = mysqli_fetch_assoc($result);
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
            <h1 id="kop-tekst">Product <?php echo $products["name"] ?> aanpassen</h1>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <form action="categorie-update-behandel.php" method="post">

                            <label for="id">id</label>
                            <input type="hidden" name="id" value="<?php echo $products["id"] ?>">
        </div>
        <div class=" form-group">
            <label for="name">name</label>
            <input type="text" name="name" value="<?php echo $products["name"] ?>">
        </div>
        <div class=" form-group">
            <label for="naam">price per kg</label>
            <input type="text" name="price_per_kg" value="<?php echo $products["price_per_kg"] ?>">
        </div>
        <div class=" form-group">
            <label for="naam">is flavor of week</label>
            <input type="text" name="is_flavor_of_week" value="<?php echo $products["is_flavor_of_week"] ?>">
        </div>
        <div class=" form-group">
            <label for="naam">description</label>
            <input type="text" name="descrip" value="<?php echo $products["descrip"] ?>">
        </div>
        <div class=" form-group">
            <label for="naam">category</label>
            <input type="text" name="category" value="<?php echo $products["category"] ?>">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-info" name="submit">Update Product!</button>

        </div>

        </form>
        </tr>
        </tbody>
        </table>
    </div>
    <div class="smaak-dag">
        <h3>Smaak van de dag</h3>
        <div class="container-foto">
            <img src="images/<?php echo $products["image"] ?>" alt="" class="image">
            <div class="overlay">
                <a href="#" class="icon" title="">
                    <?php echo $products["descrip"] ?>
                </a>
            </div>
        </div>
        <button id="button">Bestel</button>
    </div>
    <div class="bezorg">bezorgen</div>
    </div>
</body>
<footer>
    <li><a href="registreren.php">Registreren</a></li>
    <li><a href="inloggen.php">Inloggen</a></li>
</footer>

</html>