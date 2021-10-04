<?php

namespace Classes\Main;

class AutoEmail 
{
    public function sendEmailCategory($subscribers, $category)
    {
        foreach($subscribers as $subscriber) {
            $to = $subscriber['subscriber_email'];
            $subject = "New posts for the $category category";
            $message = "There is new post in the category that you've subscribed to";
            $headers = "From: somemail@gmail.com" . "\r\n";
            mail($to,$subject,$message,$headers);
        } 
    }
    
    public function sendEmailPost($subscribers)
    {   
        foreach($subscribers as $subscriber) {
            $to = $subscriber;
            $subject = "Post updated";
            $txt = "There is an update on the post that you've been subscribed to";
            $headers = "From: somemail@gmail.com" . "\r\n";
            mail($to,$subject,$txt,$headers);
        }
    } 
}