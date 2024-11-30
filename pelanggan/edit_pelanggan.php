<?php
include("../koneksi.php");
$id = $_GET['id'];

$query = $db->query("SELECT * FROM pelanggan WHERE pelanggan_id = '$id'");
$pelanggan = $query->fetch_assoc();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Edit Data Pelanggan</title>
    </head>
    <body>
        <h3>Edit Data Pelanggan</h3>
        <form action="proses_edit.php" method="POST">
             <input type="hidden" name="pelanggan_id" value="<?php echo $pelanggan['pelanggan_id']; ?>">
             <table border= "0">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $pelanggan['nama']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Lisensi</td>
                    <td>
                        <input type="text" name="nomor_lisensi" value="<?php echo $pelanggan['nomor_lisensi']; ?>" required>
                    </td>
                </tr>
             </table>
             <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </form>
    </body>
</html>