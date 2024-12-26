<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_rakhi=$_POST['nik_ktp_rakhi'];
$nama_rakhi=$_POST['nama_rakhi'];
$no_hp_rakhi=$_POST['no_hp_rakhi'];
$alamat_rakhi=$_POST['alamat_rakhi'];

//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO `tbl_pelanggan_rakhi`
(nik_ktp_rakhi	,
nama_rakhi	,
no_hp_rakhi	,
alamat_rakhi)
VALUES
('$_POST[nik_ktp_rakhi]',
'$_POST[nama_rakhi]',
'$_POST[no_hp_rakhi]',
'$_POST[alamat_rakhi]')
");

if($insert){
//Jika proses delete berhasil
header("location:product.php");
}
?>
