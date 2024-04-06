<?php
include"config.php";
$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_query($koneksi,"select * from user where username = '$username' AND password ='$password'");
$cek=mysqli_num_rows($sql);

if($cek==0){
	header('Location: index.php?notif=on');
}else{
	$row=mysqli_fetch_array($sql);
	if($row['level']==1){
	$_SESSION["username"] = $username;
	header('Location: administrator/html/ltr/vertical-menu/index.php');
	}else{
	$_SESSION["username"] = $username;
	$_SESSION["kelurahan"]=$row['kelurahan'];
	header('Location: kelurahan/html/ltr/vertical-menu/index.php');
	}
}


?>