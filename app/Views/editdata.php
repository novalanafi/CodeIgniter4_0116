<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <p>
    <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/index') ?>'">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('mahasiswa/update_data') ?>

        <table>
            <tr>
                <td>NIM :</td>
                <td>
                    <input type="text" name="nim" maxlegth="13"  readonly value ="<?= $nim?>">
                </td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama" maxlegth="30" value ="<?= $nama?>">
                </td>
            </tr>
            <tr>
                <td>Fakultas :</td>
                <td>
                    <input type="text" name="fakultas" maxlegth="20" value ="<?= $fakultas?>">
                </td>
            </tr>
            <tr>
                <td>Jurusan :</td>
                <td>
                    <input type="text" name="jurusan" maxlegth="10" value ="<?= $jurusan?>">
                </td>
            </tr>
            <tr>
                <td>Semester :</td>
                <td>
                    <input type="text" name="semester" maxlegth="1" value ="<?= $semester?>"> 
                </td>
            </tr>
            <tr>
                <td>Jumlah SKS :</td>
                <td>
                    <input type="text" name="jumlah_sks" maxlegth="2" value ="<?= $jumlah_sks?>">
                </td>
            </tr>
            <tr>
                <td>Kelompok :</td>
                <td>
                    <input type="text" name="kelompok" maxlegth="1"value ="<?= $kelompok?>">
                </td>
            </tr>            <tr>
                <td>Matkul :</td>
                <td>
                    <input type="text" name="matkul" maxlegth="30" value ="<?= $matkul?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update Data">
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
    </p>
</body>
</html>