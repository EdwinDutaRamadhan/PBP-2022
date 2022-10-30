<?php
    include '../model/UserModel.php';
    $model = new UserModel();

    $nim = $_GET['nim'];
    
    $data = $model->getSingleData($nim);
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
    <form action="../controller/UpdateDataController.php" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" value="<?= $data[0]['nama'] ?>" id="nama" >
        </li>
        <li>
            <label for="nim">Nim : </label>
            <input type="text" name="nim" value="<?= $data[0]['nim'] ?>" id="nim">
        </li>
        <li>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" value="<?= $data[0]['alamat'] ?>" id="alamat">
        </li>
        <li>
            <input type="submit">
        </li>
    </ul>
    </form>
</body>
</html>