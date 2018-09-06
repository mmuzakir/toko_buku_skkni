<html>
<head>
	<title>Update Data Buku</title>
</head>
<body>
 
	<h2>Update Data Buku</h2>
	<br/>
	<a href="index_penerbit.php">KEMBALI</a>
	<br/> 
	<?php
	include 'koneksi.php';
	$Id_Penerbit = $_GET['Id_Penerbit'];
	$data = mysqli_query($koneksi,"select * from tabel_penerbit where Id_Penerbit='$Id_Penerbit'");
	while($datanya = mysqli_fetch_array($data)){
		?>
		<form method="post" action="action_edit_Penerbit.php">
			<table>
				<tr>			
					<td>Id Penerbit</td>
					<td>
						<input type="text" name="Id_Penerbit" value="<?php echo $datanya['Id_Penerbit']; ?>" readonly>
					</td>
				</tr>
				<tr>			
					<td>Nama Penerbit</td>
					<td>
						<input type="text" name="Nama_Penerbit" value="<?php echo $datanya['Nama_Penerbit']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Negara</td>
					<td>
						<input type="text" name="Negara" value="<?php echo $datanya['Negara']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Kota</td>
					<td>
						<input type="text" name="Kota" value="<?php echo $datanya['Kota']; ?>">
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>	
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>