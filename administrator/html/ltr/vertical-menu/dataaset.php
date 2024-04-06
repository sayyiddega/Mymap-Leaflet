<!DOCTYPE html>
<?php
include"../../../../config.php";
$kode=$_GET['kode'];

?>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="CryptoDash admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, CryptoDash Cryptocurrency Dashboard Template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="ThemeSelection">
    <title>Kepadatan penduduk kesamatan siak hulu </title>
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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
            <h3 class="content-header-title mb-0 d-inline-block">Lokasi</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">DATA Lokasi
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
                                 
								
							<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Desa</th>
									<th>Jumlah Penduduk</th>
									<th>Laki-Laki</th>
									<th>Perempuan</th>
									<th>Luas Wilayah</th>
									<th>Kepala Keluarga</th>
                  <th>Sarana Peribadatan</th>
									<th>Sarana Kesehatan</th>
                  <th>Sarana Pendidikan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no=1;
							$sql=mysqli_query($koneksi,"select * from lokasi");
							while($row=mysqli_fetch_array($sql)){
							?>
								<tr>
									<td><?=$no?></td>
									<td><?=$row['kelurahan']?></td>
									<td><?=$row['penduduk']?></td>
									<td><?=$row['laki']?></td>
                  <td><?=$row['perempuan']?></td>
									<td><?=$row['luas']?></td>
									<td><?=$row['kepkel']?></td>
									<td><?=$row['peribadatan']?></td>
									<td><?=$row['kesehatan']?></td>
                  <td><?=$row['pendidikan']?></td>
									<td>
									
                                    <a href="cekdetail.php?kode=<?=$row['kode']?>" class="btn fa fa-eye" data-toggle="tooltip" title="" data-original-title="Detail"></a>                                    
                                    <a href="editpeta.php?kode=<?=$row['kode']?>" class="btn  fa fa-pen" data-toggle="tooltip" title="" data-original-title="Edit"></a>
                                    <a href="" class="btn  fa fa-trash" data-toggle="tooltip" title="" data-original-title="Delete"></a>
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
                  <th>Nama Desa</th>
                  <th>Jumlah Penduduk</th>
                  <th>Laki-Laki</th>
                  <th>Perempuan</th>
                  <th>Luas Wilayah</th>
                  <th>Kepala Keluarga</th>                  
                </tr>
                <tr>
                  <th>#</th>
                  <th>BOBOT</th>
                  <th>3</th>
                  <th>3</th>
                  <th>3</th>
                  <th>4</th>
                  <th>2</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $no=1;
              $sql=mysqli_query($koneksi,"select * from lokasi");
              while($row=mysqli_fetch_array($sql)){
              ?>
                <tr>
                  <td><?=$no?></td>
                  <td><?=$row['kelurahan']?></td>
                  <td>
                    <?php
                    if($row['penduduk'] < 1500){
                      $bpenduduk=1;
                      echo "$bpenduduk";
                    }else if($row['penduduk'] >= 1500 && $row['penduduk'] < 3500 ){
                      $bpenduduk=2;
                      echo "$bpenduduk";
                    }else if($row['penduduk'] >= 3500 && $row['penduduk'] < 5500 ){
                      $bpenduduk=3;
                      echo "$bpenduduk";
                    }else if($row['penduduk'] >= 5500){
                      $bpenduduk=4;
                      echo "$bpenduduk";
                    }

                    if($no==1){
                      $maxpen=$bpenduduk;
                      $minpen=$bpenduduk;
                    }else{
                      if($maxpen < $bpenduduk){
                        $maxpen=$bpenduduk;                        
                      }else{
                        $maxpen=$maxpen;                        
                      }

                      if($minpen < $bpenduduk){                        
                        $minpen=$minpen;
                      }else{                       
                        $minpen=$bpenduduk;
                      }
                    }
                    ?>
                  
                    </td>
                  <td>
                  <?php
                    if($row['laki'] < 1000){
                      $blaki=1;
                      echo "$blaki";
                    }else if($row['laki'] >= 1000 && $row['laki'] < 2000 ){
                      $blaki=2;
                      echo "$blaki";
                    }else if($row['laki'] >= 2000 && $row['laki'] < 3000 ){
                      $blaki=3;
                      echo "$blaki";
                    }else if($row['laki'] >= 3000){
                      $blaki=4;
                      echo "$blaki";
                    }
                    
                    if($no==1){
                      $maxlak=$blaki;
                      $minlak=$blaki;
                    }else{
                      if($maxlak < $blaki){
                        $maxlak=$blaki;                        
                      }else{
                        $maxlak=$maxlak;                        
                      }

                      if($minlak < $blaki){                        
                        $minlak=$minlak;
                      }else{                       
                        $minlak=$blaki;
                      }
                    }


                    ?>
                      
                  </td>
                  <td>
                    <?php
                    if($row['perempuan'] < 1000){
                      $bperempuan=1;
                      echo "$bperempuan";
                    }else if($row['perempuan'] >= 1000 && $row['perempuan'] < 2000 ){
                      $bperempuan=2;
                      echo "$bperempuan";
                    }else if($row['perempuan'] >= 2000 && $row['perempuan'] < 3000 ){
                      $bperempuan=3;
                      echo "$bperempuan";
                    }else if($row['perempuan'] >= 3000){
                      $bperempuan=4;
                      echo "$bperempuan";
                    }

                    if($no==1){
                      $maxper=$bperempuan;
                      $minper=$bperempuan;
                    }else{
                      if($maxper < $bperempuan){
                        $maxper=$bperempuan;                        
                      }else{
                        $maxper=$maxper;                        
                      }

                      if($minlak < $bperempuan){                        
                        $minper=$minper;
                      }else{                       
                        $minper=$bperempuan;
                      }
                    }
                    ?>

                  </td>
                  <td>
                  <?php
                    if($row['luas'] < 5000){
                      $bluas=1;
                      echo "$bluas";
                    }else if($row['luas'] >= 5000 && $row['luas'] < 10000 ){
                      $bluas=2;
                      echo "$bluas";
                    }else if($row['luas'] >= 10000 && $row['luas'] < 15000 ){
                      $bluas=3;
                      echo "$bluas";
                    }else if($row['luas'] >= 15000){
                      $bluas=4;
                      echo "$bluas";
                    }
                    if($no==1){
                      $maxlu=$bluas;
                      $minlu=$bluas;
                    }else{
                      if($maxlu < $bluas){
                        $maxlu=$bluas;                        
                      }else{
                        $maxlu=$maxlu;                        
                      }

                      if($minlu < $bluas){                        
                        $minlu=$minlu;
                      }else{                       
                        $minlu=$bluas;
                      }
                    }
                    ?>
                      
                  </td>
                  <td>
                    <?php
                    if($row['kepkel'] < 500){
                      $bkepkel=1;
                      echo "$bkepkel";
                    }else if($row['kepkel'] >= 500 && $row['kepkel'] < 1000 ){
                      $bkepkel=2;
                      echo "$bkepkel";
                    }else if($row['kepkel'] >= 1000 && $row['kepkel'] < 1500 ){
                      $bkepkel=3;
                      echo "$bkepkel";
                    }else if($row['kepkel'] >= 1500){
                      $bkepkel=4;
                      echo "$bkepkel";
                    }
                    if($no==1){
                      $maxkel=$bkepkel;
                      $minkel=$bkepkel;
                    }else{
                      if($maxkel < $bkepkel){
                        $maxkel=$bkepkel;                        
                      }else{
                        $maxkel=$maxkel;                        
                      }

                      if($minkel < $bkepkel){                        
                        $minkel=$minkel;
                      }else{                       
                        $minkel=$bkepkel;
                      }
                    }
                    ?>

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
                  <th>Nama Desa</th>
                  <th>Jumlah Penduduk</th>
                  <th>Laki-Laki</th>
                  <th>Perempuan</th>
                  <th>Luas Wilayah</th>
                  <th>Kepala Keluarga</th>                  
                </tr>
                <tr>
                  <th>#</th>
                  <th>maksimum (f+)</th>
                  <th><?=$maxpen?></th>
                  <th><?=$maxlak?></th>
                  <th><?=$maxper?></th>
                  <th><?=$maxlu?></th>
                  <th><?=$maxkel?></th>
                </tr>
                <tr>
                  <th>#</th>
                  <th>minimum (f-)</th>
                  <th><?=$minpen?></th>
                  <th><?=$minlak?></th>
                  <th><?=$minper?></th>
                  <th><?=$minlu?></th>
                  <th><?=$minkel?></th>
                </tr>
              </thead>              
            </table>
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
                  <th>Nama Desa</th>
                  <th>Jumlah Penduduk</th>
                  <th>Laki-Laki</th>
                  <th>Perempuan</th>
                  <th>Luas Wilayah</th>
                  <th>Kepala Keluarga</th>                  
                </tr>
                
              </thead>
              <tbody>
              <?php
              $no=1;
              $sql=mysqli_query($koneksi,"select * from lokasi");
              while($row=mysqli_fetch_array($sql)){
              ?>
                <tr>
                  <td><?=$no?></td>
                  <td><?=$row['kelurahan']?></td>
                  <td>
                    <?php
                    if($row['penduduk'] < 1500){
                      $bpenduduk=1;                      
                    }else if($row['penduduk'] >= 1500 && $row['penduduk'] < 3500 ){
                      $bpenduduk=2;                      
                    }else if($row['penduduk'] >= 3500 && $row['penduduk'] < 5500 ){
                      $bpenduduk=3;                      
                    }else if($row['penduduk'] >= 5500){
                      $bpenduduk=4;                     
                    }
                    
                    $normal=($maxpen-$bpenduduk)/($maxpen-$minpen);
                    echo number_format($normal,3, '.', '');
                    ?>
                  
                    </td>
                  <td>
                  <?php
                    if($row['laki'] < 1000){
                      $blaki=1;
                      
                    }else if($row['laki'] >= 1000 && $row['laki'] < 2000 ){
                      $blaki=2;
                      
                    }else if($row['laki'] >= 2000 && $row['laki'] < 3000 ){
                      $blaki=3;
                      
                    }else if($row['laki'] >= 3000){
                      $blaki=4;
                      
                    }

                    $normal=($maxlak-$blaki)/($maxlak-$minlak);
                    echo number_format($normal,3, '.', ''); 
                    ?>
                      
                  </td>
                  <td>
                    <?php
                    if($row['perempuan'] < 1000){
                      $bperempuan=1;
                     
                    }else if($row['perempuan'] >= 1000 && $row['perempuan'] < 2000 ){
                      $bperempuan=2;
                     
                    }else if($row['perempuan'] >= 2000 && $row['perempuan'] < 3000 ){
                      $bperempuan=3;
                     
                    }else if($row['perempuan'] >= 3000){
                      $bperempuan=4;
                      
                    } 
                    $normal=($maxper-$bperempuan)/($maxper-$minper);
                    echo number_format($normal,3, '.', '');                   
                    ?>

                  </td>
                  <td>
                  <?php
                    if($row['luas'] < 5000){
                      $bluas=1;                      
                    }else if($row['luas'] >= 5000 && $row['luas'] < 10000 ){
                      $bluas=2;                     
                    }else if($row['luas'] >= 10000 && $row['luas'] < 15000 ){
                      $bluas=3;                     
                    }else if($row['luas'] >= 15000){
                      $bluas=4;
                      
                    }
                    $normal=($maxlu-$bluas)/($maxlu-$minlu);
                   echo number_format($normal,3, '.', ''); 
                    ?>
                      
                  </td>
                  <td>
                    <?php
                    if($row['kepkel'] < 500){
                      $bkepkel=1;
                      
                    }else if($row['kepkel'] >= 500 && $row['kepkel'] < 1000 ){
                      $bkepkel=2;
                      
                    }else if($row['kepkel'] >= 1000 && $row['kepkel'] < 1500 ){
                      $bkepkel=3;
                     
                    }else if($row['kepkel'] >= 1500){
                      $bkepkel=4;
                      
                    }
                    $normal=($maxkel-$bkepkel)/($maxkel-$minkel);
                    echo number_format($normal,3, '.', '');
                    ?>
                   
                   

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

<?php
function getMax($array)
                  {
                     $n = count($array);
                     $max = $array[0];
                     for ($i = 1; $i < $n; $i++)
                         if ($max < $array[$i])
                             $max = $array[$i];
                      return $max;      
                  }
                   
                  // Returns maximum in array
                  function getMin($array)
                  {
                     $n = count($array);
                     $min = $array[0];
                     for ($i = 1; $i < $n; $i++)
                         if ($min > $array[$i])
                             $min = $array[$i];
                      return $min;      
                  }
?>

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
                  <th>Nama Desa</th>
                  <th>Jumlah Penduduk</th>
                  <th>Laki-Laki</th>
                  <th>Perempuan</th>
                  <th>Luas Wilayah</th>
                  <th>Kepala Keluarga</th>
                  <th>S</th>
                  <th>R</th>  
                                 
                </tr>
                
              </thead>
              <tbody>
              <?php
              $no=1;
              $sql=mysqli_query($koneksi,"select * from lokasi");
              while($row=mysqli_fetch_array($sql)){
              ?>
                <tr>
                  <td><?=$no?></td>
                  <td><?=$row['kelurahan']?></td>
                  <td>
                    <?php
                    if($row['penduduk'] < 1500){
                      $bpenduduk=1;                      
                    }else if($row['penduduk'] >= 1500 && $row['penduduk'] < 3500 ){
                      $bpenduduk=2;                      
                    }else if($row['penduduk'] >= 3500 && $row['penduduk'] < 5500 ){
                      $bpenduduk=3;                      
                    }else if($row['penduduk'] >= 5500){
                      $bpenduduk=4;                     
                    }
                    
                    $normal=($maxpen-$bpenduduk)/($maxpen-$minpen);
                    $nbobot1=$normal*$bpenduduk;
                    echo number_format($nbobot1,3, '.', '');
                    ?>
                  
                    </td>
                  <td>
                  <?php
                    if($row['laki'] < 1000){
                      $blaki=1;
                      
                    }else if($row['laki'] >= 1000 && $row['laki'] < 2000 ){
                      $blaki=2;
                      
                    }else if($row['laki'] >= 2000 && $row['laki'] < 3000 ){
                      $blaki=3;
                      
                    }else if($row['laki'] >= 3000){
                      $blaki=4;
                      
                    }

                    $normal=($maxlak-$blaki)/($maxlak-$minlak);
                    $nbobot2=$normal*$blaki;
                    echo number_format($nbobot2,3, '.', '');   
                    ?>
                      
                  </td>
                  <td>
                    <?php
                    if($row['perempuan'] < 1000){
                      $bperempuan=1;
                     
                    }else if($row['perempuan'] >= 1000 && $row['perempuan'] < 2000 ){
                      $bperempuan=2;
                     
                    }else if($row['perempuan'] >= 2000 && $row['perempuan'] < 3000 ){
                      $bperempuan=3;
                     
                    }else if($row['perempuan'] >= 3000){
                      $bperempuan=4;
                      
                    } 
                    $normal=($maxper-$bperempuan)/($maxper-$minper);
                    $nbobot3=$normal*$bperempuan;
                    echo number_format($nbobot3,3, '.', '');                    
                    ?>

                  </td>
                  <td>
                  <?php
                    if($row['luas'] < 5000){
                      $bluas=1;                      
                    }else if($row['luas'] >= 5000 && $row['luas'] < 10000 ){
                      $bluas=2;                     
                    }else if($row['luas'] >= 10000 && $row['luas'] < 15000 ){
                      $bluas=3;                     
                    }else if($row['luas'] >= 15000){
                      $bluas=4;
                      
                    }
                    $normal=($maxlu-$bluas)/($maxlu-$minlu);
                    $nbobot4=$normal*$bluas;
                    echo number_format($nbobot4,3, '.', '');  
                    ?>
                      
                  </td>
                  <td>
                    <?php
                    if($row['kepkel'] < 500){
                      $bkepkel=1;
                      
                    }else if($row['kepkel'] >= 500 && $row['kepkel'] < 1000 ){
                      $bkepkel=2;
                      
                    }else if($row['kepkel'] >= 1000 && $row['kepkel'] < 1500 ){
                      $bkepkel=3;
                     
                    }else if($row['kepkel'] >= 1500){
                      $bkepkel=4;
                      
                    }
                    $normal=($maxkel-$bkepkel)/($maxkel-$minkel);
                    $nbobot5=$normal*$bkepkel;
                    echo number_format($nbobot5,3, '.', '');   
                    ?>
                   
                   

                  </td>
                  <td>
                  <?php
                  $ns=$nbobot1+$nbobot2+$nbobot3+$nbobot4+$nbobot5;
                  echo number_format($ns,3, '.', '');
                  if($no==1){
                    $maxbot=$ns;
                    $minbot=$ns;
                  }else{
                    if($maxbot < $ns){
                      $maxbot = $ns;
                    }else{
                      $maxbot = $maxbot;
                    }

                    if($minbot < $ns){
                      $minbot = $minbot;
                    }else{
                      $minbot = $ns;
                    }
                  }        
                  ?>
                  </td>
                  <td>
                  <?php                  
                  $array = array($nbobot1, $nbobot2, $nbobot3, $nbobot4, $nbobot5);
                  echo number_format(getMax($array),3, '.', '');
                  $rsen=getmax($array);     
                  if($no==1){
                    $maxr=$rsen;
                    $minr=$rsen;
                  }else{
                    if($maxr < $rsen){
                      $maxr = $rsen;
                    }else{
                      $maxr = $maxr;
                    }

                    if($minr < $rsen){
                      $minr = $minr;
                    }else{
                      $minr = $rsen;
                    }
                  }                  
                  ?>
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
                  <th>#</th>
                  <th>S PLUS</th>
                  <th>S MIN</th>
                  <th>R PLUS</th>
                  <th>R MIN</th>                 
                </tr>
                <tr>
                  <th>#</th>
                  <th><?=number_format($maxbot,3, '.', '')?></th>
                  <th><?=number_format($minbot,3, '.', '')?></th>
                  <th><?=number_format($minr,3, '.', '')?></th>
                  <th><?=number_format($maxr,3, '.', '')?></th>
                  
                </tr>
              </thead>              
            </table>
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
                  <th>Nama Desa</th>
                  <th>Nilai Bobot Q</th>  
                </tr>
                
              </thead>
              <tbody>
              <?php
              $no=1;
              $sql=mysqli_query($koneksi,"select * from lokasi");
              while($row=mysqli_fetch_array($sql)){
              ?>
                <tr>
                  <td><?=$no?></td>
                  <td><?=$row['kelurahan']?></td>
                  <td>

                    <?php
                    if($row['penduduk'] < 1500){
                      $bpenduduk=1;                      
                    }else if($row['penduduk'] >= 1500 && $row['penduduk'] < 3500 ){
                      $bpenduduk=2;                      
                    }else if($row['penduduk'] >= 3500 && $row['penduduk'] < 5500 ){
                      $bpenduduk=3;                      
                    }else if($row['penduduk'] >= 5500){
                      $bpenduduk=4;                     
                    }
                    
                    $normal=($maxpen-$bpenduduk)/($maxpen-$minpen);
                    $nbobot1=$normal*$bpenduduk;
                   
                    ?>
                  
                    
                  <?php
                    if($row['laki'] < 1000){
                      $blaki=1;
                      
                    }else if($row['laki'] >= 1000 && $row['laki'] < 2000 ){
                      $blaki=2;
                      
                    }else if($row['laki'] >= 2000 && $row['laki'] < 3000 ){
                      $blaki=3;
                      
                    }else if($row['laki'] >= 3000){
                      $blaki=4;
                      
                    }

                    $normal=($maxlak-$blaki)/($maxlak-$minlak);
                    $nbobot2=$normal*$blaki;
                   
                    ?>
                      
                  
                    <?php
                    if($row['perempuan'] < 1000){
                      $bperempuan=1;
                     
                    }else if($row['perempuan'] >= 1000 && $row['perempuan'] < 2000 ){
                      $bperempuan=2;
                     
                    }else if($row['perempuan'] >= 2000 && $row['perempuan'] < 3000 ){
                      $bperempuan=3;
                     
                    }else if($row['perempuan'] >= 3000){
                      $bperempuan=4;
                      
                    } 
                    $normal=($maxper-$bperempuan)/($maxper-$minper);
                    $nbobot3=$normal*$bperempuan;
                                        
                    ?>

                 
                  <?php
                    if($row['luas'] < 5000){
                      $bluas=1;                      
                    }else if($row['luas'] >= 5000 && $row['luas'] < 10000 ){
                      $bluas=2;                     
                    }else if($row['luas'] >= 10000 && $row['luas'] < 15000 ){
                      $bluas=3;                     
                    }else if($row['luas'] >= 15000){
                      $bluas=4;
                      
                    }
                    $normal=($maxlu-$bluas)/($maxlu-$minlu);
                    $nbobot4=$normal*$bluas;
                   
                    ?>
                      
                 
                    <?php
                    if($row['kepkel'] < 500){
                      $bkepkel=1;
                      
                    }else if($row['kepkel'] >= 500 && $row['kepkel'] < 1000 ){
                      $bkepkel=2;
                      
                    }else if($row['kepkel'] >= 1000 && $row['kepkel'] < 1500 ){
                      $bkepkel=3;
                     
                    }else if($row['kepkel'] >= 1500){
                      $bkepkel=4;
                      
                    }
                    $normal=($maxkel-$bkepkel)/($maxkel-$minkel);
                    $nbobot5=$normal*$bkepkel;
                      
                    ?>
                  <?php
                  $ns=$nbobot1+$nbobot2+$nbobot3+$nbobot4+$nbobot5;
                  
                  
                  ?>
                  
                  <?php                  
                  $array = array($nbobot1, $nbobot2, $nbobot3, $nbobot4, $nbobot5);
                  $rmax=(getMax($array));

                  $norns=$ns;
                  $norminbot=$minbot;
                  $normaxbot=$maxbot;
                  $norrmax=$rmax;
                  $vi=0.5;                  
                  $hasilakhir=($vi*(($ns-$minbot)/($maxbot-$minbot)))+((1-$vi)*(($rmax-$rmin)/($rmax-$rmin)));
                  echo number_format($hasilakhir,3, '.', '');
				  $vcoar=number_format($hasilakhir,3, '.', '');
				 
				  mysqli_query($koneksi,"UPDATE `lokasi` SET `vcor`='$vcoar' WHERE kode = '$row[kode]'")or die(mysqli_error($koneksi));;
                  ?>


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