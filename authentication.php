<?php
session_start();
session_regenerate_id();
if(!isset($_SESSION['first_name']))      // if there is no valid session
{
    header("Location:login.php");
    exit();
}
?>