<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PERPUSTAKAAN</title>
</head>
<body>

	<h2 align="CENTER">DATA PENGEMBALIAN BUKU</h2>
	<table border="2" align="CENTER">
		<tr>
			<th bgcolor="purple">No</th>
			<th bgcolor="purple">No_Anggota</th>
			<th bgcolor="purple">Kode_Buku</th>
			<th bgcolor="purple">Tanggal_Pinjam</th>
			<th bgcolor="purple">Tanggal_Harus_Kembali</th>
			<th bgcolor="purple">Tanggal_Kembali</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from denda");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['No_Anggota']; ?></td>
				<td><?php echo $d['Kode_Buku']; ?></td>
				<td><?php echo $d['Tanggal_Pinjam']; ?></td>
				<td><?php echo $d['Tanggal_Harus_Kembali']; ?></td>
				<td><?php echo $d['Tanggal_Kembali']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
	</br>
	<a href="index.php"> <<< KEMBALI</a>
</body>
</html>