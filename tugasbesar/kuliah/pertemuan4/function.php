<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Latihan Function</title>
 </head>
 <style>
 	.btn { margin-top: 10px; }
 </style>
 <body>
 	<h1><?php echo salam(); ?></h1>
 	<br>
	<a href="index.php"><button type="submit" class="btn">Kembali</button></a>
 	
 </body>
 </html>