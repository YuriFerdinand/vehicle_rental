<!DOCTYPE HTML>
<html>
    <head>
        <title>Tambah Data Kendaraan</title>
    </head>
    <body>
        <h3>Tambah Data Kendaraan</h3>
        <form action="proses_tambah.php" method="POST">
            <table border="0">
                <tr>
                    <td>Tipe</td>
                    <td><input type="text" name="tipe" required></td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td><input type="text" name="model" required></td>
                </tr>
                <tr>
                    <td>Harga per Hari</td>
                    <td><input type="text" name="harga_per_hari"></td>
                </tr>
            </table>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
    </body>
</html>