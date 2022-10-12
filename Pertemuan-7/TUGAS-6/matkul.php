<?php
session_start();
if(!isset($_COOKIE['nama'])){
    setcookie('sesi', 'true', time()+10);
    header('Location: login.php');
}

//data
$matkul = [
    [
        'no' => 1,
        'kode' => 'A001',
        'matkul' => 'Pemrograman Web'
    ],
    [
        'no' => 2,
        'kode' => 'A002',
        'matkul' => 'Pemrograman Service'
    ],
    [
        'no' => 3,
        'kode' => 'A003',
        'matkul' => 'Desain Interface'
    ],
    [
        'no' => 4,
        'kode' => 'A004',
        'matkul' => 'Manajemen Database'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function pejet(){
            document.formMK.submit();//submit yang diakses dari root document 
        }
    </script>
    <title>Matkul</title>
</head>
<body>
    <table>
        <tr>
            <td>Selamat datang </td>
            <td><?= $_COOKIE['nama']; ?>
            [<a href="logout.php">Logout</a>]
            </td>
        </tr>
        <tr>
            <td>Silahkan Pilih Mata Kuliah</td>
            <td>:</td>
        </tr>
    </table>
    
    <form action="" method="post" name="formMK">
        <table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Pilih</th>
            </tr>
            <?php foreach($matkul as $mk): ?>
                <tr>
                    <td><?= $mk['kode'] ?></td>
                    <td><?= $mk['matkul'] ?></td>
                    <td>
                        <input type="checkbox" name="<?=$mk['kode']?>" value="<?= $mk['kode'].','.$mk['matkul'] ?>" >
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <!-- next button href yang menjalankan function pejet() dan mengirim data submit -->
        <a href="#" onclick="pejet();"  >Next</a>
    </form>
</body>
</html>
<?php
//apabila href next ditekan maka $_POST sudah tidak empty lagi
if(!empty($_POST)){
    $_SESSION['data'] = $_POST;
    header('Location: cetak.php');
}
?>
