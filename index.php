<html>
<head>
    <title>Toko Buku SKKNI</title>
</head>
<body>
    <h2>Data Buku</h2>
    <br/>
    <a href="tambah.php">+ Tambah Buku</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID Buku</th>
            <th>Kategori</th>
            <th>Nama Buku</th>
            <th>Pengarang Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Penerbit</th>
            <th colspan="2">action</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select
            
                tabel_buku.Id_Buku as Id_Buku,
                tabel_buku.Kategori as Kategori,
                tabel_buku.Nama_Buku as Nama_Buku,
                tabel_buku.Pengarang_Buku as Pengarang_Buku,
                tabel_buku.Harga as Harga,
                tabel_buku.Stok as Stok,
                tabel_buku.Id_Penerbit,
                tabel_penerbit.Id_Penerbit,
                tabel_penerbit.Nama_Penerbit as Penerbit
            
        from tabel_buku, tabel_penerbit where tabel_buku.Id_Penerbit=tabel_penerbit.Id_Penerbit");
        while($datanya = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $datanya['Id_Buku']; ?></td>
                <td><?php echo $datanya['Kategori']; ?></td>
                <td><?php echo $datanya['Nama_Buku']; ?></td>
                <td><?php echo $datanya['Pengarang_Buku']; ?></td>
                <td><?php echo $datanya['Harga']; ?></td>
                <td><?php echo $datanya['Stok']; ?></td>
                <td><?php echo $datanya['Penerbit']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $datanya['Id_Buku']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $datanya['Id_Buku']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>