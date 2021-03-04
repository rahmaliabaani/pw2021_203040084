<!-- Rahmalia Nuursya'baani 203040084 -->
<?php 
$jawabanIsset = "digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, jika sebaliknya akan bernilai false.";
$jawabanEmpty = "digunakan untuk memeriksa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda dengan isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";

function soal($style) {
	echo "Isset adalah : ".$jawabanIsset;
	echo "Empty adalah : ".$jawabanEmpty;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan2b</title>
</head>
<style>
	.style {
		border: 1px solid black;
		width: 500px;
		padding: 7px;
	}
</style>
<body>
	<div class="style">
		<?php
			echo "<p>Isset adalah : $jawabanIsset</p>";
			echo "<p>Empty adalah : $jawabanEmpty</p>";
		?>
	</div>
</body>
</html>