<?php 
// Pengulangan ( for, while, do while. foreach(khusus array) )
// cek kondisi dulu baru lakukan looping
for ($i=0; $i < 5; $i++) { 
	echo "Hello Rahma <br>";
}

// cek kondisi dulu baru lakukan looping
$i = 0;
while ($i < 5) {
	echo "Hello guys <br>";
$i++;
}

// lakukan looping dulu baru cek kondisi
$i = 0;
do {
	echo "Hello semua <br>";
$i++;
} while ($i < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan 1</title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i=1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 1) { ?>
				<tr class="warna-baris">
			<?php } else { ?>
				<tr>
			<?php } ?>
			   <?php for ($j=1; $j <= 5 ; $j++) { ?>
			   	  <td><?php echo "$i, $j";?></td>
			   <?php } ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>