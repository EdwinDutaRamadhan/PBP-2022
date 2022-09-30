<?php
    $total = 0;
    $data[0]['no'] = 1;$data[0]['barang'] = "KEYBOARD";$data[0]['harga'] = 80000;
    $data[1]['no'] = 2;$data[1]['barang'] = "MOUSE";$data[1]['harga'] = 100000;
    $data[2]['no'] = 3;$data[2]['barang'] = "MONITOR";$data[2]['harga'] = 600000;
    $data[3]['no'] = 4;$data[3]['barang'] = "PRINTER";$data[3]['harga'] = 1000000;
    $data[4]['no'] = 5;$data[4]['barang'] = "SPEAKER";$data[4]['harga'] = 300000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table-output tr td{
            font-size : 12px;
            padding-left: 15px;
            padding-right: 15px;
        }
        .header td{
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>
<body>
<form action="" method="post">
        <table  border="1" cellspacing="0" cellpadding="10" >
            <tr class ="header">
                <td>NO</td>
                <td>NAMA BARANG</td>
                <td>HARGA</td>
                <td>BELI</td>
            </tr>
            <?php for($i = 0; $i < 5; $i++): ?>
            <tr>
                <td><?=$data[$i]['no'];?></td>
                <td><?=$data[$i]['barang'];?></td>
                <td><?=$data[$i]['harga'];?></td>
                <td><input type="checkbox" name="data<?= $i; ?>" value="<?= $data[$i]['barang']; ?>"></td>
            </tr>
            <?php endfor; ?>
        </table>
        <br>
        <input type="submit" name="submit" value="beli">
    </form>
    <?php if(isset($_POST["submit"])) : ?>
        <br>
        <table class="table-output" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td colspan="2" >KERANJANG BELANJA</td>
            </tr>
        <?php if(isset($_POST["data-1"])) : ?>
            <?php $total += $data[0]['harga']; ?>
            <tr>
                <td><?= $data[0]["barang"]; ?></td>
                <td><?= $data[0]["harga"]; ?></td>
            </tr>
        <?php endif; ?>
        <?php if(isset($_POST["data-2"])) : ?>
            <?php $total += $data[1]['harga']; ?>
            <tr>
                <td><?= $data[1]["barang"]; ?></td>
                <td><?= $data[1]["harga"]; ?></td>
            </tr>
        <?php endif; ?>
        <?php if(isset($_POST["data-3"])) : ?>
            <?php $total += $data[2]['harga']; ?>
            <tr>
                <td><?= $data[2]["barang"]; ?></td>
                <td><?= $data[2]["harga"]; ?></td>
            </tr>
        <?php endif; ?>
        <?php if(isset($_POST["data-4"])) : ?>
            <?php $total += $data[3]['harga']; ?>
            <tr>
                <td><?= $data[3]["barang"]; ?></td>
                <td><?= $data[3]["harga"]; ?></td>
            </tr>
        <?php endif; ?>
        <?php if(isset($_POST["data-5"])) : ?>
            <?php $total += $data[4]['harga']; ?>
            <tr>
                <td><?= $data[4]["barang"]; ?></td>
                <td><?= $data[4]["harga"]; ?></td>
            </tr>
        <?php endif; ?>
        <tr>
            <th style="font-size:12px;">TOTAL</th>
            <th style="font-size:12px;" ><?= $total; ?></th>
        </tr>
        </table>
    <?php endif;?>
</body>
</html>
