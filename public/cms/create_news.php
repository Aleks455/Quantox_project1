<?php 
session_start();
include_once 'includes_admin/header.php';

if(!isset ($_SESSION['login_id'])) { 
    header('Location: login_admin.php');   
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (empty ($_POST ['post_title']) || empty($_POST ['post_img']) || empty($_POST ['post_preview']) || empty($_POST ['post_content']) || empty($_POST ['post_category']) || empty($_POST ['post_author']) || empty($_POST ['post_date'])) {
        $status = "Please fill in all the fields";

    }elseif (empty ($_POST ['post_title']) && empty($_POST ['post_img']) && empty($_POST ['post_preview']) && empty($_POST ['post_content']) && empty($_POST ['post_category']) && empty($_POST ['post_author']) && empty($_POST ['post_date'])) {
        $status = "Please fill in all the fields";
    } else {
        $status = "News are added successfully";
        $post_title = $_POST ['post_title'];
        $post_img = $_POST ['post_img'];
        $post_preview = $_POST ['post_preview'];
        $post_content = $_POST ['post_content'];
        $post_category = $_POST ['post_category'];
        $post_author = $_POST ['post_author'];
        $post_date = $_POST ['post_date'];

        $postController->getPostInfo($post_title, $post_img, $post_preview, $post_content, $post_category, $post_author, $post_date);


    }
    // if (isset ($_POST ['post_title']) && isset ($_POST ['post_img']) && isset ($_POST ['post_preview']) && isset ($_POST ['post_content']) && isset ($_POST ['post_category']) && isset ($_POST ['post_author']) && isset ($_POST ['post_date'])) {
    //     // $status = "all is set";
    //         // $status = '';
    //      echo    $post_title = $_POST ['post_title'];
    //       echo  $post_img = $_POST ['post_img'];
    //       echo   $post_preview = $_POST ['post_preview'];
    //       echo  $post_content = $_POST ['post_content'];
    //        echo $post_category = $_POST ['post_category'];
    //        echo  $post_author = $_POST ['post_author'];
    //       echo  $post_date = $_POST ['post_date'];
    }

    //         echo $post_title . $post_img. $post_preview. $post_content. $post_category. $post_author. $post_date;
    //     $postController->setPost($post_title, $post_img, $post_preview, $post_content, $post_category, $post_author, $post_date);
    // }
    // }
    // else {
    //     $status = "Please fill in all the fields";
    // }
// }
?> 


    
    <form id="admin_form" class="admin_form" name="admin_form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <?php if (isset($status)): echo $status; endif; ?>
        <ul>
            <!-- <li><input type="hidden" type="text" name="action" id="add_post" value="add_post"></li> -->

            <li>
            <label for="post_title"></label>
            <input type="text" name="post_title" id="post_title" placeholder="News title">
            </li>

            <li>
            <label for="post_img"></label>
            <input type="text" name="post_img" id="post_img" placeholder="News image">
            </li>

            <li>
            <label for="post_preview"></label>
            <input type="text" name="post_preview" id="post_preview" placeholder="New preview"> 
            </li>

            <li>
            <label for="post_content"></label>
            <input type="text" name="post_content" id="post_content" placeholder="News content">
            </li>

            <li>
            <label for="post_category"></label>
                <select name="post_category" id="post_category" placeholder="News category">
                    <option value="politics">Politics</option>
                    <option value="sports">Sports</option>
                    <option value="music">Music</option>          
                </select>  
            </li>

            <li>
            <label for="post_author"></label>
            <input type="text" name="post_author" id="post_author" placeholder="News author">
            </li>

            <li>
            <label for="post_date"></label>
            <input type="datetime-local" name="post_date" id="post_date" placeholder="<?= date('Y-m-d') . date("h:i:s");?>">
            </li>

            <li>
            <input type="submit" name="posalji_proizvod" id="posalji_proizvod">
            </li>
        </ul>

    </form>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    } 
    </script>
    



<?php include_once 'includes_admin/footer.php'; ?>