<!DOCTYPE html>
<html>
<head>
	<title >DAFTAR PERPUSTAKAAN</title>
</head>
<body>

	<h2 align="center">DAFTAR BUKU</h2>
	<table border="2" align="center">
		<tr>
			<th bgcolor="blue">No</th>
			<th bgcolor="blue">Kode_Buku</th>
			<th bgcolor="blue">Judul_Buku</th>
			<th bgcolor="blue">Pengarang</th>
			<th bgcolor="blue">Penerbit</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Kode_Buku']; ?></td>
				<td><?php echo $d['Judul_Buku']; ?></td>
				<td><?php echo $d['Pengarang']; ?></td>
				<td><?php echo $d['Penerbit']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
	<a href="index.php"> <<< KEMBALI</a>
</body>
</html>