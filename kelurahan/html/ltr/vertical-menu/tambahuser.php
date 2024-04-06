a<?php 
		include"../../../../config.php";
		
				$username=$_POST['username'];
				$password=$_POST['password'];
				$namae=$_POST['nama'];
				$unit=$_POST['unit'];
				$subunit=$_POST['subunit'];
				$email=$_POST['email'];
				$hp=$_POST['hp'];
				$status=$_POST['status'];
				$level=$_POST['level'];
				$kelurahan=$_POST['kelurahan'];
				
				$ekstensi_diperbolehkan	= array('zip,jpg,png');
				$nama = $_FILES['foto']['name'];
				$x = explode('.', $nama);
				$ekstensi = strtolower(end($x));
				$ukuran	= $_FILES['foto']['size'];
				$file_tmp = $_FILES['foto']['tmp_name'];
				
					if($ukuran < 1044070){			
						move_uploaded_file($file_tmp, 'file/'.$nama);
						
						
						$query = mysqli_query($koneksi,"INSERT INTO user VALUES('$username','$password','$namae','$unit','$subunit','$email','$hp','$nama','$status','$level','$kelurahan')")or die(mysqli_error($koneksi));					
						
						if($query){
							header('Location: user.php');
							exit;
						}else{
							 echo "Failed to connect to MySQL: " . $mysqli -> error;
						}
					}else{
						echo 'UKURAN FILE TERLALU BESAR';
					}
			
		
		
		
?>