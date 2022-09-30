<?php
    if( !isset($_POST["xWhile"]) ){
        header("Location: fe_tugas2-while.html");
    }
    $xWhile = $_POST["xWhile"];
    $yWhile = $_POST["yWhile"];
    if($xWhile > $yWhile){
        //menghindari eror karena for dan while hanya menggunakan sifat increment
        header("Location: fe_tugas2-while.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2</title>
    <style>
        .for-genap{
            color: red;
        }
        .while-ganjil{
            color: blue;
        }
    </style>
</head>
<body>
    <h5>WHILE</h5>
        <?php while($xWhile <= $yWhile): ?>
            <?php if($xWhile % 2 == 0):?>
                <p><?= $xWhile; ?></p>
            <?php else : ?>
                <p class="while-ganjil"><?= $xWhile; ?></p>
            <?php endif; ?>
            <?php $xWhile++; ?>
        <?php endwhile; ?>        
</body>
</html>
