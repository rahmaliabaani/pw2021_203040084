<?php 
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
$tupperware = query("SELECT * FROM tupperware");
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container pb-5">
		<div class="judul text-center pt-5">
			<h1>Daftar Tupperware</h1>
		</div>
			<div class="row justify-content-center">
				<?php foreach ($tupperware as $tup) { ?>
					<div class="card mt-3 mr-3" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">
					    	<p class="nama">
								<?php echo $tup["nama"]; ?>
							</p>
						</h5>
					    <a href="php/detail.php?id=<?= $tup['id']; ?>" class="btn btn-info">Detail</a>
					  </div>
					</div>
				<?php } ?>
			</div>
	</div>
</body>
</html>