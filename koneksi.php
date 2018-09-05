<?php 
	$koneksi = mysql_connect("localhost","root","","db_toko_buku");
	if($koneksi)
	{
		echo "koneksi berhasil.<br/>";
	}
	else
	{
		echo "koneksi gagal.<br/>";
	}
?>