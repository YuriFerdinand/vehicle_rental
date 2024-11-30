<?php

session_start(); 
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $tipe = $_POST['tipe'];
    $model = $_POST['model'];
    $harga_per_hari = $_POST ['harga_per_hari'];

$sql = "INSERT INTO kendaraan (tipe, model, harga_per_hari) VALUES ('$tipe','$model','$harga_per_hari')";

$query = mysqli_query($db, $sql);

if($query) {
    $_SESSIION['notifikasi'] = "Data kendaraan berhasil ditambahkan!";
} else {
    $_SESSIION['notifikasi'] = "Data kendaraan gagal ditambahkan!";
}

header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>