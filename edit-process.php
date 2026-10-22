<?php
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nama_pengirim = $_POST["nama_pengirim"];
    $nama_penerima = $_POST["nama_penerima"];
    $alamat_tujuan = $_POST["alamat_tujuan"];
    $jenis_paket = $_POST["jenis_paket"];
    $berat = $_POST["berat"];
    $status = $_POST["status"];

    $query = "UPDATE paket SET
            nama_pengirim = '$nama_pengirim',
            nama_penerima = '$nama_penerima',
            alamat_tujuan = '$alamat_tujuan',
            jenis_paket = '$jenis_paket',
            berat = '$berat',
            status = '$status'
            WHERE id = '$id'
            ";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit;
}
?>