<?php 
session_start();
include_once 'includes_admin/header.php';

if(!isset ($_SESSION['login_id'])) { 
    header('Location: login_admin.php');   
}

$all_posts = $postView->allPosts();

?>
    <div class="main_container">
        <div class="post_container">
        <h1>NEWS</h1>
            <ol class='posts_list'>
            <?php
                foreach ($all_posts as $post) {
                    echo "<li>";
                    echo "News title: $post->post_title. Post date: $post->post_date";
                    echo "</li>";
                }
            ?>
            </ol>
        </div>
    </div>

<?php include_once 'includes_admin/footer.php'; ?>