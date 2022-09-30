<?php
$tahun = $_POST["number"];

if($tahun % 4 == 0){
    echo"<font color='red'>Tahun ".$tahun." adalah tahun kabisat</font>";
}else{
    echo"<font color='red'>Tahun ".$tahun." bukan tahun kabisat</font>";
}