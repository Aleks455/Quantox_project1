<?php
    include_once '../../app/includes/class-autoload.inc.php';
    require 'includes/header.php';
    $subscribers = new Classes\Main\SubscribersView();



   $emailErr = $categoryErr = $status = '';

   if ($_SERVER["REQUEST_METHOD"] == 'POST') {
       $_POST['post_id'] = '';
       if($_POST['action'] == 'category_form') {
           if (empty($_POST['category']) && empty($_POST['email_category_subscription'])) {
               $status = "Please provide email address and category";
           } elseif (isset($_POST['category']) && empty($_POST['email_category_subscription'])) {
               $emailErr = "Please provide email address";
           } elseif (isset($_POST['email_category_subscription']) && empty($_POST['category'])) {
               $categoryErr = "Please provide category";
           } else {
               $category = $_POST['category'];
               $email = htmlspecialchars(stripslashes(trim($_POST['email_category_subscription'])));
               echo $category . "<br>" . $email;
               $subscribers->addSubscriberCategory($email, $category);
            }
        }
    }

?>
 <div class="subscribe_dropdown">
    <div class="dropdown_form">
        <form id="subscribe_form"  action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
        <?php  if(isset($status)):?>
            <div class="notice"><?= $status .$emailErr. $categoryErr?></div>
            <?php endif; ?>
            <h3> Subscribe to our newsletter</h3>
            <label for="email_category_subscription">Please enter you email address</label><br>
            <input type="email" name="email_category_subscription" placeholder="youremail@gmail.com"><br>
            
            <?php
                foreach($categories as $category){
                    $capital = ucwords($category);
                    echo "<input type='radio' id='check_$category' name='category' value='$category'>";
                    echo "<label for='check_$category'> $capital </label>";
                    echo "<br>";
                }
            ?>
            <input type="hidden" id="action" name="action" value="category_form">
            <input type="submit" id="submit_subscription" name="submit_subscription" class="submit_subscription" value="Subscribe">
        </form>
        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            } 
        </script>
    </div>
</div>  

<?php include 'includes/footer.php'; ?>


            