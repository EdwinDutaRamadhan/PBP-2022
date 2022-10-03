<?php
 $biodata = [
    [
    "nama" => "Edwin",
    "umur"=> 21,
    "alamat"=> "Salatiga",
    "ipk"=> 3.94
    ],
    [
    "nama" => "Riko",
    "umur"=> 20,
    "alamat"=> "Semarang",
    "ipk"=> 3.88
    ]
 ];
echo"<table border='1' cellspacing='0' cellpadding='10'";

foreach($biodata as $bio){
    echo $bio['nama'].'-'.$bio['umur'].'-'.$bio['alamat'].'-'.$bio['ipk'].'<br>';
}