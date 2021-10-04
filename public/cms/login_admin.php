<?php 
session_start();
include_once 'includes_admin/header.php';

$email = $password = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['admin_email']);
    $password = trim($_POST ['admin_password']);

    if(empty($email)){
            $status = "Email is requred";
    } 
    if(empty($password)){
            $status = "Password is requred";
    } 
    if(empty($email) && empty($password)){
        $status = "Please provide email address and password";
    } else {
        if ($admin->verifyAdmin($email, $password)){
            header("Location: index_admin.php" );
            $admin_id = $admin->getAdminID();
            $_SESSION ['login_id'] = $admin_id;
        } else {
            $status = "Not valid credentials";
        }
    }
}

if(!isset ($_SESSION['login_id'])) { 
?>
<div class="main_container">
    <form class="admin_form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h4> Log in admin</h4>
        <?php if(isset($status)) :?>
        <p class="notice"><?= $status?></p>
        <?php endif;?>
        <label class="label" for="admin_email">Your email</label>
        <br>
        <input type="email" name="admin_email" placeholder="youremail@gmail.com">
        <br>
        <label class="label" for="admin_password">Your password</label>
        <br>
        <input type="password" name="admin_password">
        <br>
        <input type="submit" name="sumbit_admin" id="submit_admin">
    </form>
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        } 
    </script>
</div> 
<?php 
} else {
    header("Location: index_admin.php" );
}

include_once 'includes_admin/footer.php'; 
?>
