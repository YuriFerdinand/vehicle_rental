<!DOCTYPE HTML>
<html>
    <head>
        <title>Tambah Pelanggan</title>
    </head>
    <body>
        <h3>Tambah Pelanggan</h3>
        <form action="proses_tambah.php" method="POST">
            <table border="0">
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Nomor Lisensi</td>
                    <td><input type="text" name="nomor_lisensi" required></td>
                </tr>
            </table>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
    </body>
</html>