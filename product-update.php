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
        <div class="info">
            <h1 id="kop-tekst">Product <?php echo $products["name"] ?> aanpassen</h1>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
 
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
            <label for="naam">price_per_kg</label>
            <input type="text" name="price_per_kg" value="<?php echo $products["price_per_kg"] ?>">
        </div>
        <div class=" form-group">
            <label for="naam">is_flavor_of_week</label>
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