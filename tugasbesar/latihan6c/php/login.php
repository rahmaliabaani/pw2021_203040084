<?php 
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];

	// ambil username berdasarkan id
	$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($hash === hash('sha256', $row['id'], false)) {
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
		exit();
	}
}


// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
	header("Location: admin.php");
	exit();
}

// login
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	// mencocokan username dan password
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256', $row['id'], false);

			// jika remember me dicentang
			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time() + 60 * 60 * 24);
				$hash = hash('sha256', $row['id']);
				setcookie('hash', $hash, time() + 60 * 60 * 24);
			}
		
			if (hash('sha256', $row['id']) == $_SESSION['hash']) {
				header("Location: admin.php");
				die();
			}
			header("Location: ../index.php");
			die();
		}
	}
	$error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- font family  -->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
     <!-- my icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="con-login">
    <div class="container">
    	<div class="shadow p-5 mb-5 bg-white rounded" id="bg-login">
			<form action="" method="post">
				<?php if (isset($error)) { 
					echo "<script> alert('Username atau Password salah');
					document.location.href = '../index.php';
					</script>";
				 } ?>
				<h1 class="text-center mb-3">Tupperware</h1>
				
				<label for="username" class="form-label">Username</label>
				<input type="text" name="username" class="form-control mb-3" autocomplete="off" autofocus required>
						
				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control mb-3" required>
						
				<div class="btn-group" role="group">
				  <label class="form-label" for="btncheck1">Remember me</label>
				  <input type="checkbox" class="btn-check mt-1 ml-2 mb-3" id="btncheck1" autocomplete="off">
				</div>
				<button type="submit" name="submit" class="btn btn-info btn-block">Login</button>	
				<div class="registrasi mt-2">
					<p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
				</div>
			</form>
		</div>
    </div>       
</body>
</html>