<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$tupperware = query("SELECT * FROM tupperware WHERE nama LIKE '%$keyword%' OR warna LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR ukuran LIKE '%$keyword%'");
} else {
	$tupperware = query("SELECT * FROM tupperware");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
     <!-- my icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="con-admin">

	<!-- As a heading -->
	<nav class="navbar fixed-top navbar-light">
	  <div class="container-fluid">
	    <span class="navbar-brand mb-1 h1 text-white">Tupperware</span>
		<h6 class="text-right text-white">Admin <i class="fas fa-angle-down"></i></h6>

	  </div>
	</nav>

	<!-- container -->
	<div class="container con-admin mt-5">
		<h3>Daftar Barang</h3>
			<div class="add">
				<a href="tambah.php" class="btn btn-info">+ Data Barang</a>
			</div>
			<br>
			<form action="" method="get">
				<div class="row g-3 align-items-right">
				  <div class="col-auto">
				    <input type="text" name="keyword" class="form-control">
				  </div>
				  <div class="col-auto">
				    <button type="submit" class="btn btn-info" name="cari">Cari</button>
				  </div>
				</div>
			</form>
			

		<table class="table mt-3 table-bordered bg-light">
			<tr class="table-success">
				<th>No.</th>
				<th>Gambar</th>
				<th>Nama</th>
				<th>Warna</th>
				<th>Harga</th>
				<th>Ukuran</th>
				<th>Aksi</th>
			</tr>

			<?php if(empty($tupperware)) : ?>
				<tr>
					<td colspan="7">
						<h1>Data tidak ditemukan!</h1>
					</td>
				</tr>	
			<?php else : ?>	
				<?php $i = 1;?>
				<?php foreach ($tupperware as $tup) { ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><img src="../assets/img/<?php echo $tup['gambar']; ?>" alt=""></td>
						<td><?php echo $tup['nama']; ?></td>
						<td>
							<!-- mix warna -->
							<?php if ($tup["warna"] == "Toska, Merah, Kuning, Biru, Ungu, Hijau, Jingga, Hitam") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn btn-warning"></button>
									<button type="button" class="btn btn-primary"></button>
									<br>
									<button type="button" class="btn" id="Ungu"></button>
									<button type="button" class="btn" id="Hijau"></button>
									<button type="button" class="btn" id="Jingga"></button>
									<button type="button" class="btn btn-secondary"></button>
							<!-- 1 warna -->
							<?php } else if ($tup["warna"] == "Toska") { ?>
									<button type="button" class="btn btn-info"></button>
							<?php } else if ($tup["warna"] == "Merah") { ?>
									<button type="button" class="btn btn-danger"></button>
							<?php } else if ($tup["warna"] == "Kuning") { ?>
									<button type="button" class="btn btn-warning"></button>
							<?php } else if ($tup["warna"] == "Biru") { ?>
									<button type="button" class="btn btn-primary"></button>
							<?php } else if ($tup["warna"] == "Ungu") { ?>
									<button type="button" class="btn" id="Ungu"></button>
							<?php } else if ($tup["warna"] == "Hijau") { ?>
									<button type="button" class="btn" id="Hijau"></button>
							<?php } else if ($tup["warna"] == "Jingga") { ?>
									<button type="button" class="btn" id="Jingga"></button>
							<?php } else if ($tup["warna"] == "Hitam") { ?>
									<button type="button" class="btn btn-secondary"></button>
							<!-- 2 warna -->
							<?php } else if ($tup["warna"] == "Toska, Merah") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn btn-danger"></button>	
							<?php } else if ($tup["warna"] == "Toska, Kuning") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn btn-warning"></button>
							<?php } else if ($tup["warna"] == "Toska, Biru") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn btn-primary"></button>
							<?php } else if ($tup["warna"] == "Toska, Ungu") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn" id="Ungu"></button>
							<?php } else if ($tup["warna"] == "Toska, Hijau") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn" id="Hijau"></button>
							<?php } else if ($tup["warna"] == "Toska, Jingga") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn" id="Jingga"></button>
							<?php } else if ($tup["warna"] == "Toska, Hitam") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn btn-secondary"></button>

							<?php } else if ($tup["warna"] == "Merah, Kuning") { ?>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn btn-warning"></button>
							<?php } else if ($tup["warna"] == "Merah, Biru") { ?>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn btn-primary"></button>
							<?php } else if ($tup["warna"] == "Merah, Ungu") { ?>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn" id="Ungu"></button>
							<?php } else if ($tup["warna"] == "Merah, Hijau") { ?>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn" id="Hijau"></button>
							<?php } else if ($tup["warna"] == "Merah, Jingga") { ?>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn" id="Jingga"></button>
							<?php } else if ($tup["warna"] == "Merah, Hitam") { ?>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn btn-secondary"></button>

							<?php } else if ($tup["warna"] == "Kuning, Biru") { ?>
									<button type="button" class="btn btn-warning"></button>
									<button type="button" class="btn btn-primary"></button>
							<?php } else if ($tup["warna"] == "Kuning, Ungu") { ?>
									<button type="button" class="btn btn-warning"></button>
									<button type="button" class="btn" id="Ungu"></button>
							<?php } else if ($tup["warna"] == "Kuning, Hijau") { ?>
									<button type="button" class="btn btn-warning"></button>
									<button type="button" class="btn" id="Hijau"></button>
							<?php } else if ($tup["warna"] == "Kuning, Jingga") { ?>
									<button type="button" class="btn btn-warning"></button>
									<button type="button" class="btn" id="Jingga"></button>
							<?php } else if ($tup["warna"] == "Kuning, Hitam") { ?>
									<button type="button" class="btn btn-warning"></button>
									<button type="button" class="btn btn-secondary"></button>

							<?php } else if ($tup["warna"] == "Biru, Ungu") { ?>
									<button type="button" class="btn btn-primary"></button>
									<button type="button" class="btn" id="Ungu"></button>
							<?php } else if ($tup["warna"] == "Biru, Hijau") { ?>
									<button type="button" class="btn btn-primary"></button>
									<button type="button" class="btn" id="Hijau"></button>
							<?php } else if ($tup["warna"] == "Biru, Jingga") { ?>
									<button type="button" class="btn btn-primary"></button>
									<button type="button" class="btn" id="Jingga"></button>
							<?php } else if ($tup["warna"] == "Biru, Hitam") { ?>
									<button type="button" class="btn btn-primary"></button>
									<button type="button" class="btn btn-secondary"></button>

							<?php } else if ($tup["warna"] == "Ungu, Hijau") { ?>
									<button type="button" class="btn" id="Ungu"></button>
									<button type="button" class="btn" id="Hijau"></button>
							<?php } else if ($tup["warna"] == "Ungu, Jingga") { ?>
									<button type="button" class="btn" id="Ungu"></button>
									<button type="button" class="btn" id="Jingga"></button>
							<?php } else if ($tup["warna"] == "Ungu, Hitam") { ?>
									<button type="button" class="btn" id="Ungu"></button>
									<button type="button" class="btn btn-secondary"></button>	

							<?php } else if ($tup["warna"] == "Hijau, Jingga") { ?>
									<button type="button" class="btn" id="Hijau"></button>
									<button type="button" class="btn" id="Jingga"></button>
							<?php } else if ($tup["warna"] == "Hijau, Hitam") { ?>
									<button type="button" class="btn" id="Hijau"></button>
									<button type="button" class="btn btn-secondary"></button>

							<?php } else if ($tup["warna"] == "Jingga, Hitam") { ?>
									<button type="button" class="btn" id="Jingga"></button>
									<button type="button" class="btn btn-secondary"></button>

							<?php } ?>
						</td>
						<td><?php echo $tup['harga']; ?></td>
						<td><?php echo $tup['ukuran']; ?></td>
						<td>
							<a href="ubah.php?id=<?php echo $tup['id']?>" onclick="return confirm('Ubah data?')"><i class="fas fa-edit"></i></a> |
							<a href="hapus.php?id=<?php echo $tup['id']?>" onclick="return confirm('Hapus data?')"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<?php $i++; ?>
				<?php } ?>
			<?php endif;?>
		</table>
	</div>
</body>
</html>