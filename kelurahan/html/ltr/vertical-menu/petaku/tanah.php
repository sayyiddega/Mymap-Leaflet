<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
	 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
	 <style>
	 #map { height: 100%; width:100% }
	 .leaflet-tooltip {
	 background-color :rgb(0 0 0 / 35%);
	 border: 0px;
	 color: white;
	 font-weight: bold;
	 
	 }
	 
	 .leaflet-marker-icon{
	 visibility: hidden;
	 }
	 leaflet-marker-icon {
	 visibility: hidden;
	 }
	 leaflet-zoom-animated {
	 visibility: hidden;
	 }
	 leaflet-interactive{
	 visibility: hidden;
	 }
	 .leaflet-container{
	
	 }
	 .leaflet-marker-pane img{
	 visibility: hidden;
	 }
	 .leaflet-marker-shadow {
	display: block;
	visibility: hidden;
	}
	 
	 </style>
</head>
<body>
 <div id="map"></div>
 <script src="catiline.js"></script>
 <script src="leaflet.shpfile.js"></script>
 <script>
 var map = L.map('map').setView([0.5189637263943035, 101.43983957331247], 13);
 

var googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

var googleHybrid = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);

var googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=p&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

		var stekout = new L.Shapefile('Rukostek.zip', {
			style: function (feature) {
               return {
                    fillColor: 'yellow',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'black',
                };
            },onEachFeature: function(feature, layer) {
								
            }
		});		
		stekout.addTo(map);
		stekout.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		var tol = new L.Shapefile('Tol.zip', {
			style: function (feature) {
               return {
                    fillColor: 'blue',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
							
            }
		});		
		tol.addTo(map);
		tol.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		var asjalan = new L.Shapefile('asjalan.zip', {
			style: function (feature) {
               return {
                    fillColor: 'green',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'red',
                };
            },onEachFeature: function(feature, layer) {
								
            }
		});		
		asjalan.addTo(map);
		asjalan.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		var rencana = new L.Shapefile('rencana.zip', {
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
		
		var nib = new L.Shapefile('NIB.zip', {
			style: function (feature) {
               return {
                    fillColor: 'red',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
				if (feature.properties) {
                    layer.bindTooltip(
                        feature.properties.TEXTSTRING ,{
						permanent: true
						}
                    );
                }				
            }
		});		
		
		var nib3 = new L.Shapefile('tnlai.zip', {
			style: function (feature) {
               return {
                    fillColor: 'red',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
				if (feature.properties) {
                    layer.bindTooltip(
                        feature.properties.TEXTSTRING ,{
						permanent: true
						}
                    );
                }				
            }
		});		
		
		nib3.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		//=================================================================
		
		var garisbantu = new L.Shapefile('garisbantu.zip', {
			style: function (feature) {
               return {
                    fillColor: 'red',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
							
            }
		});	

		var sengketa = new L.Shapefile('sengketa.zip', {
			style: function (feature) {
               return {
                    fillColor: 'purple',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
								
            }
		});		
		
		sengketa.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		var skgr = new L.Shapefile('SKGR.zip', {
			style: function (feature) {
               return {
                    fillColor: 'grey',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
							
            }
		});		
		
		skgr.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		var ukur = new L.Shapefile('UKUR.zip', {
			style: function (feature) {
               return {
                    fillColor: 'black',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
						
            }
		});		
		
		var nib2 = new L.Shapefile('nib2.zip', {
			style: function (feature) {
               return {
                    fillColor: 'red',
                    opacity:1,
                    fillOpacity: 0.7,
                    weight: 1,
                    color: 'yellow',
                };
            },onEachFeature: function(feature, layer) {
				if (feature.properties) {
                    layer.bindTooltip(
                        feature.properties.TEXTSTRING ,{
						permanent: true
						}
                    );
                }				
            }
		});
		
		
		nib2.once("data:loaded", function() {
			console.log("finished loaded shapefile");
		});
		
		
		var lastZoom;
		map.on('zoomend', function() {
		  var zoom = map.getZoom();
		  if (zoom < 17 && (!lastZoom || lastZoom >= 17)) {
			map.eachLayer(function(layer) {
			  if (layer.getTooltip) {
				var toolTip = layer.getTooltip();
				if (toolTip) {
				  this.map.closeTooltip(toolTip);
				}
			  }
			});
		  } else if (zoom >= 17 && (!lastZoom || lastZoom < 17)) {
			map.eachLayer(function(layer) {
			  if (layer.getTooltip) {
				var toolTip = layer.getTooltip();
				if (toolTip) {
				  this.map.addLayer(toolTip);
				}
			  }
			});
		  }
		  lastZoom = zoom;
		});
		var label1 = L.layerGroup([nib, nib3]);
		var label2 = L.layerGroup([nib2]);
		
		var baseMaps = {
			'Google Street' : googleStreets, 
			'Googke Satelite' : googleHybrid, 
			'Google Terrain' : googleTerrain 
		}
		
		var overlayMaps = {
			'STEK OUT' : stekout,
			'Jalan TOL' : tol,
			'AS Jalan' : asjalan,
			'Label' : label1,
			'Batas Tanah Yang Terkena LC ' : sengketa,
			'SKGR' : skgr,
			'Persil Pengukuran Lapangan': ukur,
			'Garis Bantu' : garisbantu,
			'Label2' : label2
		}
		
		L.control.layers(baseMaps, overlayMaps).addTo(map);
 
 </script>
</body>
</html>