<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$id_user_rakhi=$_POST['id_user_rakhi'];
$username_rakhi=$_POST['username_rakhi'];
$password_rakhi=$_POST['password_rakhi'];
$nama_lengkap_rakhi=$_POST['nama_lengkap_rakhi'];
$level_rakhi=$_POST['level_rakhi'];


//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO `tbl_pelanggan_rakhi`
(id_user_rakhi,	username_rakhi,	password_rakhi,	nama_lengkap_rakhi,	level_rakhi	)
VALUES
('$_POST[id_user_rakhi]',
'$_POST[username_rakhi]',
'$_POST[password_rakhi]',
'$_POST[nama_lengkap_rakhi]',
'$_POST[level_rakhi]')
");

if($insert){
//Jika proses delete berhasil
header("location:product.php");
}
?>
