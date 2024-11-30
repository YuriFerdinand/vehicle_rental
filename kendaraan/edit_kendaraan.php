<?php
include("../koneksi.php");
$id = $_GET['kendaraan_id'];

$query = $db->query("SELECT * FROM kendaraan WHERE kendaraan_id = '$id'");
$kendaraan = $query->fetch_assoc();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Edit Data Kendaraan</title>
    </head>
    <body>
        <h3>Edit Data kendaraan</h3>
        <form action="proses_edit.php" method="POST">
             <input type="hidden" name="kendaraan_id" value="<?php echo $kendaraan['kendaraan_id']; ?>">
             <table border= "0">
                <tr>
                    <td>Tipe</td>
                    <td>
                        <input type="text" name="tipe" value="<?php echo $kendaraan['tipe']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td>
                        <input type="text" name="model" value="<?php echo $kendaraan['model']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Harga per Hari</td>
                    <td><input type="text" name="harga_per_hari" value="<?php echo $kendaraan['harga_per_hari']; ?>">
                </td>
                </tr>
             </table>
             <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </form>
    </body>
</html>