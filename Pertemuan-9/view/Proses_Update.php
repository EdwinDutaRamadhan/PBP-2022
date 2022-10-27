<?php
include '../kelas/Kelas_Siswa.php';
$model = new Database();
$nis = $_GET['nis'];
$data = $model->singleData($nis);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/Proses_Update.php" method="post">
        <ul>
            <li>
                <input type="hidden" name="nis" value="<?= $data[0]['nis'] ?>">
            </li>
            <li>
                <input type="text" name="nama" value="<?= $data[0]['nama'] ?>">
            </li>
            <li>
                <input type="date" name="tanggal_lahir" value="<?= $data[0]['tanggal_lahir'] ?>">
            </li>
            <li>
                <input type="submit" value="Update">
            </li>
        </ul>
    </form>
</body>
</html>