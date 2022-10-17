<?php
include '../model/KstModel.php';
include '../model/UserModel.php';
$kode = $_GET['kode'];
$model = new KstModel();
$data = $model->getDetail($kode);

session_start();
$userModel = new UserModel();
$userData = $userModel->getnama_nim($_SESSION['nim']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
<p>Kartu Studi Tetap</p>
    <h3><?= $userData['nim'].' | '.$userData['nama']; ?></h3>
    <table>
        <tr>
            <td>Mata Kuliah</td>
            <td> : <?= $data['matkul']; ?></td>
        </tr>
        <tr>
            <td>Hari</td>
            <td> : <?= $data['hari'];?></td>
        </tr>
        <tr>
            <td>Jam</td>
            <td> : <?= $data['jam']; ?></td>
        </tr>
        <tr>
            <td>Dosen</td>
            <td> : <?= $data['dosen']; ?></td>
        </tr>
    </table>
    <a href="../kst.php">back</a>
</body>
</html>