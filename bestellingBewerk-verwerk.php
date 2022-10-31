<?php
session_start();

if (isset($_POST["submit"])) {
    $id = $_POST["id"];


    if (
        !empty($_POST["id"])
        && !empty($_POST["product_id"])
        && !empty($_POST["aankomst"])
        && !empty($_POST["adress"])
        && !empty($_POST["date"])
        && !empty($_POST["isReceived"])

    ) {
        //allemaal moeten ze true zijn
        $id = $_POST["id"];
        $product_id = $_POST["product_id"];
        $aankomst = $_POST["aankomst"];
        $adress = $_POST["adress"];
        $date = $_POST["date"];
        $isReceived = $_POST["isReceived"];

        //database connectie

        require 'database.php';

        $sql = "UPDATE orders SET 
        id = '$id',
        product_id = '$product_id',
        aankomst = '$aankomst',
        adress = '$adress',
        date = '$date',
        isReceived = '$isReceived'
        WHERE id = '$id' ";

        // Voer de INSERT INTO STATEMENT uit
        if (mysqli_query($mysqli, $sql)) {
            header("location: bestellingen.php");
        }

        echo "Inserted successfully";
        mysqli_close($mysqli); // Sluit de database verbinding
    }
}
