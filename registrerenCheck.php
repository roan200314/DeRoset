<?php

print_r($_POST);
if ($_POST['firstname'] != '' && $_POST['lastname'] != '' && $_POST['email'] != '' && $_POST['password'] != '' 
&& $_POST['birthdate'] != '' && $_POST['phonenumber'] != '' && $_POST['address'] != '' && $_POST['zipcode'] != '' 
&& $_POST['city'] != '') {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];


    require "database.php";

    $sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phonenumber, address, zipcode, city, role)
    VALUES ('$firstname', '$lastname', '$email', '$password', '$birthdate', '$phonenumber', '$address', '$zipcode', '$city', 'gebruiker')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
