<?php

include_once '../../app/includes/class-autoload.inc.php';
$postView = new Classes\Main\PostsView();
$admin = new Classes\Main\AdminView;
$subscribers = new Classes\Main\SubscribersView;
$postController = new \Classes\Main\PostsController;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News portal</title>
    <link rel="stylesheet" href="./css_admin/style_header.css">
    <link rel="stylesheet" href="./css_admin/style_login.css">
    <link rel="stylesheet" href="./css_admin/style_footer.css">

</head>
<body>
    <header class="header_div">
        <nav class="navigation_div">
            <div class="navigation_grid">
                <ul class="admin_categories_container">
                    <li class="admin_categories"><a href="news_list.php">News list</a></li>
                    <li class="admin_categories"><a href="create_news.php">Create News</a></li>
                    <li class="admin_categories"><a href="update_news.php">Update News</a></li>
                    <li class="admin_categories"><a href="subscriptions.php">Subscriptions</a></li>
                    <li class="admin_categories"><a href="auto_email.php"> Newsletter</a></li>
                </ul>
                <?php 

                ?>
                <ul class="log">
                    <li class="admin_categories"><a href="login_admin.php">Log in</a></li>
                    <li class="admin_categories"><a href="logout_admin.php">Log out</a></li>
                </ul>

            </div>       
        </nav>
    </header>
<div class="main_container">
