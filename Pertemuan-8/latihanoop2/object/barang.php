<?php
include "../class/barang.php";

$objBarang = new Barang();
$DataBarang = $objBarang->menampilkan();
foreach($DataBarang as $data){
    echo $data['nama']." = ".$data['harga']."<br>";
}
echo "Total Barang".$objBarang->menjumlah();

?>
