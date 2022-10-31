<?php

    require "database.php";
    session_start();

    if (!empty($_SESSION['userData'])) {
        $id = ($_SESSION['userData']['id']);
    }

print_r($_POST);
if (
    $_POST['check'] != ''
    && $_POST['check1'] != ''
    && $_POST['timeBezorgen'] != ''
) {


    $check = $_POST['check'];
    $check1 = $_POST['check1'];    
    $timeBezorgen = $_POST['timeBezorgen'];
    $products = $_POST["productid"];


    $producten = explode(",", $products);

        foreach ($producten as $prod) : 

        $sql = "INSERT INTO orders (aankomst, adress, product_id, `user_id`, date,  isReceived)
        VALUES ('$check', '$check1', '$prod', '$id', '$timeBezorgen', 'no')";

    mysqli_query($mysqli, $sql);

        endforeach;

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: winkelmandje.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}

