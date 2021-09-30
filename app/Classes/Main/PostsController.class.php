<?php

namespace Classes\Main;

class PostsController extends PostsModel
{
    public function getPostInfo($post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date)
    {
        echo $post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date;
        $this->setPost($post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date);
    }
}