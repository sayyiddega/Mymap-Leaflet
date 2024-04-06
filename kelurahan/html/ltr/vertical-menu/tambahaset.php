a<?php 
		include"../../../../config.php";
		
		if($_GET['op']=="update"){
				$kodeprimer=$_GET['kode'];	
				$kelurahan=$_POST['kelurahan'];
				$kecamatan=$_POST['kecamatan'];
				$penduduk=$_POST['penduduk'];
				$laki=$_POST['laki'];
				$perempuan=$_POST['perempuan'];
				$luas=$_POST['luas'];
				$kepkel=$_POST['kepkel'];
				$peribadatan=$_POST['peribadatan'];
				$kesehatan=$_POST['kesehatan'];
				$pendidikan=$_POST['pendidikan'];
				$lat=$_POST['lat'];
				$lon=$_POST['lon'];
				$icon=1;
		
				if($_FILES['peta']['name'] != "" && $_FILES['foto']['name'] != ""){		
					$nama = $_FILES['peta']['name'];
					$x = explode('.', $nama);
					$ekstensi = strtolower(end($x));
					$ukuran	= $_FILES['peta']['size'];
					$file_tmp = $_FILES['peta']['tmp_name'];
					$namafile=$kodeprimer.$nama;
					move_uploaded_file($file_tmp, 'file/'.$namafile);	

					$nama = $_FILES['foto']['name'];
					$x = explode('.', $nama);
					$ekstensi = strtolower(end($x));
					$ukuran	= $_FILES['foto']['size'];
					$file_tmp = $_FILES['foto']['tmp_name'];
					$namafile2=$kodeprimer.$nama;
					move_uploaded_file($file_tmp, 'file/'.$namafile2);	
					
					mysqli_query($koneksi,"UPDATE `lokasi` SET
					`kelurahan`='$kelurahan',`kecamatan`='$kecamatan',`penduduk`='$penduduk',`laki`='$laki',`perempuan`='$perempuan',`luas`='$luas',`kepkel`='$kepkel', `peribadatan`='$peribadatan',`kesehatan`='$kesehatan',`pendidikan`='$pendidikan',`lat`='$lat',`lon`='$lon',`file`='$namafile',`foto`='$namafile2',
					`icon`='$icon' WHERE kode = '$kodeprimer'")or die(mysqli_error($koneksi));;
					
				}else if($_FILES['peta']['name'] != "" && $_FILES['foto']['name'] == ""){		
					$nama = $_FILES['peta']['name'];
					$x = explode('.', $nama);
					$ekstensi = strtolower(end($x));
					$ukuran	= $_FILES['peta']['size'];
					$file_tmp = $_FILES['peta']['tmp_name'];
					$namafile=$kodeprimer.$nama;
					move_uploaded_file($file_tmp, 'file/'.$namafile);
					mysqli_query($koneksi,"UPDATE `lokasi` SET
					`kelurahan`='$kelurahan',`kecamatan`='$kecamatan',`penduduk`='$penduduk',`laki`='$laki',`perempuan`='$perempuan',`luas`='$luas',`kepkel`='$kepkel', `peribadatan`='$peribadatan',`kesehatan`='$kesehatan',`pendidikan`='$pendidikan',`lat`='$lat',`lon`='$lon',`file`='$namafile',
					`icon`='$icon' WHERE kode = '$kodeprimer'")or die(mysqli_error($koneksi));;
					
				}else if($_FILES['peta']['name'] == "" && $_FILES['foto']['name'] != ""){		
					
					$nama = $_FILES['foto']['name'];
					$x = explode('.', $nama);
					$ekstensi = strtolower(end($x));
					$ukuran	= $_FILES['foto']['size'];
					$file_tmp = $_FILES['foto']['tmp_name'];
					$namafile2=$kodeprimer.$nama;
					move_uploaded_file($file_tmp, 'file/'.$namafile2);	
					
					mysqli_query($koneksi,"UPDATE `lokasi` SET
					`kelurahan`='$kelurahan',`kecamatan`='$kecamatan',`penduduk`='$penduduk',`laki`='$laki',`perempuan`='$perempuan',`luas`='$luas',`kepkel`='$kepkel', `peribadatan`='$peribadatan',`kesehatan`='$kesehatan',`pendidikan`='$pendidikan',`lat`='$lat',`lon`='$lon',`foto`='$namafile2',
					`icon`='$icon' WHERE kode = '$kodeprimer'")or die(mysqli_error($koneksi));;	
				}else{
					mysqli_query($koneksi,"UPDATE `lokasi` SET
					`kelurahan`='$kelurahan',`kecamatan`='$kecamatan',`penduduk`='$penduduk',`laki`='$laki',`perempuan`='$perempuan',`luas`='$luas',`kepkel`='$kepkel', `peribadatan`='$peribadatan',`kesehatan`='$kesehatan',`pendidikan`='$pendidikan',`lat`='$lat',`lon`='$lon',`lon`='$lon',
					`icon`='$icon' WHERE kode = '$kodeprimer'")or die(mysqli_error($koneksi));;
				}	
				header('Location: cekdetail.php?kode='.$kodeprimer);			
			
		}else{	
			
			$n=10;
			function getName($n) {
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$randomString = '';
			 
				for ($i = 0; $i < $n; $i++) {
					$index = rand(0, strlen($characters) - 1);
					$randomString .= $characters[$index];
				}
			 
				return $randomString;
			}
				$kodreal=getName($n);				
				$kelurahan=$_POST['kelurahan'];
				$kecamatan=$_POST['kecamatan'];
				$penduduk=$_POST['penduduk'];
				$laki=$_POST['laki'];
				$perempuan=$_POST['perempuan'];
				$luas=$_POST['luas'];
				$kepkel=$_POST['kepkel'];
				$peribadatan=$_POST['peribadatan'];
				$kesehatan=$_POST['kesehatan'];
				$pendidikan=$_POST['pendidikan'];
				$lat=$_POST['lat'];
				$lon=$_POST['lon'];
				$icon=1;
				
				$ekstensi_diperbolehkan	= array('zip,jpg,png');
				$nama = $_FILES['peta']['name'];
				$x = explode('.', $nama);
				$ekstensi = strtolower(end($x));
				$ukuran	= $_FILES['peta']['size'];
				$file_tmp = $_FILES['peta']['tmp_name'];
				
				$nama2= $_FILES['foto']['name'];
				$x = explode('.', $nama2);
				$ekstensi2 = strtolower(end($x));
				$ukuran	= $_FILES['foto']['size'];
				$file_tmp2 = $_FILES['foto']['tmp_name'];
				
	 
				
					if($ukuran < 1044070){			
						move_uploaded_file($file_tmp, 'file/'.$nama);
						move_uploaded_file($file_tmp2, 'file/'.$nama2);
						
						$query = mysqli_query($koneksi,"INSERT INTO lokasi VALUES('$kodreal','$kelurahan','$kecamatan','$penduduk','$laki','$perempuan','$luas','$kepkel','$peribadatan','$kesehatan','$pendidikan','$lat','$lon','$nama','$nama2','$icon')")or die(mysqli_error($koneksi));					
						
						if($query){
							
							header('Location: cekdetail.php?kode='.$kodreal);
							exit;
						}else{
							 echo "Failed to connect to MySQL: " . $mysqli -> error;
						}
					}else{
						echo 'UKURAN FILE TERLALU BESAR';
					}
			
		}
		
		
?>