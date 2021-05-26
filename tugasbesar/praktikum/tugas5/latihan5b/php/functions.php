<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "pw_tubes_203040084");

	return $conn;
}

//function untuk melakukan query dan memasukannya kedalam array 
function query($sql) {
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

//function untuk menambahkan data didalam database
function tambah($data) {
	$conn = koneksi();

	$nama = htmlspecialchars($data['nama']);
	$warna = htmlspecialchars($data['warna']);
	$harga = htmlspecialchars($data['harga']);
	$ukuran = htmlspecialchars($data['ukuran']);
	$gambar = htmlspecialchars($data['gambar']);

	$query = "INSERT INTO tupperware VALUES('', '$gambar', '$nama', '$warna', '$harga', '$ukuran')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>