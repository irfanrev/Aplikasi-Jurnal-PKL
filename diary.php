
<h2>THIS IS MY DIARY</h2>

<table class="table table-borderless table-dark">
	<thead class="thead-dark">
		<tr>
			<th scope="col">No</th>
			<th scope="col">Date</th>
			<th scope="col">Judul</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM diary"); ?>
		<?php while ($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['date_diary']; ?></td>
			<td><?php echo $pecah['judul']; ?></td>
			<td>
				<a href="index.php?halaman=hapusdiary&id=<?php echo $pecah['id_diary']; ?>" class="btn-danger btn"> Hapus</a>
				<a href="index.php?halaman=lihatdiary&id=<?php echo $pecah['id_diary']; ?>" class="btn btn-success"> Lihat</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahdiary" class="btn btn-primary"> Tambahkan Diary Baru</a>
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