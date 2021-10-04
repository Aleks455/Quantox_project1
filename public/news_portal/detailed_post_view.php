<?php

include 'includes/header.php';

if(isset($_GET['post_id'])){
    $post_id = (int)$_GET['post_id'];
}

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
   
    if(isset($_GET['submit_subscription'])){
        if(empty($_GET['email_post_subscription'])){
            $status = 'Please provide email address';    
        } else {
            $post_id  = $_GET['post_id'];
            $email  = $_GET['email_post_subscription'];

            if(!$subscribers->validateSubsriber($email)){
                $status = "Please provide a valid email address";
            } else {
                $status = 'You have been successfully subscribed';
                $subscribers->addSubscriberPost($email, $post_id);
            }   
        }
    }
} 

if(isset($status)){
    echo "<div class='notice'>$status</div>";
}
$postView->showPostDetailed($post_id);


include 'includes/footer.php'; 

?>


