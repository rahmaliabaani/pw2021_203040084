<?php
$no = [1, 2, 3, 4, 5, 6, 7];  
$nama = ["Cristiano Ronaldo", "Lionel Messi", "Luca Modric", "Mohammad Salah", "Neymar Jr", "Sadio Mane", "Zlatan Ibrahimovic"];
$club = ["Juventus", "Barcelona", "Real Madrid", "Liverpool", "Paris Saint Germain", "Liverpool", "Ac Milan"];
$main = [100, 120, 87, 90, 109, 63, 100];
$gol = [76, 80, 12, 103, 56, 30, 10];
$assist = [30, 12, 48, 8, 15, 70, 12];
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan3d</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Club</th>
			<th>Main</th>
			<th>Gol</th>
			<th>Assist</th>
		</tr>
	<?php for ($i=0; $i<count($no); $i++) { ?>
		<tr>
			<td><?php echo "$no[$i]"; ?></td>
			<td><?php echo "$nama[$i]"; ?></td>
			<td><?php echo "$club[$i]"; ?></td>
			<td><?php echo "$main[$i]"; ?></td>
			<td><?php echo "$gol[$i]"; ?></td>
			<td><?php echo "$assist[$i]";?></td>
		</tr>
	<?php } ?>
		<tr>
			<th>#</th>
			<th colspan="2">Jumlah</th>
			<th><?php echo array_sum($main); ?></th>
			<th><?php echo array_sum($gol); ?></th>
			<th><?php echo array_sum($assist); ?></th>
		</tr>
	</table>
</body>
</html>