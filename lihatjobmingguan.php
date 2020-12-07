<h2>Job Mingguan Saya :</h2>
<?php 
$ambil=$koneksi->query("SELECT * FROM job_mingguan WHERE id_jobmingguan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

 ?>

 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"><?php echo $pecah['minggu']; ?></h2>
    <h2 class="display-4"><?php echo $pecah['bulan']; ?></h2>
    <p class="lead"><?php echo $pecah['job1']; ?></p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['job2']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['job3']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['job4']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['job5']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['job6']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['job7']; ?></p>
  </div>
</div>

<a href="index.php?halaman=jobmingguan" class="btn btn-primary">Kembali</a>