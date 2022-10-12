<?php
$username = $_POST['username'];//unboxing username
$password = $_POST['password'];//unboxing password
if($username == 'edwin' && $password == '12345'){//validasi
    $nama =  $_POST['username'];
    setcookie('nama', $nama, time() + 300);//setcookie 5 menit
    header('Location: matkul.php');//jika betul akan masuk ke program
}else{
    setcookie('valid', 'invalid', time()+10);//eror cookie
    header('Location: login.php');//jika salah akan ditendang
}