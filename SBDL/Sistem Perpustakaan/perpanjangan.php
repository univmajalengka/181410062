<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PERPUSTAKAAN</title>
</head>
<body>

	<h2 align="center">DATA PERPANJANGAN BUKU</h2>
	<table border="2" align="center">
		<tr>
			<th bgcolor="green">No</th>
			<th bgcolor="green">No_Anggota</th>
			<th bgcolor="green">Kode_Buku</th>
			<th bgcolor="green">Tanggal_Kembali</th>
			<th bgcolor="green">Tanggal_Pinjam</th>
			<th bgcolor="green">Tanggal_Harus_Pinjam</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from perpanjangan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['No_Anggota']; ?></td>
				<td><?php echo $d['Kode_Buku']; ?></td>
				<td><?php echo $d['Tanggal_Kembali']; ?></td>
				<td><?php echo $d['Tanggal_Pinjam']; ?></td>
				<td><?php echo $d['Tanggal_Harus_Kembali']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	</br>
	<a href="index.php"> <<< KEMBALI</a>
</body>
</html>