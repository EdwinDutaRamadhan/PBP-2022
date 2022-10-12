<?php
session_start();
if(!isset($_SESSION['nama'])){
    header('Location: fe_session.html');
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JADWAL KULIAH</title>
</head>
<body>
    <h3>Halaman Jadwal Kuliah</h3>
    <p>Selamat datang <?= $_SESSION['nama'] ?></p>
    <u>
        <li>
            <a href="rmk.php">RMK</a>
        </li>
        <li>
            <a href="tagihan.php">Tagihan</a>
        </li>
        <li>
            <a href="jadwal.php">Jadwal Kuliah</a>
        </li>
        <li>
            <a href="transkrip.php">Transkrip</a>
        </li>
        <li>
            <a href="logout.php">Logout</a>
        </li>
    </u>
</body>
</html>
