<?php

session_start(); 
include("../koneksi.php");

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nomor_lisensi = $_POST['nomor_lisensi'];

$sql = "INSERT INTO pelanggan (nama, nomor_lisensi) VALUES ('$nama','$nomor_lisensi')";

$query = mysqli_query($db, $sql);

if($query) {
    $_SESSIION['notifikasi'] = "Data pelanggan berhasil ditambahkan!";
} else {
    $_SESSIION['notifikasi'] = "Data pelanggan gagal ditambahkan!";
}

header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>