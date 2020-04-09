<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR PERPUSTAKAAN</title>
</head>
<body>

	<h2 align="CENTER">DATA ANGGOTA</h2>
	<table border="2" align="CENTER">
		<tr>
			<th bgcolor="Yellow">No</th>
			<th bgcolor="Yellow">No_Anggota</th>
			<th bgcolor="Yellow">Nama</th>
			<th bgcolor="Yellow">Tempat_Lahir</th>
			<th bgcolor="Yellow">Tanggal_Lahir</th>
			<th bgcolor="Yellow">Alamat</th>
			<th bgcolor="Yellow">No_Telepon</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from anggota");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['No_Anggota']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Tempat_Lahir']; ?></td>
				<td><?php echo $d['Tanggal_Lahir']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td><?php echo $d['No_Telepon']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	</br>
	<a href="index.php"> <<< KEMBALI</a>
</body>
</html>