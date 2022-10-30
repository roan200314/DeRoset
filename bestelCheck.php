<?php

print_r($_POST);
if ($_POST['check'] != '' 
&& $_POST['check1'] != '') {


    $check = $_POST['check'];
    $check1 = $_POST['check1'];


    require "database.php";

    $sql = "INSERT INTO orders (firstname, lastname, email, password, date_of_birth, phonenumber, address, zipcode, city, role)
    VALUES ('$firstname', '$lastname', '$email', '$password', '$birthdate', '$phonenumber', '$address', '$zipcode', '$city', 'gebruiker')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
