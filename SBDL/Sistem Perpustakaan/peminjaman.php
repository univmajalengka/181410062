<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PERPUSTAKAAN</title>
</head>
<body>

	<h2 align="center">DATA PEMINJAMAN BUKU</h2>
	<table border="2" align="center">
		<tr>
			<th bgcolor="orange">No</th>
			<th bgcolor="orange">No_Anggota</th>
			<th bgcolor="orange">Kode_Buku</th>
			<th bgcolor="orange">Tanggal_Pinjam</th>
			<th bgcolor="orange">Tanggal_Harus_Kembali</th>
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from peminjaman");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['No_Anggota']; ?></td>
				<td><?php echo $d['Kode_Buku']; ?></td>
				<td><?php echo $d['Tanggal_Pimjam']; ?></td>
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