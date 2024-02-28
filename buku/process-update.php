<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['no_buku'];
	$judul_buku = $_POST['judul_buku'];
	$pengarang = $_POST['pengarang'];
	$tahun_terbit = $_POST['thn_terbit'];

	$sql = "UPDATE buku SET judul_buku='$judul_buku',
	pengarang='$pengarang', thn_terbit='$tahun_terbit' WHERE no_buku=$id";
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