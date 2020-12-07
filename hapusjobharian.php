<h2>hapus job</h2>

<?php 

$ambil=$koneksi->query("SELECT * FROM job_harian WHERE id_jobharian='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


$koneksi->query("DELETE FROM job_harian WHERE id_jobharian='$_GET[id]'");
	echo "<script>alert('Job Harian Terhapus dari Aplikasi Jurnal');</script>";
	echo "<script>location='index.php?halaman=jobharian';</script>";

 ?>