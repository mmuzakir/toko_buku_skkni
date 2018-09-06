<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Toko Buku</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Menu
                    </a>
                </li>
                <li>
                    <a href="index.php">Data Buku</a>
                </li>
                <li>
                    <a href="index_penerbit.php">Data Penerbit</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
            <div class="container-fluid">
                <h1>Data Buku</h1>
                <a href="tambah_buku.php">+ Tambah Buku</a>
                <br/>
                
                <form action="index.php" method="get">
                    <label>Cari :</label>
                    <input type="text" name="cari">
                    <input type="submit" value="Cari">
                </form>
                <?php 
                    if(isset($_GET['cari']))
                    {
                        $cari = $_GET['cari'];
                        echo "<b>Hasil pencarian : ".$cari."</b>";
                    }
                ?>
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
                        if(isset($_GET['cari']))
                        {
                            $cari = $_GET['cari'];
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
                            from tabel_buku, tabel_penerbit where (tabel_buku.Id_Penerbit=tabel_penerbit.Id_Penerbit) and (tabel_buku.Nama_Buku like '%".$cari."%')");
                        }
                        else
                        {
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
                        }
                        $no = 1;
                        while($datanya = mysqli_fetch_array($data))
                        {
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
                                <a href="edit_buku.php?Id_Buku=<?php echo $datanya['Id_Buku']; ?>">EDIT</a>
                                <a href="hapus_buku.php?Id_Buku=<?php echo $datanya['Id_Buku']; ?>">HAPUS</a>
                            </td>
                        </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>
