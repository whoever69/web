<!DOCTYPE html>
<html>
<head>
<title>Detail Transaksi Rental Mobil</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<form method="POST" action="rental.php" >

  <h2>Detail Transaksi</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No. Transaksi</th>
        <th>NIK KTP</th>
        <th>No. Plat</th>
        <th>Tanggal Rental</th>
        <th>Jam Rental</th>
        <th>Lama Rental</th>
        <th>Harga/Hari</th>
        <th>Total Bayar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Koneksi ke database (sesuaikan dengan konfigurasi Anda)
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "rentalmobil_rakhi";

      $conn = new mysqli($servername, $username, $password, $dbname);

      // Periksa koneksi
      if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
      }

      // Ambil ID transaksi dari parameter URL

      // Query untuk mengambil data berdasarkan ID transaksi
      $sql = "SELECT no_trx_rakhi, nik_ktp_rakhi, no_plat_rakhi, tgl_rental_rakhi, jam_rental_rakhi, lama_rakhi, harga_rakhi, total_bayar_rakhi FROM tbl_rental_rakhi ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["no_trx_rakhi"] . "</td>";
              echo "<td>" . $row["nik_ktp_rakhi"] . "</td>";
              echo "<td>" . $row["no_plat_rakhi"] . "</td>";
              echo "<td>" . $row["tgl_rental_rakhi"] . "</td>";
              echo "<td>" . $row["jam_rental_rakhi"] . "</td>";
              echo "<td>" . $row["lama_rakhi"] . " hari</td>";
              echo "<td>Rp " . number_format($row["harga_rakhi"], 0, ',', '.') . "</td>";
              echo "<td>Rp " . number_format($row["total_bayar_rakhi"], 0, ',', '.') . "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='8'>Data transaksi tidak ditemukan.</td></tr>";
      }

      $conn->close();
      ?>
    </tbody>
  </table>
  <button type="submit" class="btn btn-primary">kembali</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>