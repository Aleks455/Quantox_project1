<?php

namespace Classes\Main;

class SubscribersView extends SubscribersModel
{
    use Validator;
    // public function validateSubsriber($email)
    // {
    //     $result_subscriber_validation = $this->validateEmail($email);
    //     if ($result_subscriber_validation == false){
    //         return "Email is not valid";
    //     } else {
    //         // $this->addSubscriber($result_subscriber_validation);
    //         return "Email is valid"; 
    //     }
    // }

    public function addSubscriberPost($email, $post_id)
    {
        $email = $email;
        $email =  $this->validateEmail($email);
        $post_id = $post_id;
        $this->setSubscriberPost($email, $post_id); 
    } 

    public function addSubscriberCategory($email, $category)
    {
        $email = $email;
        $category = $category;
        $email =  $this->validateEmail($email);
        $this->setSubscriberCategory($email, $category);
    }  
      
    public function getSubscribers() {
        // radi - nisam castovala kao objekat jos uvek
        $subscriptions = $this->getSubsciptions();
        return $subscriptions;
    }
}