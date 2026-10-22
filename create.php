<?php
session_start();
$errors = $_SESSION["errors"] ?? [];
unset($_SESSION["errors"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Paket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5 w-75 mx-auto shadow-lg">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Tambah Pendataan Paket</h1>

            <p class="text-secondary">Tambahkan pendataan paket terbaru ke dalam sistem.</p>
        </div>

        <div class="card p-4 mb-5 shadow-sm">
            <div class="table-body">
                <form action="process-create.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Nama Pengirim: </label>
                        <input type="text" id="nama_pengirim" name="nama_pengirim" class="form-control 
                        <?= isset($errors['nama_pengirim']) ? 'is-invalid' : '' ?>" />
                        <?php if (isset($errors["nama-pengirim"])) : ?>
                            <div class="invalid-feedback">
                                <?= $errors["nama-pengirim"] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Penerima: </label>
                        <input type="text" id="nama_penerima" name="nama_penerima" class="form-control 
                        <?= isset($errors['nama_penerima']) ? 'is-invalid' : '' ?>"/>
                        <?php if (isset($errors["nama_penerima"])) : ?>
                            <div class="invalid-feedback">
                                <?= $errors["nama_penerima"] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat Tujuan: </label>
                        <input type="text" id="alamat_tujuan" name="alamat_tujuan" class="form-control 
                        <?= isset($errors['alamat_tujuan']) ? 'is-invalid' : '' ?>" />
                        <?php if (isset($errors["alamat_tujuan"])) : ?>
                            <div class="invalid-feedback">
                                <?= $errors["alamat_tujuan"] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="jenis_paket" class="form-label">Jenis Paket</label>
                        <select id="jenis_paket" name="jenis_paket" class="form-select" required>
                            <option value="" selected disabled>-- Pilih Jenis Paket --</option>
                            <option>Elektronik</option>
                            <option>Barang</option>
                            <option>Bahan Pangan</option>
                            <option>Tanaman</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Berat: </label>
                        <input type="number" id="berat" name="berat" class="form-control" required />
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Status: </label>
                        <input type="text" id="status" name="status" class="form-control" required />
                    </div>

                    <button type="submit" class="btn btn-danger w-10">Simpan</button>
                    <a href="index.php" class="btn btn-secondary w-10">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>
</html>