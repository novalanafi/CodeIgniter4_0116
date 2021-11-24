<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <p>
    <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/index') ?>'">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('mahasiswa/simpan_data') ?>

        <table>
            <tr>
                <td>NIM :</td>
                <td>
                    <input type="text" name="nim" maxlegth="13" autofocus>
                </td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama" maxlegth="30">
                </td>
            </tr>
            <tr>
                <td>Fakultas :</td>
                <td>
                    <input type="text" name="fakultas" maxlegth="20">
                </td>
            </tr>
            <tr>
                <td>Jurusan :</td>
                <td>
                    <input type="text" name="jurusan" maxlegth="10">
                </td>
            </tr>
            <tr>
                <td>Semester :</td>
                <td>
                    <input type="text" name="semester" maxlegth="1">
                </td>
            </tr>
            <tr>
                <td>Jumlah SKS :</td>
                <td>
                    <input type="text" name="jumlah_sks" maxlegth="2">
                </td>
            </tr>
            <tr>
                <td>Kelompok :</td>
                <td>
                    <input type="text" name="kelompok" maxlegth="1">
                </td>
            </tr>            <tr>
                <td>Matkul :</td>
                <td>
                    <input type="text" name="matkul" maxlegth="30">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan Data">
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
    </p>
</body>
</html>