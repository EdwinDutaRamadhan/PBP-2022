<?php
include '../model/UserModel.php';
$model = new UserModel();

$data = $_POST;

if($model->insertOne($data)){
    header('Location: ../view/Display.php');
}else{
    header('Location: ../view/InputData.html');
}


