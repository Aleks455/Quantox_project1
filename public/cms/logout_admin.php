<?php
session_start();
include_once '../../app/includes/class-autoload.inc.php';
$_SESSION = array(); 
session_destroy(); 
header('Location: login_admin.php'); 
?>
