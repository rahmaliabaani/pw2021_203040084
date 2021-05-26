<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST</title>
</head>
<style>
	.btn {margin-top: 10px;}
</style>
<body>
	<h1>Selamat datang, <?php echo $_POST["nama"];?>!</h1>
	<a href="index.php"><button type="submit" class="btn">Kembali</button></a>

</body>
</html>