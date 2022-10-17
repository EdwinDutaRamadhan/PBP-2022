<?php
require_once '../class/object.php';

$x = $_POST['nilai1'];
$y = $_POST['nilai2'];

$obj = new Calculator();
$obj->nilai1 = $x;
$obj->nilai2 = $y;
echo "Hasil Penjumlahan ".$obj->tambah();
echo "<br>Jenis Bilangan ".$obj->cekBilangan();