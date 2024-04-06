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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h3 class="content-header-title mb-0 d-inline-block">Detail Lokasi</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Detail Lokasi
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
								<h4><?=$row['kelurahan'];?></h4>
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
								<h4>Detail Lokasi</h4>
                                <form class="form-horizontal form-user-profile row mt-2" action="#" method="POST" enctype="multipart/form-data">
                                    
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="kelurahan"  value="<?=$row['kelurahan'];?>" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">Kelurahan</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="penduduk" value="<?=$row['penduduk'];?>" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">jumlah penduduk</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="laki" type="text" value="<?=$row['laki'];?>" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">jumlah laki-laki</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="perempuan" type="text" value="<?=$row['perempuan'];?>" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">jumlah perempuan</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="luas" type="text" class="form-control" value="<?=$row['luas'];?>" id="first-name" required="" autofocus="">
                                            <label for="first-name">luas wilayah</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="kepkel" type="text" class="form-control" value="<?=$row['kepkel'];?>" id="first-name" required="" autofocus="">
                                            <label for="first-name">kepala keluarga</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="peribadatan" type="text" class="form-control" value="<?=$row['peribadatan'];?>" id="first-name" required="" autofocus="">
                                            <label for="first-name">sarana peribadatan</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="kesehatan" type="text" value="<?=$row['kesehatan'];?>" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">sarana kesehatan</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input disabled name="penduduk" type="text" class="form-control" value="<?=$row['pendidikan'];?>" id="first-name" required="" autofocus="">
                                            <label for="first-name">sarana pendidikan</label>
                                        </fieldset>
                                    </div>
									<div class="col-6">
                                        <fieldset class="form-label-group">
                                            <input  disabled name="lat"  value="<?=$row['lat'];?>" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">Latitude</label>
                                        </fieldset>
                                    </div>
									<div class="col-12">
                                        <fieldset class="form-label-group">
                                            <input disabled name="lon" type="text"  value="<?=$row['lon'];?>" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">Longitude</label>
                                        </fieldset>
                                    </div>									
									<div class="col-12">
                                        <fieldset class="form-label-group">
                                            <input disabled name="qr"  value="<?=$row['icon'];?>" type="text" class="form-control" id="first-name" required="" autofocus="">
                                            <label for="first-name">Icon</label>
                                        </fieldset>
                                    </div>
									
									<div class="col-12 text-right">
                                        <fieldset class="form-label-group">
                                            <a href="editpeta.php?kode=<?=$kode?>" type="submit" class="btn-gradient-primary my-1">Update Data Aset</a>
                                        </fieldset>
                                    </div>	
							
                                   
                                </form> 
								</hr>
								
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title text-center">Peta Lokasi</h6>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <div id="map"></div>
					<script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
					<script>
					var m = L.map('map').setView([<?=$row['lat']?>, <?=$row['lon']?>], 18);
					var watercolor = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
					subdomains:['mt0','mt1','mt2','mt3']}).addTo(m);
					
					var firefoxIcon = L.icon({
						iconUrl: 'http://gisdinaspertanahan.pekanbaru.go.id/assets/images/Perkantoran.png',
							  iconRetinaUrl: 'http://gisdinaspertanahan.pekanbaru.go.id/assets/images/Perkantoran.png',
							  iconSize: [46, 42],
							  iconAnchor: [19, 25],
							  popupAnchor: [6, -16]
						});

					var marker = L.marker([<?=$row['lat']?>, <?=$row['lon']?>], {icon: firefoxIcon}).bindPopup('<?=$row[penggunaan]?>').addTo(m);
					label=String('Kantor Lurah Kota Baru');
					marker.bindTooltip(label, {permanent: true, opacity: 1, direction: 'right', offset: [7, -5]}).openTooltip();

					
					var shpfile1 = new L.Shapefile('pekanbaru_poly.zip', {
						onEachFeature: function(feature, layer) {
							if (feature.properties) {
								layer.bindPopup(Object.keys(feature.properties).map(function(k) {
									return k + ": " + feature.properties[k];
								}).join("<br />"), {
									maxHeight: 200
								});
							}
						}
					});
					shpfile1.addTo(m);
					shpfile1.once("data:loaded", function() {
						console.log("finished loaded shapefile");
					});
				</script>
                </div>
            </div>
        </div>
        <div class="card">
        
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
  </body>
</html>