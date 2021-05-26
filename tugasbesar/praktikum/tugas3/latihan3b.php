<?php 
$nama = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan3b</title>
</head>
<style>
	.button { margin-top: 10px; }
</style>
<body>
	<?php echo "Daftar pemain bola terkenal";?>
	<ol>
	<?php foreach ($nama as $pemain) { ?>	
			<li><?php echo "$pemain";?></li>	
	<?php } ?> 
	</ol>
	<?php echo "Daftar pemain bola terkenal baru";
	$nama[] = "Luca Modric";
	$nama[] = "Sadio Mane";
	sort($nama);?>
	<ol>
	<?php foreach ($nama as $pemain) { ?>	
			<li><?php echo "$pemain";?></li>	
	<?php } ?>
	</ol>

	<a href="index.php"><button type="button" class="button">Kembali</button></a>

</body>
</html>