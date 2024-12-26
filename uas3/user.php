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

    <form method="POST" action="insert_user.php" >

<div class="mb-3 mt-3">
<label for="id_user_rakhi" class="form-label">id_user_rakhi :</label>
<input type="text" name="id_user_rakhi" class="form-control" id="id_user_rakhi"
placeholder="Masukan nik ktp" required>
</div>
<div class="mb-3 mt-3">
<label for="username_rakhi" class="form-label">username  :</label>
<input type="text" name="username_rakhi" class="form-control"
id="username_rakhi" placeholder="Masukan username " required>
</div>


<div class="mb-3">
<label for="password_rakhi" class="form-label">password:</label>
<input type="password" name="password_rakhi" class="form-control"
id="password_rakhi" placeholder="Masukan password" required>
</div>

<div class="mb-3">
<label for="nama_lengkap_rakhi	" class="form-label">nama lengkap:</label>
<input type="text" name="nama_lengkap_rakhi	" class="form-control"
id="nama_lengkap_rakhi	" placeholder="Masukan nama lengkap " required>
</div>

<div class="mb-3 mt-3">
<label for="level_rakhi" class="form-label">level :</label>
<select for="level_rakhi" name="level_rakhi" class="form-control"
id="level_rakhi" required>
<option value=""> -- Pilih Jenis Kelamin --</option>
<option value="admin"> admin</op tion>
<option value="user"> user</option>
</select>

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
