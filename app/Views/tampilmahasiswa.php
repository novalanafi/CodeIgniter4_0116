<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table{
            width: 100%;
        }
    </style>
</head>
<body>
    <h2> Data Mahasiswa </h2>

    <p>
        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/tambah_data') ?>'">
            Tambah Data
        </button>
    </p>

    <table border ="1">
    <thead>
    <tr>
            <th>No</th>
            <th>NIM </th>                                                          
            <th>Nama  </th>
            <th>Fakultas</th>
            <th>Jurusaan </th>
            <th>Semester</th>
            <th>Jumlah SKS </th>
            <th>Kelompok </th>
            <th>Mata Kuliah </th>
            <th>Aksi </th>
        </tr>
    </thead>

    <tbody>
        <?php
            $nomor = 0;
            foreach ($tampildata as $row):
                $nomor++;
        ?>
        <tr>
            <th><?= $nomor ?></th>
            <td><?= $row-> nim_mhs?></td>
            <td><?= $row-> nama_mhs?></td>
            <td><?= $row-> fakultas_mhs?></td>
            <td><?= $row-> jurusan_mhs?></td>
            <td><?= $row-> semester_mhs?></td>
            <td><?= $row-> jumlah_sks?></td>
            <td><?= $row-> kelompok?></td>
            <td><?= $row-> matkul?></td>
            <td>
                <button type="button" onclick="hapus('<?= $row-> nim_mhs?>')">
                    Hapus
                </button>
                <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/edit_data/'.$row->nim_mhs) ?>'">
                    Edit
                </button>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
    </table>
    <script>
        function hapus(nim) {
            pesan = confirm('Apakah Anda Yakin untuk Hapus Data Mahasiswa?');

            if(pesan){
                window.location.href=("<?= site_url('mahasiswa/hapus/') ?>") + nim;
            }
            else return false;
        }
    </script>
</body>
</html>