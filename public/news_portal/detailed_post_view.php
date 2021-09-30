<?php

include '../../app/includes/class-autoload.inc.php';
include 'includes/header.php';





   
$post_id = (int)$_GET['post_id'];




echo "<div class='main_post_container'>";


$postView->showPostDetailed($post_id);
echo "</div>";

include 'includes/footer.php'; 

?>


