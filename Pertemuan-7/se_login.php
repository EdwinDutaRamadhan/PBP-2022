<?php
$userStatic = 'Edwin';
$passStatic = '12345';
if($userStatic == $_POST['username'] && $passStatic == $_POST['password']){
    session_start();
    $_SESSION['nama'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];

    header('Location: rmk.php');
}else{
    session_start();
    header('Location: fe_session.html');
}