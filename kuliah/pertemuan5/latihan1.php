<?php 
// array variabel yg dapat memiliki banyak nilai
// cara lama buat array
// elemen array boleh tipedata beda
// echo tidak bisa mencetak array
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump / print_r
var_dump($hari);
echo "<br>";
print_r($bulan);

// menampilkan 1 elemen bisa pake echo
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>