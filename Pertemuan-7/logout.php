<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['pass']);
header('Location: fe_session.html');