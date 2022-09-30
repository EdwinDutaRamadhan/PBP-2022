<?php
$namaBarang = $_POST["nama"];
$hargaBarang = $_POST["harga"];
$jumlahBarang = $_POST["jumlah"];
$totalSementara = $jumlahBarang * $hargaBarang;
//pengkondisian
if($totalSementara <= 100000){
    $diskon = 0;
}else if($totalSementara > 100000 && $totalSementara <= 200000){
    $diskon = 5/100;
}else if($totalSementara > 200000 && $totalSementara <= 300000){
    $diskon = 7/100;
}else{
    $diskon = 10/100;
}
$diskonDisplay = $diskon * 100;
$diskonAKhir = $totalSementara * $diskon;
$total = $totalSementara - $diskonAKhir;
echo "
    Nama Barang : $namaBarang <br>
    Harga Barang : $hargaBarang <br>
    Jumlah Barang : $jumlahBarang <br>
    Diskon Barang : $diskonDisplay% <br>
    Total Harga : $totalSementara <br>
    Total Setelah Diskon : $total <br>
";