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

    public function getPosts($search_condition = ''){

        $query = "Select posts.post_id,posts.is_featured,posts.post_title,
                    posts.post_content,posts.created_at,
                    posts.post_image, categories.cat_name,
                    count(comments.post_id) as nu_comments
                    FROM posts
                    LEFT JOIN categories on categories.cat_id = posts.cat_id
                    LEFT JOIN comments on comments.post_id = posts.post_id";
        if($search_condition) $query .= $search_condition;

         $query  .= " GROUP BY posts.post_id
                      ORDER BY posts.post_id DESC LIMIT 8";
        
        
       // var_dump($search_condition); die();

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

        $dir = "../../post_images/post_$post_id";
        $image_name = basename($_FILES["post_image"]["name"]);

        if ( !file_exists($dir) ) {
            mkdir ($dir, 0777,true);
        }

        $dir = $dir."/".$image_name;

        move_uploaded_file($_FILES["post_image"]["tmp_name"],$dir);

    }

    public function markAsFeatured($post_id){

        $data_array = [
            'is_featured' => 1,
        ];
        
        $this->crud->update($data_array,'posts', $post_id, 'post_id');

    }

    public function markAsUnFeatured($post_id){

        $data_array = [
            'is_featured' => 0,
        ];
        
        $this->crud->update($data_array,'posts', $post_id, 'post_id');


    }

    public function getFeaturedPosts(){

        $search_condition = " WHERE is_featured = 1";
        return $this->getPosts($search_condition);

    }

    public function getPopularPosts(){

        $query = "SELECT post_title,post_image,created_at, count(comments.post_id) as nu_comments 
                    FROM posts
                    LEFT JOIN comments ON comments.post_id = posts.post_id
                    ORDER BY nu_comments DESC
                    LIMIT 3";

        return $this->crud->read($query);

    }

    public function getCategories(){

        $query = "SELECT cat_name, count(posts.cat_id) as num_of_posts from categories
                    LEFT JOIN POSTS ON posts.cat_id = categories.cat_id
                    GROUP BY categories.cat_id";

        return $this->crud->read($query);

    }

    public function getDashboardStats(){

        $query = "SELECT
                    (SELECT count(post_id) from posts) as total_posts,
                    (SELECT count(com_id) from comments) as total_comments,
                    (SELECT count(cat_id) from categories) as total_categories";

        return $this->crud->read($query);

    }

    public function getTotalsForWeekAgo(){

        
        $where = "where created_at < NOW() - INTERVAL 1 WEEK";
        $query = "SELECT
            (SELECT count(post_id) from posts $where) as total_posts_week_ago,
            (SELECT count(com_id) from comments $where) as total_comments_week_ago,
            (SELECT count(cat_id) from categories $where) as total_categories_week_ago";
        
        return  $this->crud->read($query);

    }

}