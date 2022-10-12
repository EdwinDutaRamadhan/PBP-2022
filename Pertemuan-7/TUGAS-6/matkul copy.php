<?php
session_start();
//database dump data
$matkul = [
    [
        'kode' => 'A001',
        'matkul' => 'Pemrograman Web'
    ],
    [
        'kode' => 'A002',
        'matkul' => 'Pemrograman Service'
    ],
    [
        'kode' => 'A003',
        'matkul' => 'Desain Interface'
    ],
    [
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
            document.formMK.submit();
        }
    </script>
    <title>Matkul</title>
</head>
<body>
    <p>Selamat datang <?= $_SESSION['user']; ?></p>

    <p>Silahkan Pilih Mata Kuliah</p>
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
                        <input type="checkbox" name="<?= $mk['kode'] ?>" value="<?=$mk['kode'].','. $mk['matkul'] ?>" >
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="#" onclick="pejet();"  >Next</a>
    </form>
</body>
</html>
<?php
var_dump($_POST);
if(!empty($_POST)){
    session_name();
    $_SESSION['data'] = $_POST;
    header('Location: cetak.php');
}
?>
