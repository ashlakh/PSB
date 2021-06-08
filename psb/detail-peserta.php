<?php
session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.loction="login.php"</script>';
	}
	$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($peserta);
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
		<h2>Detail Peserta</h2>
		<div class="box">
			<table class="table-data" border="0">
				<tr>
					<td>Kode Pendaftaran</td>
					<td>:</td>
					<td><?php echo $p->id_pendaftaran ?></td>
				</tr>
				<tr>
					<td>Tahun Ajaran</td>
					<td>:</td>
					<td><?php echo $p->th_ajaran ?></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><?php echo $p->jurusan ?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $p->nm_peserta ?></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $p->jk ?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:</td>
					<td><?php echo $p->agama ?></td>
				</tr>
				<tr>
					<td>Alamat Lengkap</td>
					<td>:</td>
					<td><?php echo $p->almt_peserta ?></td>
				</tr>
	</table>

		</div>
	</section>
	
</body>
</html>