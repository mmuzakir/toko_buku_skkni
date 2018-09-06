<?php 
include 'koneksi.php';
$Id_Buku = $_POST['Id_Buku'];
$Kategori = $_POST['Kategori'];
$Nama_Buku = $_POST['Nama_Buku'];
$Pengarang = $_POST['Pengarang_Buku'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$Id_Penerbit = $_POST['Id_Penerbit'];
 
$query= mysqli_query($koneksi,"update tabel_buku set Id_Buku='$Id_Buku', Kategori='$Kategori', Nama_Buku='$Nama_Buku', Pengarang_Buku='$Pengarang', Harga='$Harga', Stok='$Stok', Id_Penerbit='$Id_Penerbit' where Id_Buku='$Id_Buku'");
if ($query) {
header("location:index.php");
} else {
	die('sql error : '.mysqli_error($koneksi));
}


 
?>