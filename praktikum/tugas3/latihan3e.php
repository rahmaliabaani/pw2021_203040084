<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan3e</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
	.wadah {
		padding: 50px 100px;
		background-image: url("img/leaves-pattern.png");
		background-size: cover;
	}

	h6, span {
		text-align: right;
	}
	button {
		margin-top: 10px;
	}

</style>
<body>
<?php 
$tupperware = [
	["no" => "1",
	"gambar" => "1.jpg",
	"nama" => "Tupperware Kotak Makan Click to Go",
	"warna" => "Mix",
	"harga" => "170.000",
	"ukuran" => "Sedang"],
	
	["no" => "2",
	"gambar" => "2.jpg",
	"nama" => "Tupperware Magnolia Canister",
	"warna" => "Merah",
	"harga" => "258.000",
	"ukuran" => "Kecil dan Besar"],

	["no" => "3",
	"gambar" => "3.jpg",
	"nama" => "Tupperware Frozy Cozy High",
	"warna" => "Hijau",
	"harga" => "68.800",
	"ukuran" => "Kecil"],

	["no" => "4",
	"gambar" => "4.jpg",
	"nama" => "Tupperware Tall Summer Fresh",
	"warna" => "Mix",
	"harga" => "264.000",
	"ukuran" => "Sedang"],

	["no" => "5",
	"gambar" => "5.jpg",
	"nama" => "Tupperware Family Mate Square",
	"warna" => "Merah",
	"harga" => "178.000",
	"ukuran" => "Kecil"],

	["no" => "6",
	"gambar" => "6.jpg",
	"nama" => "Tupperware Groovy Bottle",
	"warna" => "Hijau dan Ungu",
	"harga" => "80.000",
	"ukuran" => "Sedang"],

	["no" => "7",
	"gambar" => "7.jpg",
	"nama" => "Tupperware Lunch Box Byo",
	"warna" => "Hitam",
	"harga" => "176.400",
	"ukuran" => "Sedang"],

	["no" => "8",
	"gambar" => "8.jpg",
	"nama" => "Tupperware Blossom Plate",
	"warna" => "Mix",
	"harga" => "175.000",
	"ukuran" => "Besar"],

	["no" => "9",
	"gambar" => "9.jpg",
	"nama" => "Tupperware Botol Susu Cutie Twee",
	"warna" => "Ungu",
	"harga" => "79.000",
	"ukuran" => "Kecil dan Sedang"],

	["no" => "10",
	"gambar" => "10.jpg",
	"nama" => "Tupperware Portable Chopstick",
	"warna" => "Mix",
	"harga" => "75.750",
	"ukuran" => "Sedang"]
];
?>

<div class="wadah">
	<h2>Katalog Tupperware</h2>
	<h6><span id="tanggalwaktu"></span></h6>

	<table class="table table-bordered">
		<tr class="table-primary">
			<th>No</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Warna</th>
			<th>Harga</th>
			<th>Ukuran</th>
		</tr>
		<?php foreach ($tupperware as $tp) { ?>
			<tr>
				<td><?php echo $tp["no"]; ?></td>
				<td>
					<img src="img/<?php echo $tp["gambar"]?>">
				</td>
				<td><?php echo $tp["nama"]; ?><br>
					<button type="button" class="btn btn-info">Detail</button>
				</td>
				<td>
					<?php if ($tp["warna"] == "Mix") { ?>
							<button type="button" class="btn btn-info"></button>
							<button type="button" class="btn btn-danger"></button>
							<button type="button" class="btn btn-warning"></button>
							<button type="button" class="btn btn-primary"></button>
							<br>
							<button type="button" class="btn" style="background-color: #6f42c1;"></button>
							<button type="button" class="btn" style="background-color: #198754;"></button>
							<button type="button" class="btn" style="background-color: #fd7e14;"></button>
							<button type="button" class="btn btn-secondary"></button>
					<?php } else if ($tp["warna"] == "Merah") { ?>
							<button type="button" class="btn btn-danger"></button>
					<?php } else if ($tp["warna"] == "Hijau") { ?>
							<button type="button" class="btn" style="background-color: #198754;"></button>
					<?php } else if ($tp["warna"] == "Hijau dan Ungu") { ?>
							<button type="button" class="btn" style="background-color: #6f42c1;"></button>
							<button type="button" class="btn" style="background-color: #198754;"></button>
					<?php } else if ($tp["warna"] == "Hitam") { ?>
							<button type="button" class="btn btn-dark"></button>
					<?php } else if ($tp["warna"] == "Ungu") { ?>
							<button type="button" class="btn" style="background-color: #6f42c1;"></button>
					<?php } ?>
				</td>
				<td>Rp. <?php echo $tp["harga"]; ?></td>
				<td><?php echo $tp["ukuran"]; ?></td>
			</tr>
		<?php } ?>
		
	</table>
</div>

<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>
</body>
</html>