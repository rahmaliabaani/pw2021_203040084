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

// function untuk menghapus data didalam database
function hapus($id) {
	$conn = koneksi();

	mysqli_query($conn, "DELETE FROM tupperware WHERE id = '$id'");

	return mysqli_affected_rows($conn);
}

// function untuk ubah data didalam database
function ubah($data) {
	$conn = koneksi();

	$id = htmlspecialchars($data['id']);
	$gambar = htmlspecialchars($data['gambar']);
	$nama = htmlspecialchars($data['nama']);
	$warna = htmlspecialchars($data['warna']);
	$harga = htmlspecialchars($data['harga']);
	$ukuran = htmlspecialchars($data['ukuran']);

	$query = "UPDATE tupperware SET gambar ='$gambar', nama ='$nama', warna ='$warna', harga ='$harga', ukuran ='$ukuran' WHERE id ='$id'";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function registrasi($data) {
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
		alert('username sudah digunakan');
		</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user baru
	$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
	mysqli_query($conn, $query_tambah);
	return mysqli_affected_rows($conn);
}
?>