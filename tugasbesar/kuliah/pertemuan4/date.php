<?php 
// date nampilin tanggal dengan format
	echo date("l, d-M-Y");

// time (unix timestamp / epoch time)
	echo time();
	echo date("l", time()-60*60*24*100);

// mktime membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,9,20,1968));

// strtotime
echo date("l", strtotime("25 aug 1985"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Date</title>
</head>
<style>
	.btn { margin-top: 10px; }
</style>
<body>
	<br>
	<a href="index.php"><button type="submit" class="btn">Kembali</button></a>
	
</body>
</html>