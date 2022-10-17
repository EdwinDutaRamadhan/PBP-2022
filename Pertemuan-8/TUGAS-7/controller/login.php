<?php
include '../model/UserModel.php';
$model = new UserModel();

//Open box $_POST
$nim = $_POST['nim'];
$pass = $_POST['pass'];

if($model->ceklogin($nim, $pass)){
    //login berhasil    
    session_start();
    //NIM disimpan dalam session untuk mengisi parameter method getNama_nim($nim);
    $_SESSION['nim'] = $nim;
    header('Location: kst.php');
}else{
    //login gagal
    header('Location: ../view/login.html');
}