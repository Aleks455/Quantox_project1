<?php

namespace Classes\Main;

class SubscribersView extends SubscribersModel
{
    use ValidatorTrait;
    
    public function validateSubsriber($email)
    {
        $result_email_val = $this->checkIfValid($email);
        return $result_email_val;
    }
   
    public function addSubscriberPost($email, $post_id)
    {
        $this->setSubscriberPost($email, $post_id); 
    } 

    public function addSubscriberCategory($email, $category)
    {
        $this->setSubscriberCategory($email, $category);
    }  
      
    public function getSubscribers() 
    {
        $subscriptions = $this->getSubsciptions();
        return $subscriptions;
    }

    public function findCategorySubscribers($category)
    {
        $subscribers_category = $this->getCategorySubscibers($category);
         return $subscribers_category;
    }
 
    public function findPostSubscribers($post_id)
    {
        $subscribers_posts = $this->getPostSubscibers($post_id);
        return $subscribers_posts;
    }
}