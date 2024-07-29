<?php

$servername = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USERNAME') ?: 'hobo';
$password = getenv('DB_PASSWORD') ?: 'hobo';
$db = getenv('DB_DATABASE') ?: 'onlineshop';

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
