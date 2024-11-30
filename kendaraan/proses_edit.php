<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    
    $id = $_POST['kendaraan_id'];
    $tipe = $_POST['tipe'];
    $model = $_POST['model'];
    $harga_per_hari = $_POST['harga_per_hari'];

    $sql = "UPDATE kendaraan SET
    tipe='$tipe',
    model='$model',
    harga_per_hari='$harga_per_hari'
    WHERE kendaraan_id=$id";

    $query = mysqli_query($db, $sql);
    if ($query) {
        $_SESSION['notifikasi'] = "Data kendaraan berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data kendaraan gagal diperbarui!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak. . .");
}
?>