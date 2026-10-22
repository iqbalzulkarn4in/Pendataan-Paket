<?php
session_start();
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama_pengirim = $_POST["nama_pengirim"];
    $nama_penerima = $_POST["nama_penerima"];
    $alamat_tujuan = $_POST["alamat_tujuan"];
    $jenis_paket = $_POST["jenis_paket"];
    $berat = $_POST["berat"] ?? [];
    $status = $_POST["status"];

    $errors = [];

    if ($nama_pengirim === "") {
        $errors["nama_pengirim"] = "Judul wajib diisi.";
    } elseif (strlen($nama_pengirim) > 100) {
        $errors["nama_pengirim"] = "Judul maksimal 100 karakter.";
    }

    if ($nama_penerima === "") {
        $errors["nama_penerima"] = "Isi catatan wajib diisi";
    } elseif (strlen($nama_penerima) > 100) {
        $errors["nama_penerima"] = "Judul maksimal 100 karakter.";
    }

    if ($alamat_tujuan === "") {
        $errors["alamat_tujuan"] = "Isi catatan wajib diisi";
    } elseif (strlen($alamat_tujuan) < 5) {
        $errors["alamat_tujuan"] = "Isi catatan minimal 5 karakter.";
    }  

    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;

        header("Location: create.php");
        exit;
    }

    $id = "paket-" . random_int(10000000, 99999999);

    $query = "INSERT INTO paket
            (id, nama_pengirim, nama_penerima, alamat_tujuan, jenis_paket, berat, status)
            VALUES
            ('$id', '$nama_pengirim', '$nama_penerima', '$alamat_tujuan', '$jenis_paket', '$berat', '$status')";

    mysqli_query($conn, $query);

    header("Location: index.php");

    exit;
}
?>