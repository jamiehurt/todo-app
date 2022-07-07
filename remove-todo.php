<?php

include 'config.php';

$id = $_POST['id'];

$sql = "DELETE FROM todos WHERE id=$id";
$result = mysqli_query($conn, $sql);

?>