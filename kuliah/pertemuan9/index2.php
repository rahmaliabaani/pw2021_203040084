<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); 
// ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row() // mengembalikan array numerik // lebih disarankan
// mysqli_fetch_assoc() // mengembalikan array assosiative // lebih disarankan
// mysqli_fetch_array() // mengembalikan array numerik dan assosiative
// mysqli_fetch_object() // menggunakan ->

// while ($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// };

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($result)) { ?>

		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?php echo $row["gambar"]; ?>" alt="">
			</td>
			<td><?php echo $row["nrp"]; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php } ?>
	</table>
</body>
</html>