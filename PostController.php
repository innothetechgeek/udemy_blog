<?php

include_once "Crud.php";

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
                    LEFT JOIN categories on categories.cat_id = posts.cat_id
                    LEFT JOIN comments on comments.post_id = posts.post_id
                    GROUP BY posts.post_id
                    ORDER BY posts.post_id DESC LIMIT 8";

        return  $this->crud->read($query);

    }

    public function getPost($post_id){

        $query = "Select posts.post_id,posts.post_title,posts.cat_id,posts.post_content,
                    posts.post_image, categories.cat_name, count(comments.post_id) as nu_comments
                    FROM posts
                    LEFT JOIN categories on categories.cat_id = posts.cat_id
                    LEFT JOIN comments on comments.post_id = posts.post_id
                    WHERE posts.post_id = $post_id
                    GROUP BY posts.post_id
                    ORDER BY posts.post_id DESC LIMIT 8";

        return  $this->crud->read($query);

    }

    public function editPost($post_id){

       
        if(!empty($_FILES["post_image"]['name'])) $this->deleteOldImage($post_id);

        $data_array = [
            'post_title' => $_POST['post_title'],
            'cat_id' => $_POST['cat_id'],
            'post_content' => $_POST['post_content']
        ];

        $post_image = basename($_FILES["post_image"]["name"]);      
        if(!empty($post_image)) $data_array['post_image'] = basename($_FILES["post_image"]["name"]);

        $this->crud->update($data_array,'posts',$post_id,'post_id');

        if(!empty($_FILES["post_image"]['name'])) $this->moveUploadedImage($post_id);
        

    }

    public function deleteOldImage($post_id){

        $old_image = $this->crud->read("Select post_image from posts where post_id = $post_id")[0]['post_image'];
        $old_image_path = "../post_images/post_$post_id/$old_image";
      
        if(file_exists($old_image_path) ) {
            unlink($old_image_path);
        }
    }

    public function moveUploadedImage($post_id){

        $dir = "../post_images/post_$post_id";
        $image_name = basename($_FILES["post_image"]["name"]);

        if ( !file_exists($dir) ) {
            mkdir ($dir, 0777,true);
        }

        $dir = $dir."/".$image_name;

        move_uploaded_file($_FILES["post_image"]["tmp_name"],$dir);

    }


}