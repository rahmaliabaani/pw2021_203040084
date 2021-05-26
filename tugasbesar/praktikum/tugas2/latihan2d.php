<!-- Rahmalia Nuursya'baani 203040084 -->
<?php 
function hitungDeterminan($nilai1, $nilai2, $nilai3, $nilai4) {
	$hitung = ($nilai1*$nilai4)-($nilai2*$nilai3);
	
	echo "<table style='border-left: 1px solid black; border-right: 1px solid black;' cellspacing='5' cellpadding='5'>
			<tr>
				<td>$nilai1</td>
				<td>$nilai2</td>
			</tr>
			<tr>
				<td>$nilai3</td>
				<td>$nilai4</td>
			</tr>
		</table><br>";
	echo "Determinan dari matriks tersebut adalah $hitung";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan2d</title>
</head>
<style>
	.button { margin-top: 10px; }
</style>
<body>
	<?php 
	hitungDeterminan(1,2,3,4)
	?>
	<br>
	<a href="index.php"><button type="button" class="button">Kembali</button></a>

</body>
</html>