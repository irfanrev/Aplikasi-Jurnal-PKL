<?php 
session_start();
//koneksi ke database

$koneksi = new mysqli("localhost","root","","jurnal_pkl");

if (!isset($_SESSION['admin'])) 
{
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jurnal Prakerin | Irfan Maulana</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Jurnal Prakerin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Software By Irfan Maulana &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/irfan.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                     <li>
                        <a href="index.php?halaman=diary"><i class="fa fa-edit fa-3x"></i> My Diary</a>
                    </li>

                     <li>
                        <a href="index.php?halaman=jobharian"><i class="fa fa-laptop fa-3x"></i> Job Harian</a>
                    </li>
                     <li>
                        <a href="index.php?halaman=jobmingguan"><i class="fa fa-laptop fa-3x"></i> Job Mingguan</a>
                    </li>
                     <li>
                        <a href="index.php?halaman=uang"><i class="fa fa-bar-chart-o fa-3x"></i> Hemat Uang</a>
                    </li>

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                

                <?php 

                    if (isset($_GET['halaman'])) 
                    {
                       if ($_GET['halaman']=='diary') 
                       {
                           include 'diary.php';
                       }
                       elseif ($_GET['halaman']=='jobharian') 
                       {
                            include 'jobharian.php';
                       }
                       elseif ($_GET['halaman']=='uang') 
                       {
                            include 'uang.php';
                       }
                       elseif ($_GET['halaman']=='hapusdiary') 
                       {
                           include 'hapusdiary.php';
                       }
                       elseif ($_GET['halaman']=='tambahdiary') 
                       {
                           include 'tambahdiary.php';
                       }
                       elseif ($_GET['halaman']=='lihatdiary')
                       {
                            include 'lihatdiary.php';
                       }
                       elseif ($_GET['halaman']=='jobmingguan') 
                       {
                           include 'jobmingguan.php';
                       }
                       elseif ($_GET['halaman']=='hapusjobharian') 
                       {
                           include 'hapusjobharian.php';
                       }
                       elseif ($_GET['halaman']=='tambahjobharian') 
                       {
                           include 'tambahjobharian.php';
                       }
                       elseif ($_GET['halaman']=='lihatjobharian') 
                       {
                           include 'lihatjobharian.php';
                       }
                       elseif ($_GET['halaman']=='hapusjobmingguan') 
                       {
                           include 'hapusjobmingguan.php';
                       }
                       elseif ($_GET['halaman']=='lihatjobmingguan') 
                       {
                           include 'lihatjobmingguan.php';
                       }
                       elseif ($_GET['halaman']=='tambahjobmingguan') 
                       {
                           include 'tambahjobmingguan.php';
                       }
                    }

                    else 
                    {
                        include 'home.php';
                    }

                 ?>


            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
