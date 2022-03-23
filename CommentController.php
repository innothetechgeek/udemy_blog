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
        
        $query = "SELECT *,
                    CASE
                        WHEN is_approved = 1 THEN 'Yes'
                        ELSE 'No'
                    End AS is_approved
                    from comments
                    LEFT JOIN posts ON 
                    comments.post_id = posts.post_id";

    

        return $this->crud->read($query);

    }

    public function approveComment($comment_id){

        $query = "Update comments
                    SET is_approved = 1
                    where com_id = $comment_id";

        $this->crud->update($query);

    }

    public function unApproveComment($comment_id){

        $query = "Update comments
                    SET is_approved = 0
                    where com_id = $comment_id";

        $this->crud->update($query);

    }

    public function deleteComment($comment_id){

        $query = "Delete from comments
                    Where com_id = $comment_id";

        $this->crud->delete($query);
        
    }

    public function getReplies($comment_id){

        $query = "Select * from 
                    replies
                    where comment_id = $comment_id";
        
        return $this->crud->read( $query );

    }
}


?>