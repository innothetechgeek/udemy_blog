<?php


class PostController{

    private $crud;

    public function __construct(){

        $this->crud = new Crud();

    }

    public function addPost(){

        $post = [
            'post_content' =>  $_POST['post_content'],
            'post_title' => $_POST['post_title'],
            'post_image' => $_POST['post_image'],
            'cat_id' => $_POST['post_image']
        ];

        $post_id = $this->crud->create($post);

        $dir = "post_images/post_$post_id";
        if ( !file_exists($dir) ) {
            mkdir ($dir, 0777,true);
        }

        $dir = $dir."/".basename($_FILES["post_image"]["name"]);

        move_uploaded_file($_FILES["post_image"]["tmp_name"],$dir);

    }


}