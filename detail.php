<?php
require "connection.php";

$id = $_GET["id"];
$query = "SELECT * FROM paket WHERE id = '$id'";
$results = mysqli_query($conn, $query);
$paket = mysqli_fetch_assoc($results);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="mb-4">
            <h1 class="fw-bold">Detail Paket</h1>
        </div>
        <table class="table table-striped table-bordered">
        <thead class="bg-black text-white">
            <tr>
                <th scope="col" style="width: 30%;">Kategori</th>
                <th scope="col">Informasi Paket</th>
            </tr>
        </thead>
        <tbody class="table shadow">
            <tr>
                <th>Nama Pengirim</th>
                <td><?= $paket['nama_pengirim'] ?? '-'; ?></td>
            </tr>
            <tr>
                <th>Nama Penerima</th>
                <td><?= $paket['nama_penerima'] ?? '-'; ?></td>
            </tr>
            <tr>
                <th>Alamat Tujuan</th>
                <td><?= $paket['alamat_tujuan'] ?? '-'; ?></td>
            </tr>
            <tr>
                <th>Jenis Paket</th>
                <td><?= $paket['jenis_paket'] ?? '-'; ?></td>
            </tr>
            <tr>
                <th>Berat (kg)</th>
                <td><?= $paket['berat'] ?? '0'; ?> kg</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <span class="badge bg-secondary">
                        <?= $paket['status'] ?? '-'; ?>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
        crossorigin="anonymous"></script>
</body>

</html>