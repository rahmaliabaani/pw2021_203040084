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
	<title>Tubes</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- font family  -->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand ml-5" href="#">Tupperware</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavDarkDropdown">
	      <ul class="navbar-nav">
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Admin
	          </a>
	          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
	            <li><a class="dropdown-item" href="php/login.php">Login</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- isi -->
	<section class="isi mb-3" id="isi">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-12 text-center mt-5 mb-1">
					<h3>Daftar Tupperware</h3>
				</div>
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
						    <a href="php/detail.php?id=<?= $tup['id'] ?>" class="btn btn-info">Detail</a>
						  </div>
						</div>
					<?php } ?>
				</div>
		</div>
	</section>
	

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>