<?php
session_start();
session_destroy();
setcookie("nama", "", time() - 3600);
unset($_COOKIE);
header('Location: login.php');