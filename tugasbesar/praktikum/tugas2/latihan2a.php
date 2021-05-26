<!-- Rahmalia Nuursya'baani 203040084 -->
<?php 
function gantiStyle($tulisan, $style1 = 0, $style2 = 0) {
	echo $tulisan;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan2a</title>
</head>
<style>
	.style1 {
		font-size: 28px;
		font-family: arial;
		color: #8c782d;
		font-weight: bolder;
		font-style: italic;
	}
	.style2 {
		border: 1px solid black;
		box-shadow: 0px 0px 8px 4px lightgrey;
		width: 500px;
		border-radius: 5px;
		padding: 8px;
	}
	.button { margin-top: 10px; }
</style>
<body>
	<div class="style1 style2"><?php gantiStyle("Selamat datang di praktikum PW");?></div>
	<a href="index.php"><button type="button" class="button">Kembali</button></a>

</body>
</html>