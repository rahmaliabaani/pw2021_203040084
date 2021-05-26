<?php 
// mengecek apakah ada id yang dikirim
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
 	header("location: ../index.php");
 	exit;
}

require 'functions.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$tupperware = query("SELECT * FROM tupperware WHERE id = $id")[0]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan5d</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="con-detail">
	<div class="container pt-5 pb-5 text-center">
		<h1>Detail Tupperware</h1>
		<div class="row justify-content-center mt-3">
			<div class="card" style="width: 18rem;">
			  	  <img src="../assets/img/<?= $tupperware["gambar"]; ?>" class="card-img-top m-auto" alt="barang">
				  <div class="card-body">
				    <h5 class="card-title"><?= $tupperware["nama"]; ?></h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">
				    	<!-- mix warna -->
						<?php if ($tupperware["warna"] == "Toska, Merah, Kuning, Biru, Ungu, Hijau, Jingga, Hitam") { ?>
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
						<?php } else if ($tupperware["warna"] == "Toska") { ?>
								<button type="button" class="btn btn-info"></button>
						<?php } else if ($tupperware["warna"] == "Merah") { ?>
								<button type="button" class="btn btn-danger"></button>
						<?php } else if ($tupperware["warna"] == "Kuning") { ?>
								<button type="button" class="btn btn-warning"></button>
						<?php } else if ($tupperware["warna"] == "Biru") { ?>
								<button type="button" class="btn btn-primary"></button>
						<?php } else if ($tupperware["warna"] == "Ungu") { ?>
								<button type="button" class="btn" id="Ungu"></button>
						<?php } else if ($tupperware["warna"] == "Hijau") { ?>
								<button type="button" class="btn" id="Hijau"></button>
						<?php } else if ($tupperware["warna"] == "Jingga") { ?>
								<button type="button" class="btn" id="Jingga"></button>
						<?php } else if ($tupperware["warna"] == "Hitam") { ?>
								<button type="button" class="btn btn-secondary"></button>
						<!-- 2 warna -->
						<?php } else if ($tupperware["warna"] == "Toska, Merah") { ?>
								<button type="button" class="btn btn-info"></button>
								<button type="button" class="btn btn-danger"></button>	
						<?php } else if ($tupperware["warna"] == "Toska, Kuning") { ?>
								<button type="button" class="btn btn-info"></button>
								<button type="button" class="btn btn-warning"></button>
						<?php } else if ($tupperware["warna"] == "Toska, Biru") { ?>
								<button type="button" class="btn btn-info"></button>
								<button type="button" class="btn btn-primary"></button>
						<?php } else if ($tupperware["warna"] == "Toska, Ungu") { ?>
								<button type="button" class="btn btn-info"></button>
								<button type="button" class="btn" id="Ungu"></button>
						<?php } else if ($tupperware["warna"] == "Toska, Hijau") { ?>
								<button type="button" class="btn btn-info"></button>
								<button type="button" class="btn" id="Hijau"></button>
						<?php } else if ($tupperware["warna"] == "Toska, Jingga") { ?>
								<button type="button" class="btn btn-info"></button>
								<button type="button" class="btn" id="Jingga"></button>
						<?php } else if ($tupperware["warna"] == "Toska, Hitam") { ?>
								<button type="button" class="btn btn-info"></button>
								<button type="button" class="btn btn-secondary"></button>

						<?php } else if ($tupperware["warna"] == "Merah, Kuning") { ?>
								<button type="button" class="btn btn-danger"></button>
								<button type="button" class="btn btn-warning"></button>
						<?php } else if ($tupperware["warna"] == "Merah, Biru") { ?>
								<button type="button" class="btn btn-danger"></button>
								<button type="button" class="btn btn-primary"></button>
						<?php } else if ($tupperware["warna"] == "Merah, Ungu") { ?>
								<button type="button" class="btn btn-danger"></button>
								<button type="button" class="btn" id="Ungu"></button>
						<?php } else if ($tupperware["warna"] == "Merah, Hijau") { ?>
								<button type="button" class="btn btn-danger"></button>
								<button type="button" class="btn" id="Hijau"></button>
						<?php } else if ($tupperware["warna"] == "Merah, Jingga") { ?>
								<button type="button" class="btn btn-danger"></button>
								<button type="button" class="btn" id="Jingga"></button>
						<?php } else if ($tupperware["warna"] == "Merah, Hitam") { ?>
								<button type="button" class="btn btn-danger"></button>
								<button type="button" class="btn btn-secondary"></button>

						<?php } else if ($tupperware["warna"] == "Kuning, Biru") { ?>
								<button type="button" class="btn btn-warning"></button>
								<button type="button" class="btn btn-primary"></button>
						<?php } else if ($tupperware["warna"] == "Kuning, Ungu") { ?>
								<button type="button" class="btn btn-warning"></button>
								<button type="button" class="btn" id="Ungu"></button>
						<?php } else if ($tupperware["warna"] == "Kuning, Hijau") { ?>
								<button type="button" class="btn btn-warning"></button>
								<button type="button" class="btn" id="Hijau"></button>
						<?php } else if ($tupperware["warna"] == "Kuning, Jingga") { ?>
								<button type="button" class="btn btn-warning"></button>
								<button type="button" class="btn" id="Jingga"></button>
						<?php } else if ($tupperware["warna"] == "Kuning, Hitam") { ?>
								<button type="button" class="btn btn-warning"></button>
								<button type="button" class="btn btn-secondary"></button>

						<?php } else if ($tupperware["warna"] == "Biru, Ungu") { ?>
								<button type="button" class="btn btn-primary"></button>
								<button type="button" class="btn" id="Ungu"></button>
						<?php } else if ($tupperware["warna"] == "Biru, Hijau") { ?>
								<button type="button" class="btn btn-primary"></button>
								<button type="button" class="btn" id="Hijau"></button>
						<?php } else if ($tupperware["warna"] == "Biru, Jingga") { ?>
								<button type="button" class="btn btn-primary"></button>
								<button type="button" class="btn" id="Jingga"></button>
						<?php } else if ($tupperware["warna"] == "Biru, Hitam") { ?>
								<button type="button" class="btn btn-primary"></button>
								<button type="button" class="btn btn-secondary"></button>

						<?php } else if ($tupperware["warna"] == "Ungu, Hijau") { ?>
								<button type="button" class="btn" id="Ungu"></button>
								<button type="button" class="btn" id="Hijau"></button>
						<?php } else if ($tupperware["warna"] == "Ungu, Jingga") { ?>
								<button type="button" class="btn" id="Ungu"></button>
								<button type="button" class="btn" id="Jingga"></button>
						<?php } else if ($tupperware["warna"] == "Ungu, Hitam") { ?>
								<button type="button" class="btn" id="Ungu"></button>
								<button type="button" class="btn btn-secondary"></button>	

						<?php } else if ($tupperware["warna"] == "Hijau, Jingga") { ?>
								<button type="button" class="btn" id="Hijau"></button>
								<button type="button" class="btn" id="Jingga"></button>
						<?php } else if ($tupperware["warna"] == "Hijau, Hitam") { ?>
								<button type="button" class="btn" id="Hijau"></button>
								<button type="button" class="btn btn-secondary"></button>

						<?php } else if ($tupperware["warna"] == "Jingga, Hitam") { ?>
								<button type="button" class="btn" id="Jingga"></button>
								<button type="button" class="btn btn-secondary"></button>

						<?php } ?>
				    	
				    </li>
				    <li class="list-group-item">Rp. <?= number_format($tupperware["harga"]); ?></li>
				    <li class="list-group-item"><?= $tupperware["ukuran"]; ?></li>
				  </ul>
				  <div class="card-body">
					<a href="../index.php" class="btn btn-baru">Kembali</a>
				  </div>
			</div>
		</div>
	</div>
</body>
</html>