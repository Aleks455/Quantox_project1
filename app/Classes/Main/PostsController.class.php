<?php

namespace Classes\Main;

class PostsController extends PostsModel
{
    public function setPostInfo($post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date)
    {
        $this->setPost($post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date);
    }

    public function removePost($post_id)
    {
        $this->deletePost($post_id);
    }
    public function changePost($post_id, $post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date)
    {
        $this->updatePost($post_id, $post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date);
    }
}