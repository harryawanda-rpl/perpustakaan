<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>CREATE DATA</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul_buku" class="form-control"></td>
			</tr>
			<tr>
				<td>Nama Pengarang</td>
				<td><input type="text" name="pengarang" class="form-control"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="thn_terbit" class="form-control"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>