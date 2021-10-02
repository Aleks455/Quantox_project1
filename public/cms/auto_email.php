<?php 
session_start();
include_once 'includes_admin/header.php';

if(!isset ($_SESSION['login_id'])) { 
    header('Location: login_admin.php');   
}

?> 
- slanje automatskog obavestenja (e-mailom) kada se doda neka nova vest u kategoriju na koju se korisnik prijavio.

<?php include_once 'includes_admin/footer.php'; ?>