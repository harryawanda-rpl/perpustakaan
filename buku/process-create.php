<?php

include("config.php");

if(isset($_POST['create'])){

	$judul_buku = $_POST['judul_buku'];
	$pengarang = $_POST['pengarang'];
	$tahun_terbit = $_POST['thn_terbit'];

	$sql = "INSERT INTO buku (judul_buku, pengarang, thn_terbit)
	VALUE ('$judul_buku', '$pengarang', '$tahun_terbit')";

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