<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>
	<section class="box-formulir">

		<h2>Pendaftaran Berhasil</h2>

		<div class="box">
			<h4>Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
			<a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
		</div>

	</section>

</body>
</html>