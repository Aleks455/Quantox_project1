<?php
    include_once '../../app/includes/class-autoload.inc.php';
    include_once 'includes/header.php';
    // - pregled svih vesti od najnovije ka najstarijoj (pocetna strana)
    // $posts = $postView->allPosts();


    $category = $_GET['grupa']?? NULL;

    if (isset ($_GET['post_category'])){
        $category = $_GET['post_category'];
        
    }
   
    $postView->showAllPosts($category);
 

   include 'includes/footer.php'; 




   
?>

