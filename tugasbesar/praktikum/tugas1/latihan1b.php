<!-- Rahmalia Nuursya'baani 203040084 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan1b</title>
</head>
<style>
	.button { margin-top: 10px; }
</style>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th></th>
			
			<?php for ($i=1; $i <= 5; $i++) { ?>
					<th>Kolom <?php echo "$i"; ?></th> 
			<?php } ?>
			<tr>
				<?php for ($i=1; $i <= 5; $i++) { ?>
					<th>Baris <?php echo "$i"; ?></th> 
					<?php for ($j=1; $j <= 5 ; $j++) { ?>
			   	  		<td><?php echo "Baris $i, Kolom $j";?></td>
					<?php } ?>
			</tr>
				<?php } ?>
		</tr>
	</table>
	<a href="index.php"><button type="button" class="button">Kembali</button></a>

</body>
</html>