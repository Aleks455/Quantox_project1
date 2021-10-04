<?php
session_start();
    include_once '../../app/includes/class-autoload.inc.php';
    include_once 'includes_admin/header.php';

    if(!isset ($_SESSION['login_id'])) { 
        header('Location: login_admin.php');   
    }
    $all_subscribers = $subscribers->getSubscribers();
?>

<div class="list_container">
    <table class="subscriptions_table">
        <tr>
             <th>Num:</th>
            <th>Subscription ID</th>
            <th>Category subscription</th>
            <th>Post subscription ID</th>
            <th>Subscribers email</th>
        </tr>
        <?php              
        $i = 0;
        foreach($all_subscribers as $subscriber) {
            $i = ++$i;
            echo "<tr>";
            echo "<td>". $i."</td>";
            foreach ($subscriber as $key => $value) {
                if ($value == NULL) {
                    $value = '/';
                }
                echo  "<td>"; 
                echo $value;
                echo  "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php include_once 'includes_admin/footer.php'; ?>
