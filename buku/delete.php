<?php

include("config.php");
if( isset($_GET['id']) ){

	$id = $_GET['id'];
	$sql = "DELETE FROM buku WHERE no_buku=$id";
	$query = mysqli_query($db, $sql);

	if( $query ){
		header('Location: index.php');
	} else {
		die("gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}

?>