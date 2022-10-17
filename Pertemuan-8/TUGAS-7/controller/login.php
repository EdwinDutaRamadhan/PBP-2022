<?php
include '../model/UserModel.php';
$model = new UserModel();

//Open box $_POST
$nim = $_POST['nim'];
$pass = $_POST['pass'];

if($model->ceklogin($nim, $pass)){
    //login berhasil
    header('Location: kst.php');
}else{
    //login gagal
    header('Location: ../view/login.html');
}