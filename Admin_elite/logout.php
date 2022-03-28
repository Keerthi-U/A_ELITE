<?php
require_once("db.php");  
session_start();
unset($_SESSION['logged_user']);
// session_destroy();
header("location:login.php");
exit();
?>