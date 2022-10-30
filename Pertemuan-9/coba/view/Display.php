<?php
    include '../model/UserModel.php';
    $model = new UserModel();
    $dataUser = $model->getAllData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <a href="../view/InputData.html">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach($dataUser as $data): ?>
            <tr>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><a href="../view/InsertData.php?nim=<?= $data['nim'] ?>">Update</a></td>
                <td><a href="../controller/DeleteDataController.php?nim=<?= $data['nim'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>