<?php

require "database.php";
session_start();
$_SESSION["wrong_pas"] = true;


$email = $_POST["email"];
$password = $_POST["password"];

$result = $mysqli->query("SELECT * FROM users WHERE email = '$email' LIMIT 1");
$user = $result->fetch_assoc();


if (!empty($user)) {

    if ($user['password'] == $password) {
        $_SESSION["userData"] = $user;
        $_SESSION["wrong_pas"] = false;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION["wrong_pas"] = true;
        header("Location: inloggen.php");
        exit();
    }
} else {
    header("Location: inloggen.php");
    exit();
}




if ($_SESSION["userData"]["role"] == "gebruiker") {
    echo "is een gebruiker";
} elseif ($_SESSION["userData"]["role"] == "medewerker") {
    echo "is een medewerker";
} 
