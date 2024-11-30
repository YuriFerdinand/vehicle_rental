<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Pelanggan</title>
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
        <li><a href="../kendaraan\index.php">Data Kendaraan</a></li>
        <li><a href="index.php">Data Pelanggan</a></li>
    </ul>
    <h2>Data Pelanggan</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset($_SESSION['notifikasi']); ?>
    <?php endif;?> 
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Nomor Lisensi</th>
                <th><a href="tambah_pelanggan.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; 
            $query = $db->query("SELECT * FROM pelanggan");
            while ($pelanggan = $query->fetch_assoc()){
            ?>
             <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $pelanggan['nama']?></td>
                <td><?php echo $pelanggan['nomor_lisensi']?></td>
                <td align="center">
                <a href="edit_pelanggan.php?id=<?php echo $pelanggan['pelanggan_id'] ?>">Edit</a>
                <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_pelanggan.php?id=<?php echo $pelanggan['pelanggan_id'] ?>">Hapus</a>
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