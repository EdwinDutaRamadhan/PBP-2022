<?php
    include '../model/KstModel.php';
    include '../model/UserModel.php';
    $model = new KstModel();
    $data = $model->getAll_KST();

    session_start();
    $userModel = new UserModel();
    $userData = $userModel->getNama_nim($_SESSION['nim']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Studi Tetap</title>
</head>
<body>
    <p>Kartu Studi Tetap</p>
    <h3><?= $userData['nim'].' | '.$userData['nama']; ?></h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Kode</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Mata Kuliah</th>
            <th>Dosen</th>
            <th>Detail</th>
        </tr>
        <?php foreach($data as $kst): ?>
            <tr>
                <td><?= $kst['kode']; ?></td>
                <td><?= $kst['hari']; ?></td>
                <td><?= $kst['jam']; ?></td>
                <td><?= $kst['matkul']; ?></td>
                <td><?= $kst['dosen']; ?></td>
                <td><a href="../controller/detail.php/?kode=<?= $kst['kode']; ?>">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>