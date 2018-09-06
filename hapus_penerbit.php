<?php 
include 'koneksi.php';
$Id_Penerbit = $_GET['Id_Penerbit'];
mysqli_query($koneksi,"delete from tabel_penerbit where Id_Penerbit='$Id_Penerbit'");
header("location:index_penerbit.php");
 
?>