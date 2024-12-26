<?php
// Konfigurasi koneksi database
$host = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "rentalmobil_rakhi"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


// Ambil data dari formulir
$no_trx_rakhi = $_POST['no_trx_rakhi'];
$nama_rakhi = $_POST['nama_rakhi'];
$nik_ktp_rakhi = $_POST['nik_ktp_rakhi'];
$tgl_rental_rakhi = $_POST['tgl_rental_rakhi'];
$jam_rental_rakhi = $_POST['jam_rental_rakhi'];
$lama_rakhi = $_POST['lama_rakhi'];
$no_plat_rakhi = $_POST['no_plat_rakhi'];

// Hitung total bayar berdasarkan input
$harga_per_hari = 0;
if ($no_plat_rakhi == 'D 5678 ABC') {
    $harga_per_hari = 500000;
} elseif ($no_plat_rakhi == 'B 1234 XYZ') {
    $harga_per_hari = 400000;
} elseif ($no_plat_rakhi == 'B 1234 ABC') {
    $harga_per_hari = 800000;
} 

$total_bayar_rakhi = $harga_per_hari * $lama_rakhi;

// Query untuk memasukkan data ke tabel
$sql = "INSERT INTO tbl_rental_rakhi (no_trx_rakhi, nik_ktp_rakhi, no_plat_rakhi, tgl_rental_rakhi, jam_rental_rakhi, lama_rakhi, harga_rakhi, total_bayar_rakhi)
        VALUES ('$no_trx_rakhi', '$nik_ktp_rakhi', '$no_plat_rakhi', '$tgl_rental_rakhi', '$jam_rental_rakhi', '$lama_rakhi', '$harga_per_hari', '$total_bayar_rakhi')";

// ... (bagian kode sebelumnya)

if ($conn->query($sql) === TRUE) {
    echo "Transaksi berhasil disimpan.";

    // Mengarahkan ke halaman tampil_rental.php
    header("Location: tampil_product.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
