<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar mahasiswa</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>

	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $m) { ?>
		<tr>
			<td><?php echo $m['id']; ?></td>
			<td><img src="img/<?php echo $m['gambar']; ?>" alt=""></td>
			<td><?php echo $m['nama']; ?></td>
			<td><a href="detail.php?id=<?php echo $m['id']; ?>">Lihat detail</a></td>
		</tr>
		<?php } ?>
		<?php $i++ ?>
	</table>
</body>
</html>