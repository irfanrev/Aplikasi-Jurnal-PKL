<h2>Tambah Job Harian Baru</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-grup">
		<label>Hari</label>
		<input type="text" class="form-control" name="hari">
	</div>
	<div class="form-grup">
		<label>Date</label>
		<input type="date" class="form-control" name="waktu">
	</div>
	<div class="form-grup">
		<label>Job Harian 1</label>
		<textarea class="form-control" name="jobharian1" rows="2"></textarea>
	</div>
	<div class="form-grup">
		<label>Job Harian 2</label>
		<textarea class="form-control" name="jobharian2" rows="2"></textarea>
	</div>
	<div class="form-grup">
		<label>Job Harian 3</label>
		<textarea class="form-control" name="jobharian3" rows="2"></textarea>
	</div>
	<div class="form-grup">
		<label>Job Harian 4</label>
		<textarea class="form-control" name="jobharian4" rows="2"></textarea>
	</div>
	<div class="form-grup">
		<label>Job Harian 5</label>
		<textarea class="form-control" name="jobharian5" rows="2"></textarea>
	</div>
	<button class="btn btn-success" name="save"> Simpan</button>
	<a href="index.php?halaman=jobharian" class="btn btn-warning"> Kembali</a>
</form>



<?php 

if (isset($_POST['save'])) 
{
	$koneksi->query("INSERT INTO job_harian (hari,date_jobharian,jobharian1,jobharian2,jobharian3,jobharian4,jobharian5)VALUES('$_POST[hari]','$_POST[waktu]','$_POST[jobharian1]','$_POST[jobharian2]','$_POST[jobharian3]','$_POST[jobharian4]','$_POST[jobharian5]')");
	echo "<div class='alert alert-info'>Job Tersimpan</div>";
 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=jobharian'>";
}


 ?>