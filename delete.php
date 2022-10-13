<?php
require "database.php";


$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";

if ($mysqli->query($sql)) {
    header("location: index.php");
}
session_start();
session_destroy();
?>