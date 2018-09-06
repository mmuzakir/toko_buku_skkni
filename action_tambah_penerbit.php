<?php 
include 'koneksi.php';

$Id_Penerbit = $_POST['Id_Penerbit'];
$Nama_Penerbit = $_POST['Nama_Penerbit'];
$Negara = $_POST['Negara'];
$Kota = $_POST['Kota'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tabel_penerbit values('$Id_Penerbit','$Nama_Penerbit','$Negara','$Kota')");
 
header("location:index_penerbit.php");
 
?>