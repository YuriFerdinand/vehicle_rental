<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    
    $id = $_POST['pelanggan_id'];
    $nama = $_POST['nama'];
    $nomor_lisensi = $_POST['nomor_lisensi'];

    $sql = "UPDATE pelanggan SET
    nama='$nama',
    nomor_lisensi='$nomor_lisensi'
    WHERE pelanggan_id=$id";

    $query = mysqli_query($db, $sql);
    if ($query) {
        $_SESSION['notifikasi'] = "Data pelanggan berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data pelanggan gagal diperbarui!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak. . .");
}
?>