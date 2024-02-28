<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_lengkap = $_POST['nama_lengkap'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO anggota (nama_lengkap, alamat)
	VALUE ('$nama_lengkap', '$alamat')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>