<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi Rental</title>
    <!-- Tambahkan CSS Bootstrap atau stylesheet sesuai kebutuhan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h3>Form signup Rental</h3>

    <form method="POST" action="insert_pelanggan.php" >

<div class="mb-3 mt-3">
<label for="nik_ktp_rakhi" class="form-label">nik ktp :</label>
<input type="text" name="nik_ktp_rakhi" class="form-control" id="nik_ktp_rakhi"
placeholder="Masukan nik ktp" required>
</div>
<div class="mb-3 mt-3">
<label for="nama_rakhi" class="form-label">Nama Lengkap :</label>
<input type="text" name="nama_rakhi" class="form-control"
id="nama_rakhi" placeholder="Masukan Nama lengkap" required>
</div>


<div class="mb-3">
<label for="no_hp_rakhi" class="form-label">no hp:</label>
<input type="text" name="no_hp_rakhi" class="form-control"
id="no_hp_rakhi" placeholder="Masukan no hp" required>
</div>

<div class="mb-3">
<label for="alamat_rakhi" class="form-label">alamat:</label>
<input type="text" name="alamat_rakhi" class="form-control"
id="alamat_rakhi" placeholder="Masukan alamat " required>
</div>

<div class="mb-3">
<a href="index.php" class="btn btn-warning">Kembali</a> <button
type="submit" class="btn btn-primary">Simpan</button>

</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<!-- Tambahkan script untuk menghitung total bayar -->
<script>
    document.getElementById('lama-rental').addEventListener('input', function() {
        var lamaRental = parseInt(this.value);
        var hargaPerHari = 400000;  // Harga per hari yang tetap
        var totalBayar = lamaRental * hargaPerHari;
        document.getElementById('total-bayar').value = totalBayar.toLocaleString();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
