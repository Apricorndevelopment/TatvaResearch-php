<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "tatva_admin";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
