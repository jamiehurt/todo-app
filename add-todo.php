<?php

include 'config.php';

$todo = $_POST['todo'];

$sql = "INSERT INTO todos (description) VALUES ('$todo')";
$result = mysqli_query($conn, $sql);


?>