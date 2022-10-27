<?php
include '../kelas/Kelas_Siswa.php';

$koneksi = new Database();
$dataSiswa = $koneksi->tampilkan(); 
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <!-- <th>NO</th> -->
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach($dataSiswa as $data): ?>
            <tr>
                <!-- <td><?= $i; ?></td> -->
                <td><?= $data['nis'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['tanggal_lahir'] ?></td>
                
                <td><a href="../controller/Proses_Hapus.php?nis=<?= $data['nis'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data');">delete</a></td>
                <td><a href="../view/Proses_Update.php?nis=<?= $data['nis'] ?>">update</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
