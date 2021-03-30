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
	<title>Latihan4c</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
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
				    	<?php if ($tupperware["warna"] == "Mix") { ?>
									<button type="button" class="btn btn-info"></button>
									<button type="button" class="btn btn-danger"></button>
									<button type="button" class="btn btn-warning"></button>
									<button type="button" class="btn btn-primary"></button>
									<br>
									<button type="button" class="btn" style="background-color: #6f42c1;"></button>
									<button type="button" class="btn" style="background-color: #198754;"></button>
									<button type="button" class="btn" style="background-color: #fd7e14;"></button>
									<button type="button" class="btn btn-secondary"></button>
							<?php } else if ($tupperware["warna"] == "Merah") { ?>
									<button type="button" class="btn btn-danger"></button>
							<?php } else if ($tupperware["warna"] == "Hijau") { ?>
									<button type="button" class="btn" style="background-color: #198754;"></button>
							<?php } else if ($tupperware["warna"] == "Hijau dan Ungu") { ?>
									<button type="button" class="btn" style="background-color: #6f42c1;"></button>
									<button type="button" class="btn" style="background-color: #198754;"></button>
							<?php } else if ($tupperware["warna"] == "Hitam") { ?>
									<button type="button" class="btn btn-dark"></button>
							<?php } else if ($tupperware["warna"] == "Ungu") { ?>
									<button type="button" class="btn" style="background-color: #6f42c1;"></button>
							<?php } ?>
				    	
				    </li>
				    <li class="list-group-item">Rp. <?= $tupperware["harga"]; ?></li>
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