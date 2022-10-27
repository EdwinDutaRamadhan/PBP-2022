<?php
include '../kelas/Kelas_Siswa.php';
$model = new Database();
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$bool = $model->insert($nis, $nama, $tanggal_lahir);

if($bool == true){
    header('Location: ../view/Tampil_Siswa.php');
}else{
    echo'gagal insert';
}

