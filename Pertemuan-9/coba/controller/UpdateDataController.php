<?php
include '../model/UserModel.php';
$model = new UserModel();

$data = $_POST;
var_dump($data);
if($model->updateOne($data)){
    header('Location: ../view/Display.php');
}else{
    header('Location: ../view/InputData.html');
}