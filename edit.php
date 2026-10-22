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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <div class="mb-4">
            <div class="container mt-5 w-75 mx-auto shadow-lg">

                <div class="container py-5">
                    <div class="text-center mb-4">
                        <h1 class="fw-bold">Edit Data Paket</h1>
                    </div>
                    <table class="table table-striped table-bordered">
                    <thead class="bg-black text-white"></thead>

                    <form action="edit-process.php" method="POST">
                        <input type="hidden" name="id" value="<?= $paket["id"] ?>" />
                        <div class="mb-3">
                            <label class="form-label">Nama Pengirim: </label>
                            <input type="text" id="nama_pengirim" name="nama_pengirim" 
                            value="<?= $paket["nama_pengirim"] ?>" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Penerima: </label>
                            <input type="text" id="nama_penerima" name="nama_penerima" 
                            value="<?= $paket["nama_penerima"] ?>" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Tujuan: </label>
                            <input type="text" id="alamat_tujuan" name="alamat_tujuan" 
                            value="<?= $paket["alamat_tujuan"] ?>" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label for="jenis_paket" class="form-label">Jenis Paket</label>
                            <select id="jenis_paket" name="jenis_paket" class="form-select" 
                            value="<?= $paket["jenis_paket"] ?>" required>
                                <option value="" selected disabled>-- Pilih Jenis Paket --</option>
                                <option>Elektronik</option>
                                <option>Barang</option>
                                <option>Bahan Pangan</option>
                                <option>Tanaman</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Berat: </label>
                            <input type="number" id="berat" name="berat" 
                            value="<?= $paket["berat"] ?>" class="form-control" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status: </label>
                            <input type="text" id="status" name="status" 
                            value="<?= $paket["status"] ?>" class="form-control" required />
                        </div>

                        <button type="submit" class="btn btn-danger w-10">Simpan</button>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>
</html>