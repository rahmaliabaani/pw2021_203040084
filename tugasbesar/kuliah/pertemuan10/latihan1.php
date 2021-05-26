<?php 
// koneksi ke db
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040084');

// query isi tabel
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke array
// $row = mysqli_fetch_row($result); array numerik
// $row = mysqli_fetch_assoc($result); array assosiative
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}

// tampung ke variabel mhs
$mahasiswa = $rows;

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
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $m) { ?>
		<tr>
			<td><?php echo $m['id']; ?></td>
			<td><img src="img/<?php echo $m['gambar']; ?>" alt=""></td>
			<td><?php echo $m['nrp']; ?></td>
			<td><?php echo $m['nama']; ?></td>
			<td><?php echo $m['email']; ?></td>
			<td><?php echo $m['jurusan']; ?></td>
			<td><a href="">Hapus</a> | <a href="">Ubah</a></td>
		</tr>
		<?php } ?>
		<?php $i++ ?>
	</table>
</body>
</html>