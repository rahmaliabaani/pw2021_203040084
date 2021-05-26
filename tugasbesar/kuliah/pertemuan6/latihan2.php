<?php 
// $mahasiswa = [
// 	["Rahma", "203040084", "rahma@gmail.com", "Teknik Informatika"],
// 	["Bunga", "203040088", "bunga@gmail.com", "Teknik Informatika"]];

// array associative
// definisnya sama seperti array numerik kecuali
// keynya adalah string yang kita buat sendiri

$mahasiswa = [["gambar" => "2.jpg",
			  "nama" => "Rahma",
			  "nrp" => "203040084",
			  "email" => "rahma@gmail.com",
			  "jurusan" => "Teknik Informatika"],

			  ["gambar" => "1.jpg",
			  "nama" => "Rahma",
			  "nrp" => "203040084",
			  "email" => "rahma@gmail.com",
			  "jurusan" => "Teknik Informatika"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Daftar mahasiswa</title>
</head>
<style>
	.btn { margin-top: 10px; }
</style>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $mhs) { ?>
		<ul>
			<li>
				<img src="img/<?php echo $mhs["gambar"];?>" alt="">
			</li>	
			<li>Nama : <?php echo $mhs["nama"];?></li>	
			<li>NRP : <?php echo $mhs["nrp"];?></li>	
			<li>Email : <?php echo $mhs["email"];?></li>	
			<li>Jurusan : <?php echo $mhs["jurusan"];?></li>	
		</ul>
	<?php } ?>
	
	<a href="index.php"><button type="submit" class="btn">Kembali</button></a>
</body>
</html>