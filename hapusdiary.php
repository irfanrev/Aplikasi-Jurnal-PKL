<?php 

$ambil=$koneksi->query("SELECT * FROM diary WHERE id_diary='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM diary WHERE id_diary='$_GET[id]'");

	echo "<script>alert('Diary terhapus dari Aplikasi Jurnal');</script>";
	echo "<script>location='index.php?halaman=diary';</script>";


 ?>