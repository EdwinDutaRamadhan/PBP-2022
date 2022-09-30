<?php
    if( !isset($_POST["xFor"]) ){
        header("Location: fe_tugas2-for.html");
    }
    $xFor = $_POST["xFor"];
    $yFor = $_POST["yFor"];
    if($xFor > $yFor){
        //menghindari eror karena for dan while hanya menggunakan sifat increment
        header("Location: fe_tugas2-for.html");
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
    <h5>FOR</h5>
        <?php for(; $xFor <= $yFor;$xFor++ ) :?>
            <?php if($xFor % 2 == 0):?>
                <p class="for-genap"><?= $xFor; ?></p>
            <?php else : ?>
                <p><?= $xFor; ?></p>
            <?php endif; ?>
        <?php endfor; ?>
</body>
</html>
