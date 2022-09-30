<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <label for="bumber">Tahun</label>
            <input type="number" name="number" id="number">
            <input type="submit" name="submit" value="cek">
        </form>
</body>
</html>
<?php
    if(isset($_POST["number"])){
        $tahun = $_POST["number"];

    if($tahun % 4 == 0){
        echo"<font color='red'>Tahun ".$tahun." adalah tahun kabisat</font>";
    }else{
        echo"<font color='red'>Tahun ".$tahun." bukan tahun kabisat</font>";
    }
    }
?>