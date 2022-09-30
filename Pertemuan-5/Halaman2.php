<?php
$NIM = $_POST["nim"];
$nama = $_POST["nama"];
$jenis = $_POST["jenis"];
$progdi = substr($NIM,0,2);
$angkatan = substr($NIM,2,4);
if($jenis == "Pria"){
    $jenis = "a";
}else{
    $jenis = "i";
}
switch($progdi){
    case 67 :
        $progdi = "Teknik Informatika";
        break;
    case 68 :
        $progdi = "Sistem Informasi";
        break;
    case 69 :
        $progdi = "Desain Komunikasi Visual";
        break;
    default:
        $progdi = "Belum terdaftar";
}

echo"Selamat Datang << ".$nama." >>,<br>";
echo"<br>";
echo"Anda adalah mahasisw".$jenis;
echo"<br>";
echo"Progdi ".$progdi." Angkatan ".$angkatan;