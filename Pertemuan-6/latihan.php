<?php
    $data = [
        [
        "no" => 1,
        "nim"=> '001',
        "nama"=> 'Adnan',
        "ipk"=> 3.9
        ],
        [
        "no" => 2,
        "nim"=> '002',
        "nama"=> 'Cahyo',
        "ipk"=> 3.8
        ],
        [
        "no" => 3,
        "nim"=> '003',
        "nama"=> 'Andrew',
        "ipk"=> 3.7
        ],
        [
        "no" => 4,
        "nim"=> '004',
        "nama"=> 'Dimas',
        "ipk"=> 3.6
        ],
        [
        "no" => 5,
        "nim"=> '005',
        "nama"=> 'Rachel',
        "ipk"=> 3.7
        ]
     ];
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container md-5">
    <form action="" method="post">
        <label for="cari">Filter NIM </label>
        <input type="text" name="search" placeholder="Masukkan NIM"  id="cari">
        <input type="submit" name="submit">
    </form>
    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>IPk</td>
        </tr>
        <br>
        <?php if(isset($_POST["submit"])):?>
            <?php if(isset($_POST["search"])): ?>
                <?php $search = $_POST["search"];?>
            <?php foreach($data as $dat) :  ?>
                <?php if($dat['nim'] == $search): ?>
                    <tr>
                        <td><?= $dat['no']; ?></td>
                        <td><?= $dat['nim']; ?></td>
                        <td><?= $dat['nama']; ?></td>
                        <td><?= $dat['ipk']; ?></td>
                    </tr>
                <?php endif; ?>  
            <?php endforeach; ?>
            <?php if($_POST["search"]== ''): ?>
                <?php foreach($data as $dat) :  ?>
                    <tr>
                        <td><?= $dat['no']; ?></td>
                        <td><?= $dat['nim']; ?></td>
                        <td><?= $dat['nama']; ?></td>
                        <td><?= $dat['ipk']; ?></td>
                    </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php endif; ?>
        <?php else : ?>
            <?php foreach($data as $dat) :  ?>
                <tr>
                    <td><?= $dat['no']; ?></td>
                    <td><?= $dat['nim']; ?></td>
                    <td><?= $dat['nama']; ?></td>
                    <td><?= $dat['ipk']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
    </div>
</body>
</html>
