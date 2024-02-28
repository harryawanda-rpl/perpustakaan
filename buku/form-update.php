<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE no_buku=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="no_buku" value="<?php echo $data['no_buku'] ?>" /></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul_buku" value="<?php echo $data['judul_buku'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Nama Pengarang</td>
				<td><input type="text" name="pengarang" value="<?php echo $data['pengarang'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="thn_terbit" value="<?php echo $data['thn_terbit'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>