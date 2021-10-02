<?php

namespace Classes\Main;

//fatches data from the database

class PostsView extends PostsModel
{
    //returns all posts as an array of objects
    protected $posts = array();

    public function __construct()
    {
        $posts = $this->getPosts();
        foreach($posts as $key => $post){
            $p = new Post((object)$post);
            $this->posts[$key] = $p;
        }
    }
    public function allPosts(){
        return $this->posts;
    }
    public function findPost($id) {
        //samo objekat
        foreach($this->posts as $post) {
            if($post->post_id == $id ) {
                return $post;
            }
        }
    } 
    public function showPostDetailed($id)
    {
        $post = $this->findPost($id);
        return $post->detailedPostView();
    }
    public function showAllPosts($category = "")
    { 
        foreach($this->posts as $post) {
            if($category === NULL || $post->post_category == $category){
                $post->onePostView();
            }
        }
    }
    public function categories(){
            $categories = array();
        foreach($this->posts as $post) {
            $category = $post->post_category;
            if (array_search ($category, $categories) === false) {
                array_push ($categories, $category);
            }
        }
        return $categories;
    }
}

class Post
{
    public $post_id;
    public $post_title;
    public $post_img;
    public $post_preview;
    public $post_content;
    public $post_category;
    public $post_author;
    public $post_date;

    public function __construct(object $post)
    {
        $this->post_id = $post->post_id;
        $this->post_title = $post->post_title;
        $this->post_img = $post->post_img;
        $this->post_preview = $post->post_preview;
        $this->post_content  = $post->post_content;
        $this->post_category  = $post->post_category;
        $this->post_author  = $post->post_author;
        $this->post_date  = $post->post_date;
    }

    public function onePostView()
    {  
    ?>  <div class="one_post">
            <div><h1><?=$this->post_title?></h1></div>
            <div class="post_picture"><img style="border:1px solid black"; src='<?= $this->post_img?>'; alt="news_image"></div>
            <div class="post_content"><?= $this->post_preview?></div>
            <div class="post_date"> Published: <?= $this->post_date?></div>
            <a href="detailed_post_view.php?post_id=<?= $this->post_id?>">Look detailed...</a>
            <br>
            <form action="" name="email" method="post" id="subscribe_newsletter">
                <!-- <a href="JavaScript:submit_form();" onclick="stopScroll()">
                    <a href="#submit_button"> -->
                        <input type="submit" id="submit_button" name="submit_subscription" class="submit_subscription" value="Subscribe to post">
                    <!-- </a>
                </a> -->
                <input type="email" name="email_post_subscription" id="email_post_subscription" placeholder="Your email address"> 
                <input type="hidden" id="action" name="action" value="<?= $this->post_id?>">          
            </form>
        </div>
        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            } 
        </script>
       
        
<?php }
    
    public function detailedPostView()
    { ?>
        <div class="detailed_post">
        <h1><?=$this->post_title?></h1>
        <div class="post_picture"><img style="border:1px solid black"; src="<?= $this->post_img?>"; alt="news_image"></div>
        <div class="post_content"><?= $this->post_content?></div>
        <div class="post_author"> Author: <?= $this->post_author?> </div>
        <div class="post_date"> Published: <?= $this->post_date?></div>

        <br>
        <form action="" method="post" id="subscribe_newsletter">
            <!-- <a href="JavaScript:submit_form();" onclick="stopScroll()"> -->
            <input type="submit" name="submit_subscription" class="submit_subscription" value="Subscribe to post">
            <input type="email" name="email_post_subscription" id="email_post_subscription" placeholder="Your email address">
            <input type="hidden" id="action" name="action" value="<?= $this->post_id?>">
        </form>
    </div>
        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
        </script>
<?php }

}
