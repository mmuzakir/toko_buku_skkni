<html>
<head>
	<title>Update Data Buku</title>
</head>
<body>
 
	<h2>Update Data Buku</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/> 
	<?php
	include 'koneksi.php';
	$Id_Buku = $_GET['Id_Buku'];
	$data = mysqli_query($koneksi,"select * from tabel_buku where Id_Buku='$Id_Buku'");
	while($datanya = mysqli_fetch_array($data)){
		?>
		<form method="post" action="action_edit_buku.php">
			<table>
				<tr>			
					<td>Id Buku</td>
					<td>
						<input type="text" name="Id_Buku" value="<?php echo $datanya['Id_Buku']; ?>" readonly>
					</td>
				</tr>
				<tr>			
					<td>Kategori</td>
					<td>
						<input type="text" name="Kategori" value="<?php echo $datanya['Kategori']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Nama Buku</td>
					<td>
						<input type="text" name="Nama_Buku" value="<?php echo $datanya['Nama_Buku']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Pengarang</td>
					<td>
						<input type="text" name="Pengarang_Buku" value="<?php echo $datanya['Pengarang_Buku']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Harga</td>
					<td>
						<input type="text" name="Harga" value="<?php echo $datanya['Harga']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Stok</td>
					<td>
						<input type="text" name="Stok" value="<?php echo $datanya['Stok']; ?>">
					</td>
				</tr>
				<tr>			
				<td>Penerbit</td>
				<td>
					<?php
						include "koneksi.php";
						echo "<select name='Id_Penerbit'>";
						$query="SELECT * FROM tabel_penerbit ORDER BY Id_Penerbit";
						$tampil=mysqli_query($koneksi,$query);
						while($combo=mysqli_fetch_array($tampil))
						{
							if($combo['Id_Penerbit']==$datanya['Id_Penerbit'])
							{
								$select = 'selected';
							}
							else
							{
								$select=' ';
							};
						    echo "<option value=$combo[Id_Penerbit] ".$select." >$combo[Nama_Penerbit]</option>";
						}
						echo "</select>";
					?>
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