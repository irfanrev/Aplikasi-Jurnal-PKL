<h2> Job Harian Prakerin Istana Kepresidenan Cipanas</h2>

<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Hari</th>
			<th>Date</th>
			<th>Aksi</th>
		</tr>
		
	</thead>
	<tbody>

		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM job_harian"); ?>
		<?php while ($pecah=$ambil->fetch_assoc()) { ?>

		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['hari']; ?></td>
			<td><?php echo $pecah['date_jobharian']; ?></td>
			<td>
				<a href="index.php?halaman=hapusjobharian&id=<?php echo $pecah['id_jobharian']; ?>" class="btn-danger btn"> Hapus</a>
			</td>
			<td>
				<a href="index.php?halaman=lihatjobharian&id=<?php echo $pecah['id_jobharian']; ?>" class="btn btn-success"> Lihat</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahjobharian" class="btn btn-primary"> Tambahkan Job Baru</a>
<a href="index.php" class="btn btn-warning"> Halaman Utama</a>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>