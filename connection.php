<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "pendataan_paket_db";

$conn = mysqli_connect(
  $hostname,
  $username,
  $password,
  $database
);

if (!$conn) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}
?>