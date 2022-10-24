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
            <h1>Inloggen</h1>

            <form action="inloggenCheck.php" method="post">

                <div class="container">
                    <label for="mail"><b>E-Mail</b></label>
                    <input type="text" placeholder="Enter E-Mail" name="email" required><br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required><br>


                    <?php
                    if (!empty($_SESSION["wrong_pas"])) {
                        if ($_SESSION["wrong_pas"] == true) {
                            echo "<p style=color:red>Gegevens kloppen niet</p>";
                        }
                    } ?>


                    <button type="submit" value="submit">Login</button>
                </div>


            </form>
        </div>
        <div class="smaak-dag">smaak van de dag
            <div class="container-foto">
                <img src="images/smaak-dag.jpg" alt="" class="image" style="width:100px">
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