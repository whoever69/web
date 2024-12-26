<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Transaksi Rental Mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
  <form method="post" action="insert_rental.php">
    <h3>Form Transaksi Rental Mobil</h3>

    <div class="mb-3">
      <label for="no_trx_rakhi" class="form-label">Nomor Transaksi</label>
      <input type="text" class="form-control" id="no_trx_rakhi" name="no_trx_rakhi" required readonly>
    </div>

    <div class="mb-3">
      <label for="nama_rakhi" class="form-label">Nama Pelanggan</label>
      <input type="text" class="form-control" id="nama_rakhi" name="nama_rakhi" required>
    </div>

    <div class="mb-3">
      <label for="nik_ktp_rakhi" class="form-label">NIK KTP</label>
      <input type="text" class="form-control" id="nik_ktp_rakhi" name="nik_ktp_rakhi" required>
    </div>

    <div class="mb-3">
      <label for="no_plat_rakhi" class="form-label">Pilih Mobil</label>
      <select class="form-control" id="no_plat_rakhi" name="no_plat_rakhi" required>
        <option value="D 5678 ABC">Toyota Avanza - Rp 500.000/hari</option>
        <option value="B 1234 XYZ">Honda Brio - Rp 400.000/hari</option>
        <option value="B 1234 ABC">Mitsubishi Pajero - Rp 800.000/hari</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="tgl_rental_rakhi" class="form-label">Tanggal Ambil</label>
      <input type="date" class="form-control" id="tgl_rental_rakhi" name="tgl_rental_rakhi" required>
    </div>

    <div class="mb-3">
      <label for="jam_rental_rakhi" class="form-label">Jam Ambil</label>
      <input type="time" class="form-control" id="jam_rental_rakhi" name="jam_rental_rakhi" required>
    </div>

    <div class="mb-3">
      <label for="lama_rakhi" class="form-label">Lama Rental (Hari)</label>
      <input type="number" class="form-control" id="lama_rakhi" name="lama_rakhi" required min="1">
    </div>

    <div class="mb-3">
      <label for="total-bayar" class="form-label">Total Bayar</label>
      <input type="text" class="form-control" id="total-bayar" disabled>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
  </form>
</div>

<script>
  // Fungsi untuk membuat nomor transaksi otomatis
  function generateNoTrx() {
    const today = new Date();
    const dateString = today.getFullYear() +
                       ('0' + (today.getMonth() + 1)).slice(-2) +
                       ('0' + today.getDate()).slice(-2);
    const uniqueId = Math.floor(Math.random() * 1000);
    return 'TRX-' + dateString + '-' + String(uniqueId).padStart(3, '0');
  }

  // Mengisi Nomor Transaksi otomatis
  document.getElementById('no_trx_rakhi').value = generateNoTrx();

  // Menghitung Total Bayar
  document.getElementById('lama_rakhi').addEventListener('input', function () {
    const lamaRental = parseInt(this.value);
    const selectedMobil = document.getElementById('no_plat_rakhi').value;
    let hargaPerHari = 0;

    if (selectedMobil === 'D 5678 ABC') hargaPerHari = 500000;
    if (selectedMobil === 'B 1234 XYZ') hargaPerHari = 400000;
    if (selectedMobil === 'B 1234 ABC') hargaPerHari = 800000;

    const totalBayar = lamaRental * hargaPerHari;
    document.getElementById('total-bayar').value = totalBayar.toLocaleString();
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


