<?php
session_start();
    include_once '../../app/includes/class-autoload.inc.php';
    include_once 'includes_admin/header.php';

    if(!isset ($_SESSION['login_id'])) { 
        header('Location: login_admin.php');   
    }
  
  
    //ova stranica treba da ispita admina. Ukoliko to nije admin treba da vrati message na login stranicu sa ispisanom porukom za eror. Ukoliko jeste admin treba da usmeri na index stranicu. 

    $all_subscribers = $subscribers->getSubscribers();

?>

<!-- napraviti table -->

<div class="main_container">
    <div class="list_container">
        <ol class='subscribers_list'>
        <?php   
            foreach($all_subscribers as $subscriber) {
                echo  "<li>"; 
                echo "<ul class='subscriber_list'>";
                foreach ($subscriber as $key => $value) {
                    echo  "<li>"; 
                    echo $key . ': '. $value. "<hr>";
                    echo  "</li>";
                }
                echo "</ul>";
                echo  "</li>";
            }
        ?>
        </ol>
    </div>
</div>


<?php include_once 'includes_admin/footer.php'; ?>
