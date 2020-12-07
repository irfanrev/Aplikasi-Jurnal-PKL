<h2>Diary saya</h2>

<?php 
$ambil=$koneksi->query("SELECT * FROM diary WHERE id_diary='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
 ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"><?php echo $pecah['judul']; ?></h2>
    <p class="lead"><?php echo $pecah['diary']; ?></p>
  </div>
</div>

<a href="index.php?halaman=diary" class="btn btn-primary">Kembali</a>