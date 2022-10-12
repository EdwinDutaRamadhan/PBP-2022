<?php
session_start();
if(!isset($_COOKIE['nama'])){
    setcookie('sesi', 'true', time()+10);
    header('Location: login.php');
}
if(!isset($_SESSION['data'])){
    header('Location: matkul.php');//di tendak apabila tembak langsung url setelah sesi habis
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama : </td>
            <td><?= $_COOKIE['nama']; ?></td>
        </tr>
        <tr>
            <td>Daftar Mata Kuliah </td>
            <td>:</td>
        </tr>
    </table>
    <table border='1' cellspacing='0' cellpadding='10'>
        <tr>
            <th>Kode</th>
            <th>Mata Kuliah</th>
        </tr>
        <?php foreach($_SESSION['data'] as $data): ?>
            <tr>
                <td><?= substr($data,0,4); ?></td>
                <td><?= substr($data,5); ?></td>
            </tr>
        <?php endforeach; ?>
        
    </table>
    <a href="matkul.php">done</a>
</body>
</html>