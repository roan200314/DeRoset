<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'de roset';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($mysqli->connect_errno) {
    printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
}


