<?php
require "connection.php";

$query = "SELECT * FROM paket ORDER BY nama_penerima DESC";
$results = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Paket</title>

    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
     <nav class="navbar navbar-expand-lg bg-info fw-bold">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pendataan Paket Pengiriman</a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Table -->
    <div class="container mt-5 w-75 mx-auto">
        <div class="mt-4 px-3 rounded shadow-lg">
            <h1 class="fw-bold">Data Paket</h1>

            <p class="text-secondary">Daftar paket yang telah tersimpan.</p>

            <a href="create.php" class="btn btn-primary d-inline-b my-1">+ Tambah Paket</a>
        </div>
    <table class="table table-striped table-bordered text-center mt-3">
    <thead class="bg-black">
        <tr>
            <th scope="col">No</th></th>
            <th scope="col">Nama Pengirim</th>
            <th scope="col">Nama Penerima</th>
            <th scope="col">Alamat Tujuan</th>
            <th scope="col">Jenis Paket</th>
            <th scope="col">Berat (kg)</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($results) > 0) : ?>

            <?php 
            $no = 1; 
            while ($paket = mysqli_fetch_assoc($results)) : 
            ?>
            <tr>
                <th><?= $no++ ?></th>
                <th><?= $paket['nama_pengirim']; ?></th>
                <th><?= $paket['nama_penerima']; ?></th>
                <th><?= $paket['alamat_tujuan']; ?></th>
                <th><?= $paket['jenis_paket']; ?></th>
                <th><?= $paket['berat']; ?></th>
                <th><?= $paket['status']; ?></th>

                <td>
                    <a href="detail.php?id=<?= $paket["id"] ?>" class="btn btn=md btn-info">Detail</a>
                    <a href="edit.php?id=<?= $paket["id"] ?>" class="btn btn=md btn-warning">Edit</a>
                    <a href="delete-process.php?id=<?= $paket["id"] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
            <?php else : ?>

            <tr>
                <td colspan="7" class="text-center">Belum ada data paket yang tersimpan.</td>
            </tr>
        <?php endif; ?>
    </tbody>
    </table>
    </div>
    <!-- End Table -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>
</html>