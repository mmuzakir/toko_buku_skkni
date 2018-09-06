<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>

	<h2>Tambah Data Buku</h2>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form method="post" action="action_tambah_buku.php">
		<table>
			<tr>			
				<td>Id Buku</td>
				<td><input type="text" name="Id_Buku"></td>
			</tr>
			<tr>			
				<td>Kategori</td>
				<td><input type="text" name="Kategori"></td>
			</tr>
			<tr>			
				<td>Nama Buku</td>
				<td><input type="text" name="Nama_Buku"></td>
			</tr>
			<tr>			
				<td>Pengarang</td>
				<td><input type="text" name="Pengarang"></td>
			</tr>
			<tr>			
				<td>Harga</td>
				<td><input type="text" name="Harga"></td>
			</tr>
			<tr>			
				<td>Stok</td>
				<td><input type="text" name="Stok"></td>
			</tr>
			<tr>			
				<td>Penerbit</td>
				<td>
					<?php
						include "koneksi.php";
						echo "<select name='Penerbit'>";
						$query="SELECT * FROM tabel_penerbit ORDER BY Id_Penerbit";
						$tampil=mysqli_query($koneksi,$query);
						while($combo=mysqli_fetch_array($tampil))
						{
						    echo "<option value=$combo[Id_Penerbit] selected>$combo[Nama_Penerbit]</option>";
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
</body>
</html>