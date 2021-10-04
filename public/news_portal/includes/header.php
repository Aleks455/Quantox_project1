<?php

include_once '../../app/includes/class-autoload.inc.php';
    $postView = new Classes\Main\PostsView();
    $subscribers = new Classes\Main\SubscribersView();
    $adminView = new Classes\Main\AdminView();

    $categories = $postView->categories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News portal</title>
    <link rel="stylesheet" href="css/style_header.css">
    <link rel="stylesheet" href="css/style_img.css">
    <link rel="stylesheet" href="css/style_body.css">
    <link rel="stylesheet" href="css/style_post.css">
</head>
<body>
    <header class="header_div">
        <nav class="navigation_div">
            <ul class="news_categories_container">
               <li class="newsportal_name"><a href="index1.php"> NEWS PORTAL</a></li>
                <div class="news_categories">
                <?php 
                    foreach($categories as $category){
                        $capital = ucwords($category);
                        echo "<li class='news_categories'><a href='index1.php?post_category=$category'> $capital</a></li>";
                    }
                ?>
                </div>
                <li><button class="dropdown_button"><a href="subscribe_category.php">Subscribe</a></button></li>
            </ul>
        </nav>
    </header>
<div class='main_post_container'>

    
            
   
                
