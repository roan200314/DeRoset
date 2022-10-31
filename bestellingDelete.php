<?php


require 'database.php';

$id = $_GET["id"];

$sql = "DELETE FROM orders WHERE id = $id";

if (mysqli_query($mysqli, $sql)) {
    header("location: bestellingen.php");
}
