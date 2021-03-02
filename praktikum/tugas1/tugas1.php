<!-- Rahmalia Nuursya'baani 203040084 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas1</title>
</head>
<style>
	.warnabiru {
		background-color: lightblue;
	}
	.warnapink {
		background-color: salmon;
	}
	table {
		width: 200px;
		height: 200px;
	}
</style>
<body>
	<table border="1">
		<?php for ($baris=1; $baris <= 6; $baris++) : ?>
			<tr>
				<?php for ($kolom=1; $kolom <= 6; $kolom++) { ?>
					<?php if (($baris+ $kolom) %2 == 0) { ?>
						<td class="warnabiru"></td>
					<?php } else if(($baris+$kolom) %2 == 1) { ?>
						<td class="warnapink"></td>
					<?php } ?>
				<?php } ?>
			</tr>
		<?php endfor; ?> 
	</table>
</body>
</html>