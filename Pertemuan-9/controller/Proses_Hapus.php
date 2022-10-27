<?php
include '../kelas/Kelas_Siswa.php';
$model = new Database();
$nis = $_GET['nis'];
$bool = $model->delete($nis);

if($bool){
    header('Location: ../view/Tampil_Siswa.php');
}