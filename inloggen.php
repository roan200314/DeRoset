<?php 
require "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="loginCheck.php" method="post">

<div class="container">
    <label for="mail"><b>E-Mail</b></label>
    <input type="text" placeholder="Enter E-Mail" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


    <?php
    if (!empty($_SESSION["wrong_pas"])) {
        if ($_SESSION["wrong_pas"] == true) {
            echo "<p style=color:red>Gegevens kloppen niet</p>";
        }
    } ?>


    <button type="submit" value="submit">Login</button>
</div>


</form>
</body>
</html>