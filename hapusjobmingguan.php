

<?php 

$ambil=$koneksi->query("SELECT * FROM job_mingguan WHERE id_jobmingguan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


$koneksi->query("DELETE FROM job_mingguan WHERE id_jobmingguan='$_GET[id]'");
	echo "<script>alert('Job Mingguan Terhapus dari Aplikasi Jurnal');</script>";
	echo "<script>location='index.php?halaman=jobmingguan';</script>";

 ?>