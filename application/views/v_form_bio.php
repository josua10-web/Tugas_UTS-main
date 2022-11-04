<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <center>
        <form action="<?= base_url('biodata/cetak')?>" method="post">
        <table>
            <tr>
                <th> Biodata</th>
            </tr>
            <tr>
                <th> NIM</th>
                <th>:</th>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <th> Nama</th>
                <th>:</th>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <th> Prodi</th>
                <th>:</th>
                <td><select name="prodi" id="prodi">
                    <option value="si">Sistem Informasi</option>
                    <option value="rpl">Rekayasa Perangkat Lunak</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
            
        </table>
        </form>
    </center>
</body>
</html>