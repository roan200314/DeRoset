<?php
session_start();

if (isset($_POST["submit"])) {
    $id = $_POST["id"];


    if (
        !empty($_POST["id"])
        && !empty($_POST["firstname"])
        && !empty($_POST["lastname"])
        && !empty($_POST["password"])
        && !empty($_POST["email"])
        && !empty($_POST["phonenumber"])
        && !empty($_POST["address"])
        && !empty($_POST["zipcode"])
        && !empty($_POST["city"])

    ) {
        //allemaal moeten ze true zijn
        $id = $_POST["id"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
        $address = $_POST["address"];
        $zipcode = $_POST["zipcode"];
        $city = $_POST["city"];

        //database connectie

        require 'database.php';

        $sql = "UPDATE users SET 
        id = '$id',
        firstname = '$firstname',
        lastname = '$lastname',
        password = '$password',
        email = '$email',
        phonenumber = '$phonenumber',
        address = '$address',
        zipcode = '$zipcode',
        city = '$city' 
        WHERE id = '$id' ";

        // Voer de INSERT INTO STATEMENT uit
        if (mysqli_query($mysqli, $sql)) {
            header("location: account.php");
        }

        echo "Inserted successfully";
        mysqli_close($mysqli); // Sluit de database verbinding

    }
}
