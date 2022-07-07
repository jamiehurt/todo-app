<?php

$server = "db";
$username = "root";
$password = "password";
$database = "todos";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed')</script>");
}

?>