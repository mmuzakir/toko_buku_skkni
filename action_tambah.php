<?php 
include 'koneksi.php';

$Id_Buku = $_POST['Id_Buku'];
$Kategori = $_POST['Kategori'];
$Nama_Buku = $_POST['Nama_Buku'];
$Pengarang = $_POST['Pengarang'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$Penerbit = $_POST['Penerbit'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tabel_buku values('$Id_Buku','$Kategori','$Nama_Buku','$Pengarang','$Harga','$Stok','$Penerbit')");
 
header("location:index.php");
 
?>