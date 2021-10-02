<?php

namespace Classes\Main;

// MODEL CLASS
//This class is going o be a model of the MVC model.
// ONLY CLASS THAT INTERACTS WITH DATABASE
// https://www.youtube.com/watch?v=Fg0CP-ri87U&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=18&ab_channel=DaniKrossing
// Every single method in this class is gonna be specific query inside the database
class PostsModel extends Model
{
    protected function getPosts() 
    {   
        $query = "SELECT * from posts ORDER BY post_date DESC";
        $query_result = $this->makeSelectQuery($query);
        return $query_result;

        //don't know where I found this
        //return $request->execute() ? $request->fetchAll() : false; 
    }
    
    // protected function getPost($post_id) 
    // {
    //     $query = "SELECT * from posts WHERE post_id = ?";
    //     $query_result = $this->makeSelectQuery($query, $post_id);
    //     return $query_result;

    //     //return $request->execute(array($id_article)) ? $request->fetchAll() : false; 
    // }

    protected function getPostbyCategories($category)
    {
        $query = "SELECT * from posts WHERE post_category = ?";
        $query_result = $this->makeSelectQuery($query, $category);
        return $query_result;
    }

    protected function setPost($post_title,$post_img, $post_preview, $post_content, $post_category, $post_author, $post_date)
    {
        $query = "INSERT INTO posts (post_title, post_img, post_preview, post_content, post_category, post_author, post_date) VALUES (?,?,?,?,?,?,?)";
        $data = [$post_title, $post_img, $post_preview, $post_content, $post_category, $post_author, $post_date]; 
        $this->makeQuery($query, $data);
    }

    protected function deletePost($post_id)
    {   $post_id  = (array) $post_id;
        $query = "DELETE FROM posts WHERE post_id = ?";
        $this->makeQuery($query, $post_id);
    }
    
    protected function updatePost($post_id, $post_title, $post_img, $post_preview, $post_content, $post_category, $post_author, $post_date)
    {
        $query = "UPDATE posts SET `post_title` = ?, `post_img` = ?, `post_preview` = ?, `post_content` = ?, `post_category` = ?, `post_author` = ?, `post_date` = ? WHERE post_id = ?";
        $data = [$post_title, $post_img, $post_preview, $post_content, $post_category, $post_author, $post_date, $post_id]; 
        $this->makeQuery($query, $data);
    }
}

