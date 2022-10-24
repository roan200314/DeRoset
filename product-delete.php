<?php


require 'database.php';

$id = $_GET["id"];

$sql = "DELETE FROM products WHERE id = $id";

if (mysqli_query($mysqli, $sql)) {
    header("location: producten.php");
}
