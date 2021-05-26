<?php 
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit();
}
// menghubungkan dengan file php lainnya
require 'functions.php';
$tupperware = query("SELECT * FROM tupperware");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
	$tupperware = cari($_POST['keyword']);
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<!-- Bootstrap CSS -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- font family  -->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
     <!-- my icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="con-admin">

	<!-- navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand mx-5" href="#">Tupperware</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
			<div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavDarkDropdown">
	      <ul class="navbar-nav">
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle mx-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Admin
	          </a>
	          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
	            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- container -->
	<div class="container con-admin mt-5">
		<h3>Daftar Barang</h3>
			<div class="add">
				<a href="tambah.php" class="btn btn-tambah text-white">+ Data Barang</a>
			</div>

		<form action="" method="POST" class="mt-2">
				<div class="row">
				  <div class="col-auto">
				    <input type="text" name="keyword" class="keyword form-control" autocomplete="off" placeholder="Masukan keyword..">
				  </div>
				  <div class="col-auto">
				    <button type="submit" class="tombol-cari btn btn-info" name="cari">Cari</button>
				  </div>
				</div>
			</form>	
		
		<div class="hasil-cari">	
			<table class="table mt-2 table-bordered bg-light">
				<tr class="table-baru text-white">
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
						<td colspan="7" class="text-danger">
							<h3>Data tidak ditemukan!</h3>
						</td>
					</tr>	
				<?php else : ?>	
					<?php $i = 1;
					foreach ($tupperware as $tup) { ?>
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
							<td>Rp. <?php echo number_format($tup['harga']); ?></td>
							<td><?php echo $tup['ukuran']; ?></td>
							<td>
								<a href="ubah.php?id=<?php echo $tup['id'];?>" onclick="return confirm('Ubah data?')"><i class="fas fa-edit"></i></a> |
								<a href="hapus.php?id=<?php echo $tup['id'];?>" onclick="return confirm('Hapus data?')"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php } ?>
				<?php endif;?>
			</table>
		</div>
	</div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>
</html>