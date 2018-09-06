<?php 
include 'koneksi.php';
$Id_Buku = $_GET['Id_Buku'];
mysqli_query($koneksi,"delete from tabel_buku where Id_Buku='$Id_Buku'");
header("location:index.php");
 
?>