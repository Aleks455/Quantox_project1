<?php

namespace Classes\Main;

class SubscribersModel extends Model
{
    protected function getSubsciptions()
    {
        $query = "SELECT * from subscriptions";
        $query_result = $this->makeSelectQuery($query);
        return $query_result;
    }
    protected function setSubscriberCategory($email, $category)
    {   
        $query = 'INSERT INTO subscriptions (subscriber_email, category_subscription) VALUES (?, ?)';
        $data = array($email, $category);
        $this->makeQuery($query, $data);
    }
    protected function setSubscriberPost($email, $post_id)
    {   
        $query = 'INSERT INTO subscriptions (subscriber_email, category_subscription) VALUES (?,?)';
        $data = array($email, $post_id);
        $this->makeQuery($query, $data);
    }
}

?>