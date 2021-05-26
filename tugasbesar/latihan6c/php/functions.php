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

function upload() {
	$nama_file = $_FILES['gambar']['name'];
	$tipe_file = $_FILES['gambar']['type'];
	$ukuran_file = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmp_file = $_FILES['gambar']['tmp_name'];

	// ketika tidak ada gambar yg dipilih
	if ($error == 4) {
		// echo "<script>
		// alert('pilih gambar terlebih dahulu!');
		// </script>";

		return 'nofoto.png';
	}

	// cek ekstensi file
	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_gambar)) {
		echo "<script>
		alert('yang anda pilih bukan gambar!');
		</script>";

		return false;
	}

	// cek tipe file
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
		echo "<script>
		alert('yang anda pilih bukan gambar!');
		</script>";

		return false;
	}

	// cek ukuran file
	// maksimal 5Mb = 5000000
	if ($ukuran_file > 5000000) {
		echo "<script>
		alert('ukuran terlalu besar!');
		</script>";

		return false;
	}

	// lolos pengecekan
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

	return $nama_file_baru;
}

//function untuk menambahkan data didalam database
function tambah($data) {
	$conn = koneksi();

	$nama = htmlspecialchars($data['nama']);
	$warna = htmlspecialchars($data['warna']);
	$harga = htmlspecialchars($data['harga']);
	$ukuran = htmlspecialchars($data['ukuran']);
	// $gambar = htmlspecialchars($data['gambar']);

	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO tupperware VALUES('', '$gambar', '$nama', '$warna', '$harga', '$ukuran')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// function untuk menghapus data didalam database
function hapus($id) {
	$conn = koneksi();
	$tup = " ";
	// menghapus gambar di folder img
	$tup = query("SELECT * FROM tupperware WHERE id = '$id'")[0];
	if ($tup['gambar'] != 'nofoto.png') {
		unlink('../assets/img/' . $tup['gambar']);
	}

	mysqli_query($conn, "DELETE FROM tupperware WHERE id = '$id'");

	return mysqli_affected_rows($conn);
}

// function untuk ubah data didalam database
function ubah($data) {
	$conn = koneksi();

	$id = htmlspecialchars($data['id']);
	$gambar_lama = htmlspecialchars($data['gambar_lama']);
	$nama = htmlspecialchars($data['nama']);
	$warna = htmlspecialchars($data['warna']);
	$harga = htmlspecialchars($data['harga']);
	$ukuran = htmlspecialchars($data['ukuran']);

	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	if ($gambar == 'nofoto.png') {
		$gambar = $gambar_lama;
	}

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

function cari($keyword) {
	$conn = koneksi();

	$query = "SELECT * FROM tupperware WHERE nama LIKE '%$keyword%' OR warna LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR ukuran LIKE '%$keyword%'";
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}
?>