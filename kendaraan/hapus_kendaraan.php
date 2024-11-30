<?php
session_start(); 
include("../koneksi.php");

if (isset($_GET['kendaraan_id'])){
    
    $id = $_GET['kendaraan_id'];

    $sql = "DELETE FROM kendaraan WHERE kendaraan_id=$id";
    $query = mysqli_query($db, $sql);

    if ($query){
        $_SESSION['notifikasi'] = "Data kendaraan berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data kendaraan gagal dihapus!";
    }

    header('location: index.php');
} else {
    die("Akses ditolak. . .");
}
?>