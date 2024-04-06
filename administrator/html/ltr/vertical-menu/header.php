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
			 <?php
								  $no=0;
								  $sqta=mysqli_query($koneksi,"SELECT * FROM qty INNER JOIN barang ON barang.kode=qty.barang where qty.status=1;");	
								  while($roe=mysqli_fetch_array($sqta)){
								  $tgl2    = date('d-m-Y', strtotime('+'.$roe['expired'].'days', strtotime($roe['tanggal'])));
								  $tgl3    = date('d-m-Y', strtotime('-3 days', strtotime($tgl2)));
								  $dateTimestamp1 = strtotime($tanggal);
								  $dateTimestamp2 = strtotime($tgl3);
								  if($dateTimestamp1 >= $dateTimestamp2){
								  $no++;
								  }else{
								  }
								  }
								  
					?>
			<ul class="nav navbar-nav float-right"> 
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow"><?=$no?></span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
				 
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0"><?=$no?> New</span>
                  </li>
                  <li class="scrollable-container media-list w-100">
                    <?php
								  $no=1;
								  $sqta=mysqli_query($koneksi,"SELECT * FROM qty INNER JOIN barang ON barang.kode=qty.barang where qty.status=1;");	
								  while($roe=mysqli_fetch_array($sqta)){
								  $tgl2    = date('d-m-Y', strtotime('+'.$roe['expired'].'days', strtotime($roe['tanggal'])));
								  $tgl3    = date('d-m-Y', strtotime('-3 days', strtotime($tgl2)));
								  $dateTimestamp1 = strtotime($roe['tanggal']);
								  $dateTimestamp2 = strtotime($tgl3);
								  if($dateTimestamp1 >= $dateTimestamp2){
					?>			  
								 <a href="javascript:void(0)">
								 <div class="media">
									<div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
									<div class="media-body">
									  <h6 class="media-heading">PERINGATAN ITEM EXPIRED</h6>
									  <p class="notification-text font-small-3 text-muted"><?=$roe['qr']?> Telah Atau Akan Memasuki Masa Expired.</p><small>
										<a href="expired.php"><time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Cek Data</time></a></small>
									</div>
								  </div>
								 </a>
								  
                    <?php		 
								  }else{
								  }
								  }
								  
					?>  
                      
                      
                      </li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
				
              </li>
              
            </ul>			
          </div>
        </div>
		
      </div>
    </nav>