<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['no_anggota'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$alamat = $_POST['alamat'];

	$sql = "UPDATE anggota SET nama_lengkap='$nama_lengkap', alamat='$alamat' WHERE no_anggota=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>