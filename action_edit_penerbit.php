<?php 
include 'koneksi.php';
$Id_Penerbit = $_POST['Id_Penerbit'];
$Nama_Penerbit = $_POST['Nama_Penerbit'];
$Negara = $_POST['Negara'];
$Kota = $_POST['Kota'];
 
$query= mysqli_query($koneksi,"update tabel_penerbit set Id_Penerbit='$Id_Penerbit', Nama_Penerbit='$Nama_Penerbit', Negara='$Negara', Kota='$Kota' where Id_Penerbit='$Id_Penerbit'");
if ($query) {
header("location:index_Penerbit.php");
} else {
	die('sql error : '.mysqli_error($koneksi));
}


 
?>