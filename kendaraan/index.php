<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Rental Kendaraan</title>
    </head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding 10px;
        }
    </style>
    <body>
    <ul>
        <li><a href="../pelanggan\index.php">Data Pelanggan</a></li>
        <li><a href="index.php">Data Kendaraan</a></li>
    </ul>
    <h2>Data Kendaraan</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset($_SESSION['notifikasi']); ?>
    <?php endif;?> 
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Tipe</th>
                <th>Model</th>
                <th>Harga per Hari</th>
                <th><a href="tambah_kendaraan.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; 
            $query = $db->query("SELECT * FROM kendaraan");
            while ($kendaraan = $query->fetch_assoc()){
            ?>
             <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $kendaraan['tipe']?></td>
                <td><?php echo $kendaraan['model']?></td>
                <td><?php echo $kendaraan['harga_per_hari']?></td>
                <td align="center">
                <a href="edit_kendaraan.php?kendaraan_id=<?php echo $kendaraan['kendaraan_id'] ?>">Edit</a>
                <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_kendaraan.php?kendaraan_id=<?php echo $kendaraan['kendaraan_id'] ?>">Hapus</a>
                </td>
             </tr>
             <?php
            }
            ?>
        </tbody>
    </table>
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>
 </body>
</html>