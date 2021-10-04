<?php 
session_start();
include_once 'includes_admin/header.php';

if(!isset ($_SESSION['login_id'])) { 
    header('Location: login_admin.php');   
}

// delete news method

if(isset($_GET ['action']) && $_GET['action']=='delete') {
    if (isset ($_GET ['post_id'])) {
        $post_id = $_GET ['post_id'];  
        $postController->removePost($post_id);
    } 
}
?>

<!-- table that shows all news -->
    
<table class='posts_update'>
    <tr>
        <td>News id</td>
        <td>News title</td>
        <td>News image url</td>
        <td>News preview</td>
        <td>News content</td>
        <td>News category</td>
        <td>News author</td>
        <td>News date</td>
        <td>Change News</td>
        <td>Delete News</td>
    </tr>
<?php 
$all_posts = $postView->allPosts();
    foreach ($all_posts as $post) {
        echo "<tr>";
        foreach ($post as $value){
        echo "<td >$value</td>";
        }
        echo "<td class='change'><a class='link' href='update_news.php?action=update&post_id=$post->post_id'?>Update</a></td>";
        echo "<td class='change'><a class='link' href='update_news.php?action=delete&post_id=$post->post_id'?>Delete</a></td> ";
    echo "</tr>";
    }
?>      
</table>

<!-- get news post for update and update method -->

<?php
if(isset($_GET['action']) && $_GET['action'] == 'update') {
    if (isset ($_GET ['post_id'])) {
        $post_id = $_GET ['post_id'];
        $post = $postView->findPost($post_id);
    }
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (empty ($_POST ['post_title']) || empty($_POST ['post_img']) || empty($_POST ['post_preview']) || empty($_POST ['post_content']) || empty($_POST ['post_category']) || empty($_POST ['post_author']) || empty($_POST ['post_date'])) {
        $status = "Please fill in all the fields";
    }elseif (empty ($_POST ['post_title']) && empty($_POST ['post_img']) && empty($_POST ['post_preview']) && empty($_POST ['post_content']) && empty($_POST ['post_category']) && empty($_POST ['post_author']) && empty($_POST ['post_date'])) {
        $status = "Please fill in all the fields";
    } else {
        $status = "News are added successfully";

        $post_id =  $_POST ['post_id'];
        $post_title = $_POST ['post_title'];
        $post_img = $_POST ['post_img'];
        $post_preview = $_POST ['post_preview'];
        $post_content = $_POST ['post_content'];
        $post_category = $_POST ['post_category'];
        $post_author = $_POST ['post_author'];
        $post_date = $_POST ['post_date'];

        echo $post_id;
        $postController->changePost($post_id, $post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date);
        $subscribers = $subscribers->findPostSubscribers($post_id);
        $autoEmail->sendEmailPost($subscribers);
    }
}
?>

<!-- update form -->

<form id="update_form" class="post_form" name="update_form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <?php if (isset($status)): echo $status; endif; ?>
    <ul>
        <li>
            <input type="hidden" name="post_id" value="<?= $post->post_id?>">
        </li>

        <li>
            <label for="post_title"></label>
            <input type="text" name="post_title" id="post_title" placeholder="News title" value="<?= $post->post_title?>">
        </li>

        <li>
            <label for="post_img"></label>
            <input type="text" name="post_img" id="post_img" placeholder="News image" value="<?= $post->post_img?>">
        </li>

        <li>
            <label for="post_preview"></label>
            <input type="text" name="post_preview" id="post_preview" placeholder="New preview" value="<?= $post->post_preview?>"> 
        </li>

        <li>
            <label for="post_content"></label>
            <input type="text" name="post_content" id="post_content" placeholder="News content" value="<?= $post->post_content?>">
        </li>

        <li>
            <label for="post_category"></label>
            <select name="post_category" id="post_category">
                <?php
                if ($post->post_category == 'politics') {
                    echo  "<option value='politics'>Politics</option>";
                    echo  "<option value='music'>Music</option>";
                    echo  "<option value='sports'>Sports</option>";

                } elseif ($post->post_category == 'music'){
                    echo  "<option value='music'>Music</option>";
                    echo  "<option value='politics'>Politics</option>";
                    echo  "<option value='sports'>Sports</option>";
                } else {
                    echo  "<option value='sports'>Sports</option>";
                    echo  "<option value='music'>Music</option>";
                    echo  "<option value='politics'>Politics</option>";
                    } 
                ?>    
            </select>  
        </li>

        <li>
            <label for="post_author"></label>
            <input type="text" name="post_author" id="post_author" placeholder="News author" value="<?=$post->post_author?>">
        </li>
        
        <li>
            <label for="post_date"></label>
            <input type="datetime-local" name="post_date" id="post_date" placeholder="Publishing date" value="<?=$post->post_date?>">
        </li>
        
        <li>
            <input type="submit" name="update_news" id="update_news" value="Update">
        </li>
    </ul>
</form>
<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    } 
</script>
 
<?php include_once 'includes_admin/footer.php'; ?>