<h2>Diary Baru</h2>


<form method="post" enctype="multipart/form-data">

	<div class="form-grup">
		<label>Judul Diary</label>
		<input type="text" class="form-control" name="judul">
	</div>

	<div class="form-grup">
		<label>Date</label>
		<input type="date" class="form-control" name="tanggal">
	</div>

	<div class="form-grup">
		<label>Diary</label>
		<textarea class="form-control" name="diary" rows="20">tulis disini</textarea>
	</div>
	<button class="btn btn-success" name="save"> Simpan</button>
	<a href="index.php?halaman=diary" class="btn btn-warning"> Kembali</a>
</form>


<?php 

if (isset($_POST['save'])) 
{
	$koneksi->query("INSERT INTO diary (diary,date_diary,judul)VALUES('$_POST[diary]','$_POST[tanggal]','$_POST[judul]')");

	echo "<div class='alert alert-info'>Diary Tersimpan</div>";
 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=diary'>";
}

 ?>