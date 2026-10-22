<?php
require "connection.php";

$id = $_GET['id'];

$query = "DELETE FROM paket WHERE id = '$id'";
mysqli_query($conn, $query);

header("Location: index.php");
exit();
?>