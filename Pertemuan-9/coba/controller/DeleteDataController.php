<?php
include '../model/UserModel.php';
$model = new UserModel();

$nim = $_GET['nim'];

if($model->deleteOne($nim)){
    header('Location: ../view/Display.php');
}else{
    header('Location: ../view/InputData.html');
}