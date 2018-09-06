<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Penerbit Buku</title>
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
                <h1>Data Penerbit Buku</h1>
                <a href="tambah_penerbit.php">+ Tambah Penerbit</a>
                <br/>
                
                <form action="index_penerbit.php" method="get">
                    <label>Cari :</label>
                    <input type="text" name="cari">
                    <input type="submit" value="cari">
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
                        <th>ID Penerbit</th>
                        <th>Nama Penerbit</th>
                        <th>Negara</th>
                        <th>Kota</th>
                        <th colspan="2">action</th>
                    </tr>
                    <?php 
                        include 'koneksi.php';
                        if(isset($_GET['cari']))
                        {
                            $cari = $_GET['cari'];
                            $data = mysqli_query($koneksi,"select * from tabel_penerbit where Nama_Penerbit like '%".$cari."%')");
                        }
                        else
                        {
                            $data = mysqli_query($koneksi,"select * from tabel_penerbit");
                        }
                        $no = 1;
                        while($datanya = mysqli_fetch_array($data))
                        {
                    ?>
                           <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $datanya['Id_Penerbit']; ?></td>
                            <td><?php echo $datanya['Nama_Penerbit']; ?></td>
                            <td><?php echo $datanya['Negara']; ?></td>
                            <td><?php echo $datanya['Kota']; ?></td>
                            <td>
                                <a href="edit_penerbit.php?Id_Penerbit=<?php echo $datanya['Id_Penerbit']; ?>">EDIT</a>
                                <a href="hapus_penerbit.php?Id_Penerbit=<?php echo $datanya['Id_Penerbit']; ?>">HAPUS</a>
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
