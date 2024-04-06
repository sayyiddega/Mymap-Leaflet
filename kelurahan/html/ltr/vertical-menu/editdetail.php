<!DOCTYPE html>
<?php
include"../../../../config.php";
$kode=$_GET['kode'];
$sql=mysqli_query($koneksi,"select * from lokasi where kode= '$kode'");
$row=mysqli_fetch_array($sql);
?>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="CryptoDash admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, CryptoDash Cryptocurrency Dashboard Template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="ThemeSelection">
    <title> Kepadatan penduduk kesamatan siak hulu </title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/toggle/switchery.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/account-profile.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
	<style>
	#map {
			height: 300px
		}
	</style>
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-bg-color">
      <div class="navbar-wrapper">
        <div class="navbar-header d-md-none">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item d-md-none"><a class="navbar-brand" href="index.html"><img class="brand-logo d-none d-md-block" alt="CryptoDash admin logo" src="../../../app-assets/images/logo/logo.png"><img class="brand-logo d-sm-block d-md-none" alt="CryptoDash admin logo sm" src="../../../app-assets/images/logo/logo-sm.png"></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v">   </i></a></li>
          </ul>
        </div>
        <div class="navbar-container">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
            </ul>            
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
      <?php
      include"menu.php";
      ?>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Detail Aset</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Detail Aset
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-4 col-12 d-none d-md-inline-block">
            
          </div>
        </div>
        <div class="content-body">
		<div class="row">
    <div class="col-12">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">                            
                            <div class="col-md-12 col-12">                               
                                <h2><?=$row['penggunaan'];?></h2>  
								<h4><?=$row['jalan'];?>,<?=$row['rtrw'];?>, <?=$row['kelurahan'];?>, <?=$row['kecamatan'];?>, Kota Pekanbaru</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	
	<form class="form-horizontal form-user-profile row mt-2" action="tambahaset.php?kode=<?=$kode?>&op=updetail" method="POST" enctype="multipart/form-data">
    
	<div class="col-12 col-md-6">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
											
                            <div class="col-md-12 col-12"> 
								<h4>Perencanaan</h4>
								<?php
								$sql=mysqli_query($koneksi,"SELECT * FROM perencanaan where lokasi = '$kode';");
								$row=mysqli_fetch_array($sql);
								?>
                                <div class="form-horizontal form-user-profile row mt-2">
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
											<input  name="b1nodoc" value="<?=$row['nodoc'];?>" type="text" class="form-control" id="first-name"  autofocus="">
											<label for="first-name">No Dokumen Perencanaan Pengadaan Tanah</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b1tglba" value="<?=$row['tglba'];?>" type="date" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tgl B.A Kesepakatan Musyawarah</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b1tgldoc" value="<?=$row['tgldoc'];?>" type="date" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tgl Dokumen Perencanaan Pengadaan Tanah</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b1tahun" value="<?=$row['tahun'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tahun Pengadaan</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b1doc" value="<?=$row['doc'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Dokumen Musyawarah</label>
										</fieldset>
                                    </div>
                                </div> 
								</hr>
								
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	<div class="col-12 col-md-6">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
											
                            <div class="col-md-12 col-12"> 
								<h4>Penetapan Lokasi</h4>
								<?php
								$sql=mysqli_query($koneksi,"select * from penlok where lokasi ='$kode'");
								$row=mysqli_fetch_array($sql);
								?>
                                <div class="form-horizontal form-user-profile row mt-2">
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
											<input  name="b2nosk" value="<?=$row['nosk'];?>" type="text" class="form-control" id="first-name"  autofocus="">
											<label for="first-name">No SK Penetapan Lokasi</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b2docsk" value="<?=$row['docsk'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Dokumen SK Penetapan Lokasi</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b2tglsk" value="<?=$row['tglsk'];?>" type="date" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tgl SK Penetapan Lokasi</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b2nokod" value="<?=$row['nokod'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">No Kode Lokasi</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b2peta" value="<?=$row['peta'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Peta Bidang Tanah</label>
										</fieldset>
                                    </div>
                                </div> 
								</hr>
								
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	

	
	<div class="col-12 col-md-12">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
											
                            <div class="col-md-12 col-12"> 
								<h4>Pemilik Awal</h4>
								<?php
								$sql=mysqli_query($koneksi,"select * from pemilik where lokasi ='$kode'");
								$row=mysqli_fetch_array($sql);
								?>
                                <div class="form-horizontal form-user-profile row mt-2">
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
											<input  name="b3nama" value="<?=$row['nama'];?>" type="text" class="form-control" id="first-name"  autofocus="">
											<label for="first-name">Nama Pemilik Awal</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b3luas" value="<?=$row['luas'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Luas Tanah</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b3buktimilik" value="<?=$row['buktimilik'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Bukti Kepemilikan Awal</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b3status" value="<?=$row['status'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Hak Status Tanah</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b3buktiganti" value="<?=$row['buktiganti'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Bukti Kepemilikan Setelah Ganti Rugi</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b3noser" value="<?=$row['noser'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">No Sertifikat</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b3docmilik" value="<?=$row['docmilik'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Dokumen Kepemilikan</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b3tglser" value="<?=$row['tglser'];?>" type="date" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tanggal Sertifikat</label>
										</fieldset>
                                    </div>
                                </div> 
								</hr>
								
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	<div class="col-12 col-md-12">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
											
                            <div class="col-md-12 col-12"> 
								<h4>Penilaian Tanah</h4>
								<?php
								$sql=mysqli_query($koneksi,"select * from nilai where lokasi ='$kode'");
								$row=mysqli_fetch_array($sql);
								?>
                                <div class="form-horizontal form-user-profile row mt-2">
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
											<input  name="b4nokon" value="<?=$row['nokon'];?>" type="text" class="form-control" id="first-name"  autofocus="">
											<label for="first-name">No Kontrak Penilai</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b4hasil" value="<?=$row['hasil'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Hasil Penilaian</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b4tglkon" value="<?=$row['tglkon'];?>" type="date" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tanggal Kontrak Penilai</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b4docnilai" value="<?=$row['docnilai'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Dokumen Kontrak Penilai</label>
										</fieldset>
                                    </div>							
								
                                </div> 
								</hr>
								
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	<div class="col-12 col-md-12">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
											
                            <div class="col-md-12 col-12"> 
								<h4>Ganti Rugi</h4>
								<?php
								$sql=mysqli_query($koneksi,"select * from ganti where lokasi ='$kode'");
								$row=mysqli_fetch_array($sql);
								?>
								<div class="form-horizontal form-user-profile row mt-2">
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
											<input  name="b5gatan" value="<?=$row['gantan'];?>" type="text" class="form-control" id="first-name"  autofocus="">
											<label for="first-name">Nilai Ganti Rugi Tanah</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b5gantana" value="<?=$row['gantana'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Nilai Ganti Rugi Tanaman</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b5ganba" value="<?=$row['ganba'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Nilai Ganti Rugi Bangunan</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b5totgan" value="<?=$row['totgan'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Total Nilai Ganti Rugi</label>
										</fieldset>
                                    </div>	
									<div class="col-12">
                                        <fieldset class="form-label-group">
										<input  name="b5docgan" value="<?=$row['docgan'];?>" type="file" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Dokumentasi Pembayaran Ganti Rugi</label>
										</fieldset>
                                    </div>	
								
                                </div> 
								</hr>
								
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	<div class="col-12 col-md-12">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
											
                            <div class="col-md-12 col-12"> 
								<h4>Pengadaan</h4>
								<?php
								$sql=mysqli_query($koneksi,"select * from pengadaan where lokasi ='$kode'");
								$row=mysqli_fetch_array($sql);
								?>
                                <div class="form-horizontal form-user-profile row mt-2">
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
											<input  name="b6nosp2d" value="<?=$row['nosp2d'];?>" type="text" class="form-control" id="first-name"  autofocus="">
											<label for="first-name">Nomor SP2D</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b6nospm" value="<?=$row['nospm'];?>" type="text" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Nomor SPM</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b6tglsp2d" value="<?=$row['tglsp2d'];?>" type="date" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tgl SP2D</label>
										</fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
										<input  name="b6tglspm" value="<?=$row['tglspm'];?>" type="date" class="form-control" id="first-name"  autofocus="">
										<label for="first-name">Tgl SPM</label>
										</fieldset>
                                    </div>	
									
									
								
                                </div> 
								</hr>
								
                            </div>
							
                        </div>
                    </div>
                </div>
				
            </div>
        </section>
    </div>
	<div class="col-12 text-left">
                                        <fieldset class="form-label-group">
                                            <a href="editdetail.php?kode=<?=$kode?>"><button type="submit" class="btn-gradient-primary my-1">UPDATE DETAIL ASET</button></a>
                                        </fieldset>
    </div>	
	</form>
	
</div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php
    include"footer.php";
    ?>

    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/forms/account-profile.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>