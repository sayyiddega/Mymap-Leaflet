{
"type": "FeatureCollection",
                                                                                
"features": [
<?php
$no=0;
include"../../../../../../config.php";
$sql=mysqli_query($koneksi,"select * from lokasi where icon = 2");
while($row=mysqli_fetch_array($sql)){
?>
{ "type": "Feature", "id": <?=$no?> , "properties": { "NAME": "<?=$row['penggunaan']?>", "TEL": null, "URL": null, "ADDRESS1": "<?=$row['jalan']?> RT/TW: <?=$row['rtrw']?> <?=$row['kelurahan']?> <?=$row['kecamatan']?>", "ADDRES2": null, "CITY": "PEKANBARU", "ZIP": null }, "geometry": { "type": "Point", "coordinates": [ <?=$row['lon']?>, <?=$row['lat']?> ] } }

<?php
$no++;
}
?>
]
}