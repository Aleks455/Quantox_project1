<?php
    include_once 'includes/header.php';

    $category = $_GET['grupa']?? NULL;

    if (isset ($_GET['post_category'])){
        $category = $_GET['post_category'];
    }
    $postView->showAllPosts($category);

   include 'includes/footer.php'; 
?>

