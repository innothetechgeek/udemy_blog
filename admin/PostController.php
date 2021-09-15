<?php

include_once "../Crud.php";

class PostController{

    private $crud;

    public function __construct(){

        $this->crud = new Crud();

    }

    public function addPost(){

        $image_name = basename($_FILES["post_image"]["name"]);
        $post = [
            'post_content' =>  $_POST['post_content'],
            'post_title' => $_POST['post_title'],
            'post_image' => $image_name,
            'cat_id' => $_POST['cat_id']
        ];

        $post_id = $this->crud->create($post,'posts');

        $this->moveUploadedImage($post_id);

    }

    public function getPosts(){

        $query = "Select posts.post_id,posts.post_title,posts.post_content,
                    posts.post_image, categories.cat_name, count(comments.post_id) as nu_comments
                    FROM posts
                    LEFT JOIN categories on categories.cat_id = posts.post_id
                    LEFT JOIN comments on comments.post_id = posts.post_id
                    GROUP BY posts.post_id
                    ORDER BY posts.post_id DESC";
                    
        return  $this->crud->read($query);
    }

    public function editPost($post_id){

        $image_name = basename($_FILES["post_image"]["name"]);
        $post = [
            'post_content' =>  $_POST['post_content'],
            'post_title' => $_POST['post_title'],
            'post_image' => $image_name,
            'cat_id' => $_POST['cat_id']
        ];

        $this->deleteOldImage($post_id);

        $post_id = $this->crud->create($post,'posts');

        $this->moveUploadedImage($post_id);

    }

    public function deleteOldImage($post_id){

        $old_image = $this->crud->read("Select image from posts where post_id = $post_id")[0];

        var_dump($old_image); die();

        unlink("../post_images/post_$post_id/$old_image");

    }

    public function moveUploadedImage($post_id){

        $dir = "../post_images/post_$post_id";
        if ( !file_exists($dir) ) {
            mkdir ($dir, 0777,true);
        }

        $dir = $dir."/".$image_name;

        move_uploaded_file($_FILES["post_image"]["tmp_name"],$dir);

    }


}