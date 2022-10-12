<?php
session_start();
unset($_SESSION['A001']);//sesi tidak terhapus mungkin function kurang powerful
unset($_SESSION['A002']);
unset($_SESSION['A003']);
unset($_SESSION['A004']);
session_destroy();//sesi hancur
header('Location: matkul.php');