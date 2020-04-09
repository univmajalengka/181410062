<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PERPUSTAKAAN</title>
</head>
<body>

	<h2 align="center">DAFTAR DENDA ANGGOTA</h2>
	<table border="2" align="center">
		<tr>
			<th bgcolor="red">No</th>
			<th bgcolor="red">No_Anggota</th>
			<th bgcolor="red">Kode_Buku</th>
			<th bgcolor="red">Tanggal_Pinjam</th>
			<th bgcolor="red">Tanggal_Harus_Kembali</th>
			<th bgcolor="red">Tanggal_Kembali</th>
			<th bgcolor="red">Denda</th>
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
				<td><?php echo $d['Denda']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	</br>
	<a href="index.php"> <<< KEMBALI</a>
</body>
</html>