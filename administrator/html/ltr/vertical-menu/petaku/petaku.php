<?php
$no=0;
include"../../../../../config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kepadatan penduduk kesamatan siak hulu </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
	<link rel="stylesheet" href="app.css" />
    <link rel="stylesheet" href="assets/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon-152.png">
    <link rel="icon" sizes="196x196" href="assets/img/favicon-196.png">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
	

  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="navbar-icon-container">
            <a href="#" class="navbar-icon pull-right visible-xs" id="nav-btn"><i class="fa fa-bars fa-lg white"></i></a>
            <a href="#" class="navbar-icon pull-right visible-xs" id="sidebar-toggle-btn"><i class="fa fa-search fa-lg white"></i></a>
          </div>
          <a class="navbar-brand" href="#">Kepadatan penduduk kecamatan siak hulu </a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group has-feedback">
                <input id="searchbox" type="text" placeholder="Search" class="form-control">
                <span id="searchicon" class="fa fa-search form-control-feedback"></span>
            </div>
          </form>
          <ul class="nav navbar-nav">
            <li><a href="../index.php"><i class="fa fa-question-circle white"></i>&nbsp;&nbsp;Dashboard</a></li>
			<li><a href="petaku.php"><i class="fa fa-question-circle white"></i>&nbsp;&nbsp;Peta</a></li>
			<li><a href="../dataaset.php"><i class="fa fa-question-circle white"></i>&nbsp;&nbsp;Daftar Tanah</a></li>
			<li><a href="../addpeta.php"><i class="fa fa-question-circle white"></i>&nbsp;&nbsp;Tambah Tanah</a></li>
			<li><a href="../index.php"><i class="fa fa-question-circle white"></i>&nbsp;&nbsp;Pengguna</a></li>          
            
            <li class="hidden-xs"><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="list-btn"><i class="fa fa-list white"></i>&nbsp;&nbsp;POI List</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div id="container">
      <div id="sidebar">
        <div class="sidebar-wrapper">
          <div class="panel panel-default" id="features">
            <div class="panel-heading">
              <h3 class="panel-title">Points of Interest
              <button type="button" class="btn btn-xs btn-default pull-right" id="sidebar-hide-btn"><i class="fa fa-chevron-left"></i></button></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-8 col-md-8">
                  <input type="text" class="form-control search" placeholder="Filter" />
                </div>
                <div class="col-xs-4 col-md-4">
                  <button type="button" class="btn btn-primary pull-right sort" data-sort="feature-name" id="sort-btn"><i class="fa fa-sort"></i>&nbsp;&nbsp;Sort</button>
                </div>
              </div>
            </div>
            <div class="sidebar-table">
              <table class="table table-hover" id="feature-list">
                <thead class="hidden">
                  <tr>
                    <th>Icon</th>
                  <tr>
                  <tr>
                    <th>Name</th>
                  <tr>
                  <tr>
                    <th>Chevron</th>
                  <tr>
                </thead>
                <tbody class="list"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="map"></div>
    </div>
    <div id="loading">
      <div class="loading-indicator">
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-info progress-bar-full"></div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Welcome to the BootLeaf template!</h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs nav-justified" id="aboutTabs">
              <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-question-circle"></i>&nbsp;About the project</a></li>
              <li><a href="#contact" data-toggle="tab"><i class="fa fa-envelope"></i>&nbsp;Contact us</a></li>
              <li><a href="#disclaimer" data-toggle="tab"><i class="fa fa-exclamation-circle"></i>&nbsp;Disclaimer</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i>&nbsp;Metadata <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#boroughs-tab" data-toggle="tab">Boroughs</a></li>
                  <li><a href="#subway-lines-tab" data-toggle="tab">Subway Lines</a></li>
                  <li><a href="#theaters-tab" data-toggle="tab">Theaters</a></li>
                  <li><a href="#museums-tab" data-toggle="tab">Museums</a></li>
                </ul>
              </li>
            </ul>
            <div class="tab-content" id="aboutTabsContent">
              <div class="tab-pane fade active in" id="about">
                <p>A simple, responsive template for building web mapping applications with <a href="http://getbootstrap.com/">Bootstrap 3</a>, <a href="http://leafletjs.com/" target="_blank">Leaflet</a>, and <a href="http://twitter.github.io/typeahead.js/" target="_blank">typeahead.js</a>. Open source, MIT licensed, and available on <a href="https://github.com/bmcbride/bootleaf" target="_blank">GitHub</a>.</p>
                <div class="panel panel-primary">
                  <div class="panel-heading">Features</div>
                  <ul class="list-group">
                    <li class="list-group-item">Fullscreen mobile-friendly map template with responsive navbar and modal placeholders</li>
                    <li class="list-group-item">jQuery loading of external GeoJSON files</li>
                    <li class="list-group-item">Logical multiple layer marker clustering via the <a href="https://github.com/Leaflet/Leaflet.markercluster" target="_blank">leaflet marker cluster plugin</a></li>
                    <li class="list-group-item">Elegant client-side multi-layer feature search with autocomplete using <a href="http://twitter.github.io/typeahead.js/" target="_blank">typeahead.js</a></li>
                    <li class="list-group-item">Responsive sidebar feature list synced with map bounds, which includes sorting and filtering via <a href="http://listjs.com/" target="_blank">list.js</a></li>
                    <li class="list-group-item">Marker icons included in grouped layer control via the <a href="https://github.com/ismyrnow/Leaflet.groupedlayercontrol" target="_blank">grouped layer control plugin</a></li>
                  </ul>
                </div>
              </div>
              <div id="disclaimer" class="tab-pane fade text-danger">
                <p>The data provided on this site is for informational and planning purposes only.</p>
                <p>Absolutely no accuracy or completeness guarantee is implied or intended. All information on this map is subject to such variations and corrections as might result from a complete title search and/or accurate field survey.</p>
              </div>
              <div class="tab-pane fade" id="contact">
                <form id="contact-form">
                  <div class="well well-sm">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="first-name">First Name:</label>
                          <input type="text" class="form-control" id="first-name">
                        </div>
                        <div class="form-group">
                          <label for="last-name">Last Name:</label>
                          <input type="text" class="form-control" id="last-email">
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="text" class="form-control" id="email">
                        </div>
                      </div>
                      <div class="col-md-8">
                        <label for="message">Message:</label>
                        <textarea class="form-control" rows="8" id="message"></textarea>
                      </div>
                      <div class="col-md-12">
                        <p>
                          <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">Submit</button>
                        </p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="boroughs-tab">
                <p>Borough data courtesy of <a href="http://www.nyc.gov/html/dcp/pdf/bytes/nybbwi_metadata.pdf" target="_blank">New York City Department of City Planning</a></p>
              </div>
              <div class="tab-pane fade" id="subway-lines-tab">
                <p><a href="http://spatialityblog.com/2010/07/08/mta-gis-data-update/#datalinks" target="_blank">MTA Subway data</a> courtesy of the <a href="http://www.urbanresearch.org/about/cur-components/cuny-mapping-service" target="_blank">CUNY Mapping Service at the Center for Urban Research</a></p>
              </div>
              <div class="tab-pane fade" id="theaters-tab">
                <p>Theater data courtesy of <a href="https://data.cityofnewyork.us/Recreation/Theaters/kdu2-865w" target="_blank">NYC Department of Information & Telecommunications (DoITT)</a></p>
              </div>
              <div class="tab-pane fade" id="museums-tab">
                <p>Museum data courtesy of <a href="https://data.cityofnewyork.us/Recreation/Museums-and-Galleries/sat5-adpb" target="_blank">NYC Department of Information & Telecommunications (DoITT)</a></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="legendModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Map Legend</h4>
          </div>
          <div class="modal-body">
            <p>Map Legend goes here...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            <form id="contact-form">
              <fieldset>
                <div class="form-group">
                  <label for="name">Username:</label>
                  <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                  <label for="email">Password:</label>
                  <input type="password" class="form-control" id="password">
                </div>
              </fieldset>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="featureModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-primary" id="feature-title"></h4>
          </div>
          <div class="modal-body" id="feature-info"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="attributionModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
              Developed by <a href='http://bryanmcbride.com'>bryanmcbride.com</a>
            </h4>
          </div>
          <div class="modal-body">
            <div id="attribution"></div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.5/typeahead.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
    <script src="assets/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.js"></script>
    <script src="assets/js/app.js"></script>	
	

	<script src="catiline.js"></script>
	<script src="leaflet.shpfile.js"></script>
	<script>
		var stekout = new L.Shapefile('stekout_TOL2.zip', {
			style: function (feature) {
               return {
                    fillColor: 'green',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
				if (feature.properties) {
					var content = "<table class='table table-striped table-bordered table-condensed'>" + "<tr><th>Name</th><td>" + feature.properties.NAME + "</td></tr>" + "<tr><th>Nomor Bidang</th><td>" + feature.properties.NOMORBIDANG + "</td></tr>" + "<tr><th>Kode Terase</th><td>" + feature.properties.TERASE + "</td></tr>" + "<tr><th>Bidang Awal(m2)</th><td>" + feature.properties.BIDANGAWAL + "</td></tr>" + "<tr><th>Hasil Ukur BPN(m2)</th><td>" + feature.properties.HASILUKUR + "</td></tr>" + "<table>";
                    layer.bindPopup(
                        "Kecamatan : " + feature.properties.KECAMATAN
                        );
                }				
            }
		});
		
		stekout.addTo(map);
		stekout.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		
		
		
		<?php
		$no=2;
		$urutan=1;
		$sql=mysqli_query($koneksi,"select * from lokasi ORDER BY vcor ASC");
		while($row=mysqli_fetch_array($sql)){
			
		?>
		
		var shpfile2 = new L.Shapefile('../file/<?=$row[file]?>', {
			style: function (feature) {
		<?php		
		if($row['vcor' ]== 1){
		$colore="green";
		}else if($row['vcor'] < 1 && $row['vcor'] >= 0.9){
		$colore="yellow";
		}else if($row['vcor'] < 0.9 && $row['vcor'] >= 0.8){
		$colore="orange";
		}else if($row['vcor'] < 0.8 && $row['vcor'] >= 0.5){
		$colore="Red";
		}else if($row['vcor'] < 0.5 && $row['vcor'] >= 0){
		$colore="black";
		}
		?>
                return {
                    fillColor: '<?=$colore?>',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
				if (feature.properties) {
                    layer.bindPopup(
                        "<table class='table table-striped table-bordered table-condensed' style='width:300px;'>" + "<tr><th colspan = '2'><center>Data DESA</center></th></tr><tr><th>Nama Kelurahan</th><td><?=$row[kelurahan]?></td></tr>" + "<tr><th>Jumlah Penduduk</th><td><?=$row[penduduk]?></td></tr>" + "<tr><th>Luas Wilayah</th><td><?=$row[luas]?> m2</td></tr>" + "<tr><th>Kepala Keluarga</th><td><?=$row[kepkel]?> </td></tr>" + "<tr><th>Peribadatan</th><td><?=$row[peribadatan]?> </td></tr>" + "<tr><th>Pendidikan</th><td><?=$row[pendidikan]?> </td></tr>" + "<tr><th>Kesehatan</th><td><?=$row[kesehatan]?> </td></tr>" + "<tr><th>URUTAN KEPADATAN</th><td><?=$urutan?> </td></tr>" +"<table>"
                        ), {
                        maxHeight: 300
                    };
                }
			}
		});
		shpfile2.addTo(map);
		shpfile2.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		<?php
		$urutan++;
		}
		?>
		
		
		
		
		var rencana = new L.Shapefile('kepaujaya.zip', {
			style: function (feature) {
               return {
                    fillColor: 'red',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'red',
                };
            },onEachFeature: function(feature, layer) {
								
            }
		});		
		rencana.addTo(map);
		rencana.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
	</script>
	
  </body>
</html>
