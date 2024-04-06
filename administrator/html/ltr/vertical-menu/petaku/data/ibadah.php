{<br>
"type": "FeatureCollection",<br>                                                                                
"features": [<br>
<?php
$no=0;
include"../../../../../../config.php";
$sql=mysqli_query($koneksi,"select * from lokasi where icon = 5");
while($row=mysqli_fetch_array($sql)){
?>

{ "type": "Feature", "id": <?=$no?>, "properties": { "NAME": "<?=$row['pemilik']?>", "TEL": "<?=$row['nobidang']?>", "URL": "<?=$row['kodeterase']?>", "ADDRESS1": "<?=$row['bidangawal']?>", "ADDRES2": "<?=$row['hasilukur']?>"}, "geometry": { "type": "Point", "coordinates": [ <?=$row['lon']?>, <?=$row['lat']?> ] } }<br>
,<br>
<?php
$no++;
}
?>
{ "type": "Feature", "id": 0, "properties": { "NAME": "45th Street Theater", "TEL": "(212) 352-3101", "URL": "http:\/\/www.theatermania.com\/new-york\/theaters\/45th-street-theatre_2278\/", "ADDRESS1": "354 West 45th Street", "ADDRES2": null, "CITY": "New York", "ZIP": 10036.0 }, "geometry": { "type": "Point", "coordinates": [ -73.990618, 40.759851 ] } }<br>
]<br>
}<br>