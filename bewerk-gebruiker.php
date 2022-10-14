<?php

require 'database.php';
session_start();

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = $id";

if ($result = mysqli_query($mysqli, $sql)) {

    $user = mysqli_fetch_assoc($result);




    if (is_null($user)) {
        header("location: account.php");
    }
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
        <div class="popu-smaak">populaire smaken</div>
        <div class="info">
            <h1 id="kop-tekst">Bewerk je account</h1>
            <form action="bewerk-gebruiker-verwerk.php" method="post" class='login'>
                <label for="id">id</label>
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">

                <div class=" form-group">
                    <label for="name">name</label>
                    <input type="text" name="firstname" value="<?php echo $user["firstname"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">lastname</label>
                    <input type="text" name="lastname" value="<?php echo $user["lastname"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">password</label>
                    <input type="text" name="password" value="<?php echo $user["password"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">email</label>
                    <input type="text" name="email" value="<?php echo $user["email"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">phonenumber</label>
                    <input type="text" name="phonenumber" value="<?php echo $user["phonenumber"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">address</label>
                    <input type="text" name="address" value="<?php echo $user["address"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">zipcode</label>
                    <input type="text" name="zipcode" value="<?php echo $user["zipcode"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">city</label>
                    <input type="text" name="city" value="<?php echo $user["city"] ?>">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-info" name="submit">Update je account!</button>

                </div>
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