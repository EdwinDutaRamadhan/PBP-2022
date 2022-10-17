<?php
include "../class/barang.php";

$objBarang = new Barang();
$hasil = $objBarang->cari("Baygon");

foreach($hasil as $data){
    echo $data['nama']." - ".$data['harga'];
}
