<!-- Rahmalia Nuursya'baani 203040084 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan1c</title>
</head>
<style>
	div {
		background-color: salmon;
		width: 50px;
		height: 50px;
		text-align: center;
		border-radius: 100%;
		line-height: 50px;
		border: 2px solid black;
		margin-bottom: 10px;
		display: inline-block;
	}
	.button { margin-top: 10px; }
</style>
<body>
		<?php for ($baris=1; $baris <= 3; $baris++) { ?>
			<?php for ($kolom=1; $kolom <= $baris; $kolom++) { ?>
					<div><?php echo $baris ;?></div>
		  	<?php } ?>
		  <br>
		<?php }?>
	<a href="index.php"><button type="button" class="button">Kembali</button></a>

</body>
</html>