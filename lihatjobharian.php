<h2>job harian saya :</h2>

<?php 
$ambil=$koneksi->query("SELECT * FROM job_harian WHERE id_jobharian='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

 ?>

 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"><?php echo $pecah['hari']; ?></h2>
    <h2 class="display-4"><?php echo $pecah['date_jobharian']; ?></h2>
    <p class="lead"><?php echo $pecah['jobharian1']; ?></p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['jobharian2']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['jobharian3']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['jobharian4']; ?></p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead"><?php echo $pecah['jobharian5']; ?></p>
  </div>
</div>

<a href="index.php?halaman=jobharian" class="btn btn-primary">Kembali</a>