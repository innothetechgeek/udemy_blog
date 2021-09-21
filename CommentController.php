<?php

include_once "Crud.php";

class CommentController{

    private $crud;

    public function __construct(){

        $this->crud = new Crud();

    }

    public function addComment(){

        $comment = [
            'visitor_name' => $_POST['visitor_name'],
            'comment_body' => $_POST['comment_body'],
            'visitor_email' => $_POST['visitor_email'],
            'post_id' => $_POST['post_id'],
        ];

        $this->crud->create($comment,'comments');

    }

    public function getNewComments(){

        $query = "Select count(com_id) where
                is_read = 0";
    }

    public function getAllComments(){
        
        $query = "SELECT * from comments
                    LEFT JOIN posts ON 
                    comments.post_id = posts.post_id";

    

        return $this->crud->read($query);

    }
}


?>