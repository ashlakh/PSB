<?php
	session_start();
	include 'koneksi.php'; 
	if($_SESSION['stat_login'] != true){
		echo '<script>window.loction="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>

	<header>
		<h1><a href="beranda.php">Admin PSB</h1>
		<ul>
			<li><a href="beranda.php">Beranda</li>
			<li><a href="data-peserta.php">Data Peserta</li>
			<li><a href="keluar.php">Keluar</li>
		</ul>
	</header>

	<section class="content">
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di PSB Online.</h3>

		</div>
	</section>
	
</body>
</html>