<!DOCTYPE html>
<html>
<head>
	<title>Sistem Perpustakaan</title>
</head>
<body bgcolor="grey"> 

	
	<h1 align="CENTER">Sistem Perpustakaan</h1>
	<h3 align="CENTER">Silahkan Pilih List Menu Di Bawah Ini</h3>
	<table border="2" align="CENTER" cellpadding="10" cellspacing="1" width="500px">
		<tr>
			<th><a href="anggota.php">Anggota</a></th>
		</tr>
		<tr>
			<th><a href="buku.php">Buku</a></th>
		</tr>
		<tr>
			<th><a href="denda.php">Denda</a></th>
		</tr>
		<tr>
			<th><a href="peminjaman.php">Peminjaman</a></th>
		</tr>
		<tr>
			<th><a href="pengembalian.php">Pengembalian</a></th>
		</tr>
		<tr>
			<th><a href="perpanjangan.php">Perpanjangan</a></th>
		</tr>
		<?php 
		include 'koneksi.php';
		{
			?>
			<?php 
		}
		?>
	</table>
</body>
</html>