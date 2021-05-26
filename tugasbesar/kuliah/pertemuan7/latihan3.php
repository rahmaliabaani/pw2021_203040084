<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST</title>
</head>
<style>
	.btn { margin-top: 10px; }
</style>
<body>
	<?php if( isset($_POST["submit"])) { ?>
	<h1>Halo, Selamat Datang <?php echo $_POST["nama"];?></h1>
	<?php } ?>	
	


	<form action="" method="POST">
		Masukan Nama:
		<input type="text" name="nama" autocomplete="off">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>

	<a href="index.php"><button type="submit" class="btn">Kembali</button></a>
</body>
</html>