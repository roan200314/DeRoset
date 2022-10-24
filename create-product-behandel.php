<?php

print_r($_POST);
if ($_POST['name'] != '' && $_POST['price_per_kg'] != ''  && $_POST['is_flavor_of_week'] != '' && $_POST['category'] != '' && $_POST['descrip'] != '' && $_POST['image'] != '') {

    $name = $_POST['name'];
    $price_per_kg = $_POST['price_per_kg'];
    $is_flavor_of_week = $_POST['is_flavor_of_week'];
    $category = $_POST['category'];
    $descrip = $_POST['descrip'];
    $image = $_POST['image'];


    require "database.php";

    $sql = "INSERT INTO products (name, price_per_kg, is_flavor_of_week, category, descrip, image)
    VALUES ('$name', '$price_per_kg', '$is_flavor_of_week', '$category', '$descrip', '$image')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: create-product.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
