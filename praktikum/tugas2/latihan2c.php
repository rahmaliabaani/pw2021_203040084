<!-- Rahmalia Nuursya'baani 203040084 -->
<?php 
function tumpukanBola($tumpukan) {
	 for ($baris=1; $baris <= 5; $baris++) { 
			 for ($kolom=1; $kolom <= $baris; $kolom++) { 
					echo "<div>$baris</div>" ;
		  	 } 
		  echo "<br>";
		 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan2c</title>
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
		margin: 1px;
		display: inline-block;

	}
</style>
<body>
		<?php 
		tumpukanBola(5)
		?>
</body>
</html>