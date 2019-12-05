<?php include("config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flagger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Ano_hpate.css -->
    <link rel="stylesheet" href="css/ano_hpate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

            <h1 id="fh5co-logo"><a href="dashboard_admin.php">Flagger</a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li class="fh5co-active"><a href="view.php">Saved</a></li>
                    <li><a href="add.php">Add</a></li>
                    <li><a href="grafik.php">Grafik</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>

            <div class="fh5co-footer">
                <p><small>&copy; 2019. All Rights Reserved.</span> <span>Made with love <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span>

                        <ul>
                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                        </ul>
            </div>

        </aside>

        <div id="fh5co-main">
            <div class="fh5co-narrow-content ano_hpate-box" data-ano_hpate-effect="fadeInLeft">

                <div class="content">
                  <?php 
          session_start();

          //cek apakah yang mengakses halaman ini sudah login
          if ($_SESSION['level']=="") {
            header("location:index.php?pesan=gagal");
          }

          ?>
          <div class="wrapper">
    <div class="sidebar">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title">Daftar Laporan</h2>
                    <a href="form_keuangan.php">[+] Tambah Data</a>
                  </div>
                  <div class="col-sm-6">
                  </div>
                </div>
              </div>
              <div class="card-body">
             <table class="table table-bordered table-dark" style="width: 90%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nomor HP</th>
                      <th>Bulan</th>
                      <th>Pemasukan</th>
                      <th>Tagihan</th>
                      <th>Saldo</th>
                      <th>Keterangan</th>
                      <th>Lain-lain</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                <tbody>
                  
                  <?php
                  $sql = "SELECT * FROM wifi";
                  $query = mysqli_query($db, $sql);
                  $id = 0;

                  while ($wifi = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    $id++;

                    echo "<td>".$wifi['id']."</td>";
                    echo "<td>".$wifi['nama']."</td>";
                    echo "<td>".$wifi['no_hp']."</td>";
                    echo "<td>".$wifi['bulan']."</td>";
                    echo "<td>".$wifi['pemasukan']."</td>";
                    echo "<td>".$wifi['tagihan']."</td>";
                    echo "<td>".$wifi['saldo']."</td>";
                    echo "<td>".$wifi['keterangan']."</td>";
                    echo "<td>".$wifi['lain_lain']."</td>";

                    echo "<td>";
                    echo "<a href='form_edit.php?id=".$wifi['id']."'> Edit</a> | ";
                    echo "<a href='hapus.php?id=".$wifi['id']."'> Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                  }
                  ?>
                </tbody>
                </table>
                <br>
                <p>Total List : <?php echo mysqli_num_rows($query) ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>


    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>


    <!-- MAIN JS -->
    <script src="js/main.js"></script>

</body>

</html>