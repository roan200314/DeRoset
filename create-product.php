<?php
require "database.php";
session_start();
$sql = "SELECT * FROM users ";

if ($result = mysqli_query($mysqli, $sql)) {
    $user = mysqli_fetch_assoc($result);
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
        <div class="popu-smaak">populaire smaken
            <div class="container-fotos">
                <div class="positie">
                    <img src="images/aardbei.jfif" alt="" class="images" style="width:68px">
                </div>
                <div class="positie">
                    <img src="images/chocola.jfif" alt="" class="images" style="width:68px">
                </div>
                <div class="positie">
                    <img src="images/greenTea.jfif" alt="" class="images" style="width:68px">
                </div>
            </div>

        </div>
        <div class="main">
            <h1 id="kop-tekst">Create Product</h1>
            <form action="create-product-behandel.php" method="post">

                <div class="container">
                    <label for="name"><b>name</b></label>
                    <input type="text" placeholder="Enter name" name="name" required>
                </div>

                <div class="container">
                    <label for="price_per_kg"><b>price per KG</b></label>
                    <input type="text" placeholder="Enter price per kg" name="price_per_kg" required>
                </div>

                <div class="container">
                    <label for="category"><b>Category</b></label>
                    <input type="text" placeholder="Enter category" name="category" required>
                </div>
                <div class="container">
                    <label for="descrip"><b>description</b></label>
                    <input type="text" placeholder="Enter descrip" name="descrip" required>
                </div>
                <div class="container">
                    <label for="text"><b>image source</b></label>
                    <input type="text" placeholder="Enter image" name="image" required>
                </div>

                <div class="container">
                    <label for="category"><b>flavor of the week?</b></label>
                    <select name="is_flavor_of_week">
                        <option value="1" name="is_flavor_of_week" required>Yes
                        <option value="0" name="is_flavor_of_week" required> No
                    </select>
                </div>
                

                <button type="submit">maak!</button>
            </form>
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