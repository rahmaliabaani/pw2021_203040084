<?php
$host="localhost";
$user="root";
$password="";
$database="pw_tubes_203040084";
$koneksi=new mysqli($host,$user,$password,$database);

// melakukan query dari database
$result = mysqli_query($koneksi, "SELECT * FROM tupperware");
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan4a</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
		<?php $i = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<img src="assets/img/<?= $row["gambar"];?> ">
				</td>
				<td><?php echo $row["nama"]; ?><br></td>
				<td>
					<?php if ($row["warna"] == "Mix") { ?>
							<button type="button" class="btn btn-info"></button>
							<button type="button" class="btn btn-danger"></button>
							<button type="button" class="btn btn-warning"></button>
							<button type="button" class="btn btn-primary"></button>
							<br>
							<button type="button" class="btn" style="background-color: #6f42c1;"></button>
							<button type="button" class="btn" style="background-color: #198754;"></button>
							<button type="button" class="btn" style="background-color: #fd7e14;"></button>
							<button type="button" class="btn btn-secondary"></button>
					<?php } else if ($row["warna"] == "Merah") { ?>
							<button type="button" class="btn btn-danger"></button>
					<?php } else if ($row["warna"] == "Hijau") { ?>
							<button type="button" class="btn" style="background-color: #198754;"></button>
					<?php } else if ($row["warna"] == "Hijau dan Ungu") { ?>
							<button type="button" class="btn" style="background-color: #6f42c1;"></button>
							<button type="button" class="btn" style="background-color: #198754;"></button>
					<?php } else if ($row["warna"] == "Hitam") { ?>
							<button type="button" class="btn btn-dark"></button>
					<?php } else if ($row["warna"] == "Ungu") { ?>
							<button type="button" class="btn" style="background-color: #6f42c1;"></button>
					<?php } ?>
				</td>
				<td>Rp. <?php echo $row["harga"]; ?></td>
				<td><?php echo $row["ukuran"]; ?></td>
			</tr>
			<?php $i++ ?>
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