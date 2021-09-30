<?php 
session_start();
include_once 'includes_admin/header.php';

if(!isset ($_SESSION['login_id'])) { 
    header('Location: login_admin.php');   
}

?> 


<?php include_once 'includes_admin/footer.php'; ?>