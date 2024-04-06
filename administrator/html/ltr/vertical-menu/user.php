<!DOCTYPE html>
<?php
include"../../../../config.php";
$kode=$_GET['kode'];
$sql=mysqli_query($koneksi,"select * from barang where kode= '$kode'");
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
    <!-- END Custom CSS-->
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
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
            <h3 class="content-header-title mb-0 d-inline-block">ADMINISTRATOR</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Administrator
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
    
    
	<div class="col-12 col-md-12">
        <!-- User Profile -->
        <section class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
											
                            <div class="col-md-12 col-12">                               
                                <form class="form-horizontal form-user-profile row mt-2" action="tambahuser.php" method="POST" enctype="multipart/form-data">
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="username" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">USERNAME</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="password" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">PASSWORD</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="nama" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">NAMA ADMINISTRATOR</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="unit" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">UNIT</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="subunit" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">SUB UNIT</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="email" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">Email</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="hp" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">NO HP</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input name="foto" type="file" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">Foto</label>
                                        </fieldset>
                                    </div>

									<div class="col-12">
                                        <fieldset class="form-label-group">
                                            <select name="status" class="form-control">
											<option selected disabled>---Status---</option>
											<option value="1">AKTIF</option>
											<option value="2">NON AKTIF</option>

											</select>
                                        </fieldset>
                                    </div>	
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <select name="kelurahan" class="form-control">
											<option selected disabled>---Kelurahan---</option>
											<option value=1>KESELURUHAN</option>
											<?php
											$opkel=mysqli_query($koneksi,"select * from lokasi");
											while($row=mysqli_fetch_array($opkel)){
											echo"<option value='$row[kode]'>$row[kelurahan]</option>";
											}											
											?>											
											</select>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <select name="level" class="form-control">
											<option selected disabled>---Level---</option>
											<option value=1>Administrator / Kecamatan</option>
											<option value=2>Petugas Kelurahan</option>									
											</select>
                                        </fieldset>
                                    </div>									
									
									<div class="col-12 text-right">
                                        <fieldset class="form-label-group">
                                            <button type="submit" class="btn-gradient-primary my-1">Save</button>
                                        </fieldset>
                                    </div>						
                                   
                                </form>  

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
                                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Nomor HP</th>
									<th>Unit</th>
									<th>Sub Unit</th>									
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no=1;
							$sql=mysqli_query($koneksi,"select * from user");
							while($row=mysqli_fetch_array($sql)){
							?>
								<tr>
									<td><?=$no?></td>
									<td><?=$row['username']?></td>
									<td><?=$row['nama']?></td>
									<td><?=$row['email']?></td>
									<td><?=$row['hp']?></td>
									<td><?=$row['unit']?></td>
									<td><?=$row['subunit']?></td>
									
									<td>			
                                    <a href="edituser.php?username=<?=$row['username']?>" class="btn  fa fa-pen" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                                    <a href="hapususer.php?usernae=<?=$row['username']?>" class="btn  fa fa-trash" data-toggle="tooltip" title="" data-original-title="Delete"></a>
                                    </td>
								</tr>
							<?php
							$no++;
							}
							?>
							</tbody>
						</table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
    
    </div>
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
	<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
	} );
	</script>
  </body>
</html>