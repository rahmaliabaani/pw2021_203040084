<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Belajar PHP</title>
</head>
<body>
	<!-- PHP dalam HTML -->
	<h1>Halo, selamat datang <?php echo "Rahmalia"; ?></h1>

	<!-- HTML dalam PHP -->
	<?php echo "<h2>Halo, selamat datang juga Rahmalia</h2>";
	?>
    
    <!-- Variabel -->
	<?php $nama = "Rahmalia"; ?>
	<h3>Halo, selamat datang <?php echo $nama; ?></h3>

	<!-- Operator -->
	<!-- Aritmatika (+ - * / %) -->
	<?php 
	$x = 10;
	$y = 20;
	echo $x * $y;
	?>
    
    <br>

	<!-- Penggabung String / Concat (.) -->
	<?php 
    $nama_depan = "Rahmalia";
    $nama_belakang = "Nuursya'baani";
    echo $nama_depan . " " . $nama_belakang;
	?>

    <br>

	<!-- Assignment (= += -= *= /= %= .=) -->
	<?php
    $x = 1;
    $x += 5;
    echo $x;

    $nama = "Rahmalia";
    $nama .= " ";
    $nama .= "Nuursya'baani";
    echo $nama;
	?>

	<br>

	<!-- Perbandingan (< > <= >= == !=) tidak mengecek tipe data-->
    <?php
    var_dump(1 == 1);
    ?>

    <br>

    <!-- Identitas (=== !==) bisa mengecek tipe data-->
    <?php 
    var_dump(1 === "1");
    ?>

    <br>

    <!-- Logika (&& || !) -->
    <!-- && 2 kondisinya harus benar -->
    <?php
    $x = 10;
    var_dump($x < 20 && $x % 2 == 0);

    $x = 30;
    var_dump($x < 20 && $x % 2 == 0);
    
    // || salah satu kondisinya boleh benar
    $x = 30;
    var_dump($x < 20 || $x % 2 == 0);
    ?>
    

</body>
</html>
