<?php 
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit();
}

require 'functions.php';

$id = $_GET['id'];
$tup = query("SELECT * FROM tupperware WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script> alert('Data berhasil diubah!');
		document.location.href = 'admin.php';
		</script>";
	} else {
		echo "<script> alert('Data gagal diubah!');
		document.location.href = 'admin.php';
		</script>";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
     <!-- my icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="con-tambah">
	<!-- As a heading -->
	<nav class="navbar fixed-top navbar-light">
	  <div class="container-fluid">
	    <span class="navbar-brand mb-1 h1 text-white">Tupperware</span>
		<h6 class="text-right text-white">Admin <i class="fas fa-angle-down"></i></h6>

	  </div>
	</nav>

	<div class="container pt-5">
        <div class="shadow p-5 mb-5 mt-4 bg-white rounded">
			<h3>Form Ubah Data Barang</h3>
             <form action="" method="POST">
             	<div class="row">
             			<div class="mb-3">
							<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $tup['id'];?>">
			            </div>
             		<div class="col-md-6">
             			
             			<div class="mb-3">
			                <label for="gambar" class="form-label">Gambar :</label>
							<input type="text" class="form-control" name="gambar" id="gambar" value="<?php echo $tup['gambar'];?>">
			            </div>
			            <div class="mb-3">
			                <label for="nama" class="form-label">Nama :</label>
							<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $tup['nama'];?>">
			            </div>
			            <div class="mb-3">
			                <label for="warna" class="form-label">Warna :</label>
							<select name="warna" class="form-control" id="warna">
								<option value="<?php echo $tup['warna']; ?>"><?php echo $tup['warna']; ?></option>
								<option value="">----- Pilih Warna -----</option>
								<!-- Mix -->
								<option value="">----- Mix Warna -----</option>
								<option value="Toska, Merah, Kuning, Biru, Ungu, Hijau, Jingga, Hitam">Toska, Merah, Kuning, Biru, Ungu, Hijau, Jingga, Hitam</option>
								<!-- 1 warna -->
								<option value="">----- 1 Warna -----</option>
								<option value="Toska">Toska</option>
								<option value="Merah">Merah</option>
								<option value="Kuning">Kuning</option>
								<option value="Biru">Biru</option>
								<option value="Ungu">Ungu</option>
								<option value="Hijau">Hijau</option>
								<option value="Jingga">Jingga</option>
								<option value="Hitam">Hitam</option>
								<!-- 2 ukuran -->
								<option value="">----- 2 Warna -----</option>
								<option value="Toska, Merah">Toska, Merah</option>
								<option value="Toska, Kuning">Toska, Kuning</option>
								<option value="Toska, Biru">Toska, Biru</option>
								<option value="Toska, Ungu">Toska, Ungu</option>
								<option value="Toska, Hijau">Toska, Hijau</option>
								<option value="Toska, Jingga">Toska, Jingga</option>
								<option value="Toska, Hitam">Toska, Hitam</option>

								<option value="Merah, Kuning">Merah, Kuning</option>
								<option value="Merah, Biru">Merah, Biru</option>
								<option value="Merah, Ungu">Merah, Ungu</option>
								<option value="Merah, Hijau">Merah, Hijau</option>
								<option value="Merah, Jingga">Merah, Jingga</option>
								<option value="Merah, Hitam">Merah, Hitam</option>

								<option value="Kuning, Biru">Kuning, Biru</option>
								<option value="Kuning, Ungu">Kuning, Ungu</option>
								<option value="Kuning, Hijau">Kuning, Hijau</option>
								<option value="Kuning, Jingga">Kuning, Jingga</option>
								<option value="Kuning, Hitam">Kuning, Hitam</option>

								<option value="Biru, Ungu">Biru, Ungu</option>
								<option value="Biru, Hijau">Biru, Hijau</option>
								<option value="Biru, Jingga">Biru, Jingga</option>
								<option value="Biru, Hitam">Biru, Hitam</option>

								<option value="Ungu, Hijau">Ungu, Hijau</option>
								<option value="Ungu, Jingga">Ungu, Jingga</option>
								<option value="Ungu, Hitam">Ungu, Hitam</option>

								<option value="Hijau, Jingga">Hijau, Jingga</option>
								<option value="Hijau, Hitam">Hijau, Hitam</option>

								<option value="Jingga, Hitam">Jingga, Hitam</option>
							</select>
			            </div>
             		</div>

             		<div class="col-md-6">
             			<div class="mb-3">
			                <label for="harga" class="form-label">Harga :</label><br>
							<input type="number" class="form-control" name="harga" id="harga" value="<?php echo $tup['harga'];?>">
			            </div>
			            <div class="mb-3">
							<label for="ukuran" class="form-label">Ukuran :</label>
							<select name="ukuran" class="form-control" id="ukuran">
								<option value="<?php echo $tup['ukuran'];?>"><?php echo $tup['ukuran'];?></option>
								<option value="">----- Pilih Ukuran -----</option>
								<!-- 1 ukuran -->
								<option value="Kecil">Kecil</option>
								<option value="Sedang">Sedang</option>
								<option value="Besar">Besar</option>
								<!-- 2 ukuran -->
								<option value="Kecil, Sedang">Kecil, Sedang</option>
								<option value="Sedang, Besar">Sedang, Besar</option>
								<option value="Kecil, Besar">Kecil, Besar</option>
							</select>
						</div>
						<br>
						<button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>
						<button type="submit" class="btn btn-danger">
							<a href="../index.php" class="text-white" id="btn-kembali">Kembali</a>
						</button>
             		</div>
             	</div>
            </form>
        </div>
    </div>			
</body>
</html>